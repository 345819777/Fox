<?php
use yii\helpers\Url;
?>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/newfaq.css" media="all" />
<style type="text/css">
h1,h3,h4,p{
font-family: open_sansregular,"Helvetica", "Arial", sans-serif;
}
</style>
<script type="text/javascript"> 
$(function(){
	var id = $("#id").val();
    $("#a").click(function(){ 
		 $.ajax({
				url: '<?php echo Url::to(['appfaq/helpful']);?>',
				dataType: 'json',
				type: 'GET',
				data: {
					'id': id
				},
				success: function (json) {
					$(".faq_helpful").html('<div class="helpful_message">Got it. Thanks for the feedback.</div>');
				},
				error: function () {
					alert("Error");
				}
			})
        
    }); 
    $("#b").click(function(){ 
        	$.ajax({
				url: '<?php echo Url::to(['appfaq/nohelpful']);?>',
				dataType: 'json',
				type: 'GET',
				data: {
					'id': id
				},
				success: function (json) {
					$(".faq_helpful").html('<div class="helpful_message">Got it. Thanks for the feedback.</div>');
				},
				error: function () {
					alert("Error");
				}
			})
    }); 
}); 
</script>
<div class="faq_banner">
	<div class="faq_search">
    	<div class="faq_search_txt">
            <h3>Foscam Support</h3>
            <p>Our FAQs, support videos, and other resources will help you use Foscam products to the best advantage.</p> 
			
            <div class="searchinput">
				<form action="<?php echo Url::to(['faqs/search']);?>" method="get">			
				<input type="search" name="search" value="What are you looking for?" autocomplete="off" class="hero_round_search_input ui-autocomplete-input" style="color:#FFF;" onFocus="if(value==defaultValue){value='';this.style.color='#FFF'}" onBlur="if(!value){value=defaultValue; this.style.color='#fff'}">
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
      <?php include "/home/www/html/foscam/include/public_nav.php";?>
    </div>
</section>
<div class="new_faq_main">
	
	<div class="new_faq_nav"><a href="/">Home</a> > <a href="<?php echo Url::to(['faqs/index']);?>">FAQs</a> >
	 <?php if($webcate != ''){?>
     <a href="<?php echo Url::to(['faqs/list','cateid'=>$webcate->id,'cid'=>$productcate->id]);?>"><?php echo $webcate->title;?></a>
>  
	 <?php } ?>
	 <?php if($productcate != ''){?>
     <a href="<?php echo Url::to(['faqs/list','cateid'=>$webcate->id,'cid'=>$productcate->id]);?>"><?php echo $productcate->title;?></a>
     <?php } ?>
     </div>
	<div class="faq_featured_view">
    	
    	<foreach name="row" item="val">
        <input type="hidden" value="<?php echo $row->id;?>" name="id" id="id">
   		<h1><?php echo $row->title;?></h1>
        <div class="new_faq_featured_view">
		<?php echo $row->content;?>

        </div>
        </foreach>
        
        <div class="faq_helpful">
        	<p>Was this article helpful?</p>
            <div style="clear:both; overflow:hidden; text-align:center; padding-bottom:20px;">
            <a href="javascript:" id="a"><span class="helpful_btn" style="padding:5px 30px 5px 30px;background:#F00;width:90px; font-size:14px; font-weight:normal; height:30px;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; color:#FFF;">Yes</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:" id="b"><span class="helpful_btn" style="padding:5px 33px 5px 33px;background:#F00;width:90px; font-size:14px; font-weight:normal; height:30px;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; color:#FFF;">No</span></a>
            </div>
        </div>
        
		<?php if($related != ''){ ?>
        <div class="faq_related">
        	<h3>Related Articles</h3>
            <ul>
				<?php foreach($related as $val){ ?>
            	<foreach name="related" item="val">
            	<li><a href='<?php echo Url::to(['faqs/view','id'=>$val->id]);?>'><?php echo $val->title;?></a><span class="related_li_icon"></span></li>
                <?php } ?>
            </ul>
        </div>
		<?php } ?>
    </div>
	<?php include "/home/www/html/foscam/include/public_contact.php";?>
</div>
