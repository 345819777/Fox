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
	color: #2c2c2c;
}
.w-txt h1 span {
	font-size: 29px;
	position: relative;
	top: -25px;
	left: 5px;
}
.wrap-one {
	height: 600px;
	background-color: #e1e2e1;
	overflow: hidden;
}
.wrap-one .w-txt {
	width: 365px;
 	left: 122px;
	top: 105px;
	position: absolute;
}
.wrap-one .w-txt .border {
	font-size: 24px;
	width: 108px;
	height: 30px;
	/*margin: 0 auto;*/
	border: 1px solid black;
	text-align: center;
	margin-top:50px;
}
.wrap-one .w-txt p {
	font-size: 16px;
	margin: 5px 0 10px 0;
}
.wrap-one .w-txt .soon {
    position: absolute;
    left: 755px;
    top: 13px;
    font-size: 32px;
	    z-index: 1;
}
.wrap-one .w-txt p img {
	position: absolute;
	left: 725px;
	top: 25px;
	z-index: 1;
	display: none;
}




/*
.wrap-one .w-txt p:last-child {
	position: absolute;
	left: 655px;
	top: 183px;
	font-size: 32px;
}*/
.wrap-one .animate img {
	display: block;
	width: 454px;
	position: absolute;
	left: 56%;
	margin-left: -45px;
	top: 178px;
	opacity: 0;
}
.wrap-back-2 {
	background: url(/Public/Home/images/goods_img/r2new/02-2.png) no-repeat center;
	background-size: cover;
	height: 760px;
	min-width: 1160px;
	max-width: 100%;
}
.wrap-back-2 .w-txt {
    width: 360px;
    position: absolute;
    left: 80px;
    top: 110px;
	color:#FFF;
}
.wrap-back-2 .w-txt p{color:#FFF;padding:20px 0px 20px 0px; line-height:25px;}



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



.warp-twelve{
	width: 100%;
    height: 637px;
 	padding-bottom:100px;
	padding-top:60px;
	
}
.warp-twelve .w-txt{
	width: 487px;
    height: 180px;
    margin: 55px auto 0;
    
	padding-top:0px;
	position: absolute;
}
.warp-twelve img{    

}
.warp-twelve .w-txt h2{
	font-size:30px;
	color:#2d2e2e;
}
.warp-twelve .w-txt p{
	    margin-top: 25px;}
.warp-twelve p{
	
	
	margin: 55px auto 0;
}
.warp-twelve .tip{
	width:500px;
	position:absolute;
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
	background: url(/Public/Home/images/goods_img/fi9961ep/FI9961EP_7.png) no-repeat center;
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
	background:#eeeeee;
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
	
	height: 600px;
}
.wrap-nine h2 {
	text-align: center;
	padding: 75px 0;
}
.wrap-nine img {
	width: 100%;
	position: relative;
	left:0px;
}

table.tableizer-table {
		 width:1104px; margin:0 auto; border-collapse:collapse; text-align:center;
	} 
	.tableizer-table td , .tableizer-table th{
		 height:28px; border:1px solid gray; font-weight:100;
	}



.content {
    
    position: absolute;
    top: 190px;
    left: 0px;
	color:#FFFFFF;
}
.title1 {
    font-size: 30px;
    color:#FFFFFF;
	font-weight:normal;
}

.txt1-1 {
    font-size: 16px;
    color:#FFFFFF;
	width:320px;
	padding-top:20px;
	line-height:22px;
}
.wrap-back-4{  
    height: 723px;
    min-width: 1160px;
    max-width: 100%;
}
.wrap-back-4 .w-txt {
    width: 667px;
    margin: 0px auto 0;
    text-align: center;
    padding-top: 80px;
    color: #FFFFFF;
}



		
.big-back-2{
	background: url(/Public/Home/images/goods_img/r2new/10.png) no-repeat center;
	background-size: cover;
	height: 760px;
	min-width: 1160px;
	max-width: 100%;
}
	
.big-back-2 .w-txt {
    width: 350px;
    position: absolute;
    left: 30px;
    top: 160px;
}
.big-back-2 .animate img {
    position: absolute;
    left: 580px;
    padding-top: 100px;
}
.big-back-2 .w-txt h2{color:#FFF;}
.big-back-2 .w-txt p{color:#FFF; padding:20px 0px 20px 0px; line-height:23px;}


.big-back-12{
	height:768px; 
	max-width: 100%;
	min-width:1160px;
	background:#eeeeee;}
	
.big-back-12 .w-txt {
    width: 350px;
    position: absolute;
    left: 80px;
    top: 80px;
}
.big-back-12 .animate img {
    position: absolute;
    left: 460px;
    padding-top: 100px;
}
.big-back-12 .w-txt h2{color:#000;}
.big-back-12 .w-txt p{color:#000; padding:20px 0px 20px 0px; line-height:23px;}	

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
        	<p style="color:#000000; font-size:16px;">Smart pan & tilt camera</p>
            <h2 style="font-size:38px; padding-bottom:25px;">for 360°coverage</h2>
            <div><img src="/Public/Home/images/goods_img/r2new/01.png" /></div>
            <div class="border" style="width:130px; margin-bottom:6px; padding-top:6px;">R2</div>
            <!--<p><img src="/Public/Home/images/goods_img/coming-soon.png" style="display: inline;"></p>-->
        </div>
        <div class="animate">
            <img src="/Public/Home/images/goods_img/r2new/02.png" />
        </div>
    </div>
</div>
<div class="wrap-back-2">
	<div class="comWith">
    	<div class="w-txt">
        	<h3 style="font-size:26px;">View your space without<br /> blind spots</h3>
            <p>See more of your space with easy pan & tilt control from your phone. Super wide rotation range makes it convenient to trace the motions of kids or pets. Panoramic coverage ensures intruders have nowhere to hide.</p>   
        </div>
	</div>
</div>
<style type="text/css">
.wrap-back-3 {
	position: relative;
	background:#eeeeee;
	height: 760px;
	min-width: 1160px;
	max-width: 100%;
}


.wrap-back-3 .videoreverse-img {
    position: absolute;
    width: 50%;
    height: 760px;
    left: 50%;
    top: 190px;
    background-repeat: no-repeat;
    /* background-position: center center; */
    /* background-image: url(images/06.png); */
    background-image: url(/Public/Home/images/goods_img/r2new/03.png);
    /* margin-left: 245px; */
    margin-top: -190px;
}
.wrap-back-3 .public-five-text {
    color: #5c5c5c;
    font-size: 30px;
    left: 10%;
    position: absolute;
    top: 16%;
    width: 350px;
}
</style>
<!--
<div class="wrap-back-3">
	<div class="public-five-text">
    	<h2>Only the alerts<br /> you care about</h2>
        <p style="padding-top:15px; padding-bottom:100px; color:#000;">Fluttering curtains, pet movements and other background events may cause inessential alerts, but most cameras can’t distinguish them from human movement. R2 with Smartcam Technology can cut down on alerts by only sending alert notifications in response to human activity.</p>
        <p>Tips: <br />
- If you wish to receive alerts about the activities of your pet, please enable motion detection alerts in the camera settings. Please note that you will also get alerts unrelated to human motion by selecting that setting.</p>
        <p style="padding-top:30px;">- It is strongly recommended that you enable Motion Detection triggered recording, which allows the camera to continuously capture any motion and preserves evidence.</p>
    </div>
    <div class="videoreverse-img"></div>
</div>-->



<div class="wrap-back-5">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Sharp video feed without image distortion</h2>
<p style="padding-top:20px;">True 1080p streaming video provides stunning image quality for an optimum visual experience. Advanced built-in software effectively prevents image distortion and creates a vivid image effect. </p>
		<div><img src="/Public/Home/images/goods_img/r2new/04.png" /></div>
        </div>
    </div>
</div>

<div class="warp-eleven">
	<div class="comWith">
    	<div class="w-txt">  
        	<h2>WDR provides image quality that surpasses the human eye’s capability</h2>
            <p>Advanced WDR technology optimizes image quality under a wide range of lighting conditions allowing visibility in both bright and dark areas. The WDR technology visual effect results in images that are better than the human eye’s capabilities.</p>
            <p style="margin-top:50px;"><img src="/Public/Home/images/goods_img/r2new/WDR.png" /></p>
            
        </div>
        <div class="animate"><img src="/Public/Home/images/goods_img/r2new/05.png" /></div>
    </div>
</div>
<style type="text/css">
.warp-eleven{
    background:#EEEEEE;
    height: 768px;
    width: 100%;	
}
.warp-eleven .w-txt{
    width: 360px;
	position:absolute;
    left: 70px;
    top: 180px;
}
.warp-eleven .w-txt h2{
	font-size:26px;
	color:#000;
}
.warp-eleven .w-txt p{
	    margin-top: 25px;
		color:#000;}
		
.warp-eleven .animate img {
    position: absolute;
    left: 460px;
    padding-top: 83px;
}
.wrap-back-5 { 
    height: 768px;
    width: 100%;	
}
.wrap-back-5 .w-txt {
    width: 700px;
    position: absolute;
    left: 290px;
    top: 60px;
    text-align: center;
}

.wrap-back-5 .w-txt h2{
	color:#000;
}
.wrap-back-5 .w-txt p{
	color:#000;
	line-height:23px;
}
.wrap-back-5 img {
    position: absolute;
    left: -161px;
	padding-top:50px;
}
		
.big-back-11 {
    background: url(/Public/Home/images/goods_img/r2new/06.png) no-repeat center;
	background-size: cover;
	height: 618px;
	min-width: 1160px;
	max-width: 100%;
	margin-top:80px;
	margin-bottom:50px;
}
.big-back-11 .w-txt .a{
	position: absolute;
	width:300px;
}

.big-back-11 .w-txt .b{
	position: absolute;
	left:820px;
	width:300px;
}

.big-back-11 .w-txt .c{
	position: absolute;
	top:560px;
	width:300px;
}
</style>
<div class="big-back-11">
	<div class="comWith">
    	<div class="w-txt">
        	<div class="a">
        	<h2>Detected motion triggers recording and alert push</h2>
            <p style="padding-top:20px; color:#000000;">Advanced algorithm can detect motions automatically. If something happens, video recording is triggered immediately. Meanwhile, the real-time alerts about the event will be pushed to your email, FTP or mobile phone.</p>
            </div>
            <div class="b">
            	<h2>Clear night vision helps identify intruders at night</h2>
                <p style="padding-top:20px; color:#000000;">Thirteen infrared LEDs provide 26-feet (8-meter) IR range for you to see clearly in complete darkness. Around-the-clock guard leaves no window of opportunity for burglars.</p>
            </div>
            <div class="c"><p style="color:#212121;">Tips: Real-time captured image alerts can be pushed to you if you have subscribed to the Foscam Cloud Service. Otherwise, there are only real-time text alert pushes available.</p>
            </div>
        </div>
    </div>
</div>

<div class="big-back-12">
	<div class="comWith">
    	<div class="w-txt">  
        	<h2>Flexible storage options to retain crucial moments</h2>
            <p>Three storage options exist for you to choose from. SD card storage doesn’t require a monthly fee, ONVIF-compliant NVR supports large capacity hard drives, and Foscam Cloud Service keeps your data safe and has no capacity limit.</p>
            <div style="margin-top:200px; padding-bottom:20px;"><img src="/Public/Home/images/goods_img/r2new/09.png"></div>
            <div><b>Tips:</b> Please prepare Micro SD card or NVR with hard drive for local storage when necessary. Or subscribe to Foscam Cloud Service at quite low cost.</div>
        </div>
        <div class="animate">
    	<img src="/Public/Home/images/goods_img/r2new/08.png">
    </div>
	</div>
</div>

<div class="big-back-2">
	<div class="comWith">
    	<div class="w-txt">  
        	<h2>One-click firmware upgrade via mobile app</h2>
            <p>FOSCAM regularly releases firmware updates to protect its camera away from hackers. But it used to be tricky for the user to operate. In view of this, one-click firmware upgrade is developed for firmware update on mobile App.</p>
        </div>
	</div>
</div>
        
        
<div class="wrap-eight">
	<div class="comWith" style="width:700px;">
    	<h2>Product Details</h2>
    	<img src="/Public/Home/images/goods_img/r2new/11.png" />
    </div>
</div>
<div class="wrap-nine">
	<div class="comWith">
    	<h2>Main Features</h2>
    	<img src="/Public/Home/images/goods_img/r2new/12.png" />
    </div>
</div>
<div class="main7" style="background:none;">
	<div class="main7_7">
    <a class="goods_info_left"><img src="/Public/Home/images/goods_img/goods_info_left.png" width="65" /></a>
    <a class="goods_info_right"><img src="/Public/Home/images/goods_img/goods_info_right.png" width="65" /></a>
		<div class="main7_7_div" style="margin-top:100px;">
        	<ul>
            	<li style="display:block"><a href="#"><img src="/Public/Home/images/goods_img/r2/1.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/r2/2.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/r2/3.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/r2/4.jpg"</li></a></li>
              
            </ul>
			</div>
     
    </div>
</div>

</div>



<div id="techspecs" style="display:none;">
<div class="main8">
	<div class="main8_8">
    	<p>Tech Specs Table</p>
        <span style="width:300px;">name</span><span style="width:800px;">R2</span><br /><span style="width:300px;">sensor type</span><span style="width:800px;"> 	1/3'' CMOS </span><br /><span style="width:300px;">display resolution</span><span style="width:800px;">1920x1080 (2.0 Megapixel)
</span><br /><span style="width:300px;">frame rate</span><span style="width:800px;">30fps </span><br /><span style="width:300px;">ir cut</span><span style="width:800px;">√</span><br /><span style="width:300px;">minimum lllumination</span><span style="width:800px;">0 Lux (With IR Illuminator) </span><br /><span style="width:300px;">lens type</span><span style="width:800px;">f:2.8mm; F:2.6
</span><br /><span style="width:300px;">diagonal angle of view</span><span style="width:800px;">110°</span><br /><span style="width:300px;">horizontal view angle</span><span style="width:800px;">95°(Pan/Tilt Angle: H=300°V=100°)
</span><br /><span style="width:300px;">ir range</span><span style="width:800px;">8m (26.2 feet)</span><br /><span style="width:300px;">ethernet</span><span style="width:800px;">√</span><br /><span style="width:300px;">wps</span><span style="width:800px;">√</span><br /><span style="width:300px;">wireless</span><span style="width:800px;"> 	IEEE802.11b/g/n </span><br /><span style="width:300px;">wireless security</span><span style="width:800px;"> 	WEP, WPA, WPA2 </span><br /><span style="width:300px;">p2p</span><span style="width:800px;">√</span><br /><span style="width:300px;">external i/o</span><span style="width:800px;">N/A</span><br /><span style="width:300px;">802.3af poe</span><span style="width:800px;">N/A</span><br /><span style="width:300px;">external card slot</span><span style="width:800px;">micro SD card</span><br /><span style="width:300px;">video format</span><span style="width:800px;"> 	H.264 </span><br /><span style="width:300px;">multi stream</span><span style="width:800px;"> 	dual stream </span><br /><span style="width:300px;">motion detection</span><span style="width:800px;">√</span><br /><span style="width:300px;">scheduled recording</span><span style="width:800px;">√</span><br /><span style="width:300px;">built in ddns server</span><span style="width:800px;">√</span><br /><span style="width:300px;">browser supported</span><span style="width:800px;">IE8 and above;version;Firefox;Chrome;Safari</span><br /><span style="width:300px;">os supported</span><span style="width:800px;">Windows XP, 7, 8; Mac OS; iOS, Android
</span><br /><span style="width:300px;">infrared mode</span><span style="width:800px;">Automatic or manual </span><br /><span style="width:300px;">day night</span><span style="width:800px;">√</span><br /><span style="width:300px;">firewall</span><span style="width:800px;"> 	Supports IP Filtering </span><br /><span style="width:300px;">2 way audio</span><span style="width:800px;">√</span><br /><span style="width:300px;">built in microphone</span><span style="width:800px;">√</span><br /><span style="width:300px;">external microphone input</span><span style="width:800px;">N/A</span><br /><span style="width:300px;">built in speaker</span><span style="width:800px;">√</span><br /><span style="width:300px;">external speaker output</span><span style="width:800px;">N/A</span><br /><span style="width:300px;">dimensions(mm)</span><span style="width:800px;"> 	70*70*120</span><br /><span style="width:300px;">power adapter</span><span style="width:800px;">5V/2.0A </span><br /><span style="width:300px;">power consumption</span><span style="width:800px;"><4.8W</span><br /><span style="width:300px;">operate temper</span><span style="width:800px;"> 	-10°C ~ 50° (14°F ~ 122°F) </span><br /><span style="width:300px;">operating humidity</span><span style="width:800px;">20% ~ 85% non-condensing </span><br /><span style="width:300px;">certification</span><span style="width:800px;">CE, FCC, RoHS </span><br /><br /><br />    </div>
</div>

</div>
<div id="download" style="display:none;">
<div class="main7">
	<div class="main7_7">
    	<p>Download Center</p>
        <div class="main7_7_div">
        	<div class="left">
            	<div style=" height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/download-center/user-manual.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download User Manual</p></a>
                </div>
                <div style=" margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/download-center/quick-installation-guide.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Quick Guide</p></a> 
                </div>
            </div>
            <div class="right">
            	<div style=" float:right; height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/download-center/firmware-downloads.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Firmware</p> </a>
                </div>
                <div style=" float:right;  margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/download-center/software-tools.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Software</p></a> 
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
		'top':'90px',
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
