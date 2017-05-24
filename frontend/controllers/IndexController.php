<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
//use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Solution;
use common\models\Products;
use  yii\web\Session;



class IndexController extends BaseController
{
	public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
           /* 'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                /'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
	
	public function actionSolutions()
	{
		$title='Foscam solutions for home, business and baby security';
		$this->getView()->title = $title;  
		$solution = Solution::find()->where('status=0')->all(); 
		
		/*foreach($solution as $list){
			echo $list->title;
		}*/
		return $this->render('solutions', [
                'solution' => $solution,
            ]);
	}
	
	public function actionSolutioninfo(){
		$title='Foscam solutions for home  Security System, business  Security System and Baby Security System';
		$this->getView()->title = $title;  
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$solution = Solution::find()->where("url='".$id."'")->one();
		//echo $solution->url;
		$title = 'Foscam '.$solution->title.' System';
		return $this->render($solution->template);
	}

    public function actionSignin()
    {
		$title = 'Foscam User Login';
		$this->getView()->title = $title; 

        return $this->render('signin');
    }
	
	public function actionLogin(){
		$title = 'Foscam User Login';
		$this->getView()->title = $title; 
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$email = urlencode($email);
		$data='username='.trim($email).'&password='.md5(trim($password)).'&grantType=password&clientId=foscloud&clientSecret=180886A8A45AA905E3182A99D24A874B&accessType=4';
		$url='https://api.myfoscam.com/oauth?service=authorize&version';
		$result = $this->curlPOST($url,$data);
		$arr = json_decode($result,true);
		if($arr['errorCode'] == ''){
			if(empty($_POST['remember'])){
				/*$cookiesuser = Yii::$app->response->cookies;
				$cookiesuser->add(new \yii\web\Cookie([
					'name' => 'login_email',
					'value' => "sssssss",
					'expire'=>time()+604800
				]));*/
				$session = Yii::$app->session;
				$session->set('login_email', $arr['data']['username']);
			}else{
				/*$cookiesuser = Yii::$app->response->cookies;
				$cookiesuser->add(new \yii\web\Cookie([
					'name' => 'login_email',
					'value' => "dddddddd",
					'expire'=>time()+604800
				]));*/
				$session->set('login_email', $arr['data']['username']);
			}
			return $this->render('login_success',['message'=>'success']);
		}else{
			$errormsg = 'Please use the correct email or password to <a href="/index/signin.html">log in.</a>';
			return $this->render('login_error',['message'=>$errormsg,'jumpUrl'=>'/index/signin.html','waitSecond'=>5555]);
		}
	}
	
	public function actionLoginout(){//ÍË³ö
		$session = Yii::$app->session;
		$session->remove('login_email');
		//return $this->render('login_success',['message'=>'success']);
		return $this->render('login_error',['message'=>'log out success','jumpUrl'=>'/','waitSecond'=>3]);
	}
	
	public function actionOlogin(){
		//$this->layout = false; 
		return $this->render('ologin');
	}
	
	public function actionOlogin_do(){
		$username = isset($_GET['Username']) ? $_GET['Username'] : "";
		$url = 'https://api.myfoscam.com/user/get_offical_user_status?username='.$username;
		$result = $this->curlGET($url);
		print_r($result);die;
	}
	
	public function actionLonfind(){
		return $this->render('LonFind');
	}

	public function actionCloud_service(){
		return $this->render('cloud_service');
	}
 
}
