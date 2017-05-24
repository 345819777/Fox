<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Category;
use common\models\FaqCategory;


/**
 * Site controller
 */
class BaseController extends Controller
{
	public function category($category_arr=array(),$id=0,$level=0){
		$result = Category::find()->where("`pid`='$id'")->orderBy('sort,id asc')->all(); 
		//$db=D('Category');
		//$result=$db->order('sort,id asc')->limit(0,1000)->where("`pid`='$id'")->select();
		
		foreach($result as $k=>$v){
			$str='';
			for($i=0;$i<$level;$i++){
				$str.='&nbsp;';
			}
			//$v['name']=$str.$v['name'];
			$vs['id'] = $v->id;
			$vs['category'] = $v->category;
			$vs['pid'] = $v->pid;
			$vs['sort'] = $v->sort;
			$vs['name'] = $str;
			$category_arr[]=$vs;
			$id=$v->id;
			$category_arr=$this->category($category_arr,$id,$level+1);
		}
		
		return $category_arr;
	}
	
	function curlGET($url){
		$ch = curl_init (); 
		curl_setopt ( $ch, CURLOPT_URL, $url ); 
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt ($ch, CURLOPT_HEADER, 0);//设置头文件的信息作为数据流输出
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );//设置获取的信息以文件流的形式返回,而不是直接输出. 
		curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 ); 
		$file_contents = curl_exec ( $ch ); 
		return $file_contents;
		curl_close ( $ch );
	}
	function curlPOST($url,$data){
		$header = array(
			'content-type:application/x-www-form-urlencoded',
		);
		$ch = curl_init (); 
		curl_setopt ( $ch, CURLOPT_URL, $url ); 
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt ($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
		curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 ); 
		curl_setopt ( $ch, CURLOPT_POST, 1 ); //启用POST提交 
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data); 
		$file_contents = curl_exec ( $ch ); 
		return $file_contents;
		curl_close ( $ch );
	}
	
	public function get_faq_category($app=0){
		$row = FaqCategory::find()->where('app='.$app)->all();
		return $row;
	}
	
	public function page_style($totalPages,$nowPage,$count){
		if($totalPages == 0 ) return '';
		//上一页
		$up_row  = $nowPage - 1;
		$up_page = $up_row > 0 ? '<a class="prev" href="javascript:" onclick="gotopage('.$up_row.')"><img src="/Public/Home/images/faq/01-2.png"></a>' : '<img src="/Public/Home/images/faq/01.png">';

		
		//下一页
        $down_row  = $nowPage + 1;
        $down_page = ($down_row <= $totalPages) ? '<a class="next" href="javascript:" onclick="gotopage('.$down_row.')"><img src="/Public/Home/images/faq/02.png"></a>' : '<img src="/Public/Home/images/faq/02-2.png">';

		return $up_page.$down_page;
	}

}
