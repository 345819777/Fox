<?php
    if(C('LAYOUT_ON')) {
        echo '{__NOLAYOUT__}';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Public/Home/css/index.css" type="text/css" />
<link href="/Public/Home/css/user.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/goods_list.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/goods.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/news_list.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/news_info.css" type="text/css" rel="stylesheet" />
<script src="/Public/Home/css/jQuery1.7.2.js" type="text/javascript"></script>
<script src="/Public/Home/css/index.js" type="text/javascript"></script>
<meta name="viewport" content="width = device-width,initial-scale=1" />
<meta name="renderer" content="webkit">
<title>Jump tip</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}

	#tpl_main li{float:left; list-style-type:none; width:297px; display:block; margin-top:10px;}
	#tpl_main li a{  color:#006fbc;}
	#tpl_main a{ text-decoration:none;}
	#tpl_main a:hover{ text-decoration:underline;}
body,td,th { font-family: "微软雅黑"; }
</style>
</head>
<body>



<div class="system-message">
<present name="message"><!--登录成功,成功注册-->
<script type='text/javascript' src='http://www3.365webcall.com/IMMe1.aspx?settings=mw7mP0XNNNmmwIbz3ANm0XIPz3ANNXX0Nz3A66mmww&LL=1'></script>
<!--support-->

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
</style>
<div class="top">
	<div class="top_h">
        <div class="top_right">
        		<div style="float:left; width:400px;">
                <ul style="float:right;">
                  <li class="loginfa">
                	<if condition="$Think.cookie.loginEmail neq '' ">
                    <span class="signico">&nbsp;</span>
                    <a href="/index/loginout">{$Think.cookie.loginEmail|substr=0,106}</a>
   					<a style="display:none; padding-top:15px;" href="/index/loginout">Sign Out</a>
     				<else />
                  <span class="signico">&nbsp;</span><a href="/index/signin">Sign in</a></li>
                    </if>
                <li><span class="language">&nbsp;</span>
               	  <a href="javasrcipt:">Enlish</a>
                </li>
                </ul>
                </div>
       
             <div class="index-search">
                   <form action="/search" method="get" id="cse-search-box" class="searcheee">
                <div class="log-input-left">
                  <input type="text" onblur="if (this.value == '') {this.value = 'Search:';}" onfocus="this.value = '';" value="Search" class="searchs" name="name">
                </div>	
                </form>
             </div>
   	  </div>
  </div>
</div>
<div class="header" style="border:1px solid #ccc;">
<div class="h">
<div class="logo"><a href="http://www.foscam.com"><img src="/Public/Home/images/index_img/logo.png" alt="foscam"/></a></div>
<ul class="ul">
	<li><a href="/solutions.html">Solutions</a>
    	<ul id="second">
          <li><a href="/solution/home-security.html">Home Security</a></li>
          <li><a href="/solution/baby-monitor.html">Baby Security</a></li>
          <li><a href="/solution/business-security.html">Business Security</a></li>
       </ul>
    </li>
    <li><a href="/products.html" class="li">Products</a></li>
    <li><a href="https://www.myfoscam.com/" target="_blank">Cloud Service</a></li>
     <li><a href="/where-to-buy/North_America.html">Store</a></li>
    <li><a href="/faq.html">Support</a>
    <ul id="second">
    		<li><a href="/faq.html">FAQs</a></li>
        	
            <li><a href="/download-center/video-tutorial.html">Video Tutorial</a></li>
            
            <li><a href="/download-center/firmware-downloads.html">Download Center<span>〉</span></a>
            	<ul id="three" class="impor">
                	<li><a href="/download-center/firmware-downloads.html">Firmware Downloads</a></li>
                    <li><a href="/download-center/software-tools.html">Software Tools</a></li>
                    <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
                    <li><a href="/download-center/user-manual.html">User Manual</a></li>
            <li><a href="/download-center/quick-installation-guide.html">Quick Installation Guide</a></li>
             <li><a href="/download-center/vms.html">VMS Installation</a></li>
                </ul>
            </li>
            <li><a href="/company/return-repair-policy.html">Return & Repair Policy</a></li>
            <li><a href="/call-center.html">Call Center</a> </li>
        </ul>
    </li>
    <li><a href="/company/why-partner-with-foscam.html">Cooperate</a>
    	<ul id="second">
          <li><a href="/company/why-partner-with-foscam.html">Why cooperate with Foscam</a></li>
          <li><a href="/company/how-to-be-distributor.html">How to be Distributor</a></li>
          <li><a href="/company/contact-as-partners.html">Contact us now</a></li>
       </ul>
    </li>
    <li><a href="http://bbs.foscam.com" target="_blank">Community</a></li>
</ul>


<!--<div class="login_click">
	<div style=" display:block; float:right; display:inline; height:30px;font-size:14px; cursor: pointer; width:30px; background:url(/Public/Home/images/index_img/close.png) no-repeat center; background-size:cover; margin-top:5px; margin-right:5px;"; class="close"></div>
    <form action="/index/login" method="post" >
    	<p>E-mail address:</p>
        <input type="text" size="25"  class="email" name="Email" style="height:26px; line-height:26px;"/>
     <p>Password</p>
        <input type="password" size="15" class="passwd" name="password" value="" placeholder="" style="height:26px; line-height:26px; width:218px;" />
   <p id="apiDesc" style="font-size:18px; color:red; position:absolute; top:135px;"></p>
        <input type="checkbox" style="width:16px; height:16px;" name="remember"/><label>Remember me</label>
        <input type="submit" value="login" style="opacity:1;"class="submit" id="submit"/>
         <p><span style="width:158px;">login with an old account</span><a href="/index/ologin" style="position: absolute;
  top: 182px;
  left: 302px; color:#e83426;">Click here.</a></p>
        <a href="https://www.myfoscam.com" style="position:relative; top:-2px;">Create account</a>&nbsp;&nbsp;
        <a href="https://www.myfoscam.com/user/findpass1" style="position: absolute;
  top: 215px;
  left: 262px;">Forgot password?</a>
    </form>
</div>-->


<div class="header_right">
    <div class="car">
    	<img src="/Public/Home/images/index_img/uscall.png" />
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
            	<a href="/products/info/id/44.html">Fosbaby</a>
                <a href="/Fosbaby_P1.html">Fosbaby P1</a>
            </li>
            
            <li>
             <span><img src="/Public/Home/images/index_img/ezlink3.gif" alt="" /></span>
            	<p><a href="/products/NVR.html" style="color:red;">Network Video Recorder</a></p>
            	<a href="/products/4_ch_NVR.html">4 Channel NVR</a>
                <a href="/products/9_ch_NVR.html">9 Channel NVR</a>
            </li>
            <li style=" padding-left:35px; width:135px;">
             <span><img src="/Public/Home/images/index_img/ezlink4.gif" alt="" /></span>
            	<p><a href="/products/Accessories.html" style="color:red;">Accessories</a></p>
            	<a href="/products/Lens.html">Lens</a>
                <a href="/products/Bracket.html">Mounting Bracket</a>
                <a href="/products/Antenna.html">Antenna</a>
                <a href="/products/Power_Supply.html">Power Adapter</a>
                <a href="/products/Extension_Cord.html">Extension cord</a>
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
		<!--头部-->
        
		<div style="width:1020px; height:335px; margin:0 auto; border:1px solid #bfbfbf; margin-top:100px; margin-bottom:100px;" id="tpl_main">
        	<p style="text-align:center; font-size:40px;margin-top:20px;margin-bottom:20px;"><?php echo($message); ?></p>
            <hr />
            <p><a href="/download-center/user-manual.html" style="background-color:red; height:38px; width:256px; border-radius:38px; line-height:38px; text-align:center; color:#fff; display:block; margin:0 auto;margin-top:35px;">Go to Download Center</a></p>
            <ul style="width:900px; margin:0 auto;margin-top:30px;">
            	<li><a href="/download-center/user-manual.html">Download User Manual </a></li>
                <li><a href="/download-center/quick-installation-guide.html">Download Quick Installation Guide</a></li>
                <li><a href="/download-center/firmware-downloads.html">Download Firmware</a></li>
                <li><a href="/download-center/software-tools.html">Download Software</a></li>
                <li><a href="/download-center/app-for-mobile-phone.html">Download App for Mobile Phone</a></li>
                <li><a href="/download-center/user-manual-for-app.html">Download App User Manual</a></li>
            </ul>
        </div>
        
		<!--底部-->
		
<div class="foot">
    <div class="footer">
        <p style="margin-left:0px; position:relative;float:left;">
        	<a href="/company/about-us">About us  | </a>
            <a href="/company/contact-us">Contact us  | </a>
            <a href="/sitemap">Sitemap | </a>
            <a href="/news">News | </a>
			<a href="http://foscam.us/forum/">Forum</a>
            <a style="padding-top:10px; display:block;">Copyright © 2007-2015 Foscam All Rights Reserved.</a>
        </p>
		
		
      <div style="width:300px;position:relative;float:left;margin-left:360px;margin-top:0px;">
          <div class="foot_ico">
       		<p>Connect with us</p> 
			<p>amazonus@foscam.com</p>
           <img src="/Public/Home/images/index_img/foot_ico.png" border="0" usemap="#Map2" />
             <map name="Map2" id="Map2">
               <area shape="circle" coords="113,14,14" href="https://twitter.com/FoscamGlobal" />
               <area shape="circle" coords="80,15,14" href="http://www.youtube.com/channel/UCzQtu16w3pFTWhcukq7w2UQ" />
               <area shape="circle" coords="47,15,13" href="http://www.linkedin.com/company/3557179?trk=vsrp_companies_res_name&amp;trkInfo=VSRPsearchId%3A1969258491387449001276%2CVSRPtargetId%3A3557179%2CVSRPcmpt%3Aprimary" />
               <area shape="circle" coords="15,15,13" href="http://www.facebook.com/ipcameraprovider" />
             </map>
        </div>

        </div>
 <!--cnzz-->
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_4131021'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D4131021%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script>
<!--cnzz-->
    </div>
</div>
</body>
</html>
<script>
$('.country select').change(function(){
	var url=$(this).val();
	if(url==''){
	return false;
	}else{
	window.location.href=url; 
	}
})
</script>

        
<else/>
<div class="header" style="border:1px solid #ccc;">
<div class="h">
<div class="logo"><a href="http://www.foscam.com"><img src="/Public/Home/images/index_img/logo.png" alt="foscam" /></a></div>
<ul class="ul">
	<li><a href="/solutions.html">Solutions</a>
    	<ul id="second">
          <li><a href="/solution/home-security.html">Home Security</a></li>
          <li><a href="/solution/baby-monitor.html">Baby Security</a></li>
          <li><a href="/solution/business-security.html">Business Security</a></li>
       </ul>
    </li>
    <li><a href="/products.html" class="li">Products</a></li>
    <li><a href="https://www.myfoscam.com/" target="_blank">Cloud Service</a></li>
     <li><a href="/where-to-buy/North_America.html">Store</a></li>
    <li><a href="/faq.html">Support</a>
    <ul id="second">
    		<li><a href="/faq.html">FAQs</a></li>
        	
            <li><a href="/download-center/video-tutorial.html">Video Tutorial</a></li>
            
            <li><a href="/download-center/firmware-downloads.html">Download Center<span>〉</span></a>
            	<ul id="three" class="impor">
                	<li><a href="/download-center/firmware-downloads.html">Firmware Downloads</a></li>
                    <li><a href="/download-center/software-tools.html">Software Tools</a></li>
                    <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
                    <li><a href="/download-center/user-manual.html">User Manual</a></li>
            <li><a href="/download-center/quick-installation-guide.html">Quick Installation Guide</a></li>
                <li><a href="/download-center/vms.html">VMS Installation</a></li>
                </ul>
            </li>
            <li><a href="/company/return-repair-policy.html">Return & Repair Policy</a></li>
            <li><a href="/call-center.html">Call Center</a> </li>
        </ul>
    </li>
    <li><a href="/company/why-partner-with-foscam.html">Cooperate</a>
    	<ul id="second">
          <li><a href="/company/why-partner-with-foscam.html">Why cooperate with Foscam</a></li>
          <li><a href="/company/how-to-be-distributor.html">How to be Distributor</a></li>
          <li><a href="/company/contact-as-partners.html">Contact us now</a></li>
       </ul>
    </li>
</ul>
<div class="login">

 <if condition="$Think.cookie.loginEmail neq '' ">
	<a style="font-size:14px;width:143px; height:70px;line-height:70px; color:#6cccfd; position:absolute; overflow:hidden; text-align:center; cursor:pointer;">{$Think.cookie.loginEmail}</a>
    
   <a style="width:143px; display:block; height:70px;line-height:70px;font-size:14px; position:absolute; overflow:hidden;text-align:center; display:none;" href="/index/loginout">Sign Out</a>
     <else />
    <a  href="/index/signin" style="cursor:pointer; color:gray;" class="logina">Sign In
    </a>
  </if>
</div>
<div class="header_right">
    <div class="car">
    	<img src="/Public/Home/images/index_img/uscall.png" />
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
            	<a href="/products/info/id/44.html">Fosbaby</a>
                <a href="/Fosbaby_P1.html">Fosbaby P1</a>
            </li>
            
            <li>
             <span><img src="/Public/Home/images/index_img/ezlink3.gif" alt="" /></span>
            	<p><a href="/products/NVR.html" style="color:red;">Network Video Recorder</a></p>
            	<a href="/products/4_ch_NVR.html">4 Channel NVR</a>
                <a href="/products/9_ch_NVR.html">9 Channel NVR</a>
            </li>
            <li style=" padding-left:35px; width:135px;">
             <span><img src="/Public/Home/images/index_img/ezlink4.gif" alt="" /></span>
            	<p><a href="/products/Accessories.html" style="color:red;">Accessories</a></p>
            	<a href="/products/Lens.html">Lens</a>
                <a href="/products/Bracket.html">Mounting Bracket</a>
                <a href="/products/Antenna.html">Antenna</a>
                <a href="/products/Power_Supply.html">Power Adapter</a>
                <a href="/products/Extension_Cord.html">Extension cord</a>
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
<!--头部-->

		<!--登录失败,请先登录-->
        <div style="width:1020px; height:200px; margin:0 auto; border:1px solid #bfbfbf; margin-top:100px; margin-bottom:100px;">
        	
        	<p style="text-align:center; font-size:35px;margin:0 auto;margin-top:100px;">Please use the correct email or password to log in.</p><!--登录失败,请先登录-->
       
        </div>
<!--底部-->
		
<div class="foot">
    <div class="footer">
        <p style="margin-left:0px; position:relative;float:left;">
        	<a href="/company/about-us">About us  | </a>
            <a href="/company/contact-us">Contact us  | </a>
            <a href="/sitemap">Sitemap | </a>
            <a href="/news">News</a>
            <a style="padding-top:10px; display:block;">Copyright © 2007-2015 Foscam All Rights Reserved.</a>
        </p>
		
		
      <div style="width:300px;position:relative;float:left;margin-left:360px;margin-top:0px;">
<div class="foot_ico">
       		<p>Connect with us</p> 
			<p>amazonus@foscam.com</p>
           <img src="/Public/Home/images/index_img/foot_ico.png" border="0" usemap="#Map2" />
             <map name="Map2" id="Map2">
               <area shape="circle" coords="113,14,14" href="https://twitter.com/FoscamGlobal" />
               <area shape="circle" coords="80,15,14" href="http://www.youtube.com/channel/UCzQtu16w3pFTWhcukq7w2UQ" />
               <area shape="circle" coords="47,15,13" href="http://www.linkedin.com/company/3557179?trk=vsrp_companies_res_name&amp;trkInfo=VSRPsearchId%3A1969258491387449001276%2CVSRPtargetId%3A3557179%2CVSRPcmpt%3Aprimary" />
               <area shape="circle" coords="15,15,13" href="http://www.facebook.com/ipcameraprovider" />
             </map>
        </div>
        </div>
       
<!--cnzz-->
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_4131021'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D4131021%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script>
<!--cnzz-->
    </div>
</div>
</body>
</html>
<script>
$('.country select').change(function(){
	var url=$(this).val();
	if(url==''){
	return false;
	}else{
	window.location.href=url; 
	}
})
$('.login_click').css('display','none');
</script>
</present>
	
		
        <p class="detail" style="display:none;"></p><!--未改-->
        <p class="jump" style="display:none;" >
        Page automatic <a id="href" href="<?php echo($jumpUrl); ?>">jump</a> Waiting time： <b id="wait"><?php echo($waitSecond); ?></b>
        </p>
	<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>	

