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
use common\models\VideoNew;
use common\models\VideoCategory;

/**
 * Video controller
 */
class VideoController extends BaseController
{

    public function actionIndex()
    {		
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$cateid = isset($_GET['cateid']) ? $_GET['cateid'] : 0;
		$title = 'Foscam Support - Video';
		$this->getView()->title = $title; 
		//$cate = $this->get_video_category();
		$cate = VideoCategory::find()->orderBy('id asc')->all();
		//读取首页视频
		$index = VideoNew::find()->where("id=".$id)->one(); 
        return $this->render('index',['index'=>$index,'cateid'=>$cateid,'cate'=>$cate,'id'=>$id]);
    }
	
	public function actionAjaxjson(){
		$pagecount = isset($_GET['count']) ? $_GET['count'] : 0;
		$pagename = isset($_GET['pagename']) ? $_GET['pagename'] : 0;
		$q = isset($_GET['q']) ? $_GET['q'] : 0;
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$cateid = isset($_GET['cateid']) ? $_GET['cateid'] : 0;
		
		if($pagename == 'index'){
			if($cateid != 0){
				$count = VideoNew::find()->where("cate=".$cateid)->count();
				$totalPages = ceil($count / $pagecount);
				$show = $this->page_style($totalPages,$p,$count);
				$start = $pagecount * ($p - 1);
				$row = VideoNew::find()->where("cate=".$cateid)->offset($start)->limit($pagecount)->orderBy("id asc")->all();
			}else{
				$count = VideoNew::find()->count();
				$totalPages = ceil($count / $pagecount);
				$show = $this->page_style($totalPages,$p,$count);
				$start = $pagecount * ($p - 1);
				$row = VideoNew::find()->offset($start)->limit($pagecount)->orderBy("id asc")->all();
				//$row = VideoNew::find()->orderBy('id asc')->all();
			}
			
		}else if($pagename == 'search'){
			$count = VideoNew::find()->where("`ps` like '%$q%'")->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = VideoNew::find()->where("`ps` like '%$q%'")->offset($start)->limit($pagecount)->orderBy("id desc")->all();
		}
		

		if (empty($row)){
			exit(json_encode(array('row'=>1)));
		}
		exit(\yii\helpers\Json::encode(array('row'=>$row,'totalPages'=>$totalPages,'show'=>$show)));
		//exit(\yii\helpers\Json::encode(array('row'=>$row)));
	}
	
	
	public function actionSearch(){
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$p = isset($_GET['p']) ? $_GET['p'] : 1;

		$title = 'Foscam Support - Video';
		$this->getView()->title = $title; 
		
		$cate = VideoCategory::find()->orderBy('id asc')->all();
		
		/*
		$FAQ=M('VideoNew');
		$count      = $FAQ->where("`ps` like '%$q%'")->count();// 查询满足要求的总记录数
		$Page       = new \Think\NewPage($count,16);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('prev','<img src="/Public/Home/images/faq/01-2.png">');
		$Page -> setConfig('next','<img src="/Public/Home/images/faq/02.png">');
		$Page -> setConfig('prev_no','<img src="/Public/Home/images/faq/01.png">');
		$Page -> setConfig('next_no','<img src="/Public/Home/images/faq/02-2.png">');
		$Page -> setConfig('theme','%FIRST% %UP_PAGE% %DOWN_PAGE% %END%');
		$show       = $Page->show();// 分页显示输出
		$row=$FAQ->where("`ps` like '%$q%'")->order("id asc")->limit($Page->firstRow,$Page->listRows)->select();
		*/
		$row = VideoNew::find()->where("`ps` like '%$q%'")->orderBy('id asc')->all();
		
		//$this->assign('show',$show);
		//$this->assign('row',$row);
		//$this->assign('p',$p);
		return $this->render('search',['row'=>$row,'cate'=>$cate,'q'=>$q]);
	}

}
