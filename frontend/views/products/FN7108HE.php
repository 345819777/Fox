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
	width: 712px;
	position: absolute;
	left: 50%;
	margin-left: -335px;
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
	background-color: #EEEEEE;
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
            <h1 style='font-size:43px;font-family: "Helvetica","Arial",sans-serif;'>8-channel 1080P<br>Security NVR</h1>
            <p style="font-size:14px;"></p>
            <div class="border" style="width:210px; margin-bottom:20px;">FN7108HE</div>
          	
        </div>
        <div class="animate">
            <img src="/Public/Home/images/goods_img/fn7108he/1.png" />
        </div>
    </div>
</div>

<style>
.fn7108-two {
	min-width: 1160px;
	max-width: 100%;
	height: 768px;
	background: url(/Public/Home/images/goods_img/fn7108he/2.jpg) no-repeat center;
	background-size: cover;
}

.fn7108-two .w-txt {
	width: 374px;
	position: absolute;
	top: 205px;
	left: 22px;
}
.fn7108-two .w-txt h2 {
	color:#FFFFFF;
}
.fn7108-two .w-txt p {
	margin-top: 35px;
	color:#FFFFFF;
}

.wrap-three .w-txt {
	width: 474px;
	position: absolute;
	top: 155px;
	left: 22px;
}
.wrap-three .w-txt  p{ color:#000; }
</style>
<div class="fn7108-two">
	<div class="comWith">
		<div class="w-txt">
        	<h2>Never miss a moment</h2>
<p>NVR is the heart of a surveillance system. It is designed for 24/7 operation by supporting up to 4TB hard drive (not included). So you’ll never miss a moment due to continuous video recording.</p>
        </div>
    </div>
</div>

<div class="wrap-three">
	<div class="comWith" style="width:1069px; padding-top:130px;">
		<div class="w-txt">
        	<h2>Works best with PoE cameras</h2>
			<p>This NVR has eight built-in Power-over-Ethernet ports for simple single cable camera connection. If your camera supports PoE, wiring works can be easier for you.</p>
        </div>
        	<img src="/Public/Home/images/goods_img/fn7108he/3.png" />
    </div>
</div>
<div class="warp-ten">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Capture 1080P image with stunning details</h2>
            <p>What to do should an intrusion happen but the video footage is too fuzzy for you to make out any distinct details? That is not the case with Foscam security NVR. True 1080P full HD image provides the important details such as facial features.</p>
        </div>
    </div>
</div>
<style>
.warp-ten{
	min-width: 1160px;
	max-width: 100%;
	height: 768px;
	background: url(/Public/Home/images/goods_img/fn7108he/4.png) no-repeat center;
	background-size: cover;
}
.warp-ten .w-txt{width: 667px; height: 180px; margin: 0px auto 0;text-align: center; margin-top:70px;}
.warp-ten img{    text-align:center;}
.warp-ten .w-txt h2{font-size:30px;color:#FFFFFF;}
.warp-ten .w-txt p{margin-top: 25px;color:#FFFFFF;}

.warp-eleven{
	min-width: 1160px;
	max-width: 100%;
	height: 768px;
	background: url(/Public/Home/images/goods_img/fn7108he/6.png) no-repeat center;
	background-size: cover;
}
.warp-eleven .w-txt{position: absolute; width: 427px;left:30px; top:60px;padding-top:70px;}
.warp-eleven .w-txt h2{font-size:30px;color:#FFFFFF;}
.warp-eleven .w-txt p{margin-top: 25px;color:#FFFFFF;}
</style>
<div class="warp-eleven">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Receive alerts when something happens</h2>
			<p>The NVR automatically analyzes the video feed by pixel all the time. It’s able to send alerts to your email or FTP when something happens and leads to the sudden change of a group of pixels.</p>
			<p><img src="/Public/Home/images/goods_img/fn7108he/5.png"></p>
		</div>
    </div>
</div>

<style>
.fn7108-seven .w-txt {
	width: 474px;
	position: absolute;
	top: 155px;
	left: 22px;
}
.fn7108-seven .w-txt  p{ color:#000; }
.fn7108-seven {
	height: 810px;
	overflow: hidden;
	background-color: #EEEEEE;
}
.fn7108-seven .animate img {
	position: absolute;
	left: -666px;/*left:-261px;
	width:145%;*/
}
</style>

<div class="fn7108-seven">
	<div class="comWith" style="width:1069px; padding-top:130px;">
		<div class="w-txt">
        	<h2>View your space anywhere with remote viewing</h2>
			<p>This NVR has eight built-in Power-over-Ethernet ports for simple single cable camera connection. If your camera supports PoE, wiring works can be easier for you.</p>
        </div>
        	<img src="/Public/Home/images/goods_img/fn7108he/7.png">
    </div>
</div>
<style>
.fn7108-six {
	min-width: 1160px;
	max-width: 100%;
	height: 767px;
	background: url(/Public/Home/images/goods_img/fn7108he/9-01.jpg) no-repeat center;
	background-size: cover;
}

.fn7108-six .w-txt {
	width: 374px;
	position: absolute;
	top: 205px;
	left: 22px;
}
.fn7108-six .w-txt h2 {
	color:#FFFFFF;
}
.fn7108-six .w-txt p {
	margin-top: 35px;
	color:#FFFFFF;
}
</style>
<div class="fn7108-six">
	<div class="comWith">
		<div class="w-txt">
        	<h2>Custom recording to suit your surveillance needs</h2>
<p>The footage stored on hard drive will be replaced by the newest one continuously. However, you may need extend the recording time. Scheduled or motion-triggered recording option allow you to play back further into the past.</p>
        </div>
    </div>
</div>
<div class="wrap-seven">
	<div class="comWith">
		<div class="w-txt">
        	<h2>4-channel Timeline Playback</h2>
<p>Play back the video footage on 4 channels simultaneously to get the whole event under control. Intelligent timeline lets you go back to different days, hours or minutes and see everything that you missed.</p>
        </div>
        <div class="animates" style="margin: 0 auto; text-align:center;">
        	<img src="/Public/Home/images/goods_img/fn7108he/10.png" />
            
        </div>
    </div>
</div>
<div class="wrap-eight">
	<div class="comWith" style="width:700px;">
    	<h2>Product Details</h2>
    	<img src="/Public/Home/images/goods_img/fn7108he/11.png" />
    </div>
</div>
<div class="wrap-nine">
	<div class="comWith">
    	<h2>Main Features</h2>
    	<div style="width:959px;margin:0px auto;"><img src="/Public/Home/images/goods_img/fn7108he/12.png" /></div>
    </div>
</div>
<div class="main7" style="background:none;">
	<div class="main7_7">
    <a class="goods_info_left"><img src="/Public/Home/images/goods_img/goods_info_left.png" width="65" /></a>
    <a class="goods_info_right"><img src="/Public/Home/images/goods_img/goods_info_right.png" width="65" /></a>
		<div class="main7_7_div" style="margin-top:100px;">
        	<ul>
            	<li style=" display:block"><a href="#"><img src="/Public/Home/images/goods_img/fn7108he/A01.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/fn7108he/A02.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/fn7108he/A03.jpg"</li></a></li>
              
            </ul>
			</div>
     
    </div>
</div>

</div>
<div id="techspecs" style="display:none;">
<p style="  font-size: 32px; margin:40px auto 20px; width:800px; position:relative; left:-155px; color: #f92323;">Tech Specs Table</p>
	<table class="tableizer-table">
  <tr class="tableizer-firstrow">
    <th>　</th>
    <th>Model</th>
    <th colspan="6">FN7108HE</th>
  </tr>
  <tr>
    <td>Video Input</td>
    <td>IP Video Input</td>
    <td colspan="6">8 Channels  HD IP camera input</td>
  </tr>
  <tr>
    <td rowspan="3">Video Output</td>
    <td>HD Output</td>
    <td colspan="6">1×HD OUT</td>
  </tr>
  <tr>
    <td>VGA Output</td>
    <td colspan="6">1×VGA</td>
  </tr>
  <tr>
    <td>Display Resolution</td>
    <td colspan="6">1920 × 1080 /60Hz, 1280 ×    720 /60Hz,1440 × 900 /60Hz,1024 × 768 /60Hz</td>
  </tr>
  <tr>
    <td rowspan="3">Recording</td>
    <td>Recording    Resolution</td>
    <td colspan="6">1080P per channel (    8ch@1080P )</td>
  </tr>
  <tr>
    <td>Record Mode</td>
    <td colspan="6">Manual / Time Scheduled /    Motion Detect</td>
  </tr>
  <tr>
    <td>Compression Format</td>
    <td colspan="6">H.264</td>
  </tr>
  <tr>
    <td rowspan="2">Playback</td>
    <td>Synchronous    Playback</td>
    <td colspan="6"> 4 channel 1080P synchronous video    playback </td>
  </tr>
  <tr>
    <td>Playback Mode</td>
    <td colspan="6">Fast forward / Fast    backward / Frame forward / Slow Play</td>
  </tr>
  <tr>
    <td>HDD</td>
    <td>Capacity</td>
    <td colspan="6">Up to 4TB</td>
  </tr>
  <tr>
    <td rowspan="3">External Interface</td>
    <td>Network Interface</td>
    <td colspan="6">1× 10/100/1000 Mbps RJ45    port</td>
  </tr>
  <tr>
    <td>USB Interface</td>
    <td colspan="6">1× USB2.0 / 1× USB3.0    interface for mouse and external storage</td>
  </tr>
  <tr>
    <td>Button</td>
    <td colspan="6">1× Power on/off button,1×    Reset button</td>
  </tr>
  <tr>
    <td rowspan="3">Software</td>
    <td>Computer Operating    System</td>
    <td colspan="6">Microsoft Windows XP, 7, 8,    8.1, Mac OS</td>
  </tr>
  <tr>
    <td>Internet Viewing</td>
    <td colspan="6">Microsoft    IE8 and above version,Safari</td>
  </tr>
  <tr>
    <td>Smart phone</td>
    <td colspan="6">iOS,    Android, 3G/4G Smartphones</td>
  </tr>
  <tr>
    <td>Language</td>
    <td>Language</td>
    <td colspan="6">13 languages （Chinese、English、French、Hungarian、Czech、Dutch、Greek、Russian、Polish、Spanish、Portuguese、Italian、German）</td>
  </tr>
  <tr>
    <td rowspan="7">Physical and Environmental</td>
    <td>Power Supply</td>
    <td colspan="6">DC 12V &amp; 2A</td>
  </tr>
  <tr>
    <td>Dimension(LxWxH)</td>
    <td colspan="6">234mm*234mm*52mm</td>
  </tr>
  <tr>
    <td>Net Weight (g)</td>
    <td colspan="6">1200g</td>
  </tr>
  <tr>
    <td>Operating Temperature</td>
    <td colspan="6"> -10°C ~ 55°C     (-4°F ~ 131°F)</td>
  </tr>
  <tr>
    <td>Operating Humidity</td>
    <td colspan="6">20% ~ 85% non-condensing</td>
  </tr>
  <tr>
    <td>Storage Temperature</td>
    <td colspan="6"> -20°C ~ 60°C     (-4°F ~ 140°F)</td>
  </tr>
  <tr>
    <td>Storage Humidity</td>
    <td colspan="6">0% ~ 90% non-condensing</td>
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
