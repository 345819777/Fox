<style>
@keyframes title{
	0%{transform:scale(2,2);top:0px;}
	100%{transform:scale(1,1);top:0px;}
}
@-webkit-keyframes title{
	0%{transform:scale(2,2);top:0px;}
	100%{transform:scale(1,1);top:0px;}
}
@-moz-keyframes title{
	0%{transform:scale(2,2);top:0px;}
	100%{transform:scale(1,1);top:0px;}
}
@-o-keyframes title{
	0%{transform:scale(2,2);top:0px;}
	100%{transform:scale(1,1);top:0px;}
}
body, ul, li, p, h1, h2 {
	margin: 0;
	padding: 0;
	font-weight:100;
}
body {
	font-family:open_sansregular,Helvetica;
	color: #575656;
}
p {
	font-family:open_sansregular,Helvetica;
}
img {
	border: none;
}
li {
	list-style: none;
}

/*公共样式*/
.comWith {
	width: 1160px;
	margin: 0 auto;
	position: relative;
}
h1 {
	font-size: 57px;
	color: #2c2c2c;
}
h2 {
	font-size: 30px;
	color: #2d2e2e;
}
.w-txt h1 span {
	font-size: 29px;
	position: relative;
	top: -25px;
	left: 5px;
}
.wrap-one {
	height: 900px;
	background-color: #e1e2e1;
	overflow: hidden;
}
.wrap-one .w-txt {
	width: 395px;
	height: 160px;
	margin: 0 auto;
	padding-top: 48px;
	text-align: center;
}
.wrap-one .w-txt .border {
	font-size: 30px;
	width: 108px;
	height: 37px;
	margin: 0 auto;
	border: 1px solid black;
	text-align: center;
}
.wrap-one .w-txt p {
	font-size: 22px;
	margin: 5px 0 35px 0;
}
.wrap-one .w-txt p img {
	position: absolute;
	left: 225px;
	top: 155px;
	z-index: 1;
	display: none;
}
.wrap-one .w-txt p:last-child {
	position: absolute;
	left: 655px;
	top: 183px;
	font-size: 32px;
}
.wrap-one .animate img {
	display: block;
	width: 930px;
	position: absolute;
	left: 50%;
	margin-left: -465px;
	top: 578px;
	opacity: 0;
}
.wrap-two {
	height: 304px;
}
.wrap-two img {
	margin-top: 45px;
}
.wrap-two .w-txt {
	width: 709px;
	height: 273px;
	text-align: center;
	margin: 55px auto 0;
}
.wrap-two p {
	font-size: 15px;
	color: #212121;
	margin-top: 25px;
	line-height: 25px;
}
.wrap-three {
	height: 630px;
	overflow: hidden;
}
.wrap-three .animate img {
	position: absolute;
	left: -666px;/*left:-261px;
	width:145%;*/
}

.warp-ten{
	background-color:#EEEEEE;
	    padding-top: 20px;
	padding-bottom:100px;
}
.warp-ten .w-txt{
    width: 667px;
    height: 180px;
    margin: 55px auto 0;
    text-align: center;
}
.warp-ten img{    
	text-align:center;
}

.warp-ten .w-txt h2{
	font-size:30px;
	color:#2d2e2e;
}
.warp-ten .w-txt p{
	    margin-top: 25px;}

.warp-eleven{
	
	    width: 100%;
    height: 627px;

 padding-bottom:100px;
}
.warp-eleven .w-txt{
    width: 627px;
    height: 180px;
    margin: 75px auto 0;
    text-align: center;
}
.warp-eleven img{    
	padding-left:40px;

    
}

.warp-eleven .w-txt h2{
	font-size:30px;
	color:#2d2e2e;
}

.warp-eleven .w-txt p{
	    margin-top: 25px;}

.warp-twelve{
	width: 100%;
    height: 737px;
 	padding-bottom:100px;
	background-color: #EEEEEE;
}
.warp-twelve .w-txt{
	width: 737px;
    height: 180px;
    margin: 55px auto 0;
    text-align: center;
	padding-top:50px;
}
.warp-twelve img{    
	padding-left:80px;
	padding-top:80px;
}
.warp-twelve .w-txt h2{
	font-size:30px;
	color:#2d2e2e;
}
.warp-twelve .w-txt p{
	    margin-top: 25px;}
.warp-twelve p{
	width:737px;
	text-align:center;
	margin: 55px auto 0;
}


.wrap-four {
	min-width: 1160px;
	max-width: 100%;
	height: 831px;
	background: url(/Public/Home/images/goods_img/fi9901ep/007.png) no-repeat center;
	background-size: cover;
}
.wrap-four .w-txt {
	width: 325px;
	position: absolute;
	top: 105px;
	left: 822px;
}
.wrap-four .w-txt p {
	margin-top: 35px;
	color:#FFFFFF;
}
.wrap-four h2{color:#FFFFFF;}
.wrap-four .animate img {
	position: absolute;
	left: 588px;
	top: 163px;
	opacity: 0;
}
.wrap-five {
	background: url(/Public/Home/images/goods_img/fi9901ep/009.png) no-repeat center;
	background-size: cover;
	height: 893px;
	min-width: 1160px;
	max-width: 100%;
}
.wrap-five .w-txt {
	width: 600px;
	position: absolute;
	left: 290px;
	top: 80px;
	text-align:center;
}
.wrap-five img {
	position: absolute;
	left: 315px;
	top: 225px;
	opacity: 0;
}
.wrap-five .w-txt * {
	color: #fff;
}
.wrap-five .w-txt p {
	margin-top: 20px;
}
.wrap-six {
	height: 1094px;
	overflow: hidden;
}
.wrap-six .w-txt {
	width: 627px;
	height: 280px;
	margin: 55px auto 0;
	text-align: center;
}
.wrap-six .w-txt ul {
	width: 670px;
	margin-left: 25px;
}
.wrap-six .w-txt ul li {
	float: left;
	margin: 0 0 0 95px;
}
.wrap-six .w-txt p {
	margin: 25px 0;
	line-height: 25px;
}
.wrap-six .animate img:last-child {
	position: absolute;
	left: 451px;
	top: 662px;
	opacity: 0;
}
.wrap-six .animate img:first-child {
	position: absolute;
	left: 151px;
	top: 392px;
	opacity: 0;
}
.wrap-seven {
	background: #eee;
	padding-bottom: 85px;
}
.wrap-seven .w-txt {
	width: 630px;
	margin: 0 auto;
	padding-top: 65px;
	text-align: center;
}
.wrap-seven .w-txt p {
	margin: 25px 0;
}
.wrap-seven .animate img:first-child {
	position: relative;
	left: -55px;
	opacity: 0;
}
.wrap-seven .animate img:last-child {
	position: absolute;
	left: 885px;
	top: 455px;
	opacity: 0;
}
.wrap-eight {
	min-width: 1160px;
	max-width: 100%;
	height: 784px;
	overflow: hidden;
}

.wrap-eight h2 {
	text-align: center;
	padding: 75px 0;
}


.wrap-eight img {
	position: absolute;
	left: -161px;
	
}
.wrap-nine {
	background: #eee;
	height: 677px;
}
.wrap-nine h2 {
	text-align: center;
	padding: 75px 0;
}
.wrap-nine img {
	/*width: 79%;*/
	position: relative;
	/*left: 155px;*/
}

table.tableizer-table {
		 width:1104px; margin:0 auto; border-collapse:collapse; text-align:center;
	} 
	.tableizer-table td , .tableizer-table th{
		 height:28px; border:1px solid gray; font-weight:100;
	}
</style>
 <div class="banner">
 	
 </div>
<div style="width:100%; background:rgba(0,0,0,0.8); display:none;position:fixed; overflow:hidden; z-index:20;">
<div class="name">
	<ul>
    	<li><a id="Features">Features</a></li>
        <li><a id="Tech" >Specifications</a></li>
        <li><a id="Download">Download Center</a></li>
    </ul>
</div>
</div>
<div id="features"> 
<div class="wrap-one">
	<div class="comWith">
    	<div class="w-txt">
            <h1 style='font-size:43px;font-family: "Helvetica","Arial",sans-serif;'>Sharper than ever</h1>
            <p style="font-size:14px;">Foscam FI9901EP outdoor PnP mini bullet camera</p>
            <div style="margin-bottom:50px;"><img src="/Public/Home/images/goods_img/fi9901ep/001.png" /></div>
            <div class="border" style="width:210px; margin-bottom:20px;">FI9901EP</div>
          	
        </div>
        <div class="animate">
            <img src="/Public/Home/images/goods_img/fi9901ep/002.png" />
        </div>
    </div>
</div>
<div class="wrap-two">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>See more with extreme high definition</h2>
            <p style="color:#666;">Advanced image sensor and Ambarella chip processes 4.0 megapixel streaming video efficiently. Compared to 1080P camera, you can see much sharper video and get more details.</p>
              <img src="/Public/Home/images/goods_img/fi9901ep/003.png" />
            <p style="color:#666;">Tips: To view 4.0 megapixel video effect, please make sure that your monitor, computer or smart phone supports 2560×1440 resolution at least.</p>
        </div>
    </div>
</div>
<div class="wrap-three">
	<div class="comWith">
    	<div class="animate">
        	<img src="/Public/Home/images/goods_img/fi9901ep/004.png" />
        </div>
    </div>
</div>
<div class="warp-ten">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Clearer image even in backlight situations</h2>
            <p>Advanced WDR 2.0 technology helps optimize image quality under a wide range of lighting conditions. Objects in the extremely bright and dark areas or in backlight situations can be visible for you.</p>
        </div>
    	<img src="/Public/Home/images/goods_img/fi9901ep/005.png" />
    </div>
</div>

<div class="warp-eleven">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Remove all your doubts with 6X zoom</h2>
			<p>Zoom in on specific area without giving away the image quality. Never leave anything to question with a closer look. Ensure the absolute security of home or business. </p>
        </div>
    	<img src="/Public/Home/images/goods_img/fi9901ep/006.png" />
    </div>
</div>

<div class="warp-twelve">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Power over Ethernet</h2>
			<p>With the help of PoE technology, this camera can be powered by Ethernet cable. Wiring work becomes easier for you.  When this camera works with Foscam Waterproof Junction Box, a small drilling hole for the cables on the wall is enough, which minimizes the damage to your home's interior design.
</p>
        </div>
    	<img src="/Public/Home/images/goods_img/fi9901ep/016.png" />
		<p>Tips: As a PoE camera, FI9901EP must work in alliance with PoE NVR or PoE switch to be powered by Ethernet cable. Or else the camera still need be powered by power cord. Waterproof Junction Box is applicable to FI9901EP. It need to be purchased at addtional cost when necessary.</p>

	</div>
</div>


<div class="wrap-four">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Clear night vision to deter criminals</h2>
<p>Cutting-edge night vision technology allows you to see clearly in complete darkness. This can effectively deter the criminal under the cover of night and give you 24/7 peace of mind.</p>
        </div>
    	<div class="animate">
        	
        </div>
    </div>
</div>

<div class="wrap-five">
	<div class="comWith">
		<div class="w-txt">
        	<h2>Weatherproof design for outdoor use</h2>
<p>IP66-rated aluminium housing is specially designed to ensure protection against all types of bad weather. Year-around security monitoring never stops due to -4°F to 140°F operating temperature range.</p>
        </div>
        <div class="animate">s
        <img src="/Public/Home/images/goods_img/fi9901ep/008.png" />
        </div>
    </div>
</div>


<div class="wrap-six">
	<div class="comWith">
		<div class="w-txt">
        	<h2>Alert push for motion detection</h2>
<p>Built-in sensor can detect human motions automatically. If something happens, the Real-time alerts about the motion will be pushed to your email, FTP or mobile App. </p>

		<p align="center"><img src="/Public/Home/images/goods_img/fi9901ep/010.png" width="58%" /></p>
        <p style="text-align:left;">Tips: Real-time captured image alert can be pushed to you if Foscam Cloud Service is &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subscribed. Or else there is only real-time text alert push.</p>

        </div>
        <div class="animate">
      	    <img src="/Public/Home/images/goods_img/fi9901ep/011.png" />
        	<img src="/Public/Home/images/goods_img/fi9901ep/012.png" />            
        </div>
    </div>
</div>
<div class="wrap-seven">
	<div class="comWith">
		<div class="w-txt">
        	<h2>One-click firmware upgrade via mobile app</h2>
<p>FOSCAM regularly releases firmware updates to protect its camera away from hackers. But it used to be tricky for the user to operate. In view of this, one-click firmware upgrade is developed for firmware update on mobile App.</p>
        </div>
        <div class="animates" style="margin: 0 auto; text-align:center;">
        	<img src="/Public/Home/images/goods_img/fi9901ep/013.png" />
            
        </div>
    </div>
</div>
<div class="wrap-eight">
	<div class="comWith" style="width:700px;">
    	<h2>Product Details</h2>
    	<img src="/Public/Home/images/goods_img/fi9901ep/014.png" />
    </div>
</div>
<div class="wrap-nine">
	<div class="comWith">
    	<h2>Main Features</h2>
    	<img src="/Public/Home/images/goods_img/fi9901ep/015.png" />
    </div>
</div>
<div class="main7" style="background:none;">
	<div class="main7_7">
    <a class="goods_info_left"><img src="/Public/Home/images/goods_img/goods_info_left.png" width="65" /></a>
    <a class="goods_info_right"><img src="/Public/Home/images/goods_img/goods_info_right.png" width="65" /></a>
		<div class="main7_7_div" style="margin-top:100px;">
        	<ul>
            	<li style=" display:block"><a href="#"><img src="/Public/Home/images/goods_img/FI9901EP_1.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/FI9901EP_2.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/FI9901EP_3.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/FI9901EP_4.jpg"</li></a></li>
              
            </ul>
			</div>
     
    </div>
</div>

</div>
<div id="techspecs" style="display:none;">
<p style="  font-size: 32px; margin:40px auto 20px; width:800px; position:relative; left:-155px; color: #f92323;">Tech Specs Table</p>
	<table class="tableizer-table">
<tr class="tableizer-firstrow"><th>Name</th><th>FI9901EP</th></tr>
    <tr>
      <td>Sensor</td>
      <td>High Definition Color CMOS Sensor</td>
    </tr>
    <tr>
      <td>Display Resolution</td>
      <td>2560×1440 (4.0 Megapixels)</td>
    </tr>
    <tr>
      <td>Min. Illumination</td>
      <td>0 Lux (with IR Illuminator)</td>
    </tr>
    <tr>
      <td>Lens Type</td>
      <td>Glass lens</td>
    </tr>
    <tr>
      <td>Focal Length</td>
      <td>f:4mm&nbsp;</td>
    </tr>
    <tr>
      <td>Aperture</td>
      <td>F=2.1</td>
    </tr>
     <tr>
      <td>Diagonal Angle of View</td>
      <td>78°</td>
    </tr>
    <tr>
      <td>Image Compression</td>
      <td>H.264</td>
    </tr>
    <tr>
      <td>Image Frame Rate</td>
      <td>25fps, downward adjustable</td>
    </tr>
    <tr>
      <td rowspan="2">Resolution</td>
      <td>4.0M (2560×1440),3.0M (2304×1296)</td>
    </tr>
    <tr>
      <td>1080P (1920x1080), 720P (1280x720),  VGA (640x480), QVGA (320x240)</td>
    </tr>
    <tr>
      <td>Stream</td>
      <td>Dual stream</td>
    </tr>
    <tr>
      <td>Image Adjustment</td>
      <td>The hue, brightness, contrast, saturation and sharpness are adjustable</td>
    </tr>
    <tr>
      <td>Flip Image</td>
      <td>Flip and mirror</td>
    </tr>
    <tr>
      <td>Infrared Mode</td>
      <td>Automatic or manual</td>
    </tr>
    <tr>
      <td>Night Visibility</td>
      <td>With 30pcs IR-LED, IR range up to 20 meters</td>
    </tr>
    <tr>
      <td>Input/Output</td>
      <td>External RCA interface for two-way audio</td>
    </tr>
    <tr>
      <td>Audio Compression</td>
      <td>PCM/G.726</td>
    </tr>
    <tr>
      <td>Ethernet</td>
      <td>One 10/100Mbps RJ45 port</td>
    </tr>
    <tr>
      <td>Remote Access</td>
      <td>P2P DDNS</td>
    </tr>
    <tr>
      <td>Network Protocol</td>
      <td>IP, TCP, UDP, HTTP, HTTPS, SMTP, FTP, DHCP, DDNS, UPnP, RTSP, ONVIF</td>
    </tr>
    <tr>
      <td>Operating System</td>
      <td>Microsoft Windows 2000/XP, Vista, 7, 8; Mac OS</td>
    </tr>
    <tr>
      <td>Browser</td>
      <td>Microsoft IE8 and above versions or other compatible browsers; Mozilla Firefox; Apple Safari</td>
    </tr>
    <tr>
      <td>Motion Detection</td>
      <td>Alarm via email, upload alarm snapshot to FTP</td>
    </tr>
    <tr>
      <td>Privacy Block</td>
      <td>Set privacy area manually</td>
    </tr>
    <tr>
      <td>User Account</td>
      <td>Three-level user role</td>
    </tr>
    <tr>
      <td>Firewall</td>
      <td>Supports IP filtering</td>
    </tr>
    <tr>
      <td>Reset</td>
      <td>Reset button is available</td>
    </tr>
    <tr>
      <td>Power Supply</td>
      <td>DC 12V/1.0A</td>
    </tr>
    <tr>
      <td>POE Standard</td>
      <td>802.3af</td>
    </tr>
    <tr>
      <td>Power Consumption</td>
      <td>5W (Max.)</td>
    </tr>
    <tr>
      <td>Dimensions (LxWxH)</td>
      <td>98x65x62mm (3.86''x2.56''x2.44'')</td>
    </tr>
    <tr>
      <td>Net Weight</td>
      <td>255g</td>
    </tr>
    <tr>
      <td>Waterproof</td>
      <td>IP66</td>
    </tr>
    <tr>
      <td>Operating Temperature</td>
      <td>-20°C~60°C (-4°F~140°F)</td>
    </tr>
    <tr>
      <td>Operating Humidity</td>
      <td>10%~80% (non-condensing)</td>
    </tr>
    <tr>
      <td>Storage Temperature</td>
      <td>-20°C~60°C (-4°F~140°F)</td>
    </tr>
    <tr>
      <td>Storage Humidity</td>
      <td>0%~90% (non-condensing)</td>
    </tr>
    <tr>
      <td>Certification</td>
      <td>FCC, IC, CE, WEEE, IP66</td>
    </tr>
    <tr>
      <td>Warranty</td>
      <td>Limited 2-year warranty</td>
    </tr>
</table>
</div>
<div id="download" style="display:none;">
<div class="main7">
	<div class="main7_7">
    	<p>Download Center</p>
        <div class="main7_7_div">
        	<div class="left">
            	<div style=" height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/user_mannual.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download User Manual</p></a>
                </div>
                <div style=" margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/quick_installation_guide.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Quick Guide</p></a> 
                </div>
            </div>
            <div class="right">
            	<div style=" float:right; height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/index.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Firmware</p> </a>
                </div>
                <div style=" float:right;  margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/app_software.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Software</p></a> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
$(document).ready(function(e) {
c1_change();//c1幻灯片
anaim();//页面切换
title2();
	wrapOne();
	wrapThree();
	wrapFour();
	wrapFive();
	wrapSix();
	wrapSeven();
});
function title2(){
	$(window).bind("scroll", function(){ 
	var scroll_height=$(document).scrollTop();//滚动条当前的高度
	if(scroll_height >=10){
		$('.name').parent().css({'animation':'title 1s','animation-fill-mode':'forwards'});
		$('.name').parent().css('display','block');	
	}else{
		$('.name').parent().css('display','none');
	};
		
	});
}
function anaim(){
	$('#Features').click(function(){
		$('#features').css('display','block');
		$('#techspecs').css('display','none');
		$('#download').css('display','none');
		})
	$('#Tech').click(function(){
		$('#techspecs').css('display','block');
		$('#features').css('display','none');
		$('#download').css('display','none');
		})
	$('#Download').click(function(){
		$('#download').css('display','block');
		$('#techspecs').css('display','none');
		$('#features').css('display','none');
		})
	}
function c1_change(){
	var length=$('.main7_7_div li').length;
	var i=0;
	$('.goods_info_left').click(function(){
		i=i-1;
		if(i<=-1){
			i=length-1;
			}
		$('.main7_7_div li').css('display','none');
		$('.main7_7_div li').eq(i).fadeIn('fast');
		})
	$('.goods_info_right').click(function(){
		i=i+1;
		if(i>=length){
			i=0;
			}
		$('.main7_7_div li').css('display','none');
		$('.main7_7_div li').eq(i).fadeIn('fast');
		})
		$('.goods_info_left').hover(function(){
			$('.goods_info_left').css('opacity','1');
			},function(){
			$('.goods_info_left').css('opacity','0.5');
				})
		$('.goods_info_right').hover(function(){
			$('.goods_info_right').css('opacity','1');
			},function(){
			$('.goods_info_right').css('opacity','0.5');
				})
	}
function wrapOne(){
	$('.wrap-one .animate img').animate({
		'top':'358px',
		'opacity':1,	
	},3000,function(){
		$('.wrap-one p img').fadeIn('slow');
	});
}
function wrapThree(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=1300){
			$('.wrap-three .animate img').animate({
				'left': '85px',
				'width': '88%',
			},2000);
		}
	})	
}
function wrapFour(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=2000){
			$('.wrap-four .animate img').animate({
				'opacity':1
			},3000);
		}
	})	
}
function wrapFive(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=2800){
			$('.wrap-five img').animate({
				'opacity':1
			},1000);
		}
	})	
}
function wrapSix(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=3900){
			$('.wrap-six .animate img:last-child').animate({
				'top': '392px',
				'opacity':1
			},1000,function(){
				$('.wrap-six .animate img:first-child').animate({
					'opacity':1
				},2000)	
			});
		}
	})	
}
function wrapSeven(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=4852){
			$('.wrap-seven .animate img:first-child ').animate({
				'left': 0,
				'opacity':1
			},1000);
			$('.wrap-seven .animate img:last-child ').animate({
				'left': '835px',
				'opacity':1
			},1000);
		}
	})	
}
console.log($(document).scrollTop());
</script>
