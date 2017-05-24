<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= Html::encode($this->title) ?></title>

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
	</script><script>!function(n){var e=n.document,t=e.documentElement,i=1000,d=i/100,o="orientationchange"in n?"orientationchange":"resize",a=function(){var n=t.clientWidth||320;n>1000&&(n=1000),t.style.fontSize=n/d+"px"};e.addEventListener&&(n.addEventListener(o,a,!1),e.addEventListener("DOMContentLoaded",a,!1))}(window);</script></head>
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

<div class="_container">
        <div style="font-size:0.4rem; background:#FFF; color:#51585b; text-align:center;padding-top: 5%; font-weight:bold;">Get Help with our app, services and products.</div>
        <section id="index-category" class="clearFa">
		<?php foreach($faqcate as $val){ ?>
        <a href='<?php echo Url::to(['appfaq/list','hideTit'=>$hideTit,'id'=>$val->id]);?>'>
        <img src="<?php echo $val->icon;?>" alt="" class="lazy" data-original="">
        <em><?php echo $val->title;?></em>
        </a>
		<?php } ?>
        </section>
    </div>


<div style="background:#FFF; margin-top:0.3rem;">
    <div class="list-box" style="clear:both; overflow: hidden;">
        <div class="list-title"><b>Key Questions</b></div>
        <ul class="model-list">
			<?php foreach($faqnew as $val){ ?>
            <li><div class="info"><a href='<?php echo Url::to(['appfaq/view','hideTit'=>$hideTit,'id'=>$val->id]);?>'><?php echo $val->title;?></a></div><p class="watch"><i class="g-ico"></i></p></li>
            <?php } ?>
           
        </ul>
    </div>
</div>



<!--
<div class="btmfixed">
 CONTACT US
</div>
-->
</body>
</html>
