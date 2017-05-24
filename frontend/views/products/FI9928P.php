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
	margin: 5px 0 35px 0;
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
	left: 50%;
	margin-left: -45px;
	top: 178px;
	opacity: 0;
}
.wrap-back-2 {
	background: url(/Public/Home/images/goods_img/fi9928p/02.png) no-repeat center;
	background-size: cover;
	height: 768px;
	min-width: 1160px;
	max-width: 100%;
}
.wrap-back-2 .w-txt {
    width: 480px;
    position: absolute;
    left: 80px;
    top: 110px;
	color:#FFF;
}
.wrap-back-2 .w-txt p{color:#FFF;padding:20px 0px 20px 0px; line-height:25px;}

.wrap-back-3 {
	background: url(/Public/Home/images/goods_img/fi9928p/03.png) no-repeat center;
	background-size: cover;
	height: 768px;
	min-width: 1160px;
	max-width: 100%;
}

.wrap-back-3 .w-txt {
    width: 420px;
    position: absolute;
    left: 80px;
    top: 110px;
	color:#FFF;
}
.wrap-back-3 .w-txt h2{
	color:#FFFFFF;
}
.wrap-back-3 .w-txt p{
	color:#FFFFFF;
	padding-top:20px;
}
.wrap-back-3 .night{ color:#FFF;position: absolute;left: 260px; top: 720px;}
.wrap-back-3 .conventional{color:#FFF;position: absolute;left: 760px; top: 720px;}








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
	
	height: 677px;
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

.wrap-back-5 {
    background: url(/Public/Home/images/goods_img/fi9928p/05.png) no-repeat center;
    background-size: cover;
    height: 768px;
    width: 100%;	
}
.wrap-back-5 .w-txt {
    width: 600px;
    position: absolute;
    left: 290px;
    top: 80px;
    text-align: center;
	
}

.wrap-back-5 .w-txt h2{
	color:#FFF;
}
.wrap-back-5 .w-txt p{
	color:#FFF;
	line-height:23px;
}
.warp-eleven{
    background: url(/Public/Home/images/goods_img/fi9928p/06.png) no-repeat center;
    background-size: cover;
    height: 768px;
    width: 100%;	
}
.warp-eleven .w-txt{
    width: 367px;
	position:absolute;
    left: 70px;
    top: 120px;
}
.warp-eleven .w-txt h2{
	font-size:26px;
	color:#FFF;
}
.warp-eleven .w-txt p{
	    margin-top: 25px;
		color:#FFF;}
		
.big-back-2{
	height:768px; 
	max-width: 100%;
	min-width:1160px;}
	
.big-back-2 .w-txt {
    width: 500px;
    position: absolute;
    left: 80px;
    top: 80px;
}
.big-back-2 .animate img {
    position: absolute;
    left: 580px;
    padding-top: 100px;
}
.big-back-2 .w-txt h2{color:#000;}
.big-back-2 .w-txt p{color:#000; padding:20px 0px 20px 0px; line-height:23px;}

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
            <h2 style="font-size:38px;">More powerful<br />than ever</h2>
            <p style="color:#000000; font-size:14px;">1080P PTZ dome</p>
            <div class="border" style="width:130px; margin-bottom:6px; padding-top:6px;">FI9928P</div>
            
        </div>
        <div class="animate">
            <img src="/Public/Home/images/goods_img/fi9928p/01.png" />
        </div>
    </div>
</div>
<div class="wrap-back-2">
	<div class="comWith">
    	<div class="w-txt">
        	<h3 style="font-size:26px;">Luxury hardware<br />for most powerful camera</h3>
            <p>Professional SONY CMOS sensor, the low light imaging sensor, supports low lux color night vision and shows you more details with full color image in near darkness. Reliable Ambarella chip provides smooth video feed at low bit rate. 4X optical zoom dual-motor lens is equipped for superb magnification effect.</p>   
        </div>
	</div>
</div>
<div class="wrap-back-3">
<div class="comWith">
    	<div class="w-txt">
       		<h3 style="font-size:26px;">Full color image in near darkness </h3>
            <p>Powerful SONY Starvis sensor supports low light color night vision and shows you more details with full color image in near darkness. The 1080P high definition video feed is sharper than ever. </p>
        </div>
        <div class="night">Starvis Night Vision</div>
        <div class="conventional">Conventional</div>
    </div>
</div>
<div class="wrap-back-4">
	<div class="comWith">
    	<div class="w-txt">
        <h2 style="font-size:26px;">Artful 4+2 grouping of infrared lamps<br />for clearer night vision</h2>
        <p style="font-size:14px; padding:20px 0px 30px 0px; line-height:23px;">To provide clearer night vision image, six highly efficient infrared lamps are divided into two groups for wide angle viewing and narrow angle viewing respectively. The switch of lamp group corresponds automatically to the focus of lens.</p>
        </div>
        <div><img src="/Public/Home/images/goods_img/fi9928p/04.png" /></div>
        <div style="text-align:center; padding:20px 0px 20px 0px;">Tips: IR range of FI9928P for night vision is up to 196 feet/60 meters.</div>
	</div>
</div>
<div class="wrap-back-5">
	<div class="comWith">
    	<div class="w-txt">
        	<h2>Super wide pan & tilt range <br />and 4X optical zoom</h2>
<p>ontrol the pan & tilt rotation of camera from your phone to see your space without blind spots. Never leave anything to doubt with 4X optical zoom and 6X digital zoom. Auto focus works well with zoom to provide clear image for you.</p>
        </div>
    </div>
</div>



<div class="warp-eleven">
	<div class="comWith">
    	<div class="w-txt">  
        	<h2>Waterproof external Micro SD <br />card slot for easy operation</h2>
            <p>Insert Micro SD card for local storage is not tricky any longer. You don’t need to disassemble the camera, but just remove the two screws on a small cover to see the Micro card slot. The best part is, both the cover and other parts of camera are waterproof for the outdoor use.</p>
        </div>
    </div>
</div>


<div class="big-back-2">
	<div class="comWith">
    	<div class="w-txt">  
        	<h2>Retain crucial moments <br />with Foscam Cloud Service</h2>
            <p>TF card storage is relatively cheap. But what if it fails? Or perhaps a fire? Or worse, as part of a burglary, it is stolen along with your other valuables? Its capacity is far from enough for you? Foscam Cloud Service can help settle all these problems.</p>
            <div><img src="/Public/Home/images/goods_img/fi9928p/08.png" /></div>
        </div>
        <div class="animate">
    	<img src="/Public/Home/images/goods_img/fi9928p/07.png">
    </div>
	</div>
</div>
        
        
<div class="wrap-eight">
	<div class="comWith" style="width:700px;">
    	<h2>Product Details</h2>
    	<img src="/Public/Home/images/goods_img/fi9928p/09.png" />
    </div>
</div>
<div class="wrap-nine">
	<div class="comWith">
    	<h2>Main Features</h2>
    	<img src="/Public/Home/images/goods_img/fi9928p/10.png" />
    </div>
</div>
<div class="main7" style="background:none;">
	<div class="main7_7">
    <a class="goods_info_left"><img src="/Public/Home/images/goods_img/goods_info_left.png" width="65" /></a>
    <a class="goods_info_right"><img src="/Public/Home/images/goods_img/goods_info_right.png" width="65" /></a>
		<div class="main7_7_div" style="margin-top:100px;">
        	<ul>
            	<li style=" display:block"><a href="#"><img src="/Public/Home/images/goods_img/fi9928p/FI9928P-1.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/fi9928p/FI9928P-2.jpg"</li></a></li>
                <li><a href="#"><img src="/Public/Home/images/goods_img/fi9928p/FI9928P-3.jpg"</li></a></li><li><a href="#"><img src="/Public/Home/images/goods_img/fi9928p/FI9928P-4.jpg"</li></a></li>
              
            </ul>
			</div>
     
    </div>
</div>

</div>



<div id="techspecs" style="display:none;">
<p style="  font-size: 32px; margin:40px auto 20px; width:800px; position:relative; left:-155px; color: #f92323;">Tech Specs Table</p>
	<table class="tableizer-table">
    <tr class="tableizer-firstrow">
      <th colspan="3">ITEMS</td>
      <th colspan="5">FI9928P </td>
    </tr>
    <tr>
      <td rowspan="3">Image Sensor</td>
      <td colspan="2">Sensor</td>
      <td colspan="5">Sony  High Definition Color CMOS Sensor</td>
    </tr>
    <tr>
      <td colspan="2">Display Resolution</td>
      <td colspan="5">2.0 Megapixel</td>
    </tr>
    <tr>
      <td colspan="2">Min. Illumination</td>
      <td colspan="5">0 Lux (With IR Illuminator)</td>
    </tr>
    <tr>
      <td rowspan="4">Lens</td>
      <td colspan="2">Lens Type</td>
      <td colspan="5">Glass Lens</td>
    </tr>
    <tr>
      <td colspan="2">Focal Length</td>
      <td colspan="5">f:2.8~12mm</td>
    </tr>
    <tr>
      <td colspan="2">Aperture</td>
      <td colspan="5">F=1.6</td>
    </tr>
    <tr>
      <td colspan="2">Angle of View</td>
      <td colspan="5">Horizontal: 40°~105°; Diagonal: 48°~125°</td>
    </tr>
    <tr>
      <td rowspan="9">Video</td>
      <td colspan="2">Image Compression</td>
      <td colspan="5">H.264</td>
    </tr>
    <tr>
      <td colspan="2">Image Frame Rate</td>
      <td colspan="5">25fps maxmium, downward adjustable</td>
    </tr>
    <tr>
      <td colspan="2">Resolution</td>
      <td colspan="5">1080P(1920x1080), 720P(1280 x 720), VGA(640 x 480), QVGA(320 x 240)</td>
    </tr>
    <tr>
      <td colspan="2">Stream</td>
      <td colspan="5">Dual stream</td>
    </tr>
    <tr>
      <td colspan="2">Image Adjustment</td>
      <td colspan="5">The hue, brightness, contrast, saturation and sharpness are adjustable</td>
    </tr>
    <tr>
      <td colspan="2">Flip Image</td>
      <td colspan="5">Flip and mirror</td>
    </tr>
    <tr>
      <td colspan="2">Infrared Mode</td>
      <td colspan="5">Automatic or manual</td>
    </tr>
    <tr>
      <td colspan="2">Pan/Tilt Angle</td>
      <td colspan="5">Horizontal: 355°; Vertical: 90°</td>
    </tr>
    <tr>
      <td colspan="2">Night Vision</td>
      <td colspan="5">6pcs IR-array lights, IR range up to 196 feet (60 meters)</td>
    </tr>
    <tr>
      <td rowspan="2">Audio</td>
      <td colspan="2">Input/Output</td>
      <td colspan="5">External 3.5mm standard interface for two-way audio</td>
    </tr>
    <tr>
      <td colspan="2">Audio Compression</td>
      <td colspan="5">PCM</td>
    </tr>
    <tr>
      <td rowspan="5">Network</td>
      <td colspan="2">Ethernet</td>
      <td colspan="5">One 10/100Mbps RJ45 port</td>
    </tr>
    <tr>
      <td colspan="2">Wireless Standard</td>
      <td colspan="5">IEEE802.11b/g/n</td>
    </tr>
    <tr>
      <td colspan="2">Data Rate</td>
      <td colspan="5">IEEE802.11b: 11Mbps(Max.);<br />
        IEEE802.11g: 54Mbps(Max.);<br />
        IEEE802.11n:&nbsp;150Mbps(Max.).</td>
    </tr>
    <tr>
      <td colspan="2">Wireless Security</td>
      <td colspan="5">WEP, WPA, WPA2</td>
    </tr>
    <tr>
      <td colspan="2">Network Protocol</td>
      <td colspan="5">IP, TCP, UDP, HTTP, HTTPS, SMTP, FTP, DHCP, DDNS, UPnP, RTSP</td>
    </tr>
    <tr>
      <td rowspan="2">System Requirements</td>
      <td colspan="2">Operating System</td>
      <td colspan="5">Microsoft Windows XP, Vista, 7, 8; Mac OS; iOS, Android</td>
    </tr>
    <tr>
      <td colspan="2">Browsers</td>
      <td colspan="5">Microsoft IE, Mozilla Firefox, Google Chrome, Apple Safari</td>
    </tr>
    <tr>
      <td rowspan="6">Other Features</td>
      <td colspan="2">Motion Detection</td>
      <td colspan="5">Alert push to email, FTP and mobile app; Alarm snapshot uploaded to FTP</td>
    </tr>
    <tr>
      <td colspan="2">Privacy Zone</td>
      <td colspan="5">Set privacy zone manually</td>
    </tr>
    <tr>
      <td colspan="2">User Accounts</td>
      <td colspan="5">Three-level user role</td>
    </tr>
    <tr>
      <td colspan="2">Firewall</td>
      <td colspan="5">Supports IP filtering</td>
    </tr>
    <tr>
      <td colspan="2">Reset</td>
      <td colspan="5">Reset button is available</td>
    </tr>
    <tr>
      <td colspan="2">Storage</td>
      <td colspan="5">MicroSD Card (up to 128GB)</td>
    </tr>
    
    <tr>
      <td rowspan="2">Power</td>
      <td colspan="2">Power Supply</td>
      <td colspan="5">DC12V/2.0A</td>
    </tr>
    <tr>
      <td colspan="2">Power Consumption</td>
      <td colspan="5">10W (Max.)</td>
    </tr>
    <tr>
      <td rowspan="2">Physical</td>
      <td colspan="2">Dimensions (LxWxH)</td>
      <td colspan="5">234×209×138mm  (9.21''×8.23''×4.43'')</td>
    </tr>
    <tr>
      <td colspan="2">Net Weight</td>
      <td colspan="5">1850g</td>
    </tr>
    <tr>
      <td rowspan="4">Environment</td>
      <td colspan="2">Operating Temperature</td>
      <td colspan="5">-20°C~60° (-4°F~140°F)</td>
    </tr>
    <tr>
      <td colspan="2">Operating Humidity</td>
      <td colspan="5">20%~85% (non-condensing)</td>
    </tr>
    <tr>
      <td colspan="2">Storage Temperature</td>
      <td colspan="5">-20°C~60° (-4°F~140°F)</td>
    </tr>
    <tr>
      <td colspan="2">Storage Humidity</td>
      <td colspan="5">0%~90% (non-condensing)</td>
    </tr>
    <tr>
      <td>Certification</td>
      <td colspan="7">CE, FCC, RoHS</td>
    </tr>
  </table>
  <br />
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
		'top':'0px',
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
