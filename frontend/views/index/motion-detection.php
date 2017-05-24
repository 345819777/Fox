
<script type="text/javascript">
$(document).ready(function(e) {
	disptime();
}); 
function disptime(){
	var c = $("#count").html();
	if(c <=2){
		c++; 
	}
	$("#count").html(c);
 	var myTime=setTimeout("disptime()",1000);
}

 
</script>
<style type="text/css">
body {
    margin: 0;
    font: 14px/1.2 arial, "Microsoft Yahei", "Hiragino Sans GB", sans-serif;
    color: #8c8c8c;
    background-color: #fff;
}
p {
    /* font-size: 15px; */
    /* color: #727272; */
}
h1, p {
    font: 14px/1.2 arial, "Microsoft Yahei", "Hiragino Sans GB", sans-serif;
    font-weight: 100;
}

.beef-wrapper .section .public-b-text p {
	padding-top:20px;
	padding-bottom:20px;
    color: #FFF;
    font-size: 30px;

    text-shadow: 1px 2px 3px #000000;
}

.beef-wrapper .section .public-s-text p{
	padding-top:20px;
	padding-bottom:20px;
    color: #FFF;
    font-size: 30px;
    text-shadow: 1px 2px 3px #000000;
}

.beef-wrapper .section .public-five-text p {
	padding-top:20px;
	padding-bottom:20px;
    color: #5c5c5c;
    font-size: 30px;
}
.beef-wrapper .section .public-three-text p {
	padding-top:20px;
	padding-bottom:20px;
    color: #5c5c5c;
    font-size: 30px;
}
.beef-wrapper .section .public-six-text p {
	padding-top:20px;
	padding-bottom:20px;
    color: #FFF;
    font-size: 26px;
}

.beef-wrapper .section .public-bot-text p {
	padding-top:20px;
	padding-bottom:20px;
    color: #FFF;
    font-size: 30px;
    text-shadow: 1px 2px 3px #000000;
}

.beef-wrapper .webcam-summary-baby {
    height: 890px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url("/Public/Home/images/motion-detection/01.png");
}

.beef-wrapper .webcam-summary-night {
    height: 480px;
    background-color: #fff;
	background-image: url("/Public/Home/images/motion-detection/02.png");
	background-repeat: no-repeat;
    background-position: center center;
}
.beef-wrapper .section {
    position: relative;
}

.beef-wrapper .webcam-summary-night .viewdetail-img {
    position: absolute;
    width: 270px;
    height: 410px;
    left: 50%;
    top: 50%;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url("/Public/Home/images/motion-detection/c-19.jpg");
    margin-left: 245px;
    margin-top: -190px;
}

.beef-wrapper .webcam-summary-night .night-logo {
    position: absolute;
    left: 50%;
    top: 0px;
    margin-left: -598px;
    width: 110px;
    height: 77px;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url("/Public/Home/images/motion-detection/p-23.png");
}

.beef-wrapper .webcam-summary-night .public-text {
    margin-left: -465px;
    margin-top: -160px;
    width: 475px;
}
.beef-wrapper .section .public-text {
    position: absolute;
    top: 50%;
    left: 50%;
}

.beef-wrapper .webcam-summary-night .public-text .title {
    width: 510px;
}
.beef-wrapper .section .text-c .title {
    font-size: 28px;
    color: #6d6d6d;
    line-height: 30px;
}
.beef-wrapper .section .text-c .descp {
    font-size: 14px;
    color: #6d6d6d;
    margin-top: 20px;
}
.beef-wrapper .webcam-summary-night .public-text .descp-img {
    background-repeat: no-repeat;
    background-position: left bottom;
    background-image: url("/Public/Home/images/motion-detection/p-25.png");
}


.beef-wrapper .webcam-summary-girlbirth {
    height: 880px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url("/Public/Home/images/motion-detection/04.jpg");
}
.beef-wrapper .webcam-summary-girlbirth .amzc{
	height: 880px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    /*background-image: url("images/04.png");*/
}



.beef-wrapper .webcam-summary-videoreverse {
    height: 730px;
    background-color: #fff;
}



.beef-wrapper .webcam-summary-homeview {
    height: 890px;
    background-color: #fff;
    position: relative;
}

.beef-wrapper .webcam-summary-homeview .homeview-img {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    _zoom: 1;
}

@media (max-width: 1260px)
.beef-wrapper .webcam-summary-homeview .public-text {
    margin-left: -450px;
    width: 420px;
}
.beef-wrapper .webcam-summary-homeview .public-text {
    margin-left: -635px;
    margin-top: -60px;
    width: 520px;
}


.beef-wrapper .section .text-a .title {
    font-size: 46px;
    color: #0194e9;
    line-height: 50px;
}

.beef-wrapper .section .text-a .descp-title {
    font-size: 24px;
    color: #333;
    line-height: 30px;
    margin-top: 10px;
}
.beef-wrapper .section .text-a .descp {
    font-size: 14px;
    color: #6d6d6d;
    line-height: 20px;
    margin-top: 20px;
}

.beef-wrapper .section .public-b-text{
    position: absolute;
    top: 16%;
    left: 28%;
	color:#FFF;
	font-size:30px;
	text-align:center;
	width:650px;
	text-shadow: 1px 2px 3px #000000;
}

.beef-wrapper .section .public-s-text{
    position: absolute;
    top: 24%;
    left: 28%;
	color:#FFF;
	font-size:30px;
	text-align:center;
	width:600px;
	text-shadow: 1px 2px 3px #000000;
}

.beef-wrapper .section .public-d-text{
    position: absolute;
    top: 6%;
    left: 36%;
	color:#000;
	font-size:20px;
	text-align:center;
	width:400px;
}


</style>




<div class="beef-wrapper J_wrapper">
	<!--
	<div class="section webcam-summary-homeview">
        <div class="homeview-img J_homeview turn-round">
            <img src="images/c-25.png" alt="" class="horimg">
            <img src="images/c-24.png" alt="" class="verimg">
        </div>
        <div class="public-text text-a">
            <h2 class="title">你的家就在手机上</h2>
            <div class="descp-title">24小时想看就看</div>
            <div class="descp">小蚁智能摄像机可以放置在任何你需要的地方，通过手机或平板，随时随地了解家中的情况。即使不在家中，也可随时进行双向语音通话。甚至你还可以远距离参与家人的生日派对，抓拍欢乐的瞬间，不错过任何一个精彩时刻。<br><br><a href="http://www.xiaoyi.com/functions.html" class="content-chain" data-stat-id="4ef86631d795496b" onclick="">了解更多功能&gt;</a></div>
        </div>
    </div>-->


	<div class="section webcam-summary-baby" data-stellar-background-ratio="0" data-stellar-vertical-offset="1600" data-stellar-horizontal-offset="-1600" style="background-position: 50% 0px;">
    	
        <div class="public-b-text text-b">
        <p>Video surveillance used to be enhanced<br> by All Motion Alerts </p>
        <p style="font-size:16px;">Motion detection and alert push are great moves for security monitoring. They tell us the new changes when necessary, so we don’t need stare at video feed all day long. </p>
        </div>
    </div>
    
    <div class="section webcam-summary-night">
        <div class="public-d-text text-c">However, not all changes reported by All Motion Alerts deserve your attention. 
        </div>
    </div>
    
    <div class="section webcam-summary-girlbirth" data-stellar-background-ratio="0" data-stellar-vertical-offset="1600" data-stellar-horizontal-offset="-1600" style="background-position: 50% 0px;">
        <div class="public-s-text text-b">
        	<p>FOSCAM is gonna change this with<br> Smartcam Technology</p>
            <p style="font-size:16px;">Curtain movement, lighting changes and other background events may cause inessential alerts, but most cameras can’t distinguish them from human movement. Smartcam Technology can cut down on alerts by only sending alert notifications in response to human activity.</p>
        </div>
        
    </div>
    
    
    <style type="text/css">
	.beef-wrapper .section .public-five-text {
		color:#5c5c5c;
		font-size: 30px;
		left: 10%;
		position: absolute;
		top: 14%;
		width: 400px;
	}
	.beef-wrapper .webcam-summary-videoreverse .videoreverse-img {
		position: absolute;
		width: 50%;
		height: 730px;
		left: 50%;
		top: 190px;
		background-repeat: no-repeat;
		/*background-position: center center;*/
		/*background-image: url("images/06.png");*/
		background-image: url("/Public/Home/images/motion-detection/06.jpg");
		
		/*margin-left: 245px;*/
		margin-top: -190px;
	}
	

	
	.beef-wrapper .webcam-summary-videoreverse .videoreverse-img img{position: absolute;top:220px; left:20px;}
	</style>
    <div class="section webcam-summary-videoreverse">
        
        <div class="public-five-text text-c">
        	<p>Smarter than you expect</p>
            <p style="font-size:16px;">Each time human motion is detected, a ten second recording is triggered. If the subject stays still, Smartcam Technology will adaptively categorize him or her as part of the background to prevent useless or redundant alerts.</p>
            <p style="font-size:16px; margin-top:200px; color:#979797;">Tips: 
- Alert push about human motion will be restricted to     one per minute at most.  
- It is strongly recommended that you enable Motion Detection triggered recording, which allows the camera to capture continuously for any motion and preserve evidence.</p>
            <div class="descp-img"></div>
        </div>
        <div class="videoreverse-img"></div>
    </div>
    
    <style type="text/css">
	.beef-wrapper .webcam-summary-threestep {
		height: 740px;
		background-color: #fff;
	}
	.beef-wrapper .webcam-summary-threestep .threestep-img {
		position: absolute;
		width: 50%;
		height: 740px;
		left: 0%;
		top: 190px;
		background-repeat: no-repeat;
		background-position: center center;
		/*background-image: url("images/15.png");*/
		background:url("/Public/Home/images/motion-detection/15.jpg");  
filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')";  
-moz-background-size:100% 100%;  
    background-size:100% 100%; 
		
		/*margin-left: 245px;*/
		margin-top: -190px;
	}

	.beef-wrapper .section .public-three-text {
		color:#5c5c5c;
		font-size: 30px;
		left: 62%;
		position: absolute;
		top: 14%;
		width: 400px;
	}
	</style>
    <script type="text/javascript">
	function timedText(){
		
			var t1=setTimeout("document.getElementById('countnum').value='00001'",2000);
			var t2=setTimeout("document.getElementById('countnum').value='00002'",4000);
			var t3=setTimeout("document.getElementById('countnum').value='00003'",6000);
	
	}
	</script>
    <div class="section webcam-summary-threestep">
    	<div class="public-three-text text-c">
        <p>Count visits for business data collection</p>
            <p style="font-size:16px;">Can't keep track of the door? Smartcam Technology tells you how many visits your business receives weekly, and when are its busiest times. It's easier than ever to grasp your store's operation status and optimize staffing.</p>
            <p style="font-size:16px; margin-top:180px; color:#979797; background:url(/Public/Home/images/motion-detection/10.png) no-repeat;
            height:125px; padding-top:30px; padding-left:25px; font-size:50px; color:#e83827;" id="countnum">0000<span id="count">1</span></p>

        <div class="descp-img"></div>
        </div>
        <div class="threestep-img"></div>
    </div>

    <script type="text/javascript">
	$(document).ready(function(e) {
		wrapOne();
		wrapSeven();
		timedText();
	});

	function wrapOne(){
		$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=2000){
			$('.webcam-summary-threestep .animate img').animate({
				'top':'138px',
				'opacity':1
			},3000);
		}
		})	
	}
	
	function wrapSeven(){
		$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=3400){
			$(".webcam-summary-threestep .public-bot-text").fadeIn(6000);
		}
		})	
	}
	
	</script>
    <style type="text/css">
	.webcam-summary-threestep .animate img{display: block;position: absolute;left: 75%; margin-left: -465px;top: 588px;
    opacity: 0;}
		.beef-wrapper .section .public-six-text{
			position: absolute;
			top: 26%;
			left: 15%;
			color:#FFF;
			font-size:26px;
			width:400px;
			
		}
		ul,li{list-style:none; padding-left:0px;}
		.webcam-summary-threestep .public-six-text ul{margin-top:50px;}
		.webcam-summary-threestep .public-six-text ul li{float:left; margin-right:40px;  
		border: 2px solid #FFF; padding:8px; width:131px;}
	</style>
    <div class="section webcam-summary-threestep" style="background:#ABABAB; height:750px;">
       <div class="public-six-text text-b">
       		<p>Smartcam Technology<br>options from FOSCAM</p>
            <p style="font-size:14px;">1080P Pan & Tilt WiFi Camera with Smartcam<br> Technology</p>
            <p style="font-size:24px;padding-top:6px; width:53px; height:32px;
            text-align:center;
    border: 2px solid #FFF;
    -moz-border-radius: 15px; 
    -webkit-border-radius: 15px; 
    border-radius:15px;">R2</p>
            <ul>
            	<li><img src="/Public/Home/images/motion-detection/12.png" height="128"></li>
                <li><img src="/Public/Home/images/motion-detection/13.png"></li>
            </ul>
       </div>
        <div class="animate">
           	<img src="/Public/Home/images/motion-detection/11.png">
        </div>
       
    </div>
    <style type="text/css">
		.beef-wrapper .section .public-bot-text{
			position: absolute;
			top: 6%;
			left: 28%;
			color:#FFF;
			font-size:30px;
			text-align:center;
			width:650px;
			text-shadow: 1px 2px 3px #000000;
			display:none;
		}
	</style>
    <div class="section webcam-summary-threestep" style="background:url(/Public/Home/images/motion-detection/14.png) no-repeat center; height:740px;">
        <div class="public-bot-text text-b">
        	<p>FOSCAM’s steps to intelligent machine vision</p>
            <p style="font-size:16px;">Smartcam Technology is just the first step to machine vision for FOSCAM. Many forthcoming technologies which do better image-based analysis will make FOSCAM camera not just see but understand what it sees in the future.</p>
            
            <p style="font-size:18px; top:235px; position:absolute; left:265px;">Machine Vision</p>
            <p style="font-size:18px; top:545px; position:absolute; left:225px;">Smartcam Technology </p>       
        </div>
    </div>

    
    
    
</div>   
