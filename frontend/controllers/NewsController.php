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
use common\models\News;
use common\models\Exhibitions;


class NewsController extends BaseController
{
	public function actionIndex(){
		$title = 'Foscam News';
		$news = News::find()->orderBy('id desc')->all(); 
		$this->getView()->title = $title;  
		return $this->render("index",['news'=>$news]);
	}
	
	public function actionNewsinfo(){
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$newsinfo = News::find()->where("id='".$id."'")->one();
		$this->getView()->title = $newsinfo->title." - Foscam";
		return $this->render("newsinfo",['newsinfo'=>$newsinfo]);
	}
	
	public function actionExhibitions(){
		$title = 'Foscam Exhibitions';
		$exhibitions = Exhibitions::find()->orderBy('id desc')->all(); 
		$this->getView()->title = $title;  
		return $this->render("exhibitions",['exhibitions'=>$exhibitions]);
	}

}
