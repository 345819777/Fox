<?php
use yii\widgets\LinkPager;
?>
<link href="/Public/Home/css/FAQ.css" type="text/css" rel="stylesheet" />
 <style>
 	#submenu{ display:none;}
	#submenu li{ margin:0; padding:0; height:28px;}
	#menu:hover #submenu{ display:inline-block;}
 </style>
	<div class="banner">
		<a href="http://community.foscam.com/" target="_blank"><div class="banner_img"></div></a>
	</div>
<!--banner完-->

<div class="main">
	<div class="main_left">
    	<ul class="ul1">
        	<p>Cooperate</p>
        	<li><a href="/company/why-partner-with-foscam.html">Why choose Foscam</a></li>
            <li><a href="/company/how-to-be-distributor.html" >How to be Distributor</a></li>
            <li><a href="/company/contact-as-partners.html">Contact to be Distributor</a></li>
        </ul>
        <ul class="ul1">
        	<p>Support</p>
             <li><a href="/download-center/firmware-downloads.html">Firmware Downloads</a></li>
        	<li id="menu"><a href="/download-center/user-manual.html">User Manual</a>
            	<ul id="Submenu">
                 
                      <li><a href="/Cooperate/manualCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/manualCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                    
                      <li><a href="/Cooperate/manualCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                      
                  </ul>
            </li>
            <li id="menu"><a href="/download-center/quick-installation-guide.html">Quick Installation Guide</a></li>
            <li id="menu"><a href="/download-center/video-tutorial.html">Video Tutorial</a>
            	<ul id="Submenu">
                 
                      <li><a href="/Cooperate/videoCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/videoCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                      <li><a href="/Cooperate/videoCate/name/App.html">&nbsp;&nbsp;App</a></li>
                      <li><a href="/Cooperate/videoCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                      <li><a href="/Cooperate/videoCate/name/CloudService.html">&nbsp;&nbsp;Cloud Service</a></li>
                      <li><a href="/Cooperate/videoCate/name/Clientsoftware.html">&nbsp;&nbsp;Client software</a></li>
                     
                  </ul>
            </li>
            <li id="menu"><a href="/faq.html" style="color:red;">FAQ</a>
                  <ul id="Submenu">
                 
                      <li><a href="/Cooperate/faqCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/faqCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                      <li><a href="/Cooperate/faqCate/name/App.html">&nbsp;&nbsp;App</a></li>
                      <li><a href="/Cooperate/faqCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                      <li><a href="/Cooperate/faqCate/name/CloudService.html">&nbsp;&nbsp;Cloud Service</a></li>
                      <li><a href="/Cooperate/faqCate/name/Clientsoftware.html">&nbsp;&nbsp;Client software</a></li>
                     
                  </ul>
            </li>
            
            <li><a href="/download-center/software-tools.html">Software Tools</a></li>
            <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
            <li><a href="/download-center/user-manual-for-app.html">App User Manual</a></li>
            <li><a href="/company/return-repair-policy.html">Return & Repair Policy</a></li>
            <li><a href="/call-center.html">Call Center</a></li>
        </ul>
        <ul class="ul1">
        	<p style="border-top:1px solid #BFBFBF;"><a href="/news.html">News</a></p>
        	<!--<li><a href="#">Company News</a></li>
            <li><a href="#">Industry News</a></li>
            <li><a href="#">News & Events</a></li>-->
        </ul>
         <ul class="ul1">
        	<p><a href="/company/about-us.html" >About us</a></p>
        </ul>
        <ul class="ul1">
        	<p  style="border:0px;"><a href="/company/contact-us.html">Contact us</a></p>
        </ul>
    </div>
    <div class="main_right">
        	<p class="title" style="color:#ff1f1f">FAQ</p>
           
            <div style=" width:784px; margin:0 auto; line-height:50px;">
			<?php foreach($row as $val){ ?>
                <div style=" display:block; border-bottom:1px solid #666; height:48px;">
                <a href="/Cooperate/FAQinfo/id/<?php echo $val->id;?>.html" style="float:none;width:auto;">
                <?php echo $val->title;?>
                </a>
                </div>                
            <?php } ?>
            
              
            </div>
  			<div class="FAQpage">
              		<?php
		echo LinkPager::widget([
		  'pagination' => $pages,
		  'maxButtonCount' => 5, 
		]);
		?>
              </div>

    </div>
    
</div>
<!--main完-->



