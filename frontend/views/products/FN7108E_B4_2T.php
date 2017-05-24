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
	font-family:open_sansregular,Helvetica, sans-serif;
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
	font-size: 53px;
	color: #2b2b2b;
	width: 400px;
	text-align: left;
	position: absolute;
	top: 185px;
	left: 205px;
}
.h2 {
	font-size: 28px;
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
	background: url(/Public/Home/images/goods_img/FN7108E4_01.jpg) no-repeat center;
	background-size: cover;
	position: relative;
}
.wrap-one .w-txt .border {
	font-size: 22px;
	color: #2b2b2b;
	width: 228px;
	height: 48px;
	position: absolute;
	top: 360px;
	left: 210px;
	border: 1px solid #434343;
	text-align: center;
	line-height: 48px;
}
.wrap-two {
	width: 100%;
	height: 748px;
	background: #eee;
}
.wrap-two img {
	position: relative;
	top: 95px;
	display:none;
}
.wrap-three {
	width: 100%;
	height: 790px;
	background: #fff;
}
.wrap-three .h2, .wrap-seven .h2 {
	width: 485px;
	left: 430px;
	top: 88px;
}
.wrap-three .p, .wrap-seven .p {
	width: 582px;
	left: 330px;
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
	width: 178px;
	left: 10px;
}
.wrap-four .p {
	width: 248px;
	left: 10px;
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
	height: 877px;
	background: #eee;
	overflow:hidden;
}
.wrap-eight .h2, .wrap-eight .p {
	width: 366px;
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
.wrap-nine {
	width: 100%;
	height: 777px;
	background: #fff;
}
.wrap-nine .animate img:first-child {
	position: absolute;
	top: 185px;
	left: 415px;
}
.wrap-nine .animate img:nth-child(2) {
	position: absolute;
	top: 380px;
	left: 524px;
	opacity:0;
}
.wrap-nine .animate img:last-child {
	position: absolute;
	top: 414px;
	left: 80px;
}
.wrap-nine .h2, .wrap-nine .p {
	width: 266px;
}
.wrap-nine .p {
	top: 285px;
}
.wrap-nine .h2 {
	top: 185px;
}
.wrap-ten {
	width: 100%;
	height: 777px;
	background: #eee;
}
.wrap-ten img {
	position: absolute;
	top: 140px;
	left: 180px;
	opacity:0;
}
.wrap-ten .h2 {
	top: 60px;
	left: 400px;
}
.wrap-eleven {
	width: 100%;
	height: 677px;
	background: #fff;
}
.wrap-eleven img {
	position: absolute;
	top: 200px;
	opacity:0;
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
            <div class="h1">1080P NVR Security System</div>
            <div class="border">FN7108E-B4-2T</div>
        </div>
        
    </div>
</div>
<div class="wrap-two">
	<div class="comWith">  
    <div class="h2">Easy Wiring and 
Fantastic Compatibility</div>
	<div class="p">PoE technology makes cabling much easier by providing power through network cable that connects camera to NVR. Standard PoE supports connection of any ONVIF compliant camera, which is wonderful for DIY a unique security system.</div>
    <img src="/Public/Home/images/goods_img/FN7108E_02.png" />
    </div>
</div>
<div class="wrap-three">
	<div class="comWith">
    	<div class="h2">1080P Ultimate Visual Experience</div>
        <div class="p">View your world at 1920x1080P full HD resolution and leave nothing to question. No detail will make it past you even if at night with 65.6 feet IR range. Enjoy the true sharp video feed and get everything under control.</div>
        <img src="/Public/Home/images/goods_img/FN7108E_03.png" />
        <div class="dn">
                	<div class="day">
                    	<span><img src="/Public/Home/images/goods_img/day_1.png" /></span>
                        <span>Day</span>
                    </div>
                    <div class="night">
                    	<span><img src="/Public/Home/images/goods_img/night_1.png" /></span>
                        <span>Night</span>
                    </div>
                </div>
    </div>
</div>
<div class="wrap-four">
	<div class="comWith">
    	<img src="/Public/Home/images/goods_img/FN7108E_04-1.png" />
        <img src="/Public/Home/images/goods_img/FN7108E_04-2.png" />
        <div class="h2">Easy Setup 
for DIY Lover</div>
		<div class="p">No tricky configuration necessary. Just log in, and you’ll gain access to all cameras equipped in the system by one click. 
<p><br /></p>
Upgrade the firmware for your security system by one click with mobile APP. It’s just at your fingertips.</div>
    </div>
</div>
<div class="wrap-five">
	<div class="comWith">
   <div class="h2">Multiple Access for Local and Remote Viewing</div>
<div class="p">View and control your security system locally by connecting the system to a monitor, or via major browsers such as IE and Safari, or via iOS & Android APP on mobile devices remotely.
</div>
	<div class="animate">
		<img src="/Public/Home/images/goods_img/FN7108E_05-1.png" />
        <img src="/Public/Home/images/goods_img/FN7108E_05-2.png" />
        <img src="/Public/Home/images/goods_img/FN7108E_05-3.png" />
       </div>
    </div>
</div>
<div class="wrap-six">
	<div class="comWith">
    <div class="h2">Match Camera to 
A Certain Split Screen</div>
<div class="p">Designate outstanding display split screen for a camera, which makes it convenient for you to check the location deserving special attention. Besides, trouble shooting will be easier when one channel does not work properly.</div>
    	<div class="animate">
        	<img src="/Public/Home/images/goods_img/FN7108E4_06-1.png" />
            <img src="/Public/Home/images/goods_img/FN7108E_06-2.png" />
        </div>
    </div>
</div>
<div class="wrap-seven">
	<div class="comWith">
		<div class="h2">4-channel Timeline Playback</div>
        <div class="p">Play back the video footage on four channels simultaneously to get the whole event under control. Intelligent timeline allows you to go back to different days, hours or minutes and see everything you missed.</div>
        <div class="animate">
        <img src="/Public/Home/images/goods_img/FN7108E_07.png" />
        </div>
    </div>
</div>
<div class="wrap-eight">
	<div class="comWith">
    	<div class="h2">Unfailing 24/7 Recording </div>
        <div class="p" style="top:170px;">- 2TB hard drive is installed for 24/7 recording, and the NVR supports up to 4TB hard drive. 
<p><br /></p>
- Still wanna longer recording? Try to use motion detection recording, which can trigger the recording only when motion is detected.</div>
        <div class="h2" style="top:333px;">Quick Data Backup</div>
        <div class="p" style="top:390px;">Use USB 3.0 backup feature to transfer your data to external storage device, the speed of which is 10 times faster than USB2.0.</div>
        <div class="animate">
        	<img src="/Public/Home/images/goods_img/FN7108E_08-1.png" />
            <img src="/Public/Home/images/goods_img/FN7108E_08-2.png" />
             <img src="/Public/Home/images/goods_img/FN7108E_08-3.png" />
        </div>
        
    </div>
</div>
<div class="wrap-nine">
	<div class="comWith">
   	<div class="h2">Expandable Design 
for Future Demand</div> 
	<div class="p">FN7108E-B4-2T is composed of an 8-channel NVR and four cameras. Four additional ONVIF compliant IP cameras can be added to the system when necessary.</div>
     <div class="animate">
        	<img src="/Public/Home/images/goods_img/FN7108E_09-1.png" />
            <img src="/Public/Home/images/goods_img/FN7108E_09-2.png" />
            <img src="/Public/Home/images/goods_img/FN7108E_09-3.png" />
        </div>
   </div>
</div>
<div class="wrap-ten">
	<div class="comWith">
    <div class="h2">System Connection</div>
    <img src="/Public/Home/images/goods_img/FN7108E_10.png" />
    </div>
</div>
<div class="wrap-eleven">
	<div class="comWith">
    <div class="h2">Main Features</div>
    <img src="/Public/Home/images/goods_img/FN7108E_11.png" />
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
          <img src="/Public/Home/images/goods_img/FN7108E4-1.jpg" /> </a></li>
        
       
          <li><a href="#"><img src="/Public/Home/images/goods_img/FN7108E-2.jpg" /></a></li>
          
         
          <li><a href="#"><img src="/Public/Home/images/goods_img/FN7108E-3.jpg" /></a></li>
          
        
          <li><a href="#"><img src="/Public/Home/images/goods_img/FN7108E-4.jpg" /></a></li>
          
    
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
      		<script>
	$(function(){
		$("#tableizer-table th:eq(0)").attr("colspan",2);
		$("#tableizer-table th:eq(1)").remove();
	
		for(var i=0; i<5; i++){
			$("#tableizer-table tr td:nth-child(4)").each(function(){
				$(this).remove();	
			});
		}	
		//加粗			
		for(var i=0; i<3; i++){
			$("#tableizer-table tr:eq(1) td:eq("+i+")").css("font-weight","bold");
			$("#tableizer-table tr:eq(27) td:eq("+i+")").css("font-weight","bold");
		}	
		 $("#tableizer-table tr td:nth-child(1)").each(function() {
            $(this).css("font-weight","bold");
        });
		$("#tableizer-table tr:eq(3) td:eq(0)").attr("rowspan",3);
		$("#tableizer-table tr:eq(4) td:eq(0)").remove();
		$("#tableizer-table tr:eq(5) td:eq(0)").remove();
		$("#tableizer-table tr:eq(6) td:eq(0)").attr("rowspan",3);
		$("#tableizer-table tr:eq(7) td:eq(0)").remove();
		$("#tableizer-table tr:eq(8) td:eq(0)").remove();
		$("#tableizer-table tr:eq(9) td:eq(0)").attr("rowspan",2);
		$("#tableizer-table tr:eq(10) td:eq(0)").remove();
		$("#tableizer-table tr:eq(11) td:eq(0)").attr("rowspan",2);
		$("#tableizer-table tr:eq(12) td:eq(0)").remove();
		$("#tableizer-table tr:eq(13) td:eq(0)").attr("rowspan",3);
		$("#tableizer-table tr:eq(14) td:eq(0)").remove();
		$("#tableizer-table tr:eq(15) td:eq(0)").remove();
		$("#tableizer-table tr:eq(16) td:eq(0)").attr("rowspan",3);
		$("#tableizer-table tr:eq(17) td:eq(0)").remove();
		$("#tableizer-table tr:eq(18) td:eq(0)").remove();
		//alert($("#tableizer-table tr:eq(20) td:eq(0)").text())	
		$("#tableizer-table tr:eq(20) td:eq(0)").attr("rowspan",7);
		for(var i=21; i<27; i++){
			$("#tableizer-table tr:eq("+i+") td:eq(0)").remove();	
		}
		$("#tableizer-table tr:eq(28) td:eq(0)").attr("rowspan",4);
		for(var i=29; i<32; i++){
			$("#tableizer-table tr:eq("+i+") td:eq(0)").remove();	
		}
		$("#tableizer-table tr:eq(32) td:eq(0)").attr("rowspan",5);
		for(var i=33; i<37; i++){
			$("#tableizer-table tr:eq("+i+") td:eq(0)").remove();	
		}	
		$("#tableizer-table tr:eq(37) td:eq(0)").attr("rowspan",2);
		$("#tableizer-table tr:eq(38) td:eq(0)").remove();
		$("#tableizer-table tr:eq(39) td:eq(0)").attr("rowspan",5);
		for(var i=40; i<44; i++){
			$("#tableizer-table tr:eq("+i+") td:eq(0)").remove();	
		}
		$("#tableizer-table tr:eq(44) td:eq(0)").attr("rowspan",11);
		for(var i=45; i<55; i++){
			$("#tableizer-table tr:eq("+i+") td:eq(0)").remove();	
		}	
	})
</script>
<table id="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>NVR Kit</th><th>&nbsp;</th><th>FN7108E-B4-2T</th></tr></thead><tbody>
 <tr><td>NVR</td><td>Model</td><td>FN7108E</td></tr>
 <tr><td>Video Input</td><td>IP Video Input</td><td>8 Channels HD IP camera input</td></tr>
 <tr><td>Video Output</td><td>HD Output</td><td>One HD OUT</td></tr>
 <tr><td>&nbsp;</td><td>VGA Output</td><td>One VGA</td></tr>
 <tr><td>&nbsp;</td><td>Display Resolution</td><td>1920×1080/60Hz, 1280×720/60Hz,1440×900/60Hz, 1024×768 /60Hz</td></tr>
 <tr><td>Recording</td><td>Recording Resolution</td><td>1080P per channel ( 8ch@1080P )</td></tr>
 <tr><td>&nbsp;</td><td>Record Mode</td><td>Manual/Time Scheduled/Motion Detect</td></tr>
 <tr><td>&nbsp;</td><td>Compression Format</td><td>H.264</td></tr>
 <tr><td>Playback</td><td>Synchronous Playback</td><td>4 channel 1080P synchronous video playback </td></tr>
 <tr><td>&nbsp;</td><td>Playback Mode</td><td>Fast forward/Fast backward/Frame forward/Slow Play</td></tr>
 <tr><td>HDD</td><td>HDD</td><td>2TB security grade hard drive (pre-installed)</td></tr>
 <tr><td>&nbsp;</td><td>Capacity</td><td>Up to 4TB</td></tr>
 <tr><td>External Interface</td><td>Network Interface</td><td>One 10/100/1000 Mbps RJ45 port</td></tr>
 <tr><td>&nbsp;</td><td>USB Interface</td><td>One USB2.0/one USB3.0 interface for mouse and external storage</td></tr>
 <tr><td>&nbsp;</td><td>Button</td><td>One Power on/off button, one Reset button</td></tr>
 <tr><td>Software</td><td>Computer Operating System</td><td>Microsoft Windows XP, 7, 8, 8.1, Mac OS</td></tr>
 <tr><td>&nbsp;</td><td>Internet Viewing</td><td>Microsoft IE8 and above versions, Safari</td></tr>
 <tr><td>&nbsp;</td><td>Smart phone</td><td>iOS, Android, 3G/4G Smartphones</td></tr>
 <tr><td>Language</td><td>Language</td><td>13 languages (Chinese, English, French, Hungarian, Czech, Dutch, Greek, Russian, Polish, Spanish, Portuguese, Italian, German)</td></tr>
 <tr><td>Physical and Environmental</td><td>Power Supply</td><td>DC 48V & 1.87A</td></tr>
 <tr><td>&nbsp;</td><td>Dimensions (LxWxH)</td><td>234x234x52mm (9.25''x9.25''x2.04'')</td></tr>
 <tr><td>&nbsp;</td><td>Net Weight (g)</td><td>1200g</td></tr>
 <tr><td>&nbsp;</td><td>Operating Temperature</td><td>-10°C~55°C (-4°F~131°F)</td></tr>
 <tr><td>&nbsp;</td><td>Operating Humidity</td><td>20%~85% (non-condensing)</td></tr>
 <tr><td>&nbsp;</td><td>Idle Temperature</td><td>-20°C~60°C (-4°F~140°F)</td></tr>
 <tr><td>&nbsp;</td><td>Idle Humidity</td><td>0%~90% (non-condensing)</td></tr>
 <tr><td>Camera</td><td>Model</td><td>FI9900E</td></tr>
 <tr><td>Image Sensor</td><td>Sensor Type </td><td>1/2.7" CMOS </td></tr>
 <tr><td>&nbsp;</td><td>Video Quality</td><td>1080p (1920x1080)</td></tr>
 <tr><td>&nbsp;</td><td>Wide Dynamic Range</td><td>√</td></tr>
 <tr><td>&nbsp;</td><td>Backlight Compensation</td><td>√</td></tr>
 <tr><td>Lens</td><td>Lens Type </td><td>f:4mm; F:1.2 </td></tr>
 <tr><td>&nbsp;</td><td>Night Vision </td><td>20 meters (65 feet)</td></tr>
 <tr><td>&nbsp;</td><td>Infrared Mode </td><td>Automatic or manual </td></tr>
 <tr><td>&nbsp;</td><td>Diagonal Angle of View </td><td>75° </td></tr>
 <tr><td>&nbsp;</td><td>Horizontal Angle of View </td><td>70° </td></tr>
 <tr><td>Connectivity </td><td>802.3af PoE </td><td>√</td></tr>
 <tr><td>&nbsp;</td><td>Ethernet </td><td>RJ45</td></tr>
 <tr><td>Software Features </td><td>Video Format </td><td>H.264 </td></tr>
 <tr><td>&nbsp;</td><td>Multi Stream </td><td>Dual stream</td></tr>
 <tr><td>&nbsp;</td><td>Motion Detection </td><td>√</td></tr>
 <tr><td>&nbsp;</td><td>UPnP </td><td>√</td></tr>
 <tr><td>&nbsp;</td><td>Day&Night </td><td>√</td></tr>
 <tr><td>Physical and Environmental</td><td>Waterproof  </td><td>IP66</td></tr>
 <tr><td>&nbsp;</td><td>Net Weight </td><td>255g </td></tr>
 <tr><td>&nbsp;</td><td>Power </td><td>DC 12V</td></tr>
 <tr><td>&nbsp;</td><td>Power Consumption </td><td><5W </td></tr>
 <tr><td>&nbsp;</td><td>Dimensions (LxWxH) </td><td>97x67x64mm (3.81''x2.63''x2.51'')  </td></tr>
 <tr><td>&nbsp;</td><td>Certification </td><td>FCC, IC,CE, WEEE, IP66 </td></tr>
 <tr><td>&nbsp;</td><td>Warranty </td><td>Limited 2-year warranty </td></tr>
 <tr><td>&nbsp;</td><td>Operating Temperature</td><td>-10°C~60°C (14°F~140°F) </td></tr>
 <tr><td>&nbsp;</td><td>Operating Humidity</td><td>10% ~ 80% (non-condensing) </td></tr>
 <tr><td>&nbsp;</td><td>Idle Temperature</td><td>-20°C~60°C (-4°F~140°F)</td></tr>
 <tr><td>&nbsp;</td><td>Idle Humidity</td><td>0%~90% (non-condensing)</td></tr>
</tbody></table>
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
wrapFour();
wrapFive();
wrapSix();
wrapSeven();
wrapEight();
wrapNine();
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
			},500,function(){
				$('.wrap-five .animate img:last-child').animate({
				'opacity':1,
			},500);
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
function wrapNine(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=6634){
			$('.wrap-nine .animate img:nth-child(2)').animate({
				'opacity':1
			},1200);
		}
	})	
}
function wrapTen(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=7334){
			$('.wrap-ten img').animate({
				'opacity':1
			},3200);
		}
	})	
}
function wrapEleven(){
	$(document).scroll(function(){
		var scroll_height=$(document).scrollTop();//滚动条当前的高度
		if(scroll_height>=8134){
			$('.wrap-eleven img').animate({
				'opacity':1
			},3200);
		}
	})	
}
</script>