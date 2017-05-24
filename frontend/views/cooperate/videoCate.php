<?php
use yii\widgets\LinkPager;
?>
<link href="/Public/Home/css/FAQ.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/videolist.css" type="text/css" rel="stylesheet" />
 <style>
 	#submenu{ display:none;}
	#submenu li{ margin:0; padding:0; height:28px;}
	#menu:hover #submenu{ display:inline-block;}
 </style>
 
	<a href="http://community.foscam.com/" target="_blank"><div class="banner_img"></div></a>
</div>
<!--banner完-->
<script src="/Public/Home/css/html5media.min_.js" type="text/javascript"></script>

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
            <li id="menu"><a href="/download-center/video-tutorial.html" style="color:red;">Video Tutorial</a>
            
            		<ul id="Submenu">
                 
                      <li><a href="/Cooperate/videoCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/videoCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                      <li><a href="/Cooperate/videoCate/name/App.html">&nbsp;&nbsp;App</a></li>
                      <li><a href="/Cooperate/videoCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                      <li><a href="/Cooperate/videoCate/name/CloudService.html">&nbsp;&nbsp;Cloud Service</a></li>
                      <li><a href="/Cooperate/videoCate/name/Clientsoftware.html">&nbsp;&nbsp;Client software</a></li>
                     
                  </ul>
            
            </li>
            <li id="menu"><a href="/faq.html">FAQ</a>
            	<ul id="Submenu">
                 
                      <li><a href="/Cooperate/videoCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
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
        	<p class="title" style="color:#ff1f1f">Video Tutorial  &gt;&gt;<?php echo $videoCate; ?></p>
            <div style=" width:784px; margin:0 auto;line-height:50px; margin-top:40px;">
           	<ul style="width:784px;">
					<?php foreach($row as $val){ ?>
                    <li style="float:left; display:inline; height:350px; width:360px; display:block; margin:0 5px;">
                                <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="360" height="270"
                                      poster="http://video-js.zencoder.com/oceans-clip.png"
                                      data-setup="{}">
                                    <source src="<?php echo $val->source1;?>" type='video/mp4' />
                                    <source src="<?php echo $val->source1;?>" type='video/flv' />
                                
                                    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                                    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                                </video>
                        <a style="width:360px; line-height:20px; text-align:center; display:block; overflow:hidden; font-size:14px;" href="#"><?php echo $val->ps;?></a>
                    </li>
                   <?php } ?>

            </ul>
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