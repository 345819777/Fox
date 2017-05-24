<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script src="//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script>
  <script src="/Public/Home/css/redirect.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= Html::encode($this->title) ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name=”renderer” content=”webkit|ie-comp|ie-stand”>

<link rel="stylesheet" href="/Public/Home/css/index.css" type="text/css" />
<link href="/Public/Home/css/user.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/goods_list.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/goods.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/news_list.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/news_info.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/fosbabys.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/skin/default.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width = device-width,initial-scale=1" />
<meta name="renderer" content="webkit">
<script src="/Public/Home/css/jQuery1.7.2.js" type="text/javascript"></script>
<script src="/Public/Home/css/jQuery.easing.1.3.js" type="text/javascript"></script>
<script src="/Public/Home/css/index.js" type="text/javascript"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69161119-3', 'auto');
  ga('send', 'pageview');

	$('<link href="http://www.foscam.com/default/favicon.ico" rel="SHORTCUT ICON" type="image/x-icon">').appendTo('head');
</script>
</head>

<body>
<?php $this->beginBody() ?>
<style type="text/css">
.top {background-color: #f3f3f3;height: 36px;line-height:36px;margin: 0 auto;max-width: 100%;min-width: 1160px;position: relative;}
.top_h {margin: 0 auto;width: 1160px;}
.top_right a{color:#515151; font-size:14px; padding-top:6px;}
.top_right ul li{float:left; margin-right:10px; padding-top:3px; color:#515151;}
.top_right .signico {float: left;margin: 6px 8px 0 0;width: 18px;height: 18px;background: url("/Public/Home/images/index_img/sign-in.png") no-repeat;
overflow: hidden;}
.top_right .language {float: left;margin: 6px 8px 0 0;width: 18px;height: 18px;background: url("/Public/Home/images/index_img/English.png") no-repeat;overflow: hidden;}
.index-search input[type="text"] {background: #ffffff none repeat scroll 0 0;border: 1px solid #d3d3d3;border-radius: 8px;color: #a8a8a8;font-size: 0.95em;margin: 0 0 1.5em;outline: medium none;padding: 3px 15px 3px 27px;width: 100px;}
.index-search input.searchs {background: #fff url("/Public/Home/images/index_img/01.png") no-repeat scroll 6px 6px;}
.top_right {height: 36px;float: right;margin-left: 30px;line-height: 30px;}
.index-search {width: 165px;float: right;display: inline;padding-top: 5px;}
.header .ul li .community a{ font-size:15px; color:#F00; text-decoration:none; display:block;width:105px; height:75px; line-height:70px;}
.header .ul li .community a:hover{ background-color:#e83827; color:#fff; }
</style>
<div class="top">
	<div class="top_h">
        <div class="top_right">
        		<div style="float:left; width:400px;">
                <ul style="float:right;">
                  <li class="loginfa">
					<?php
						$session = Yii::$app->session;
						$loginemail = $session->get('login_email');
						if($loginemail != ''){
					?>
                    <span class="signico">&nbsp;</span>
                    <a href="<?php echo Url::to(['index/loginout']);?>"><?php echo $loginemail;?></a>
   					<a style="display:none; padding-top:15px;" href="<?php echo Url::to(['index/loginout']);?>">Sign Out</a>
     				<?php }else{ ?>
                    <span class="signico">&nbsp;</span><a href="<?php echo Url::to(['index/signin']);?>">Sign in</a></li>
					<?php } ?>
                <li id="selectcountry"><span class="language">&nbsp;</span>
               	  <a href="#">
				  <?php
					//$cookies = Yii::$app->request->cookies;//注意此处是request
					//$language = $cookies->get('think_language', 'en');//设置默认值
				  ?>
                  <?php if($language == 'uk'){ ?>
                  UK
				  <?php }else if($language == 'ca'){ ?>
                  Canada
				  <?php }else if($language == 'au'){ ?>
                  Australia
                  <?php }else{ ?>
                  Global
                  <?php } ?>
				  
				  
				  
                  </a>
                </li>
                </ul>
                </div>
       
             <div class="index-search">
                   <form action="/search.html" method="get" id="cse-search-box" class="searcheee">
                <div class="log-input-left">
                  <input type="text" onblur="if (this.value == '') {this.value = 'Search:';}" onfocus="this.value = '';" value="Search" class="searchs" name="name">
                </div>	
                </form>
             </div>
   	  </div>
  </div>
</div>

<div class="header">
<div class="h">
<div class="logo">
	<?php if($language == 'uk'){ ?>
    <a href="/lang/uk.html">
	<?php }else if($language == 'ca'){ ?>
    <a href="/lang/ca.html">
	<?php }else if($language == 'au'){ ?>
    <a href="/lang/au.html">
	<?php }else{ ?>
    <a href="/">
	<?php } ?>
    <img src="/Public/Home/images/index_img/logo.png" alt="foscam" /></a></div>
<ul class="ul">
	<li><a href="/index/solutions.html">Solutions</a>
    	<ul id="second">
          <li><a href="/solution/home-security.html">Home Security</a></li>
          <li><a href="/solution/baby-monitor.html">Baby Security</a></li>
          <li><a href="/solution/business-security.html">Business Security</a></li>
          <li><a href="/solution/Cloud-Service.html">Cloud Service</a></li>
           
		   <!--demo start--> 
           
           <li><a href="#">Demo<span>〉</span></a>
            	<ul id="three" class="impor">
                	 <li><a href="http://c22793.myipcamera.org:20053/">FI9828P<font size="-1">(users, users)</font></a></li>
                     <!--<li><a href="http://ih3146.myfoscam.org:20052/">FI9900P<font size="-1">(users, users12)</font></a></li>-->
              
                	<!--<li><a href="http://ce3014.myfoscam.org:20054/">FI8910W <font size="-1">(user, user)</font></a></li>-->
<!--                    <li><a href="http://hd2095.myfoscam.org:20064/">FI9821W <font size="-1">(user, user)</font></a></li>-->
                    <!--<li><a href="http://hd2706.myfoscam.org:20052/">FI9826P <font size="-1">(user, user)</font></a></li>-->
                    <!--<li><a href="http://ft6321.myfoscam.org:20076/">FI9828W <font size="-1">(user, user)</font></a></li>-->
                     <!--<li><a href="http://gq4869.myfoscam.org:20070/">FosBaby <font size="-1">(user, babyp1)</font></a></li>-->
                   
                   
                </ul>
            </li>
           <!-- demo stop-->
       </ul>
    </li>
    <li><a href="/products.html" class="li">Products</a></li>
    <li><a href="https://www.myfoscam.com/" target="_blank">Cloud Service</a></li>
     <li>
	 <?php if($language == 'uk'){  ?>
     <a href="/where-to-buy/North_America.html">Distributors</a>
	 <?php }else if($language == 'au'){ ?>
     <a href="/where-to-buy/Oceania.html">Store</a>
     <?php }else{ ?>
     <a href="/where-to-buy/North_America.html">Store</a>
	 <?php } ?>
     </li>
    <li><a href="/faqs/index.html">Support</a>
    <ul id="second">
    		<li><a href="/faqs/index.html">FAQs</a></li>
            
            <li><a href="/video/index.html">Video Tutorial</a></li>
            
            <li><a href="/downloads/index.html">Download Center<span>〉</span></a>
            	<ul id="three" class="impor">
                	<li><a href="/downloads/index.html">Firmware Downloads</a></li>
                    <li><a href="/downloads/app_software.html">Software Tools</a></li>
                    <li><a href="/downloads/app_software.html">App For Mobile Phone</a></li>
                    <li><a href="/downloads/user_mannual.html">User Manual</a></li>
                    <li><a href="/downloads/quick_installation_guide.html">Quick Installation Guide</a></li>
                    <li><a href="/downloads/app_software.html">VMS Installation</a></li>
                    <li><a href="/Private/GuideFiles/Hunman Detection Card V1.0.pdf" target="_blank">Human Detection Card
</a></li>
            
                </ul>
            </li>
            <li><a href="/company/return-repair-policy.html">Return & Repair Policy</a></li>
            <li><a href="/call-center.html">Call Center</a> </li>
            <li><a href="/Open-Source-Compliance.html">Open Source Compliance</a> </li>
            <li><a href="/company/Privacy-Policy.html">Privacy Policy</a> </li>
        </ul>
    </li>
    <li><a href="/company/why-partner-with-foscam.html">Cooperate</a>
    	<ul id="second">
          <li><a href="/company/why-partner-with-foscam.html">Why cooperate with Foscam</a></li>
          <li><a href="/company/how-to-be-distributor.html">How to be distributor</a></li>
          <li><a href="/company/contact-as-partners.html">Contact us now</a></li>
       </ul>
    </li>
    <li><span class="community"><a href="http://community.foscam.com" target="_blank">Community</a></span></li>
</ul>
<!--
<div class="login">
 <if condition="$Think.cookie.loginEmail neq '' ">
	<a style="font-size:14px;width:143px; height:70px;line-height:70px; color:#6cccfd; position:absolute; overflow:hidden; text-align:left; cursor:pointer;">{$Think.cookie.loginEmail|substr=0,6}...</a>
    
   <a style="width:143px; display:block; height:70px;line-height:70px;font-size:14px; position:absolute; overflow:hidden;text-align:left; display:none;" href="/index/loginout">Sign Out</a>
     <else />
    <a href="/index/signin" class="logina">Sign In</a>
  </if>
</div>
-->	 
<div class="header_right">
    <div class="car">
    <?php if($language == 'uk'){  ?>
    	<img src="/Public/Home/images/index_img/ukcall.png" />
    <?php }else if($language == 'au'){ ?>
    	<img src="/Public/Home/images/index_img/aucall.png" />
    <?php }else if($language == 'ca'){ ?>
    	<img src="/Public/Home/images/index_img/cacall.png" />
    <?php }else{ ?>
    	<img src="/Public/Home/images/index_img/uscall.png" />
    <?php } ?>
    </div>
</div>
</div>
<ol class="ol">
		<ul class="solution">
            <li>
             <span><img src="/Public/Home/images/index_img/ezlink.gif" alt="" /></span>
            	<p><a href="/products/IP_Camera.html" style="color:red;">IP Camera</a></p>
                <a href="/products/Cube_camera.html">Cube Camera</a>
				<a href="/products/PT_camera.html">PT Camera</a>
				<a href="/products/PTZ_camera.html">PTZ Camera</a>
                <a href="/products/Bullet_camera.html">Bullet Camera</a>
                <a href="/products/Dome_camera.html">Dome Camera</a>                               
            </li>
            <li>
             <span><img src="/Public/Home/images/index_img/ezlink2.gif" alt="" /></span>
            	
            	<p><a href="/products/Baby_monitor.html" style="color:red;">Baby Monitor</a></p>
            	<a href="/product/43.html">Fosbaby</a>
                <a href="/product/44.html">Fosbaby P1</a>
            </li>
            
            <li>
             <span><img src="/Public/Home/images/index_img/ezlink3.gif" alt="" /></span>
            	<p><a href="/products/NVR.html" style="color:red;">Network Video Recorder</a></p>
            	<a href="/products/4_ch_NVR.html">4 Channel NVR</a>
                <a href="/products/9_ch_NVR.html">9 Channel NVR</a>
                 <a href="/products/NVR_Kit.html">NVR Kit</a>
            </li>
            <li style=" padding-left:35px; width:135px;">
             <span><img src="/Public/Home/images/index_img/ezlink4.gif" alt="" /></span>
            	<p><a href="/products/Accessories.html" style="color:red;">Accessories</a></p>
            	<a href="/products/Lens.html">Lens</a>
                <a href="/products/Bracket.html">Mounting Bracket</a>
                <a href="/products/Antenna.html">Antenna</a>
                <a href="/products/Power_Supply.html">Power Adapter</a>
                <a href="/products/Extension_Cord.html">Extension Cord</a>
                <a href="/products/Waterproof_Junction_Box.html">Waterproof Junction Box</a>
            </li>
            <li style="width:250px; height:234px;float:right; display:inline; border-left:1px solid #b5b5b5;">
            	<span style="height:93px; text-align:center;"><a href="https://www.myfoscam.com/" target="_blank"><img src="/Public/Home/images/index_img/yunlogo.gif" alt="" /></a></span>
                <a href="https://www.myfoscam.com/" style="font-size:18px; color:#393939; text-align:center; height:35px; line-height:35px;" target="_blank">Foscam Cloud</a>
                <a href="https://www.myfoscam.com/" target="_blank" style="width:119px; height:35px; line-height:35px; background:url(/Public/Home/images/index_img/turn_right.gif) no-repeat; margin:0 auto; margin-top:50px; padding-left:20px; color:#fff;">
                	Learn More
                </a>
            </li>
           </ul>
   </ol>
 </div>
<!--header完-->
	<div class="banner" style="height:732px;  overflow:hidden;">
	<div style="  margin-top: 300px;position: absolute;z-index: 1;right: 520px;top: 400px;" id="turn">
		<i alt="0"></i>
		<i alt="1"></i>
		<i alt="2"></i>
		<i alt="3"></i>
		<i alt="4"></i>
        <i alt="5"></i>
        <!--<i alt="6"></i>-->
        <!--<i alt="7"></i>-->
    
	</div>
		<ul style="position:relative; top:-732px;" id="banner_turn">  
            
            <a href="/FI9961EP.html" style="cursor:pointer;">
			<li class="banner_1" style="background:url(/Public/Home/images/banner/1.jpg) no-repeat center;background-size:cover;">
			<div>
			</div>
			</li></a>
            <!--<a href="/R2.html" style="cursor:pointer;">
			<li class="banner_1" style="background:url(/Public/Home/images/banner/R2-banner00.jpg) no-repeat center;background-size:cover;">
            <div>
			</div>
			</li></a>-->
			
            <a href="/R4.html" style="cursor:pointer;" target="_blank">
            <li class="banner_1" style="background:url(/Public/Home/images/banner/R4-banner.jpg) no-repeat center;background-size:cover;">
            <div>
			</div>
			</li></a>
            

            
           <!--<a href="/solution/motion-detection.html" style="cursor:pointer;">
			<li class="banner_1" style="background:url(/Public/Home/images/banner/2.jpg) no-repeat center;background-size:cover;">
			<div>
			</div>
			</li></a>-->
            
            <a href="/FN3104W_B4.html" style="cursor:pointer;">
			<li class="banner_1" style="background:url(/Public/Home/images/banner/3.jpg) no-repeat center;background-size:cover;">
			<div>
			</div>
			</li></a>
           
            
            <!--<a style="cursor:pointer;" href="/topic/index.html" target="_blank">
			<li class="banner_1" style="background:url(Public/Home/images/index_img/topic6.jpg) no-repeat center;background-size:cover;">
			</li>
			</a>-->
            
            
              
           
            <!--<a style="cursor:pointer;" href="http://www.foscammall.com/" target="_blank">
			<li class="banner_1" style="background:url(Public/home/images/index_img/foscommall.jpg) no-repeat center;background-size:cover;">
			</li>
			</a>
            <a style="cursor:pointer;" href="/newsinfo/12.html" target="_blank">
			<li class="banner_1" style="background:url(Public/home/images/index_img/cbit.jpg) no-repeat center;background-size:cover;">
			</li>
			</a>-->
            <a style="cursor:pointer;" href="https://www.myfoscam.com" target="_blank">
			<li class="banner_1" style="background:url(Public/Home/images/banner/5.jpg) no-repeat center;background-size:cover; position:relative;">
            <style>.fcs{width: 427px;
  height: 304px;
  position: absolute;
  left: 255px;
  top: 152px;}.fcs ul li, .fcs p{color: #fff;
  font-size: 20px;} .fcs p{ margin-top:25px;}.fcs p:first-child{ margin-bottom:25px;font-size:30px; color:#fff582;}</style>
				<div class="fcs">
                	<p>Foscam Cloud Service 
subscriber has reached over 
10000 within 4 months since 
its release!</p>
<ul>
	<li>* Secure Amazon server</li>
    <li>* Mature Technology</li>
    <li>* Radical 40% Price Reduction</li>
    <li>* Unlimited Storage Capacity</li>
</ul>
<p>to Ensure a Better Experience</p>
                </div>
			</li>
			</a>
            
            <a style="cursor:pointer;" href="/Cooperate/FAQinfo/id/1.html" target="_blank">
			<li class="banner_1" style="background:url(Public/Home/images/banner/6.jpg) no-repeat center;background-size:cover;">
			</li>
			</a>
             
             <a style="cursor:pointer;" href="https://www.facebook.com/ipcameraprovider/" target="_blank">
			<li class="banner_1" style="background:url(Public/Home/images/banner/7.jpg) no-repeat center;background-size:cover;">

			</li></a>
            
            
            
            
			
			
			
		</ul>

	</div>
	<!--banner完-->
  <!--  <link href="/Public/Home/css/index_bottom.css" type="text/css" rel="stylesheet" />
<div class="index_bottom">
	<ul>
    	<li><span>R4</span><span>4.0MP Ultra-HD</span><a href="/R4.html">More >></a></li>
        <li><span>Reviews</span><span>on Foscam</span><a href="">More >></a></li>
        <li><span>Exhibitions</span><a href="">More >></a></li>
    </ul>
</div>
-->



<input type="hidden" id="livechat-email" name="livechat-email" value="" />
<div class="foot">
    <div class="footer" style="position:relative;">
        <p style="margin-left:0px; position:relative;float:left;">
        	<a href="/company/about-us.html">About us  | </a>
            <a href="/company/contact-us.html">Contact us  | </a>
            <a href="/sitemap.html">Sitemap | </a>
            <a href="/news/index.html">News</a>
            <a style="padding-top:10px; display:block;">Copyright © 2007-2017 Foscam All Rights Reserved.</a>
        </p>
		
		
      <div style="width:300px;position:relative;float:left;margin-left:360px;margin-top:0px;">
          <div class="foot_ico">
       		<p>Connect with us</p> 
			
           <img src="/Public/Home/images/index_img/foot_ico.png" border="0" usemap="#Map2" />
             <map name="Map2" id="Map2">
               <area shape="circle" coords="113,14,14" href="https://twitter.com/FoscamGlobal" />
               <area shape="circle" coords="80,15,14" href="http://www.youtube.com/channel/UCzQtu16w3pFTWhcukq7w2UQ" />
               <area shape="circle" coords="47,15,13" href="http://www.linkedin.com/company/3557179?trk=vsrp_companies_res_name&amp;trkInfo=VSRPsearchId%3A1969258491387449001276%2CVSRPtargetId%3A3557179%2CVSRPcmpt%3Aprimary" />
               <area shape="circle" coords="15,15,13" href="http://www.facebook.com/ipcameraprovider" />
             </map>
        </div>

        </div>
        <style>
		.ebs img{width:50px; height:69px;}
		</style>
		<!--电子商务标志-->
		<div style="position:absolute; right:0; top:25px;" class="ebs">
       <script id='ebsgovicon' src='http://szcert.ebs.org.cn/govicon.js?id=f023172f-b514-4dbe-aa5a-cd47e0cf48a7&width=100&height=137&type=1' type='text/javascript' charset='utf-8'></script>
       </div>     
     <!--cnzz-->
    <script type="text/javascript">
    var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_4131021'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D4131021%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <!--cnzz-->

    </div>
</div>

<div id="yces" style="width:100%; display:none;">
    <div class="countryAll">
       <ul>
            <li><a href="/"><span>Global</span></a></li>
            <li><a href="/lang/uk.html"><span>UK</span></a></li>
            <li><a href="/lang/au.html"><span>Australia</span></a></li>
            <li><a href="/lang/ca.html"><span>Canada<i>(English)</i></span></a></li>

       </ul>

    </div>   
</div>

<script type="text/javascript" src="/Public/Home/css/jebox.js?ver=2.2"></script>
<script type="text/javascript">
JED("#selectcountry").bind("click",function(){
	jeBox.open({
		title:"Please select your country or region ",
		area:["500px","240px"],
		content:JED("#yces")[0]
	});
})

//console.log(document.documentElement.clientWidth)
</script>



<!--support-->
<script type="text/javascript">
  (function() {
    var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
    se.src = '//storage.googleapis.com/code.snapengage.com/js/7b4271f4-e781-4dc7-92a3-c28182903ee2.js';
    var done = false;
    se.onload = se.onreadystatechange = function() {
      if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
        done = true;
        /* Place your SnapEngage JS API code below */
        /* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
      }
    };
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
  })();
</script>

<!--support-->
</body>
</html>
<script>
$(function(){
	$username=getCookie('loginEmail');
	$('#livechat-email').val($username);
});
$('.country select').change(function(){
	var url=$(this).val();
	if(url==''){
	return false;
	}else{
	window.location.href=url; 
	}
})

//js读取浏览器的cookie
function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}

</script>

<?php $this->endBody() ?>
</body>
</html>



<?php $this->endPage() ?>


