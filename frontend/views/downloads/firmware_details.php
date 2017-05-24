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
	
    <div class="new_faq_nav"><a href="/">Home</a> > <a href="<?php echo Url::to(['downloads/index']);?>">Downloads</a><span class="nva_right_link" style="float:right; color:#F00; font-weight:bold;"><a href="http://www.foscam.com/faqs/view.html?id=110">How to confirm the version of your camera?</a></span></div>
  <?php foreach($vlist as $val){ ?>
  <volist name="vlist" id="val">
  <div class="download_list">
    	<div class="download_list_icon"><span style="width:140px; font-size:16px; font-weight:normal; height:30px;color:#FFF;background:#e83827;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; padding:8px 20px 8px 20px;"><?php echo $val['vname'];?></span></div>
    <style>
		.down_table{color:#676767;}
		.down_table tr{line-height:25px;}
        .down_table th,td {border-bottom: 1px solid #ddd;} 
		.down_table_head td{border-bottom: 2px solid #F00;} 
        </style>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="down_table">
        <tr class="down_table_head" style="height:40px; color:#F00; font-weight:bold;">
          <td width="11%">Version</td>
          <td width="10%">Build Date</td>
          <td width="10%">Size</td>
          <td width="35%">Release Note</td>
          <td width="23%">Attention</td>
          <td width="11%" align="center">Download</td>
        </tr>
        <volist name="val['vlist']" id="sub">
		<?php foreach($val['vlist'] as $sub){ ?>
        <tr>
          <td style="word-break:break-all"><?php echo $sub->version;?></td>
          <td style="word-break:break-all"><?php echo $sub->ctime;?></td>
          <td style="word-break:break-all"><?php echo $sub->size;?></td>
          <td style="text-align:left; padding:10px 40px 10px 0px;word-break:break-all"><?php echo $sub->releasenote;?></td>
          <td style="word-break:break-all;padding:10px 10px 10px 0px;"><?php echo $sub->attention;?></td>
          <td style="padding-left:20px;word-break:break-all" align="center"><a href="<?php echo $sub->url;?>"><img src="/Public/Home/images/faq/D.png" /></a></td>
        </tr>
        </volist>
		<?php } ?>

      </table>

    </div>
    </volist>
	<?php } ?>
	<?php echo $this->render('/include/public_contact.php'); ?>
</div>
