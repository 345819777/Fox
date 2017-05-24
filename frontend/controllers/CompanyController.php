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

class CompanyController extends BaseController
{

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

    public function actionCompanyinfo()
    {
		$name =  isset($_GET['name']) ? $_GET['name'] : '';
	    //$lang =  isset($_COOKIE['think_language']) ? $_COOKIE['think_language'] : 'en';
		
		$cookies = Yii::$app->request->cookies;//注意此处是request
		$lang = $cookies->get('think_language', 'en');//设置默认值

		
		
		if($lang == 'uk'){
			if($name == 'contact-us' || $name == 'contact-as-partners' || $name == 'about-us'){
				$sql = " and code='".$lang."'";
			}
		}else{
			$sql = " and code='en'";
		}
		$company = Company::find()->where("url='".$name."'".$sql)->one();

		$title = 'Foscam '.$company->title.' System';
		$this->getView()->title = $title;  
        return $this->render('companyinfo',['company'=>$company]);
    }
	
	
	public function actionWhere_to_buy(){
		//$id =  isset($_GET['id']) ? $_GET['id'] : '';
		$title = 'Foscam - Where to buy Foscam products';
		$this->getView()->title = $title;  
		//$lang =  isset($_COOKIE['think_language']) ? $_COOKIE['think_language'] : 'en';
		
		$cookies = Yii::$app->request->cookies;
		$lang = $cookies->get('think_language','en');

		
		if(!empty($_GET['cate'])){
			$cate=$_GET['cate'];
					
			//$Country_category=M('CountryCategory');
			if($lang == 'ca'){
				$row = CountryCategory::find()->where("category ='".$cate."' and country = 'Canada'")->orderBy('order asc')->all();
				//$row=$Country_category->where("category ='".$cate."' and country = 'Canada'")->order("`order` asc")->select();				
			}else if($lang == 'au'){
				//$row=$Country_category->where("category ='".$cate."' and country = 'Australia'")->order("`order` asc")->select();
				$row = CountryCategory::find()->where("category ='".$cate."' and country = 'Australia'")->orderBy('order asc')->all();				
			}else{
				//$row=$Country_category->where("category ='".$cate."'")->order("`order` asc")->select();
				$row = CountryCategory::find()->where("category ='".$cate."'")->orderBy('order asc')->all();	
			}

		}else if(empty($_GET['cate'])){
			$cate='North_America';
			//$Country_category=M('CountryCategory');
			if($lang == 'ca'){
				$row = CountryCategory::find()->where("category ='".$cate."' and country = 'Canada'")->orderBy('country asc')->all();	
				//$row=$Country_category->where("category ='".$cate."' and country = 'Canada'")->order("`country` asc")->select();
			}else{
				//$row=$Country_category->where("category ='".$cate."'")->order("`country` asc")->select();
				$row = CountryCategory::find()->where("category ='".$cate."'")->orderBy('country asc')->all();						
			}
			//print_r($Country_category->getLastSql());
		}
		
		
	if(!empty($_GET['net'])){
		//$db=M($_GET['net']);
		//$row=$db->order('id desc')->select();
		if($_GET['net']=='Ebay'){
				$connection = Yii::$app->db;

				if($lang =='au'){
					$sql = "select * from ebay where `on`=0 and Region='Austrilia' order by id desc limit 999";
				}else if($lang == 'ca'){
					$sql = "select * from ebay where `on`=0 and Region='Canada' order by id desc limit 999";
				}else{
					$sql="(select * from ebay where `on`=0 and Region='USA' order by id desc limit 999)
					 union (select * from ebay where `on`=0 and Region='uk' order by id desc limit 999) union
					(select * from ebay where `on`=0 and Region='Austrilia' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Belgium' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Canada' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='France' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Germany' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Italy' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Malaysia' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Netherlands' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Polish' order by id desc limit 999)
					 union 
					(select * from ebay where `on`=0 and Region='Spain' order by id desc limit 999)";
				}
				$command = $connection->createCommand($sql);
				$row = $command->queryAll();
				//$row=$db->query($sql);
		}else{
				if($lang == 'au'){
					$row = Amazon::find()->where('`on`=0 and region = "Austrilia"')->orderBy('id desc')->all();	
					//$row=$db->where('`on`=0 and region = "Austrilia"')->order('id desc')->select();
				}else if($lang == 'ca'){
					$row = Amazon::find()->where('`on`=0 and region = "Canada"')->orderBy('id desc')->all();	
					//$row=$db->where('`on`=0 and region = "Canada"')->order('id desc')->select();
				}else{
					$row = Amazon::find()->where('`on`=0')->orderBy('id desc')->all();
					//$row=$db->where('`on`=0')->order('id desc')->select();
				}
		}
		}
		

			//$this->assign('row',$row);
			if($lang == 'uk'){
				//$this->view('uk_store');
				return $this->render('uk_store',['row'=>$row]);
			}else if($lang == 'au'){
				//$this->view('au_store');
				return $this->render('au_store',['row'=>$row]);
			}else if($lang == 'ca'){
				//$this->view('ca_store');
				return $this->render('ca_store',['row'=>$row]);
			}else{
				return $this->render('where_to_buy',['row'=>$row]);
			}
		
	}
	
	public function actionCallcenter(){
		$title = 'Foscam Open Source Compliance';
		$this->getView()->title = $title;  
		return $this->render('callcenter');
	}
	
	public function actionOpensourcecompliance(){
		$title = 'Foscam Call Center';
		$this->getView()->title = $title;  
		return $this->render('opensourcecompliance');
	}
	
	public function actionCe_certificate(){
		$title = 'Foscam- Ce_certificate';
		$this->getView()->title = $title;  
		return $this->render('ce_certificate');
	}

	public function actionSitemap(){
		$title = 'Foscam- Sitemap';
		$this->getView()->title = $title;  
		return $this->render('sitemap');
	}
	
	public function actionD(){
		$title = 'Foscam- How to be distributor';
		$this->getView()->title = $title; 
		return $this->render('how-to-be-distributor');
	}
	
}
