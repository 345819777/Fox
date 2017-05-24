<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Faq;
use common\models\FaqNew;
use yii\data\Pagination;
use common\models\FaqCategory;

/**
 * Support controller
 */
class SupportController extends BaseController
{
	public function actionFaq(){
		$this->layout = false; 
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		
		/**************新版本FAQ*******************/
		$hideTit = isset($_GET['hideTit']) ? $_GET['hideTit'] : 0;
		$faqcate = FaqCategory::find()->where("app=1")->all();
		$faqnew = FaqNew::find()->where("app=1 and apptop = 1 and status=0")->limit(6)->all(); 
        return $this->render('index',['hideTit'=>$hideTit,'faqnew'=>$faqnew,'faqcate'=>$faqcate]);
		/**************新版本FAQ*******************/
		/*
		//老版本FAQ
		$query = Faq::find()
			  ->where("1=1")
			  ->orderBy('sort asc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 10,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();
			

		return $this->render('faq',['pages'=>$pages,'row'=>$models]);
		*/
		
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
	
	public function actionFaqview(){
		$this->layout = false; 
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		if($id == 0){
			echo "error!";
			exit;
		}
		/******************新版本FAQ**********************/
		$hideTit = isset($_GET['hideTit']) ? $_GET['hideTit'] : 0;
		
		
		$row = FaqNew::find()->where("`id`='$id'")->one();
		if(empty($row)){
			echo "error";
			exit;
	    }
		
		$row->view = $row->view+1;
		$row->save();
		
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;
		return $this->render('view',['hideTit'=>$hideTit,'row'=>$row]);
		/******************新版本FAQ**********************/
		/*
		//旧版本FAQ
		if($id==100){
			$id=109;
			$row = FaqNew::find()->where("id='".$id."'")->one();
			if(empty($row)){
				echo "error!";
				exit;
			}
		}else{
			$row = Faq::find()->where("id='".$id."'")->one();
			if(empty($row)){
				echo "error!";
				exit;
			}
		}
		
		return $this->render('faqview',['row'=>$row]);
		*/
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
	
	
	public function actionFaqdetail(){
		$this->layout = false; 
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		$id=isset($_GET['id']) ? $_GET['id'] : 0;
		if($id == 0){
			echo "error!";
			exit;
		}
		$row = Faq::find()->where("id='".$id."'")->one();
		
		if(empty($row)){
			echo "error!";
			exit;
		}
		return $this->render('faqdetail',['row'=>$row]);
	}

}
