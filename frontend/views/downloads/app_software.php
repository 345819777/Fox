<?php
use yii\helpers\Url;
?>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/newfaq.css" media="all" />
<style type="text/css">
h1,h3,h4,p{
font-family: open_sansregular,"Helvetica", "Arial", sans-serif;
}
</style>
<script>
function icon_atu(src){
document.getElementById("icon_a").src=src;
}
function icon_btu(src){
document.getElementById("icon_b").src=src;
}
function icon_ctu(src){
document.getElementById("icon_c").src=src;
}
function icon_dtu(src){
document.getElementById("icon_d").src=src;
}
function icon_etu(src){
document.getElementById("icon_e").src=src;
}
</script>
<div class="faq_banner">
	<div class="faq_search">
    	<div class="faq_search_txt">
            <h3>Foscam Support</h3>
            <p>Our FAQs, support videos, and other resources will help you use Foscam products to the best advantage.</p>    
            <div class="searchinput">
                <form action="<?php echo Url::to(['downloads/index']);?>" method="get">
            	<input type="search" name="q" value="What are you looking for?" autocomplete="off" class="hero_round_search_input ui-autocomplete-input" style="color:#FFF;" onFocus="if(value==defaultValue){value='';this.style.color='#FFF'}" onBlur="if(!value){value=defaultValue; this.style.color='#fff'}">
                <div class="submit_faq">
                  <input type="submit" class="s_btn" id="doSearch" value="">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="support_tabs tabs">
	<div class="support_tabs_nav_outer tabs-nav">
	  <?php echo $this->render('/include/public_nav_download.php'); ?>
    </div>
</section>
<div class="new_faq_main">
  <div class="faq_product_icon_down">
		<?php echo $this->render('/include/public_down_category.php',['action'=>$action]); ?>		
    </div>
    
    <div class="download_list_icon"><span style="width:140px; font-size:16px; font-weight:normal; height:30px;color:#FFF;background:#e83827;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; padding:8px 20px 8px 20px;">Tools</span></div>
    
  <div>
    <style>
		.down_table{color:#676767;}
		.down_table tr{line-height:25px;}
        .down_table th,td {border-bottom: 1px solid #ddd;} 
		.down_table_head td{border-bottom: 2px solid #F00;} 
        </style>
        <div class="faq_tools_table_title">Euipment Search Tool</div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="down_table">
      <tr class="down_table_head" style="height:40px; color:#F00; font-weight:bold;">
        <td width="13%"></td>
        <td width="14%">Version</td>
        <td width="14%">Size</td>
        <td width="38%">Supported OS</td>
        
        <td width="11%">Download</td>
      </tr>
      <tr>
        <td rowspan="3" style="padding:20px 0px 20px 0px; text-align:center;"><img src="/Public/Home/images/faq/Euipment-Search-Tool.png" /></td>
        <td height="50">V1.0.0.5</td>
        <td>1.39M</td>
        <td style="text-align:left; padding:10px 0px 10px 0px;">-For Windows OS<br /></td>
        
        <td style="padding-left:20px;"><a href="http://www.foscam.com/Private/ProductFiles/6357136446017020001813519055.zip"><img src="/Public/Home/images/faq/D.png" /></a></td>
      </tr>
      
      <tr>
        <td height="50">V1.0.0.3</td>
        <td>1.65M</td>
        <td style="text-align:left;">-For Mac OS<br /></td>
        
        <td style="padding-left:20px;"><a href="http://www.foscam.com/Private/ProductFiles/6357136483338460001831742012.zip"><img src="/Public/Home/images/faq/D.png" /></a></td>
      </tr>
      <tr>
        <td height="50">For FI86** cameras </td>
        <td>1.85M</td>
        <td style="text-align:left;">-For Windows OS</td>
        <td style="padding-left:20px;"><a href="http://www.foscam.com/Private/ProductFiles/IPCamTool-for%20Windows%20OS.zip" /><img src="/Public/Home/images/faq/D.png" /></a></td>
      </tr>
    </table>
    <div class="faq_tools_table_title">Super-client Software(For Windows OS Only)</div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="down_table">
      <tr class="down_table_head" style="height:40px; color:#F00; font-weight:bold;">
        <td width="13%"></td>
        <td width="14%">Version</td>
        <td width="14%">Size</td>
        <td width="38%">Supported OS</td>
        
        <td width="11%">Download</td>
      </tr>
      <tr>
        <td style="padding:20px 0px 20px 0px; text-align:center;"><img src="/Public/Home/images/faq/Super-client-Software.png" /></td>
        <td>V_1.4.14</td>
        <td>13.7M</td>
        <td style="text-align:left; padding:10px 0px 10px 0px;">-For MJ series and HD <br /></td>
        
        <td style="padding-left:20px;"><a href="http://www.foscam.com/Private/ProductFiles/FOSCAM%20Client%201.4.14.zip"><img src="/Public/Home/images/faq/D.png" /></a></td>
      </tr>
    </table>
    </div>
    
	
</div>

<div class="faq_app_qcode_warp">
	<div class="faq_app_qcode">
    	<div class="faq_app_qcode_title">
            <div class="faq_app_qcode_left"><span style="width:140px; font-size:16px; font-weight:normal; height:30px;color:#FFF;background:#e83827;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; padding:8px 20px 8px 20px;">APP</span></div>
            <div class="faq_app_qcode_right">Download free Foscam apps from the App Store or Google play.</div>
        </div>
    	<div class="faq_app_qcode_img">
            <div class="faq_app_qcode_img_left">
            	<p><img src="/Public/Home/images/faq/01_qcode.jpg" /></p>
                <p><img src="/Public/Home/images/faq/APP-GOOGLE.png" /></p>
                <p style="margin-top:15px; color:#F00;">For Foscam IP Cameras</p>
            </div>
            <div class="faq_app_qcode_img_right">
            	<p><img src="/Public/Home/images/faq/02_qcode.jpg" /></p>
                <p><img src="/Public/Home/images/faq/APP-GOOGLE.png" /></p>
                <p style="margin-top:15px; color:#F00;">For Foscam NVR Security Systems</p>
            </div>
        </div>
    </div>
</div>

<div class="faq_app_vms_warp">
	<div class="faq_app_vms">
    	<div class="faq_app_vms_title">
            <div class="faq_app_vms_left"><span style="width:140px; font-size:16px; font-weight:normal; height:30px;color:#FFF;background:#e83827;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; padding:8px 20px 8px 20px;">VMS</span></div>
            <div class="faq_app_vms_right">Video Management Software for Foscam HD Cameras and NVR Kits.</div>
        </div>
		<div class="faq_app_vms_windows"><a href="http://www.foscam.com/Private/vms/Foscam%20VMS%20%EF%BC%88Windows%EF%BC%89.zip"><img src="/Public/Home/images/faq/For-windows.png" /></a><p style="text-align:left; color:#F00; line-height:35px;">For Windows</p></div>
    </div>
</div>

<div class="faq_app_vms_warp">
	<div class="faq_app_vms">
    	<div class="faq_app_vms_title">
            <div class="faq_app_vms_left"><span style="width:140px; font-size:16px; font-weight:normal; height:30px;color:#FFF;background:#e83827;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; padding:8px 20px 8px 20px;">Plugins</span></div>
            <div class="faq_app_vms_right">Plugin for HD cameras on Mac.</div>
        </div>
		<div class="faq_app_vms_windows" style="width:300px;"><a href="http://www.foscam.com/Private/Files/plugins 3.3.0.32.zip"><span style="font-size:18px;font-weight:bold;color:#F00;">Click Here to Download Plugin</span></a></div>
    </div>
</div>

<div style="width: 1160px;margin: 0 auto;">
	<?php echo $this->render('/include/public_contact.php'); ?>
</div>
