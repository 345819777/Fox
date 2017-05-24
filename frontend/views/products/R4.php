﻿<style>
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
	height: 404px;
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
.wrap-four {
	min-width: 1160px;
	max-width: 100%;
	height: 831px;
	background: url(/Public/Home/images/goods_img/R4_03.jpg) no-repeat center;
	background-size: cover;
}
.wrap-four .w-txt {
	width: 325px;
	position: absolute;
	top: 155px;
	left: 122px;
}
.wrap-four .w-txt p {
	margin-top: 35px;
}
.wrap-four .animate img {
	position: absolute;
	left: 588px;
	top: 163px;
	opacity: 0;
}
.wrap-five {
	background: url(/Public/Home/images/goods_img/R4_06.jpg) no-repeat center;
	background-size: cover;
	height: 893px;
	min-width: 1160px;
	max-width: 100%;
}
.wrap-five .w-txt {
	width: 344px;
	position: absolute;
	left: 785px;
	top: 80px;
}
.wrap-five img {
	position: absolute;
	left: 675px;
	top: 195px;
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
	width: 680px;
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
	height: 664px;
	overflow: hidden;
}
.wrap-eight img {
	position: absolute;
	left: -131px;
	width: 120%;
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
	width: 79%;
	position: relative;
	left: 155px;
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
            <h1>4.0<span>MP</span></h1>
            <p>Pan/Tilt Wireless Indoor IP Camera</p>
            <div class="border">R4</div>
          	<!--<p><img src="/Public/Home/images/goods_img/coming-soon.png" /></p>-->
        </div>
        <div class="animate">
            <img src="/Public/Home/images/goods_img/R4_01.png" />
        </div>
    </div>
</div>
<div class="wrap-two">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>24*7 live videos <br />enable a crystal clear look</h2>
            <p>4.0MP video with 24/7 live streaming presents real colors of objects by providing crystal clear image either on your computers or mobile devices, enabling you to view your house more clearly anywhere, anytime. WDR technology helps correct the glare or dark spots of the image.</p>
              <img src="/Public/Home/images/goods_img/wrap_two_number.jpg" />
        </div>
    </div>
</div>
<div class="wrap-three">
	<div class="comWith">
    	<div class="animate">
        	<img src="/Public/Home/images/goods_img/R4_02.jpg" />
        </div>
    </div>
</div>
<div class="wrap-four">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Enjoy smooth live talk 
with your loved ones</h2>
<p>Built-in high-end mic and chip effectively reduce background noise and create a superior two-way audio continuity. You can hear and be heard clearly with our camera even the background has much noise.</p>
        </div>
    	<div class="animate">
        	<img src="/Public/Home/images/goods_img/R4_04.png" />
        </div>
    </div>
</div>
<div class="wrap-five">
	<div class="comWith">
		<div class="w-txt">
        	<h2>13pcs IR-LEDs for a 
clear and long-distance 
night view</h2>
<p>Equipped with 13pcs IR-LEDs, R4 ensures a better clear view in the dark with the IR range up to 8 meters (26ft). </p>
        </div>
        <img src="/Public/Home/images/goods_img/R4_05.png" />
    </div>
</div>
<div class="wrap-six">
	<div class="comWith">
		<div class="w-txt">
        	<h2>Get alerts when something happens</h2>
<p>Just like an electronic eye, it can send real-time alerts to your mobile devices, enabling you to master what is happening immediately and avoid missing something important for round-the-clock peace of mind.  </p>
		<p style=" margin-top:2px;width:600px;font-family:Helvetica, sans-serif; font-size:13px;">Tips: Real-time captured image alert can be pushed to you if Foscam Cloud Service is subscribed. Or else there is only real-time text alert push.</p>
               
		<p align="center"><img src="/Public/Home/images/goods_img/R4_07.png" width="58%" /></p>
        <ul>
        	<li>Motion <br />
Detection</li>
            <li>Message <br />
Push</li>
			<li style="margin-left:55px;">Rich Media Message <br />
Push with snapshots</li>
        </ul>
        </div>
        <div class="animate">
      	    <img src="/Public/Home/images/goods_img/R4_09.png" />
        	<img src="/Public/Home/images/goods_img/R4_08.png" />            
        </div>
    </div>
</div>
<div class="wrap-seven">
	<div class="comWith">
		<div class="w-txt">
        	<h2>Great storage capacity thanks to SD card 
and Foscam Cloud Service</h2>
<p>Designed with external SD card slot, R4 supports 128G SD card storage. Meanwhile, it support Foscam Cloud storage as well. You can preserve as much as memorable and interesting video records without worrying about the insufficient storage space. </p>
        </div>
        <div class="animate">
        	<img src="/Public/Home/images/goods_img/R4_10.png" />
            <img src="/Public/Home/images/goods_img/R4_11.png" />
        </div>
    </div>
</div>
<div class="wrap-eight">
	<div class="comWith">
    	<img src="/Public/Home/images/goods_img/R4_12.jpg" />
    </div>
</div>
<div class="wrap-nine">
	<div class="comWith">
    	<h2>Main Features</h2>
    	<img src="/Public/Home/images/goods_img/R4_13.png" />
    </div>
</div>
<div class="main7" style="background:none;">
	<div class="main7_7">
    <a class="goods_info_left"><img src="/Public/Home/images/goods_img/goods_info_left.png" width="65" /></a>
    <a class="goods_info_right"><img src="/Public/Home/images/goods_img/goods_info_right.png" width="65" /></a>
		<div class="main7_7_div" style="margin-top:100px;">
        	<ul>
            	<li style=" display:block"><a href="#"><img src="/Public/Home/images/goods_img/R4_1.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/R4_2.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/R4_3.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/R4_4.jpg"</li></a></li>
 
                <li><a href="#"><img src="/Public/Home/images/goods_img/R4_5.jpg"</li></a></li>
              
            </ul>
			</div>
     
    </div>
</div>

</div>
<div id="techspecs" style="display:none;">
<p style="  font-size: 32px; margin:40px auto 20px; width:800px; position:relative; left:-155px; color: #f92323;">Tech Specs Table</p>
	<table class="tableizer-table">
<tr class="tableizer-firstrow"><th>Name</th><th>R4</th></tr>
 <tr><td>Sensor Type</td><td>1/3"CMOS</td></tr>
 <tr><td>Display Resolution</td><td>2560×1440(4.0Megapixels),  2304×1296(3.0Megapixels)</td></tr>
 <tr><td>Frame Rate</td><td>25fps</td></tr>
 <tr><td>IR CUT</td><td>√</td></tr>
 <tr><td>Minimum Illumination</td><td>0 Lux (With IR Illuminator)</td></tr>
 <tr><td>Lens Type</td><td>f: 4.0mm;  F: 2.1</td></tr>
 <tr><td>Diagonal Angle of View</td><td>75°</td></tr>
 <tr><td>Horizontal Angle of View</td><td>67°(Pan/Tilt Angle: H=300°V=100°)</td></tr>
 <tr><td>IR Range</td><td>13pcs IR-LEDs, IR range up to 8 meters (26.2feet)</td></tr>
 <tr><td>Ethernet</td><td>One 10/100Mbps RJ45 port</td></tr>
 <tr><td>WPS</td><td>√</td></tr>
 <tr><td>Wireless Standard</td><td>IEEE802.11b/g/n</td></tr>
 <tr><td>Wireless Security</td><td>WEP, WPA, WPA2</td></tr>
 <tr><td>P2P</td><td>√</td></tr>
 <tr><td>External I/O</td><td>N/A</td></tr>
 <tr><td>802.3af PoE</td><td>N/A</td></tr>
 <tr><td>External Card Slot</td><td>128G Micro SD card</td></tr>
 <tr><td>Video Format</td><td>H.264</td></tr>
 <tr><td>Multi Stream</td><td>Dual stream</td></tr>
 <tr><td>Motion Detection</td><td>√</td></tr>
 <tr><td>Scheduled Recording</td><td>√</td></tr>
 <tr><td>Built-in DDNS Server</td><td>√</td></tr>
 <tr><td>Browser Supported</td><td>IE8 and above version; Firefox; Chrome; Safari</td></tr>
 <tr><td>OS Supported</td><td>Windows XP, 7, 8; Mac OS; iOS, Android</td></tr>
 <tr><td>Infrared Mode</td><td>Automatic or manual</td></tr>
 <tr><td>Day and Night</td><td>√</td></tr>
 <tr><td>Firewall</td><td>Supports IP Filtering</td></tr>
 <tr><td>Two-way Audio</td><td>√</td></tr>
 <tr><td>Built-in Microphone</td><td>√</td></tr>
 <tr><td>External Microphone Input</td><td>N/A</td></tr>
 <tr><td>Built-in speaker</td><td>√</td></tr>
 <tr><td>External Speaker Output</td><td>N/A</td></tr>
 <tr><td>Dimensions(mm)</td><td>74 (L) × 74 (W) × 119 (H)</td></tr>
 <tr><td>Power Adapter</td><td>5V/2A</td></tr>
 <tr><td>Power Consumption</td><td><6W</td></tr>
 <tr><td>Operating Temperature</td><td>-10°C ~ 55° (14°F ~ 131°F)</td></tr>
 <tr><td>Operating Humidity</td><td>20% ~ 85% non-condensing</td></tr>
 <tr><td>Certificate</td><td>CE, FCC, RoHS</td></tr>
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
		'top':'278px',
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
