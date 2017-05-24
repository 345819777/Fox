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
use common\models\FaqNew;
use yii\data\Pagination;
use common\models\FaqCategory;

/**
 * Faqs controller
 */
class FaqsController extends BaseController
{
    public function actionIndex()
    {
		$cateid = isset($_GET['cateid']) ? $_GET['cateid'] :0;
		$cid = isset($_GET['cid']) ? $_GET['cid'] :0;
		$p = isset($_GET['p']) ? $_GET['p'] :1;

		$cate = $this->get_faq_category();
		$productcate = $this->get_faq_category(2);
		
		//$row=$FAQ->where("web=1 and top=1")->order("sort asc")->limit(5)->select();
		$row = FaqNew::find()->where("web=1 and top=1")->orderBy("sort asc")->all();
		
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;  
        return $this->render('index',['row'=>$row,'cate'=>$cate,'productcate'=>$productcate,'cateid'=>$cateid,'cid'=>$cid,'p'=>$p]);
    }
	
	public function actionAjaxjson(){
		$pagecount = isset($_GET['count']) ? $_GET['count'] : 0;
		$pagename = isset($_GET['pagename']) ? $_GET['pagename'] : 0;
		$q = isset($_GET['q']) ? $_GET['q'] : 0;
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$cateid = isset($_GET['cateid']) ? $_GET['cateid'] : 0;
		$cid = isset($_GET['cid']) ? $_GET['cid'] : 0;
		
		if($pagename == 'index'){
			$show = '';
			$totalPages = 1;
			$row = FaqNew::find()->where("web=1 and top=1")->limit(5)->orderBy("sort asc")->all();
		}else if($pagename == 'list'){
			$wherearr[] = "status = 0";
			if($cateid !=0){
				$wherearr[] = "webcate=".$cateid;
			}
			if($cid != 0){
				$wherearr[] = "productcate=".$cid;	
			}
			$sql = implode(" and ",$wherearr);
			
			$count = FaqNew::find()->where($sql)->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = FaqNew::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("id desc")->all();
		}else if($pagename == 'search'){
			$sql = "`title` like '%$q%' and status = 0";
			$count = FaqNew::find()->where($sql)->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = FaqNew::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("id desc")->all();
			
		}
		

		if (empty($row)){
			exit(json_encode(array('row'=>1)));
		}
		exit(\yii\helpers\Json::encode(array('row'=>$row,'totalPages'=>$totalPages,'show'=>$show)));
	}
	
	
	public function actionList(){
		$cateid = isset($_GET['cateid']) ? $_GET['cateid'] :0;
		$cid = isset($_GET['cid']) ? $_GET['cid'] :0;
		$p = isset($_GET['p']) ? $_GET['p'] :1;
		//$this->assign('cateid',$cateid);
		//$this->assign('cid',$cid);
		//$this->assign('p',$p);
		
		//获取分类
		$cate = $this->get_faq_category();
		$productcate = $this->get_faq_category(2);
		
		if($cid != 0){
			$wherearr[] = "productcate=".$cid;
		}
		if($cateid != 0){
			$wherearr[] = "webcate=".$cateid;
		}
		$sql = implode(" and ",$wherearr);
		$query = FaqNew::find()
			  ->where($sql)
			  ->orderBy('sort asc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 9,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();

		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;  
		return $this->render('list',['row'=>$models,'cate'=>$cate,'productcate'=>$productcate,'cateid'=>$cateid,'cid'=>$cid,'p'=>$p]);
	}
	
	
	public function actionView(){
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		if($id==0){
			echo "Error!";
			exit;
		}

		$row = FaqNew::find()->where("id=".$id)->one(); 
		if($row->webcate != 0){
			$webcate = FaqCategory::find()->where("id=".$row->webcate)->one(); 
		}else{
			$webcate = '';
		}
		if($row->productcate != 0){
			$productcate = FaqCategory::find()->where("id=".$row->productcate)->one();
		}else{
			$productcate = '';
		}
		
		/*$navcate=M('FaqCategory');
		$webcate=$navcate->where('id='.$row[0]['webcate'])->select();
		$productcate=$navcate->where('id='.$row[0]['productcate'])->select();
		
		$this->assign('webcate',$webcate);
		$this->assign('productcate',$productcate);
		*/
		
		if(empty($row)){
			$this->error('error');
		}
		//获取相关内容
		if($row->related!=''){
			$related = FaqNew::find()->where("id in (".$row->related.")")->orderBy("id desc")->all();
		}else{
			$related = '';
		}
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $row->title."-".$title;
		return $this->render('view',['row'=>$row,'related'=>$related,'webcate'=>$webcate,'productcate'=>$productcate]);
	}
	
	public function actionSearch(){
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;
		return $this->render('search',['q'=>$q]);
	}

}
