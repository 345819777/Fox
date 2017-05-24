<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\FaqCategory;
use common\models\FaqNew;

/**
 * Appfaq controller
 */
class AppfaqController extends BaseController
{
	
    public function actionIndex()
    {
		$this->layout = false;
		$hideTit = isset($_GET['hideTit']) ? $_GET['hideTit'] : 0;
		//获取分类
		$faqcate = FaqCategory::find()->where("app=1")->all();
		$faqnew = FaqNew::find()->where("app=1 and apptop = 1 and status=0")->limit(6)->all();
		
		$title='Foscam Support - FAQs';
		$this->getView()->title = $title;  
        return $this->render('index',['hideTit'=>$hideTit,'faqnew'=>$faqnew,'faqcate'=>$faqcate]);
    }
	
	public function actionList(){
		$this->layout = false;
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		$hideTit = isset($_GET['hideTit']) ? $_GET['hideTit'] : 0;
		if($id == 0){ echo "error"; exit; }
		$cate = FaqCategory::find()->where('id='.$id)->one();
		
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$sql = "app=1 and status = 0 and faqcate = ".$id;
		$pagecount = 10;
		$count = FaqNew::find()->where($sql)->count();
		$totalPages = ceil($count / $pagecount);
		$show = $this->page_style($totalPages,$p,$count);
		$start = $pagecount * ($p - 1);
		$row = FaqNew::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("sort asc")->all();

		if($count <=10){
			$more = 0;
		}else{
			$more = 1;
		}
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		return $this->render('list',['hideTit'=>$hideTit,'cateid'=>$id,'cate'=>$cate,'row'=>$row,'show'=>$show,'more'=>$more]);
	}
	
	public function actionView(){
		$this->layout = false;
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		$hideTit = isset($_GET['hideTit']) ? $_GET['hideTit'] : 0;
		if($id == 0){ $this->error('error'); }
		
 
		$row = FaqNew::find()->where("`id`='$id'")->one();
		if(empty($row)){
			$this->error('error');
	    }
		
		//$FAQ->where('id='.$id)->setInc('view');
		$row->view = $row->view+1;
		$row->save();
		
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;
		return $this->render('view',['hideTit'=>$hideTit,'row'=>$row]);
	}
	
	public function actionSearch(){
		$this->layout = false;
		$q=isset($_GET['q']) ? $_GET['q'] : "";
		$hideTit = isset($_GET['hideTit']) ? $_GET['hideTit'] : 0;
		
		$where[] = "faq_new.title like '%".$q."%'";
		$where[] = "faq_new.status=0";
		$where[] = "faq_new.app=1";
		$sql = implode(" and ",$where);
		
		$row = FaqNew::find()->where($sql)->select('faq_new.title as title,faq_category.title as ctitle,faq_new.id as id,faq_category.id as cid')->join('LEFT JOIN','faq_category','faq_new.faqcate = faq_category.id')->limit(30)->orderBy("faq_new.sort asc")->asArray()->all();
		//print_r($row);
		
		return $this->render('search',['hideTit'=>$hideTit,'row'=>$row,'q'=>$q]);
	}
	
	
	function actionJsondata(){
		//$_GET['p']=empty($_GET['p'])?1:$_GET['p'];
		$id = isset($_GET['cateid']) ? $_GET['cateid'] : 0;
		if($id == 0){ echo 'Parameter Error';exit;}
		
		$pagesize = 10;
		
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		
		$sql = "faq_new.app=1 and faq_new.status = 0 and faq_new.faqcate = ".$id;
		$pagecount = 10;
		$count = FaqNew::find()->where($sql)->count();
		
		
		$totalPages = ceil($count / $pagecount);
		//$show = $this->page_style($totalPages,$p,$count);
		$start = $pagecount * ($p - 1);
		$data = FaqNew::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("sort asc")->all();
		
		//$db = M('FaqNew');
		//$count      = $db->where("faq_new.app=1 and faq_new.status = 0 and faq_new.faqcate = ".$id)->count();
		
		//$Page       = new \Think\Page($count,$pagesize);
		//$data=$db->where("faq_new.app=1 and faq_new.status = 0 and faq_new.faqcate = ".$id)->join('faq_category ON faq_new.faqcate=faq_category.id')->field('faq_new.title as title,faq_category.title as ctitle,faq_new.id as id,faq_category.id as cid')->order("faq_new.sort asc")->limit($Page->firstRow,$Page->listRows)->select();
		//$data = $db->where($where)->limit($Page->firstRow,$Page->listRows)->select();
		//$this->assign('data',$data);
		$pages=ceil($count/$pagesize);
		$json['lists'] = $data;
		
		
		
		if($_GET['p'] <= $pages){
			$json['page'] = $_GET['p']+1;
			if($_GET['p'] == $pages){
				$json['show_more'] = false;
			}else{
				$json['show_more'] = true;
			}
			//echo  json_encode($json);
			exit(\yii\helpers\Json::encode($json));
		}else{
			$json = array();
			$json['page'] = $p+1;
			$json['show_more'] = false;
		    //echo  json_encode($json);
			exit(\yii\helpers\Json::encode($json));
		}
	}
	
	//帮助
	function actionHelpful(){
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		if($id == 0){ echo 'Parameter Error';exit;}

		$row = FaqNew::find()->where("`id`='$id'")->one();
		$row->helpful = $row->helpful+1;
		$row->save();
		$json = array();
		$json['success '] = 1;
		exit(\yii\helpers\Json::encode($json));
	}
	
		//帮助
	function actionNohelpful(){
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		if($id == 0){ echo 'Parameter Error';}
		$row = FaqNew::find()->where("`id`='$id'")->one();
		$row->nohelpful = $row->nohelpful+1;
		$row->save();
		$json = array();
		$json['success '] = 1;
		exit(\yii\helpers\Json::encode($json));
	}
	
	function newfaqAction(){
		$this->view();
	}

}
