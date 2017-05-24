<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Company;
use common\models\CountryCategory;
use common\models\Amazon;
use common\models\Ebay;
use common\models\Faq;
use yii\data\Pagination;
use common\models\Firmware;
use common\models\Appmanual;
use common\models\Video;
use common\models\Products;
use common\models\Manual;
use common\models\Guides;
use common\models\DealerApplication;

class CooperateController extends BaseController
{
	public $enableCsrfValidation = false;
	public function actionAuthsave(){
		$model = new DealerApplication;
		$model->business_name = $_POST['business_name'];
		$model->billing_address = $_POST['billing_address'];
		$model->city_country = $_POST['city_country'];
		$model->website = $_POST['website'];
		if(isset($_POST['nowebsite'])){
			$nowebsite = $_POST['nowebsite'];
			$nowebsite =  implode(',',$nowebsite);
			$model->nowebsite =$nowebsite; 
		}else{
			$nowebsite = '';
			$model->nowebsite = '';
		}
		$model->year_started = $_POST['year_started'];
		$model->number_employees = $_POST['number_employees'];
		$model->number_salespeople = $_POST['number_salespeople'];
		$model->number_service = $_POST['number_service'];
		$business_is = $_POST['business_is'];
		$model->business_is = implode(',',$business_is); 
		$main_business = $_POST['main_business'];
		$model->main_business = implode(',',$main_business); 
		$model->main_business_other = $_POST['main_business_other'];
		$question_a = $_POST['question_a'];
		$model->question_a = implode(',',$question_a); 
		$model->using_website = $_POST['using_website'];
		$model->using_marketplace = $_POST['using_marketplace'];
		$model->question_a_other = $_POST['question_a_other'];
		$model->question_b = $_POST['question_b'];
		$model->question_b_yes = $_POST['question_b_yes'];
		$model->question_b_no = $_POST['question_b_no'];
		$model->question_c = $_POST['question_c'];
		$model->question_d = $_POST['question_d'];
		$model->question_e = $_POST['question_e'];
		$model->question_f = $_POST['question_f'];
		$model->question_g = $_POST['question_g'];
		$model->question_h = $_POST['question_h'];
		$model->question_h_yes = $_POST['question_h_yes'];
		$model->question_h_no = $_POST['question_h_no'];
		$model->question_i = $_POST['question_i'];
		$model->salutation = $_POST['salutation'];
		$model->firstname = $_POST['firstname'];
		$model->lastname = $_POST['lastname'];
		$model->job_title = $_POST['job_title'];
		$model->email = $_POST['email'];
		$model->skype = $_POST['skype'];
		$model->phone = $_POST['phone'];
		$model->ext = $_POST['ext'];
		$model->mobile_number = $_POST['mobile_number'];
		$model->authorized_individual = $_POST['authorized_individual'];
		$model->title = $_POST['title'];
		$model->create_time = time();
		if($model->save()){
			/*$mail= Yii::$app->mailer->compose(); 
			$mail->setTo('ec6@foscam.com'); //要发送给那个人的邮箱 
			$mail->setSubject("New Dealer Application"); //邮件主题 
			$mail->setTextBody('New Dealer Application'); //发布纯文字文本 
			$mail->setHtmlBody("New Dealer Application"); //发送的消息内容 
			$mail->send(); */
			//controller代码 
			$main_business = $_POST['main_business'];
			$business_is = $_POST['business_is'];
			$question_a = $_POST['question_a'];
			$main_business = $_POST['main_business'];
			$emailarr = array(
				'business_name'=>$_POST['business_name'],
				'billing_address'=>$_POST['billing_address'],
				'city_country'=>$_POST['city_country'],
				'website' => $_POST['website'],
				'nowebsite'=>$nowebsite,
				'year_started'=>$_POST['year_started'],
				'number_employees' => $_POST['number_employees'],
				'number_salespeople' => $_POST['number_salespeople'],
				'number_service' => $_POST['number_service'],
				'business_is' => implode(',',$business_is),
				'main_business' => implode(',',$main_business), 
				'main_business_other' => $_POST['main_business_other'],
				
				'question_a' => implode(',',$question_a),
				'using_website' => $_POST['using_website'],
				'using_marketplace' => $_POST['using_marketplace'],
				'question_a_other' => $_POST['question_a_other'],
				'question_b' => $_POST['question_b'],
				'question_b_yes' => $_POST['question_b_yes'],
				'question_b_no' => $_POST['question_b_no'],
				'question_c' => $_POST['question_c'],
				'question_d' => $_POST['question_d'],
				'question_e' => $_POST['question_e'],
				'question_f' => $_POST['question_f'],
				'question_g' => $_POST['question_g'],
				'question_h' => $_POST['question_h'],
				'question_h_yes' => $_POST['question_h_yes'],
				'question_h_no' => $_POST['question_h_no'],
				'question_i' => $_POST['question_i'],
				'salutation' => $_POST['salutation'],
				'firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
				'job_title' => $_POST['job_title'],
				'email' => $_POST['email'],
				'skype' => $_POST['skype'],
				'phone' => $_POST['phone'],
				'ext' => $_POST['ext'],
				'mobile_number' => $_POST['mobile_number'],
				'authorized_individual'=> $_POST['authorized_individual'],
				'title' => $_POST['title'],
				'create_time' => time(),
			);

			
			Yii::$app->mailer->compose('DealerApplication',$emailarr) 
				->setTo('marketing23@foscam.com') 
				->setSubject('New Dealer Application') 
				->send(); 
			
			return $this->render('login_error',['message'=>'Success','jumpUrl'=>'http://www.foscam.com/company/how-to-be-distributor-demo.html','waitSecond'=>3]);
		}else{
			return $this->render('login_error',['message'=>'Error','jumpUrl'=>'http://www.foscam.com/company/how-to-be-distributor-demo.html','waitSecond'=>3]);
		}
	}
	
	public function actionTestemail(){
		Yii::$app->mailer->compose('DealerApplication',['test'=>'Test']) 
				->setTo('ec6@foscam.com') 
				->setSubject('New Dealer Application') 
				->send(); 
				echo "dddddddddd";
	}
	
	public function actionCe_certificate(){
		return $this->render('ce_certificate');
	}
	
	public function actionFaq(){
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;
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
	}
	
	public function actionFaqcate(){
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;
		$faqCate=empty($_GET['name'])?'':$_GET['name'];//获取分类 默认查询hd
		
		$query = Faq::find()
			  ->where("faqcate ='".$faqCate."'")
			  ->orderBy('sort asc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 10,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();

		return $this->render('faqCate',['pages'=>$pages,'row'=>$models,'faqCate'=>$faqCate]);
	}
	
	public function actionFaqinfo(){
		$id= isset($_GET['id']) ? $_GET['id'] : 0;
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title;
		$row = Faq::find()->where("id=".$id)->one(); 
		if(empty($row)){
			//$this->error('error');
		}
		return $this->render('faqinfo',['row'=>$row]);
	}
	
	public function actionFirmware(){
		$title = 'Foscam Firmware Download';
		$this->getView()->title = $title;
		//$this->checklogin();
		$guide = Firmware::find()->where("`series`='mjpeg'")->orderBy("id desc")->all();
		$H264 = Firmware::find()->where("`series`='H.264' and `on`='1'")->orderBy("order desc")->all();
		return $this->render('firmware',['H264'=>$H264,'guide'=>$guide]);
	}
	
	public function actionSoftware(){
		$title = 'Foscam Software Download';
		$this->getView()->title = $title;
		return $this->render('software');
	}
	
	public function actionAppphone(){
		$title = 'Foscam App Download';
		$this->getView()->title = $title;
		return $this->render('appphone');
	}
	
	public function actionAppmanual(){
		$title = 'Foscam App Manual';
		$this->getView()->title = $title;
		$row = Appmanual::find()->all();
		return $this->render('appmanual',['row'=>$row]);
	}
	
	public function actionVms(){
		$title = 'Foscam VMS Installation';
		$this->getView()->title = $title;
		return $this->render('vms');
	}
	
	public function actionVideolist(){
		$title = 'Foscam Video Tutorial';
		$this->getView()->title = $title;
		
		$query = Video::find()
			  ->where("1=1")
			  ->orderBy('id desc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 4,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();

		return $this->render('videolist',['row'=>$models,'pages'=>$pages]);
	}
	
	public function actionVideocate(){
		$title = 'Foscam Video Tutorial';
		$this->getView()->title = $title;
		$videoCate=empty($_GET['name'])?'':$_GET['name'];//获取分类 默认查询hd
		$query = Video::find()
			  ->where("videoCate='".$videoCate."'")
			  ->orderBy('id desc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 4,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();
		return $this->render('videoCate',['row'=>$models,'pages'=>$pages,'videoCate'=>$videoCate]);
	}
	
	public function actionManual(){
		$title = 'Foscam User Manual Download';
		$this->getView()->title = $title;
		
		$id=empty($_GET['id'])?'all':$_GET['id'];
		if($id=='all'){
			$guide = Manual::find()->orderBy("id desc")->all();
		}else{
				$one = Faq::find()->where("`id`='$id'")->one(); 
				$name=$one->name;
				$guide = Manual::find()->where("`model`='$name'")->orderBy("id desc")->all();
				if(empty($guide)){
					$guide=Manual::find()->orderBy("id desc")->all();
				}		
		}
		if(!empty($_POST['model'])){
			$guide = Manual::find()->where("`model` like '%".$_POST['model']."%'")->orderBy("id desc")->all();
		}	
		return $this->render('manual',['guide'=>$guide]);
	}
	
	public function actionManualcate(){
		$title = 'Foscam User Manual Download';
		$this->getView()->title = $title;
		$manualCate		 = empty($_GET['name'])?'':$_GET['name'];//获取分类 默认查询hd
		$row = Manual::find()->where("manualCate ='".$manualCate."'")->orderBy("id asc")->all();
		return $this->render('manualcate',['row'=>$row,'manualCate'=>$manualCate]);
	}
	public function actionGuideall(){
		$title = 'Foscam QIG Download';
		$this->getView()->title = $title;
		return $this->render('guideall');
	}
	public function actionGuide(){
		$cate = isset($_GET['category']) ?  $_GET['category'] : 'English';//获取语种类别
		if($cate == 'English'){
			$title = 'Foscam English QIG';
		}elseif($cate == 'German'){
			$title = 'Foscam German QIG';
		}elseif($cate == 'Spanish'){
			$title = 'Foscam Spanish QIG';
		}elseif($cate == 'Greek'){
			$title = 'Foscam Greek QIG';
		}elseif($cate == 'French'){
			$title = 'Foscam French QIG';
		}elseif($cate == 'Italian'){
			$title = 'Foscam Italian QIG';
		}elseif($cate == 'Hungarian'){
			$title = 'Foscam Hungarian QIG';
		}elseif($cate == 'Dutch'){
			$title = 'Foscam Dutch QIG';
		}elseif($cate == 'Russian'){
			$title = 'Foscam Russian QIG';	
		}elseif($cate == 'Polish'){
			$title = 'Foscam Polish QIG';	
		}elseif($cate == 'Portuguese'){
			$title = 'Foscam Portuguese QIG';	
		}elseif($cate == 'Romanian'){
			$title = 'Foscam Romanian QIG';	
		}elseif($cate == 'Czech'){
			$title = 'Foscam Czech QIG';	
		}else{
			$title = 'Foscam Danish QIG';
		}
		$this->getView()->title = $title;
		
		$big_cate = isset($_GET['big_category']) ?  $_GET['big_category'] : '';//获取语种类别
		
		$row = Guides::find()->where("`category`='$cate'")->all();
		
		if(!empty($_POST['model'])){
			$cate = $_POST['cate'];//获取语种类别
			$model = $_POST['model'];

			$row = Guides::find()->where("`category`='$cate' and `model` like '%".$model."%'")->orderBy("id asc")->all();
		}
		if(! empty($big_cate)){
			$row = Guides::find()->where("category = '$cate' and big_category = '$big_cate'")->orderBy("id asc")->all();			
			if (empty($row)){
				exit(\yii\helpers\Json::encode(array('row'=>1)));
			}
			exit(\yii\helpers\Json::encode(array('row'=>$row)));
		}
		return $this->render('guide',['guide'=>$row,'cate'=>$cate]);
	}

}
