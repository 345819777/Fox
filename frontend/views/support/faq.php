<?php
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foscam FAQ</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
<link rel="stylesheet" type="text/css" href="/Public/Home/mobile/css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/goods_list.css" media="all" />
</head>

<body>
<header id="mobile-header">
    <div class="nav nav-left">
        <div class="item logo">
            <img alt="Foscam" id="logoPic" src="/Public/Home/mobile/css/logo.png">
        </div>
    </div>
    <div class="nav nav-right">
   
    </div>
</header>
 	<div class="indexBanner_img">
		<img  src="/Public/Home/mobile/css/enbanner.jpg" />
	</div>
    <div class="main-home col1-layout">
      <div class="faqlist"> 
    	<ul>
		<?php foreach($row as $val){ ?>
            <li class="product-list-h"><a href="/Support/faqdetail/id/<?php echo $val->id;?>.html" class="model"><?php echo $val->title;?></a></li>           
		<?php } ?>
        	
        </ul>
    </div>
    <div class="page">
		<div style="margin:0 auto; width:220px;">
      		<?php
		echo LinkPager::widget([
		  'pagination' => $pages,
		  'maxButtonCount' => 5, 
		]);
		?>
		</div>
    </div>
</body>
</html>