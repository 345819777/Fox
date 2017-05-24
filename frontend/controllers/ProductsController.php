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
use common\models\Products;
use yii\data\Pagination;
use common\models\GoodsMjpeg;
use common\models\GoodsNvr;
use common\models\GoodsOutdoor;
use common\models\GoodsIndoor;


/**
 * Products controller
 */
class ProductsController extends BaseController
{
	
	public $enableCsrfValidation = false;
	
	public function actionIp_camera(){
		$title='Foscam IP Cameras - Cube, PT, PTZ, Bullet, Dome Cameras; Baby Monitors; NVR; NVR Kits';
		$keywords="video surveillance cameras, network security cameras, business IP cameras, wireless home cameras, wifi cameras";
		$content='Foscam provides robust cube, PT, PTZ, bullet and dome cameras with the function of night vision, two-way audio, motion detection alarm, PoE or rich media push for the video surveillance of house, office, factory, warehouse, garage...';
		
		$this->getView()->title = $title; 
		if(!empty($_GET['cate'])){
			$cate=$_GET['cate'];
			$cate=str_replace(',','.',$cate);
			$cate = urldecode($cate);
			
			$query = Products::find()
			  ->where("`on`=1 and `Pixel`='$cate' or `category`='$cate' or `big_category`='$cate'")
			  ->orderBy('order asc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 9,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();
			  
		}else{
			$query = Products::find()
			  ->where("`on`=1")
			  ->orderBy('order asc');
			$countQuery = clone $query;
			$pages = new Pagination([
			  'totalCount' => $countQuery->count(),
			  'pageSize'   => 9,
			]);
			$models = $query->offset($pages->offset)
			  ->limit($pages->limit)
			  ->all();
		}
		
		/*if(!empty($_GET['cate'])){
			$cate=$_GET['cate'];
						
			$cate=str_replace(',','.',$cate);
			$_GET['p']=empty($_GET['p'])?1:$_GET['p'];
			$count      = $this->model->where("`on`=1 and `Pixel`='$cate' or `category`='$cate' or `big_category`='$cate'")->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			$row=$this->model->where("`on`=1 and `Pixel`='$cate' or `category`='$cate' or `big_category`='$cate'")->limit($Page->firstRow,$Page->listRows)->order("`order` asc")->select();
		}else{
			$_GET['p']=empty($_GET['p'])?1:$_GET['p'];
			$count      = $this->model->where("`on`=1")->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			$row=$this->model->where("`on`=1")->limit($Page->firstRow,$Page->listRows)->order("`order` asc")->select();
		}*/
		
		if(!empty($_SERVER["HTTP_X_REQUESTED_WITH"])){
			$category=$_POST['category'];
			$row = Products::find()->where("`Pixel`='$category' and `on`='1'")->orderBy('order asc')->all();
			
			
			//$row=$this->model->where("`Pixel`='".$category".' and `on`='1'")->order("`order` asc")->select();
			if(empty($row)){
				$row = Products::find()->where("`category`='$category' and `on`='1'")->orderBy('order asc')->all();
				//$row=$this->model->where("`category`='$category' and `on`='1'")->order("`order` asc")->select();
				if(empty($row)){
					//$row=$this->model->where("`big_category`='$category' and `on`='1'")->order("`order` asc")->select();
					$row = Products::find()->where("`big_category`='$category' and `on`='1'")->orderBy('order asc')->all();
				}
			}
			
			$one=array('row'=>$row);
			return \yii\helpers\Json::encode($one);
			//echo json_encode($one);exit;
		}
	
		$category=$this->category();//产品分类
		
		return $this->render('ip_camera',['category'=>$category,'models'=>$models,'pages'=>$pages]);
	}
	
	public function actionInfo(){
		$id=empty($_GET['id'])?1:$_GET['id'];
		$_SESSION['goods_id']=$id;
		$val=empty($_GET['val'])?'feat':$_GET['val'];
		
		$row = Products::find()->where("id='".$id."'")->one();

		$ip=$_SERVER['HTTP_HOST'];
		$name=str_replace(" ","",$row->name);

		if($row->hot==1){
				header("Location:http://".$ip."/".$name.".html");exit;
		}
			$big_category=$row->left_join_category;
			$big_category=ucfirst($big_category);
			if($big_category == "GoodsMjpeg"){
				$tech=GoodsMjpeg::find()->where("name='".$name."'")->one();
			}else if($big_category == "GoodsIndoor"){
				$tech=GoodsIndoor::find()->where("name='".$name."'")->one();
			}else if($big_category == "GoodsOutdoor"){
				$tech=GoodsOutdoor::find()->where("name='".$name."'")->one();
			}else if($big_category == "GoodsNvr"){
				$tech=GoodsNvr::find()->where("name='".$name."'")->one();
			}else{
				$tech=array();
			}
			
		$row = Products::find()->where("id='".$id."'")->one();
		$title='Foscam '.$row->name;
		$this->getView()->title = $title;  
		return $this->render('info',['row'=>$row,'tech'=>$tech]);
	}
	
	public function actionC2(){
		$title='Foscam C2';
		$this->getView()->title = $title;  
		$tech=GoodsIndoor::find()->where("name='C2'")->one();
		
		$rowid = Products::find()->where("name='C2'")->one();
		$id=$rowid->id;
		return $this->render('C2',['tech'=>$tech,'id'=>$id]);
	}
	
	
	
public function actionR2(){
		$title='Foscam R2';
		$this->getView()->title = $title;  
		$tech=GoodsIndoor::find()->where("name='R2'")->one();
		$rowid = Products::find()->where("name='R2'")->one();
		$id=$rowid->id;
		return $this->render('r2',['tech'=>$tech,'id'=>$id]);
	}
	
	
	public function actionR4(){
		$title='Foscam R4';
		$this->getView()->title = $title;  
		return $this->render('R4');
	}
	
	public function actionC1(){
		$title='Foscam C1';
		$this->getView()->title = $title; 
		$tech=GoodsIndoor::find()->where("name='C1'")->one();
		$rowid = Products::find()->where("name='C1'")->one();
		$id=$rowid->id;
		return $this->render('c1',['tech'=>$tech,'id'=>$id]);
	}	
	
	public function actionC1lite(){
		$title='Foscam C1Lite';
		$this->getView()->title = $title; 
		$tech=GoodsIndoor::find()->where("name='C1Lite'")->one();
		$rowid = Products::find()->where("name='C1Lite'")->one();
		$id=$rowid->id;
		return $this->render('C1Lite',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9900p(){
		$title='Foscam FI9900P';
		$this->getView()->title = $title; 

		$tech=GoodsOutdoor::find()->where("name='FI9900P'")->one();

		$rowid = Products::find()->where("name='FI9900P'")->one();
		$id=$rowid->id;
		return $this->render('fi9900p',['tech'=>$tech,'id'=>$id]);
	}
	
	function actionFosbaby(){
		$title='Foscam FosBaby';
		$this->getView()->title = $title; 

		$tech=GoodsIndoor::find()->where("name='FosBaby'")->one();
		$rowid = Products::find()->where("name='FosBaby'")->one();
		$id=$rowid->id;
		return $this->render('FosBaby',['tech'=>$tech,'id'=>$id]);
	}

	
	function actionFi9803ep(){
		$title='Foscam FI9803EP';
		$this->getView()->title = $title; 		
		$tech=GoodsOutdoor::find()->where("name='FI9803EP'")->one();
		$rowid = Products::find()->where("name='FI9803EP'")->one();
		$id=$rowid->id;
		return $this->render('FI9803Ep',['tech'=>$tech,'id'=>$id]);
	}
	
	
	function actionFi9821ep(){
		$title='Foscam FI9821EP';
		$this->getView()->title = $title; 

		$tech=GoodsIndoor::find()->where("name='FI9821EP'")->one();
		$rowid = Products::find()->where("name='FI9821EP'")->one();
		$id=$rowid->id;
		return $this->render('FI9821EP',['tech'=>$tech,'id'=>$id]);
	}
	
	function actionFi9831p(){
		$title='Foscam FI9831P';
		$this->getView()->title = $title; 
	
		$tech=GoodsIndoor::find()->where("name='FI9831P'")->one();
		$rowid = Products::find()->where("name='FI9831P'")->one();
		$id=$rowid->id;
		return $this->render('FI9831P',['tech'=>$tech,'id'=>$id]);
	}
	
	function actionFi9851p(){
		$title='Foscam FI9851P';
		$this->getView()->title = $title; 
			
		$tech=GoodsOutdoor::find()->where("name='FI9851P'")->one();
		$rowid = Products::find()->where("name='FI9851P'")->one();
		$id=$rowid->id;
		return $this->render('FI9851P',['tech'=>$tech,'id'=>$id]);
	}
	
	function actionFi9853ep(){
		$title='Foscam FI9853EP';
		$this->getView()->title = $title;  	
		
		$tech=GoodsOutdoor::find()->where("name='FI9853EP'")->one();
		$rowid = Products::find()->where("name='FI9853EP'")->one();
		$id=$rowid->id;
		return $this->render('FI9853EP',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9805w(){
		$title='Foscam FI9805W';
		$this->getView()->title = $title;  
		
		$tech=GoodsOutdoor::find()->where("name='FI9805W'")->one();
		$rowid = Products::find()->where("name='FI9805W'")->one();
		$id=$rowid->id;
		return $this->render('fi9805w',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9816p(){
		$title='Foscam FI9816P';
		$this->getView()->title = $title;  
		
		$tech=GoodsIndoor::find()->where("name='FI9816P'")->one();
		$rowid = Products::find()->where("name='FI9816P'")->one();
		$id=$rowid->id;
		return $this->render('fi9816p',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9803p(){
		$title='Foscam FI9803P';
		$this->getView()->title = $title;  
		$tech=GoodsOutdoor::find()->where("name='FI9803P'")->one();
		$rowid = Products::find()->where("name='FI9803P'")->one();
		$id=$rowid->id;
		return $this->render('fi9803p',['tech'=>$tech,'id'=>$id]);
	}
	
	
	public function actionFi9805e(){
		$title='Foscam FI9805E';
		$this->getView()->title = $title;  

		$tech=GoodsOutdoor::find()->where("name='FI9805E'")->one();
		$rowid = Products::find()->where("name='FI9805E'")->one();
		$id=$rowid->id;
		return $this->render('FI9805E',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9903p(){
		$title='Foscam FI9903P';
		$this->getView()->title = $title;  
		
		$tech=GoodsOutdoor::find()->where("name='FI9903P'")->one();
		$rowid = Products::find()->where("name='FI9903P'")->one();
		$id=$rowid->id;
		return $this->render('FI9903P',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9821p(){
		$title='Foscam FI9821P';
		$this->getView()->title = $title;  
		
		$tech=GoodsIndoor::find()->where("name='FI9821P'")->one();
		$rowid = Products::find()->where("name='FI9821P'")->one();
		$id=$rowid->id;
		return $this->render('fi9821p',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9826p(){
		$title='Foscam FI9826P';
		$this->getView()->title = $title;  
		
		$tech=GoodsIndoor::find()->where("name='FI9826P'")->one();
		$rowid = Products::find()->where("name='FI9826P'")->one();
		$id=$rowid->id;
		return $this->render('fi9826p',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9828p(){
		$title='Foscam FI9828P';
		$this->getView()->title = $title;  
		$tech=GoodsOutdoor::find()->where("name='FI9828P'")->one();
		$rowid = Products::find()->where("name='FI9828P'")->one();
		$id=$rowid->id;
		return $this->render('fi9828p',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFi9800p(){
		$title='Foscam FI9800P';
		$this->getView()->title = $title;  
		$filter=array(
			'name','sensor_type','display_resolution','frame_rate','IR_CUT','minimum_lllumination','lens_type','diagonal_angle_of_view','horizontal_view_angle','infrared_mode','night_vision','ethernet','wireless','wireless_security','p2p','external_I/O',
			'power_adapter','video_format','multi_stream','motion_detection','browser_supported','os_supported','day_night','firewall','user_acconuts','2_way_audio','built_in_microphone',
			'built_in_speaker','built_in_ddns_server','external_speaker_output','waterproof','power_consumption','operate_temper','operating_humidity','certification'
		);	
				
		$tech=GoodsOutdoor::find()->where("name='FI9800P'")->one();
		$rowid = Products::find()->where("name='FI9800P'")->one();
		$id=$rowid->id;
		return $this->render('FI9800P',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFosbaby_p1(){
		$title='Foscam FosBaby P1';
		$this->getView()->title = $title; 
		$tech=GoodsIndoor::find()->where("name='FosBaby_P1'")->one();
		$rowid = Products::find()->where("name='FosBaby_P1'")->one();
		$id=$rowid->id;
		return $this->render('fosbaby_p1',['tech'=>$tech,'id'=>$id]);
	}
	
	public function actionFn3108xe_b4_1t(){	
		$title='Foscam FN3108XE B4 1T';
		$this->getView()->title = $title;
		$rowid = Products::find()->where("name='FN3108XE_B4_1T'")->one();
		$id=$rowid->id;		
		return $this->render('FN3108XE_B4_1T',['id'=>$id]);	
	}
	
	public function actionFn3108xe_b8_2t(){	
		$title='Foscam FN3108XE B8 2T';
		$this->getView()->title = $title;  
		$rowid = Products::find()->where("name='FN3108XE_B8_2T'")->one();
		$id=$rowid->id;		
		return $this->render('FN3108XE_B8_2T',['id'=>$id]);	
	}
	
	public function actionFn7108e_b4_2t(){	
		$title='Foscam FN7108E B4 2T';
		$this->getView()->title = $title;  
		$rowid = Products::find()->where("name='FN7108E_B4_2T'")->one();
		$id=$rowid->id;		
		return $this->render('FN7108E_B4_2T',['id'=>$id]);	
	}
	
	public function actionFn7108e_b8_2t(){	
		$title='Foscam FN7108E B8 2T';
		$this->getView()->title = $title; 
		$rowid = Products::find()->where("name='FN7108E_B8_2T'")->one();
		$id=$rowid->id;		
		return $this->render('FN7108E_B8_2T',['id'=>$id]);	
	}
	
	public function actionFi9900ep(){	
		$title='Foscam FI9900EP';
		$this->getView()->title = $title; 
		$rowid = Products::find()->where("name='FI9900EP'")->one();
		$id=$rowid->id;
		return $this->render('FI9900EP',['id'=>$id]);	
	}
	
	public function actionFi9901ep(){
		$title='FI9901EP';
		$this->getView()->title = $title;  
		return $this->render('FI9901EP');	
	}
	
	public function actionC2black(){
		$title='C2-Black';
		$this->getView()->title = $title;  
		return $this->render('c2black');	
	}
	
	public function actionR2black(){
		$title='R2-Black';
		$this->getView()->title = $title;  
		return $this->render('r2black');		
	}
	
	public function actionFi9961ep(){
		$title='FI9961EP';
		$this->getView()->title = $title;
		return $this->render('FI9961EP');		
	}
	
	public function actionFn3108e_b4_1t(){	
		$title='Foscam FN3108E B4 1T';
		$this->getView()->title = $title;  
		return $this->render('FN3108E_B4_1T');
	}
	
	public function actionFn3108e_b8_2t(){	
		$title='Foscam FN3108E B8 2T';
		$this->getView()->title = $title;  
		return $this->render('FN3108E_B8_2T');
	}
	
	public function actionFn3104w_b4(){
		$title='Foscam FN3104W';
		$this->getView()->title = $title;  
		return $this->render('FN3104W_B4');
	}
	
	public function actionWaterproofjunctionbox(){
		$id=isset($_GET['id'])?$_GET['id']:59;
		$row = Products::find()->where("`id`='$id'")->one();
		return $this->render('WaterproofJunctionBox',['row'=>$row]);
	}
	
	public function actionWaterproofjunctionboxnew(){
		$id=isset($_GET['id'])?$_GET['id']:74;
		$row = Products::find()->where("`id`='$id'")->one();
		return $this->render('WaterproofJunctionBoxNew',['row'=>$row]);
	}
	
	public function actionFi9928p(){
		$title='Foscam FI9928P';
		$this->getView()->title = $title;  
		return $this->render('FI9928P');
	}
	
	public function actionFn7108he(){
		$title='Foscam FN7108HE';
		$this->getView()->title = $title;  
		return $this->render('FN7108HE');
	}
	
	public function actionSearch(){
		$title='Foscam IP Cameras - Cube, PT, PTZ, Bullet, Dome Cameras; Baby Monitors; NVR; NVR Kits';
		$this->getView()->title = $title;  
			if(!empty($_GET['name'])){
						$name=$_GET['name'];
						//$this->keywords_count($name,6);
						//$row=$this->model->where("`on`=1 and `name` like '%$name%'")->select();
						$row = Products::find()->where("`on`=1 and `name` like '%$name%'")->all();
						
					}
		if(!empty($_SERVER["HTTP_X_REQUESTED_WITH"])){
		$category=$_POST['category'];
		$row = Products::find()->where("`Pixel`='$category' and `on`='1'")->orderBy("order asc")->all();
		if(empty($row)){
			$row = Products::find()->where("`category`='$category' and `on`='1'")->orderBy("order asc")->all();
			if(empty($row)){
			$row = Products::find()->where("`big_category`='$category' and `on`='1'")->orderBy("order asc")->all();
			}
		}
			$one=array('row'=>$row);
			exit(\yii\helpers\Json::encode($one));
		}
		
		$category=$this->category();//产品分类


		return $this->render('search',['row'=>$row,'category'=>$category]);
	}
}
