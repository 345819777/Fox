<style>
@charset "utf-8";
/* CSS Document */
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
body,img {
	margin: 0;
	padding: 0;
	font-family:Helvetica, sans-serif;
}
img {
	border: none;
}
.comWith {
	width: 1160px;
	margin: 0 auto;
	position: relative;
}
.dn {
	width: 313px;
	height: 46px;
	position: absolute;
	left: 455px;
	top: 685px;
}
.dn span {
	line-height: 46px;
}
.dn span:last-child { position:relative; left:52px;}
.dn .day, .dn .night {
	float: left;
	border: 1px solid #aaa;
	width: 154px;
	height: 100%;
	cursor: pointer;
}
.dn .day {
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
	background-color: #dcdcdc;
	border-right: 1px solid #aaa;
}
.dn .night {
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
	background-color: #dcdcdc;
	border-right: 1px solid #aaa;
}
.dn span img {
  position: relative;
  top: 8px;
  left: 15px;
 }
.h1 {
	font-size: 30px;
	color: #2b2b2b;
	width: 400px;
	text-align: left;
	position: absolute;
	top: 185px;
	left: 205px;
}
.h2 {
	font-size: 30px;
	color: #2d2e2e;
	width: 315px;
	position: absolute;
	top: 105px;
	left: 100px;
}
.p {
	font-size: 15px;
	color: #212121;
	width: 323px;
	position: absolute;
	top: 195px;
	left: 100px;
}
.wrap-one {
	height: 768px;
	background: url(/Public/Home/images/goods_img/fn3104w/01.jpg) no-repeat center;
	background-size: cover;
	position: relative;
}
.wrap-one .h1{color:#FFF; left:20px;}
.wrap-one .h2{color:#FFF; left:20px; font-size:18px; font-weight:normal;top:280px;}

.wrap-one .w-txt .border {
	font-size: 20px;
	color: #FFF;
	width: 208px;
	height: 40px;
	position: absolute;
	top: 400px;
	left: 20px;
	border: 1px solid #FFF;
	text-align: center;
	line-height: 44px;
}

.wrap-one .w-txt p img{
	position: absolute;
    left: 985px;
    top: 185px;
    z-index: 1;
    display: none;
}


.wrap-two {
	width: 100%;
	height: 748px;
	background: #eee;
}
.wrap-two img {
	position: relative;
	top: 35px;
	left:80px;
	display:none;
}
.wrap-two .h2{width:460px; left:0px;}
.wrap-two .p{width:430px; left:0px;top:160px;}

.wrap-two-one {
	width: 100%;
	height: 748px;
	/*background: #eee;*/
}
.wrap-two-one img {
	position: relative;
	top: 95px;
	/*display:none;*/
	left:400px;
}



.wrap-three {
	width: 100%;
	height: 830px;
	background: #fff;
	text-align:center;
}
.wrap-three .h2{
	width: 585px;
	left: 300px;
	top: 58px;
}
.wrap-seven .h2 {
	width: 585px;
	left: 340px;
	top: 88px;
}
.wrap-three .p{
	width: 612px;
	left: 280px;
	text-align: center;
	top: 135px;
}

.wrap-seven .p {
	width: 612px;
	left: 280px;
	text-align: center;
	top: 155px;
}
.wrap-three img {
	position: absolute;
	left: 255px;
	top: 255px;
}
.wrap-four {
	width: 100%;
	height: 700px;
	background: #eee;
}
.wrap-four .h2 {
	width: 378px;
	left: 10px;
	top:65px;
}
.wrap-four .p {
	width: 368px;
	left: 10px;
	top:155px;
}
.wrap-four img:first-child {
	position: absolute;
	left: 955px;
	top: 88px;
	z-index: 1;
	opacity:0;
}
.wrap-four img:nth-child(2) {
	position: absolute;
	left: 195px;
	top: 88px;
	opacity:0;
}
.wrap-five {
	width: 100%;
	height: 877px;
	background: #fff;
}
.wrap-five .animate img:first-child {
	position: absolute;
	top: 533px;
	left: 100px;
	opacity:0;
}
.wrap-five .animate img:nth-child(2) {
	position: absolute;
	left: 475px;
	top: 285px;
	opacity:0;
}
.wrap-five .animate img:last-child {
	position: absolute;
	left: 1025px;
	top: 190px;
	opacity:0;
}
.wrap-five .h2 {
	width: 346px;
	top: 202px;
	left: 100px;
}
.wrap-five .p {
	top: 303px;
}
.wrap-six {
	min-width: 1160px;
	max-width: 100%;
	overflow: hidden;
	height: 877px;
	background: #eee;
}
.wrap-six .animate img:first-child {
	position: absolute;
	left: 40px;
	top: 356px;
	z-index: 1;
	opacity:0;
}
.wrap-six .animate img:last-child {
	position: absolute;
	left: 1025px;
	top: 150px;
	opacity:0;
}
.wrap-six .h2 {
	width: 296px;
	left: 40px;
}
.wrap-six .p {
	width: 380px;
	left: 40px;
}
.wrap-seven {
	width: 100%;
	height: 877px;
	background: #fff;
}
.wrap-seven .animate img {
	position: absolute;
	top: 282px;
	left: 320px;
	opacity:0;
}
.wrap-eight {
	min-width:1160px;
	max-width:100%;
	height: 767px;
	background: #eee;
	overflow:hidden;
}
.wrap-eight .h2, .wrap-eight .p {
	width: 686px;
	text-align:center;
	left:200px;
	
}

.wrap-eight .animate img:first-child {
	position: absolute;
	top: 485px;
	left: 505px;
	z-index:0;
}
.wrap-eight .animate img:nth-child(2) {
	position: absolute;
  top: 522px;
  left: 942px;
  width: 40%;
  opacity:0;
}
.wrap-eight .animate img:last-child {
  position: absolute;
  top: 555px;
  left: 955px;
  width: 2%;
  z-index:2;
}
.wrap-ten {
	width: 100%;
	height: 777px;
	background: #fff;
}
.wrap-ten img {
	position: absolute;
	top: 140px;
	left: 180px;
	/*opacity:0;*/
}
.wrap-ten .h2 {
	top: 60px;
	left: 400px;
}
.wrap-eleven {
	width: 100%;
	height: 677px;
	background: #eee;
}
.wrap-eleven img {
	position: absolute;
	top: 200px;
	/*opacity:0;*/
	left:-45px;
}
.wrap-eleven .h2 {
	font-size: 37px;
	left: 478px;
}
table#tableizer-table {
	width: 1104px;
  margin: 0 auto;
  border-collapse: collapse;
  text-align: center;
} 
#tableizer-table td {
	  height: 28px;
  border: 1px solid gray;
}
#tableizer-table th {
  height: 38px;
  border: 1px solid gray;
	font-weight: bold;
}
</style>
<div style="width:100%; background:rgba(0,0,0,0.8); display:none;position:fixed; left:0; top:0; overflow:hidden; z-index:20;">
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
            <div class="h1">A wireless security<br />system so flexible to install</div>
            <div class="h2">720P WiFi NVR Security System</div>
            <div class="border">FN3104W-B4</div>
            <!--<p><img src="/Public/Home/images/goods_img/coming-soon.png" style="display: inline;"></p>-->
        </div>
        
    </div>
</div>
<div class="wrap-two">
	<div class="comWith">  
    <div class="h2">Mount it wherever you’d like</div>
	<div class="p">Enjoy all the advantages of wireless security system, such as flexible mounting positions, easier wiring works and less damages to your decoration. It can be put anywhere, especially for detached buildings with nearby power sources.</div>
    <img src="/Public/Home/images/goods_img/fn3104w/02.png" />
    </div>
</div>
<style type="text/css">
.wrap-two-one .h2{width:420px; left:0px;}
.wrap-two-one .p{width:360px; left:0px;}
.wrap-two-one .tips{position:absolute;top:555px; width:400px; font-size:15px;}
.wrap-two-one .animate img:first-child{ position: absolute; left: 467px;top: 82px;}
.wrap-two-one .animate img:last-child {position: absolute;left: 391px;top: 82px;}
</style>
<div class="wrap-two-one">
	<div class="comWith">  
    <div class="h2">NVR and camera auto-pair, without your slightest effort</div>
	<div class="p">After being powered, four cameras will connect to the NVR in the same system automatically. No wiring among them is required at all for local viewing. Use Ethernet cable to connect NVR and router, and you’ll get remote viewing access.</div>
    <div class="tips"><b>Tips:</b> If it is necessary to replace the faulted camera in future, you need to connect the new camera (FI9800W) to NVR with Ethernet cable once first, and then they will be paired for automatic wireless connection. 
    </div>
        <div class="animate">
                <img src="/Public/Home/images/goods_img/fn3104w/04.gif" />
                <img src="/Public/Home/images/goods_img/fn3104w/03.png" />            
        </div>
    </div>
</div>

<style type="text/css">
	.wrap-two-two{background:#11182b; height:700px;}
	.wrap-two-two .h2{color:#FFF; width:380px; left:0px;}
	.wrap-two-two .p{color:#FFF; width:370px; left:0px;}
	.wrap-two-two .comWith img{position: relative;top: 32px;left: 400px;}
	.wrap-two-two .tips{position:absolute;color:#FFF;top:555px; width:400px;}
	.wrap-two-two .ft{position: absolute;color:#FFF;top:415px; width:400px;}
	.wrap-two-two .ft p{color:#FFF;font-family: "Helvetica", "Arial", sans-serif;} 
</style>
<div class="wrap-two-two">
	<div class="comWith">
        <div class="h2">Automatic channel picking for sustained WiFi speeds</div>
        <div class="p">WiFi speeds are a vexing problem in a lot of situations. This security system can automatically select the best channel to get you more stable network connection and boost your WiFi speed.</div>
        
        <div class="ft">
        	<p>In open space up to</p>
            <p><span style="font-size:50px;">360</span>&nbsp;<span style="font-size:30px;">ft</span></p>
            <p style="padding-top:10px;">(110 meters)</p>
        </div>
        
        <div class="tips">Tips: Please notice that the wireless signal distance is obtained in test environment without interference.</div>
        
		<img src="/Public/Home/images/goods_img/fn3104w/05.png" />
    </div>
</div>


<div class="wrap-three" style="background: url(/Public/Home/images/goods_img/fn3104w/06.png) no-repeat center;">
	<div class="comWith">
    	<div class="h2">Bandwidth-friendly streaming for optimum viewing experience</div>
        <div class="p">Adaptive streaming technology not only enables the optimum streaming video viewing experience, but also saves bandwidth for diverse devices such as your TV, tablet or phones. </div>
    </div>
</div>



<div class="wrap-four" style="background: url(/Public/Home/images/goods_img/fn3104w/07.png) no-repeat center;">
	<div class="comWith">
        <div class="h2" style="color:#FFF;">Multiple access for local and remote viewing</div>
		<div class="p" style="color:#FFF;">View and control your security system locally by connecting it to a monitor, or via major browsers such as IE and Safari, or via iOS & Android App on mobile devices remotely. </div>
    </div>
</div>

<style type="text/css">
	.wrap-four-one {width: 100%;height: 748px;background: #f3f3f3;}
	.wrap-four-one .h2 {width: 585px;left: 300px;top: 58px;text-align: center;}
	.wrap-four-one .p {width: 612px;left: 280px;text-align: center;top: 135px;}
	.wrap-four-one img {position: absolute;top: 220px;left: 180px;/* opacity: 0; */}
</style>

<div class="wrap-four-one">
	<div class="comWith">
    	<div class="h2">1TB hard drive for 14-day video history</div>
        <div class="p">Wanna figure out what happened in the past? One 1TB hard drive is pre-installed for 24/7 recording and you can play back the video history within the past 14 days to make more confident judgments.
</div>
        <img src="/Public/Home/images/goods_img/fn3104w/1TB.png" />
	</div>
</div>


<div class="wrap-seven" style="background: url(/Public/Home/images/goods_img/fn3104w/08.png) no-repeat center;">
	<div class="comWith">
		<div class="h2">Clear night vision for 24/7 surveillance</div>
        <div class="p">30 IR-LEDs provide 66-feet (20-meter) IR range for you to see clearly in complete darkness. Around-the-clock guard helps deter the criminals under the cover of night and let you rest easy anywhere anytime.</div>
        <div class="animate">
        
        </div>
    </div>
</div>
<div class="wrap-eight" style="background: url(/Public/Home/images/goods_img/fn3104w/09.png) no-repeat center;">
	<div class="comWith">
    	<div class="h2" style="color:#FFF;">IP66 rating to withstand severe<br />
weather conditions</div>
        <div class="p" style="top:190px;color:#FFF; clear:both;">IP66-rated housing is specially designed for camera to ensure protection against all types of bad weather. Year-round security monitoring never stops due to 14℉~140℉ operating temperature range.</div>
        <div class="animate">
        	
        </div>
        
    </div>
</div>

<div class="wrap-ten">
	<div class="comWith">
    <div class="h2">System Connection</div>
    <img src="/Public/Home/images/goods_img/fn3104w/10.png" />
    </div>
</div>
<div class="wrap-eleven">
	<div class="comWith">
    <div class="h2">Main Features</div>
    <img src="/Public/Home/images/goods_img/fn3104w/11.png" />
    </div>
</div>
  <div class="main7" style="background:none;">
    <div class="main7_7"> <a class="goods_info_left">
    <img src="/Public/Home/images/goods_img/goods_info_left.png" width="65" /></a> 
    <a class="goods_info_right">
    <img src="/Public/Home/images/goods_img/goods_info_right.png" width="65" /></a>
      <div class="main7_7_div" style="margin-top:100px;">
        <ul>
          <li style=" display:block"><a href="#">
          <img src="/Public/Home/images/goods_img/fn3104w/FN3104W-1.jpg" /> </a></li>
        
       
          <li><a href="#"><img src="/Public/Home/images/goods_img/fn3104w/FN3104W-2.jpg" /></a></li>
          
         
          <li><a href="#"><img src="/Public/Home/images/goods_img/fn3104w/FN3104W-3.jpg" /></a></li>
          
        
          <li><a href="#"><img src="/Public/Home/images/goods_img/fn3104w/FN3104W-4.jpg" /></a></li>
          
    
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="techspecs" style="display:none;">
  <div class="main8">
    <div class="main8_8" style="padding-bottom:0;">
      <p>Tech Specs Table</p>

  <table id="tableizer-table">
  	<thead>
    <tr>
      <th>NVR</th>
      <th>Model</th>
      <th colspan="6">FN3104W</th>
    </tr>
    </thead>
    <tr>
      <td>Video Input</td>
      <td>IP Video Input</td>
      <td colspan="6">4 Channels  HD IP camera input</td>
    </tr>
    <tr>
      <td rowspan="3">Video Output</td>
      <td>HD Output</td>
      <td colspan="6">1×HD OUT</td>
    </tr>
    <tr>
      <td>VGA Output</td>
      <td colspan="6">1×VGA</td>
    </tr>
    <tr>
      <td>Display Resolution</td>
      <td colspan="6">1280x720/60Hz, 1280x1024/60Hz, 1280x720/50Hz, 1280x1024/50Hz</td>
    </tr>
    <tr>
      <td rowspan="3">Recording</td>
      <td>Recording Resolution</td>
      <td colspan="6">720P per channel ( 4ch@720P )</td>
    </tr>
    <tr>
      <td>Record Mode</td>
      <td colspan="6">Manual / Time Scheduled / Motion Detect</td>
    </tr>
    <tr>
      <td>Compression Format</td>
      <td colspan="6">H.264</td>
    </tr>
    <tr>
      <td rowspan="2">Playback</td>
      <td>Synchronous Playback</td>
      <td colspan="6">4 channel 720P synchronous video playback </td>
    </tr>
    <tr>
      <td>Playback Mode</td>
      <td colspan="6">Fast forward / Fast backward / Frame forward / Slow Play</td>
    </tr>
    <tr>
      <td rowspan="4">Network</td>
      <td>Ethernet</td>
      <td colspan="6">One 10/100Mbps RJ45 port</td>
    </tr>
    <tr>
      <td>Wireless Standard</td>
      <td colspan="6">IEEE802.11b/g/n</td>
    </tr>
    <tr>
      <td>Wireless Security</td>
      <td colspan="6">WEP, WPA, WPA2</td>
    </tr>
    <tr>
      <td>Network Protocol</td>
      <td colspan="6">IP, TCP, UDP, HTTP, HTTPS, SMTP, FTP, DHCP, DDNS, RTSP, UPnP, ONVIF</td>
    </tr>
	<tr>
      <td rowspan="2">HDD</td>
      <td>HDD</td>
      <td colspan="6">1TB security grade hard drive (pre-installed)</td>
    </tr>
    <tr>
      <td>Capacity</td>
      <td colspan="6">Up to 4TB</td>
    </tr>
    <tr>
      <td rowspan="3">External Interface</td>
      <td>Network Interface</td>
      <td colspan="6">1× 10/100 Mbps RJ45 port</td>
    </tr>
    <tr>
      <td>USB Interface</td>
      <td colspan="6">1× USB2.0 interface for mouse and external storage</td>
    </tr>
    <tr>
      <td>Button</td>
      <td colspan="6">1× Power on/off button, 1× Reset button</td>
    </tr>
    <tr>
      <td rowspan="3">Software</td>
      <td>Computer Operating System</td>
      <td colspan="6">Microsoft Windows XP, 7, 8, 8.1, 10, Mac OS</td>
    </tr>
    <tr>
      <td>Internet Viewing</td>
      <td colspan="6">Microsoft IE8 and above versions, Safari</td>
    </tr>
    <tr>
      <td>Smart phone</td>
      <td colspan="6">iOS, Android, 3G/4G Smartphones</td>
    </tr>
    <tr>
      <td>Language</td>
      <td>Language</td>
      <td colspan="6">14 languages (Chinese, English, French, Hungarian, Czech, Dutch, Greek, Russian, Polish, Spanish, Portuguese, Italian, German, Finland)</td>
    </tr>
    <tr>
      <td rowspan="7">Physical and<br /> Environmental</td>
      <td>Power Supply</td>
      <td colspan="6">DC 12V/2A</td>
    </tr>
    <tr>
      <td>Dimensions (LxWxH)</td>
      <td colspan="6">234x234x52mm (9.25''x9.25''x2.04'')</td>
    </tr>
    <tr>
      <td>Net Weight (g)</td>
      <td colspan="6">660g</td>
    </tr>
    <tr>
      <td>Operating Temperature</td>
      <td colspan="6">-10°C~55°C (-4°F~131°F)</td>
    </tr>
    <tr>
      <td>Operating Humidity</td>
      <td colspan="6">20%~85% (non-condensing)</td>
    </tr>
    <tr>
      <td>Storage Temperature</td>
      <td colspan="6">-20°C~60°C (-4°F~140°F)</td>
    </tr>
    <tr>
      <td>Storage Humidity</td>
      <td colspan="6">0%~90% (non-condensing)</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td colspan="6"></td>
    </tr>
    <tr>
      <td>Camera</td>
      <td>Model</td>
      <td colspan="6">FI9800W</td>
    </tr>
    <tr>
      <td rowspan="3">Image Sensor</td>
      <td>Sensor Type </td>
      <td colspan="6">1/4&quot; CMOS </td>
    </tr>
    <tr>
      <td>Video Quality</td>
      <td colspan="6">720P (1280x720)</td>
    </tr>
    <tr>
      <td>Backlight Compensation</td>
      <td colspan="6">√</td>
    </tr>
    <tr>
      <td rowspan="4">Lens</td>
      <td>Lens Type </td>
      <td colspan="6">f:4mm, F:2.0 </td>
    </tr>
    <tr>
      <td>IR Range</td>
      <td colspan="6">65 feet (20 meters)</td>
    </tr>
    <tr>
      <td>Infrared Mode </td>
      <td colspan="6">Automatic or manual </td>
    </tr>
    <tr>
      <td>View Angle </td>
      <td colspan="6">62° </td>
    </tr>
    <tr>
      <td rowspan="5">Network</td>
      <td>Ethernet</td>
      <td colspan="6">One 10/100Mbps RJ45 port</td>
    </tr>
    <tr>
      <td>Wireless Standard</td>
      <td colspan="6">IEEE802.11b/g/n</td>
    </tr>
    <tr>
      <td>Data Rate</td>
      <td colspan="6">IEEE802.11b: 11Mbps(Max.);<br />
        IEEE802.11g: 54Mbps(Max.);<br />
        IEEE802.11n:&nbsp;150Mbps(Max.).</td>
    </tr>
    <tr>
      <td>Wireless Security</td>
      <td colspan="6">WEP, WPA, WPA2</td>
    </tr>
    <tr>
      <td>Network Protocol</td>
      <td colspan="6">IP, TCP, UDP, HTTP, HTTPS, SMTP, FTP, DHCP, DDNS, RTSP, ONVIF</td>
    </tr>
    <tr>
      <td rowspan="4">Software Features </td>
      <td>Video Format </td>
      <td colspan="6">H.264 </td>
    </tr>
    <tr>
      <td>Multi-Stream </td>
      <td colspan="6">Dual streams  </td>
    </tr>
    <tr>
      <td>Motion Detection </td>
      <td colspan="6">√</td>
    </tr>
    <tr>
      <td>Day/Night </td>
      <td colspan="6">√</td>
    </tr>
    <tr>
      <td rowspan="10">Physical and<br /> Environmental</td>
      <td>Waterproof  </td>
      <td colspan="6">IP66</td>
    </tr>
    <tr>
      <td>Net Weight </td>
      <td colspan="6">360g </td>
    </tr>
    <tr>
      <td>Power </td>
      <td colspan="6">DC12V</td>
    </tr>
    <tr>
      <td>Power Consumption </td>
      <td colspan="6">&lt;5W </td>
    </tr>
    <tr>
      <td>Dimensions (LxWxH) </td>
      <td colspan="6">97(L)x67 (W)x64 (H)  </td>
    </tr>
    <tr>
      <td>Certification </td>
      <td colspan="6">FCC, IC, CE, IP66 </td>
    </tr>
    <tr>
      <td>Operating Temperature</td>
      <td colspan="6">-10°C~60°C (14°F~140°F) </td>
    </tr>
    <tr>
      <td>Operating Humidity</td>
      <td colspan="6">10%~80% (non-condensing) </td>
    </tr>
    <tr>
      <td>Storage Temperature</td>
      <td colspan="6">-20°C~60°C (-4°F~140°F)</td>
    </tr>
    <tr>
      <td>Storage Humidity</td>
      <td colspan="6">0%~90% (non-condensing)</td>
    </tr>
  </table>
    </div>
  </div>
</div>
<div id="download" style="display:none;">
  <div class="main7">
    <div class="main7_7">
      <p>Download Center</p>
      <div class="main7_7_div">
        <div class="left">
          <div style=" height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; "> <a href="/downloads/user_mannual.html">
            <p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download User Manual</p>
            </a> </div>
          <div style=" margin-top:30px;height:52px; width
                
                
                
                        :294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; "> <a href="/downloads/quick_installation_guide.html">
            <p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Quick Guide</p>
            </a> </div>
        </div>
        <div class="right">
          <div style=" float:right; height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; "> <a href="/downloads/index.html">
            <p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Firmware</p>
            </a> </div>
          <div style=" float:right;  margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; "> <a href="/downloads/app_software.html">
            <p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Software</p>
            </a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(function(){	
title();//fixed位置
c1_change();//c1幻灯片
anaim();//页面切换
title2();
wrapTwo();
wrapTwoOne;
wrapFour();
wrapFive();
wrapSix();
wrapSeven();
wrapEight();
wrapTen();
wrapEleven();
switchDayNight();
console.log($(document).scrollTop());
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
function title(){
	$(document).scroll(function(){
		var main2_2=100;//main1_1的高度
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=main2_2){
		$('.name').parent().css({'animation':'title 1s','animation-fill-mode':'forwards'});
			$('.name').parent().css('display','block');
		}else{
			$('.name').parent().css('display','none');
			}
	})
}
function switchDayNight()
{
	$('.dn .day').click(function(){
		$('.dn').prev().attr('src','/Public/Home/images/goods_img/FN7108E_03.png');
		$('.wrap-three').css('background','#fff');
		$('.wrap-three *').css('color','#212121');
		$('.dn .night').css('background-color','#dcdcdc');
		$('.dn .day').css('background-color','#dcdcdc');
		$('.dn .day img').attr('src','/Public/Home/images/goods_img/day_1.png');
		$('.dn .night img').attr('src','/Public/Home/images/goods_img/night_1.png');
	});
	$('.dn .night').click(function(){
		$('.dn').prev().attr('src','/Public/Home/images/goods_img/FN7108E_03-2.jpg');
		$('.wrap-three').css('background','#000');
		$('.wrap-three *').css('color','#fff');
		$('.dn .night').css('background-color','#000');
		$('.dn .day').css('background-color','#000');
		$('.dn .day img').attr('src','/Public/Home/images/goods_img/day_2.png');
		$('.dn .night img').attr('src','/Public/Home/images/goods_img/night_2.png');
	});
}
function wrapTwo(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=734){
			$('.wrap-two img').fadeIn(700);
		}
	})	
}

function wrapTwoOne(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=734){
			$('.wrap-two-one img').fadeIn(700);
		}
	})	
}


function wrapFour(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=2334){
			$('.wrap-four img:first-child').animate({
				'opacity':1,
				'left':'855px',
			},3000);
			$('.wrap-four img:nth-child(2)').animate({
				'opacity':1,
				'left':'295px',
			},3000);
		}
	})	
}
function wrapFive(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=3034){
			
			$('.wrap-five .animate img:nth-child(2)').animate({
				'opacity':1,
				'top':'185px',
			},1000,function(){
				$('.wrap-five .animate img:first-child').animate({
				'opacity':1,
			},1200,function(){
				$('.wrap-five .animate img:last-child').animate({
				'opacity':1,
			},1500);
			});
			});
			
		}
	})	
}
function wrapSix(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=3934){
			$('.wrap-six .animate img:first-child').animate({
				'opacity':1
			},1000,function(){
				$('.wrap-six .animate img:last-child').animate({
					'opacity':1,
					'left':'825px',
				},2000)	
			});
		}
	})	
}
function wrapSeven(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=4834){
			$('.wrap-seven .animate img').animate({
				'opacity':1
			},1200);
		}
	})	
}
function wrapEight(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=5734){
			$('.wrap-eight .animate img:nth-child(2)').animate({
				'opacity':1,
				'top':'155px',
				'left':'482px',
			},1000,function(){
				$('.wrap-eight .animate img:last-child').animate({
				'opacity':1,
				'width':'12%',
				'top':'495px',
				'left':'952px',
			},1000);
			});
			
		}
	})	
}

function wrapTen(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=6634){
			$('.wrap-ten img').animate({
				'opacity':1
			},300);
		}
	})	
}
function wrapEleven(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=7334){
			$('.wrap-eleven img').animate({
				'opacity':1
			},300);
		}
	})	
}
</script>