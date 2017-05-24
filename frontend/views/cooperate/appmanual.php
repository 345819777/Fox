
<div class="banner">
 
	<div class="banner_img"></div>
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
        	<li><a href="/download-center/user-manual.html">User Manual</a></li>
            <li><a href="/download-center/quick-installation-guide.html">Quick Installation Guide</a></li>
            <li><a href="/download-center/video-tutorial.html">Video Tutorial</a></li>
            <li><a href="/faq.html">FAQ</a></li>
            
            <li><a href="/download-center/software-tools.html">Software Tools</a></li>
            <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
            <li><a href="/download-center/vms.html">VMS</a></li>
            <li><a href="/download-center/user-manual-for-app.html" style="color:red;">App User Manual</a></li>
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
    <p class="title" style="color:#ff1f1f">App User Manual</p>

        	<div id="main_right">
            <p style="width:150px;">Type</p>
            <p style="width:150px;">OS</p>
            <p style="width:150px;">Version</p>
            <p style="width:150px;">Size</p>
            <p style="width:150px;">Download</p>
             <foreach name="row" item="val">
			 <?php foreach($row as $val){?>
            <p style="width:150px;"><?php echo $val->type;?></p>
            <p style="width:150px;"><?php echo $val->OS;?></p>
            <p style="width:150px;"><?php echo $val->Version;?></p>
            <p style="width:150px;"><?php echo $val->Size;?></p>
            <p style="width:150px;"><a href="<?php echo $val->url;?>" target="_blank">Download</a></p>
        	</foreach>
			<?php } ?>
            </div>
           

    </div>
    
</div>

<!--main完-->