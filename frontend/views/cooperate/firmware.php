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
        	<li><a href="/download-center/user-manual.html">User Manual</a></li>
            <li><a href="/download-center/quick-installation-guide.html">Quick Installation Guide</a></li>
            <li><a href="/download-center/video-tutorial.html">Video Tutorial</a></li>
            <li><a href="/faq.html">FAQ</a></li>
             <li><a href="/download-center/firmware-downloads.html" style="color:red;">Firmware Downloads</a></li>
            <li><a href="/download-center/software-tools.html">Software Tools</a></li>
            <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
             <li><a href="/download-center/vms.html">VMS</a></li>
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
        	<p class="title" style="color:#ff1f1f">Firmware</p>
          <p style="width:784px;margin:0 auto;"><b>NOTE:</b> Please check the system firmware version of your camera before upgrade, If the first three sections are the same as the one you are going to upgrade, you can upgrade it safely,if they are different,please DO NOT upgrade it,Otherwise, your camera will be bricked and need send to repair!! Each package of firmware contains read me and upgrade guidance, some models contains new feature of firmware,please read them before you upgrade. </p>
			<div id="main_right">
             <b style=" display:block; line-height:60px;">MJPEG Series </b>
			<b>
            <p>Products</p>
            <p>Model</p>
            <p>System Firmware Version</p>
            <p>WebUI Firmware Version</p>
            <p>Size</p>
            <p>Attentions</p>
            <p >Download</p>
           </b>
            <span>
           <foreach name="guide" item="val">
		   <?php foreach($guide as $val){?>
           		<p style="height:75px;"><img src="<?php echo $val->img_url;?>" height="50px;" /></p>
                <p style="height:75px;"><?php echo $val->model;?></p>
                <p style="height:75px;"><?php echo $val->System_Firmware_Version;?></p>
                <p style="height:75px;"><?php echo $val->WebUI_Firmware_Version;?></p>
                <p style="height:75px;"><?php echo $val->size;?></p>
                <p style="height:75px; font-weight:bold;"><?php echo $val->attentions;?></p>
                <p style="height:75px;"><a href="<?php echo $val->url;?>">download</a></p><br />
           </foreach>
		   <?php } ?>
         </span>
         
         <b style="display:block; line-height:60px;">H.264 Series</b>
            <b style=" display:block; width:784px;">
            <p style="width:150px; line-height:50px;">Products</p>
            <p style="width:180px;line-height:50px;">Model</p>
            <p style="width:170px;line-height:50px;">Version</p>
            <p style="width:130px;line-height:50px;">Size</p>
            <p style="width:120px;line-height:50px;">Download</p>
            </b> 
            
            <span>
            <foreach name="H264" item="val">
			<?php foreach($H264 as $val){?>
           		<p style="width:150px;line-height:50px;"><img src="<?php echo $val->img_url;?>" height="50px;" /></p>
                <p style="width:180px;line-height:50px;"><?php echo $val->model;?></p>
                <p style="width:170px;line-height:50px;"><?php echo $val->version;?></p>
                <p style="width:130px;line-height:50px;"><?php echo $val->size;?></p>
                <p style="width:120px;line-height:50px;"><a href="<?php echo $val->url;?>">download</a></p><br />
           </foreach>
		   <?php } ?>
           </span>
           </div> 
           
    </div>
</div>

<!--main完-->