
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
            <li><a href="/download-center/firmware-downloads.html">Firmware Downloads</a></li>
            <li><a href="/download-center/software-tools.html">Software Tools</a></li>
            <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
            <li><a href="/download-center/user-manual-for-app.html">App User Manual</a></li>
            <li><a href="/company/return-repair-policy.html">Return & Repair Policy</a></li>
            <li><a href="/call-center.html">Call Center</a></li>
        </ul>
        <ul class="ul1">
        	<p style="border-top:1px solid #BFBFBF;"><a href="/news.html" style="color:red; ">News</a></p>
        	
        </ul>
         <ul class="ul1">
        	<p><a href="/company/about-us.html">About us</a></p>
        </ul>
        <ul class="ul1">
        	<p  style="border:0px;"><a href="/company/contact-us.html">Contact us</a></p>
        </ul>
    </div>
    <div class="main_right">
    	<ul>
        	<p class="title" style="color:#ff1f1f">Exhibitions</p>
			<?php foreach($exhibitions as $list){ ?>
        	<li>
            	<img src="/<?php echo $list->img;?>" width="142" height="79"/>
              <b>  <a href="/newsinfo/<?php echo $list->id;?>.html"><?php echo $list->title;?>ISC West</a></b>
                <span>Address: Sands Expo Las Vegas, NV USA</span><br />
                <span>Date:    April 6-8, 2016</span><br />
                <span>Booth:   33057</span><br />
            </li>
			<?php } ?>
        </ul>
    </div>
    
</div>

<!--main完-->
<script>
$(document).ready(function(e) {
    (function(){
		if($.browser.msie){
			
				if($.browser.version=='6.0'){
					alert('您的IE浏览器版本过低，请更换ie8以上版本浏览网页');
					return false;
					}
				//alert($.browser.version)
					$('.main_right .title ul li span').css('margin-top','0px');
				
			}
		})();
});

</script>