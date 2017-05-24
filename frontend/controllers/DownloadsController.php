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
use common\models\ProductCategory;
use common\models\ProductFirmware;
use common\models\ProductFirmwareFile;
use common\models\Guides;
use common\models\Manual;

/**
 * Downloads controller
 */
class DownloadsController extends BaseController
{

    public function actionIndex()
    { 
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		$cid = isset($_GET['cid']) ? $_GET['cid'] :0;
		$q = isset($_GET['q']) ? $_GET['q'] :'';
		$action = Yii::$app->controller->action->id;
		//获取分类
		$productcate = $this->product_category();

		if($cid != 0){
			$sql = "cid=".$cid;
			$product_list = ProductFirmware::find()->where($sql)->orderBy("sort asc")->all();
		}else{
			$product_list = ProductFirmware::find()->orderBy("sort asc")->all();
		}
		
		
		if($cid!=0){
			$row = ProductFirmware::find()->where($sql)->orderBy("sort asc")->all();
			if (empty($row)){
				exit(\yii\helpers\Json::encode(array('row'=>1)));
			}
			exit(\yii\helpers\Json::encode(array('row'=>$row)));
		}
        return $this->render('index',['q'=>$q,'productcate'=>$productcate,'product_list'=>$product_list,'action'=>$action]);
    }
	
	public function actionFirmwareajaxjson(){
		$cid = isset($_GET['cid']) ? $_GET['cid'] :0;
		$pagename = isset($_GET['pagename']) ? $_GET['pagename'] : '';
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$pagecount = isset($_GET['count']) ? $_GET['count'] : 0;
		$cate = isset($_GET['category']) ? $_GET['category'] : '';
		$big_cate = isset($_GET['big_category']) ? $_GET['big_category'] : '';
		$big_cate = str_replace(" ","_",$big_cate);
		
		
		if($cid != 0){
			$sql = "cid=".$cid;
		}else if($q !=''){
			//$this->keywords_count($q,2);
			$sql = "`productname` like '%$q%'";
		}else{
			$sql = "";
		}
		if($sql == ''){
			$count = ProductFirmware::find()->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = ProductFirmware::find()->offset($start)->limit($pagecount)->orderBy("sort desc")->all();
		}else{
			$count = ProductFirmware::find()->where($sql)->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = ProductFirmware::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("sort desc")->all();
		}

		if (empty($row)){
			exit(\yii\helpers\Json::encode(array('row'=>1,'totalPages'=>0,'show'=>'')));
		}
		exit(\yii\helpers\Json::encode(array('row'=>$row,'totalPages'=>$totalPages,'show'=>$show)));
	}
	
	public function actionFirmware_details(){
		
		$id = isset($_GET['id']) ? $_GET['id'] :0;
		$title = 'Foscam Support - Downloads';
		$this->getView()->title = $title; 
		$action = Yii::$app->controller->action->id;
		//获取分类
		
		//$q=M('ProductFirmwareFile');
		//$row = $q->distinct(true)->field('vname')->where("productid=".$id)->order("sort asc")->select();
		$row = ProductFirmwareFile::find()->select('vname')->distinct()->where("productid=".$id)->all();
		//$row = ProductFirmwareFile::find()->distinct("vname")->where("productid=".$id)->orderBy("sort asc")->all();
		//print_r($row);
		$varr = array();
		foreach($row as $k=>$v){
			$vname = $v->vname;
			$varr[$k]['vname'] = $vname;
			//$db=M('ProductFirmwareFile');
			//$v = $db->where("vname = '$vname'")->order("sort asc")->select();
			$v = ProductFirmwareFile::find()->where("vname = '$vname'")->orderBy("sort asc")->all();
			foreach($v as $ks=>$vs){
				$varr[$k]['vlist'][$ks]=$vs;
			}
		}
		//print_r($varr);
		return $this->render('firmware_details',['action'=>$action,'vlist'=>$varr]);
	}
	
    public function actionApp_software(){
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		$action = Yii::$app->controller->action->id;
		return $this->render('app_software',['action'=>$action]);
	}
	
	public function actionQuick_installation_guide(){
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$title = 'Foscam Support - FAQs';
		$this->getView()->title = $title; 
		$action = Yii::$app->controller->action->id;
		
		//$q=M('QigLanguage');
		//$lang_list=$q->where("app=0")->order("sort asc")->select();
		
		return $this->render('quick_installation_guide',['action'=>$action,'q'=>$q]);
	}
	
		//QIG列表页面
	public function actionQuick_installation_guide_lang(){
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$action = Yii::$app->controller->action->id;
		$cate = $_GET['category'];
		
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
		
		//获取分类
		$productcate = $this->product_category();
		
		$big_cate = isset($_GET['big_category']) ? $_GET['big_category'] : '';
		$big_cate = str_replace(" ","_",$big_cate);

		$row = Guides::find()->where("`category`='$cate'")->all();
		
		if(!empty($_POST['model'])){
			//$cate = I('post.cate');//获取表单中语种类别
			$cate = $_POST['cate'];
			$model = $_POST['model'];
			$row = Guides::find()->where("`category`='$cate' and `model` like '%".$model."%'")->orderBy('id asc')->all();
		}
		if(! empty($big_cate)){
			$row = Guides::find()->where("category = '$cate' and big_category = '$big_cate'")->orderBy('id asc')->all();
			if (empty($row)){
				//exit(json_encode(array('row'=>1)));
				//$this->assign('guide',$row);
			}
			//exit(json_encode(array('row'=>$row)));
		}
		return $this->render('quick_installation_guide_lang',['guide'=>$row,'cate'=>$cate,'q'=>$q,'action'=>$action,'category'=>$cate,'productcate'=>$productcate]);
	}
	
	public function actionQigajaxjson(){
		$cid = isset($_GET['cid']) ? $_GET['cid'] :0;
		$pagename = isset($_GET['pagename']) ? $_GET['pagename'] : '';
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$pagecount = isset($_GET['count']) ? $_GET['count'] : 0;
		$cate = isset($_GET['category']) ? $_GET['category'] : '';
		$big_cate = isset($_GET['big_category']) ? $_GET['big_category'] : '';
		$big_cate = str_replace(" ","_",$big_cate);
		
		$wherearr = array();
		if($cate != ''){
			$wherearr[] = "`category`='$cate'";
		}
		if($big_cate != ''){
			$wherearr[] = "`big_category` = '$big_cate'";
		}
		if($q != ''){
			//$this->keywords_count($q,3);
			$wherearr[] = "`model` like '%$q%'";
		}
		
		$sql = implode(" and ",$wherearr);
		if($sql == ""){
			$count = Guides::find()->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = Guides::find()->offset($start)->limit($pagecount)->orderBy("id asc")->all();
		}else{
			$count = Guides::find()->where($sql)->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = Guides::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("id asc")->all();
		}
		
	
		if (empty($row)){
			exit(\yii\helpers\Json::encode(array('row'=>1,'totalPages'=>0,'show'=>'')));
		}
		exit(\yii\helpers\Json::encode(array('row'=>$row,'totalPages'=>$totalPages,'show'=>$show)));
	}
	
	public function actionUser_mannual(){
		$cid = isset($_GET['cid']) ? $_GET['cid'] :0;
		$pagename = isset($_GET['pagename']) ? $_GET['pagename'] : '';
		$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$pagecount = isset($_GET['count']) ? $_GET['count'] : 0;
		
		$title = 'Foscam User Manual Download';
		$this->getView()->title = $title; 
		$action = Yii::$app->controller->action->id;
		//获取分类
		$productcate = $this->product_category();
		
		if($cid != 0){
			$wherearr[] = "cate=".$cid;
		}else{
			$wherearr[] = "1=1";
		}
		if($q !=''){
			//$this->keywords_count($q,4);
			$wherearr[] = "`model` like '%$q%'";
		}else{
			$wherearr[] = "1=1";
		}
		$sql = implode(" and ",$wherearr);
				
		if($cid!=0){
			$count = Manual::find()->where($sql)->count();
			$totalPages = ceil($count / $pagecount);
			$show = $this->page_style($totalPages,$p,$count);
			$start = $pagecount * ($p - 1);
			$row = Manual::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("id asc")->all();
	
			if (empty($row)){
				exit(\yii\helpers\Json::encode(array('row'=>1,'totalPages'=>0,'show'=>'')));
			}
			exit(\yii\helpers\Json::encode(array('row'=>$row,'totalPages'=>$totalPages,'show'=>$show)));
		}else{	
			if($pagename == 'index'){
				
				$count = Manual::find()->where($sql)->count();
				$totalPages = ceil($count / $pagecount);
				$show = $this->page_style($totalPages,$p,$count);
				$start = $pagecount * ($p - 1);
				$guide = Manual::find()->where($sql)->offset($start)->limit($pagecount)->orderBy("id asc")->all();

				if (empty($guide)){
					exit(\yii\helpers\Json::encode(array('row'=>1,'totalPages'=>0,'show'=>'')));
				}
				exit(\yii\helpers\Json::encode(array('row'=>$guide,'totalPages'=>$totalPages,'show'=>$show)));
			}
		}

		//return $this->render('user_mannual',['guide'=>$guide,'show'=>$show,'productcate'=>$productcate,'action'=>$action,'q'=>$q]);
		return $this->render('user_mannual',['productcate'=>$productcate,'action'=>$action,'q'=>$q]);
	}
	
	public function product_category(){
		$row = ProductCategory::find()->orderBy("sort asc")->all();
		return $row;
	}

}
