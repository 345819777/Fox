<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= Html::encode($this->title) ?></title>
<meta name="description" content="Default Description" />
<meta name="keywords" content="Magento, Varien, E-commerce" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
<link rel="stylesheet" type="text/css" href="/Public/App/css/common.css" media="all" />
<script type="text/javascript" src="/Public/App/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/App/js/ma.jq.slide.js"></script>
<script type="text/javascript" src="/Public/App/js/ma.nivo.js"></script>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script><script type='text/javascript'>
window.__lo_site_id = 64166;

	(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	  })();
	</script><script>!function(n){var e=n.document,t=e.documentElement,i=1000,d=i/100,o="orientationchange"in n?"orientationchange":"resize",a=function(){var n=t.clientWidth||320;n>1000&&(n=1000),t.style.fontSize=n/d+"px"};e.addEventListener&&(n.addEventListener(o,a,!1),e.addEventListener("DOMContentLoaded",a,!1))}(window);</script>
<script type="text/javascript"> 
$(function(){
		var id = $("#id").val();
    $("#a").click(function(){ 
		 $.ajax({
				url: '<?php echo Url::to(['appfaq/helpful']);?>',
				dataType: 'json',
				type: 'GET',
				data: {
					'id': id
				},
				success: function (json) {
					$(".helpful").html('<div class="helpful_message">Got it. Thanks for the feedback.</div>');
				},
				error: function () {
					alert("Error");
				}
			})
        
    }); 
    $("#b").click(function(){ 
        	$.ajax({
				url: '<?php echo Url::to(['appfaq/nohelpful']);?>',
				dataType: 'json',
				type: 'GET',
				data: {
					'id': id
				},
				success: function (json) {
					$(".helpful").html('<div class="helpful_message">Got it. Thanks for the feedback.</div>');
				},
				error: function () {
					alert("Error");
				}
			})
    }); 
}); 
</script>     
<style type="text/css">
.nav_back a{color:#FFF;}
</style>
</head>
<body>
<header id="mobile-header" style="width:100%;">
	<if condition="$hideTit neq 1">
    <!--<div class="hd_top">
        <a class="home" onclick="history.go(-1);">
        	<img alt="Foscam" id="logoPic" src="/Public/App/images/topnav_return_nor@2x.png">
        	<i></i>
        </a>
        <h1 class="caption" id="recent-btn">FAQ</h1>
    </div>-->
    </if>
    <div class="hd_bottom" style="display: block;">
	<?php if($hideTit != 1){ ?>
    	<div class="nav_back" style="clear:both;font-size:0.4rem;color:#FFF;"><a onclick="history.go(-1);">&lt;&lt;Back</a></div>
    <?php } ?>
	<div style="text-align:center; color:#FFF;padding-top:20px; padding-bottom:10px; font-size: 0.5rem;">Welcome to Foscam Support</div>
		<div class="search_box">
			<form action="<?php echo Url::to(['appfaq/search']);?>" method="get">
            	<input type="hidden" name="hideTit" value="<?php echo $hideTit;?>" />
            	<input type="text" class="s_txt" placeholder="Search Support..." id="searchContent" name="q">
            	<input type="submit" class="s_btn" id="doSearch" value="">
                <i class="clear_btn"></i>
            </form>
		</div>
	</div>
</header>



<input type="hidden" value="<?php echo $row->id; ?>" name="id" id="id">
<div style="padding:0 0.5rem;">
   	<div class="view-tile"><?php echo $row->title; ?></div>
    <div class="view-content">
	<?php echo $row->content; ?>
   </div>
   <div class="helpful">
   		<p>Was this article helpful for you?</p>
        <p style="clear:both; padding-top:.5rem;">
        <a href="javascript:"><span style="width:3rem;border:1px solid #8ade77; padding:.1rem .7rem .1rem .7rem;" id="a">Yes</span></a>
        <a href="javascript:"><span style="border:1px solid #F00; padding:.1rem .7rem .1rem .7rem;" id="b"> &nbsp;No&nbsp; </span></a>
        </p>
   </div>
</div>

<!--
<div class="btmfixed">
 CONTACT US
</div>
-->

</body>
</html>
