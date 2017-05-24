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
function icon_tu(src,id){
document.getElementById("icon_"+id).src=src;
}
$(function(){
	//loading viedolist
		var q = $(".cateid").val();
		var cateid = $(".cateid").val();
		var data = {'big_category':1,'count':5,'pagename':'index','cateid':cateid};
		//console.log(data);
		$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['faqs/ajaxjson']);?>",
				beforeSend:function(){
           				$(".proShows").html('<div style="text-align:center;margin-top:100px;"><img src="/Public/Home/images/loading.gif"></div>');
       			},
				success: function(msg){
					var pro = '';
					if (msg.row == 1){
						pro +='<font color="red" size="+1">No results found. Please try another search.</font>';
						$('.proShow').html(pro);
						return false;						
					} 
					pro +="<ul>";
					for(var j=0; j<msg.row.length; j++){
						pro += "<li>";
						pro += '<h4><a href="/faqs/view.html?id='+msg.row[j].id+'">'+msg.row[j].title+'</a></h4>';
                        pro += "<p>"+msg.row[j].desc+"</p>";
						
						pro += "</li>";
					}
					pro +="</ul>";
					$('.proShows').html(pro);
					if(msg.totalPages > 1){
						$('.proShowPage').html(msg.show);
					}
				}
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
	  <?php require('/home/www/html/foscam/include/public_nav.php');?>
    </div>
</section>
<div class="new_faq_main">
	<?php require("/home/www/html/foscam/include/public_category.php");?>
	<div class="faq_featured">
    	<h3 style="width:90px; font-size:14px; font-weight:normal; height:30px;color:#FFF;background:#e83827;-moz-border-radius: 15px; -webkit-border-radius: 15px; border-radius:15px;line-height:30px; padding:0 0 0 25px;">Featured</h3>
        <div class="proShows"></div>
   		
    </div>
	<?php require("/home/www/html/foscam/include/public_contact.php");?>
</div>

