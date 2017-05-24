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
		var q = $(".q").val();
		var data = {'big_category':1,'count':16,'pagename':'search','q':q};
		//console.log(data);
		$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['video/ajaxjson']);?>",
				beforeSend:function(){
           				$(".proShow").html('<div style="text-align:center;margin-top:100px;"><img src="/Public/Home/images/loading.gif"></div>');
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
						pro += '<a href="/video/index.html?id='+msg.row[j].id+'"><img src=/'+msg.row[j].post_img+' width="275" height="169" /></a>';
                        pro += "<p><a href='/video/index.html?id="+msg.row[j].id+"' title='"+msg.row[j].ps+"'>"+msg.row[j].ps+"</a></p>";
						pro += "</li>";
					}
					pro +="</ul>";
					$('.proShow').html(pro);
					if(msg.totalPages > 1){
						var showpage = '';
						showpage += '<img src="/Public/Home/images/faq/01.png">';
						showpage += '<img src="/Public/Home/images/faq/02.png">';
						$('.proShowPage').html(msg.show);
					}
				}
		});
	
});

function gotopage(page){
		var q = $(".q").val();
		var data = {'big_category':1,'count':16,'pagename':'search','q':q,'p':page};
		//console.log(data);
		$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['video/ajaxjson']);?>",
				beforeSend:function(){
           				$(".proShow").html('<div style="text-align:center;margin-top:100px;"><img src="/Public/Home/images/loading.gif"></div>');
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
						pro += '<a href="/video/index.html?id='+msg.row[j].id+'"><img src=/'+msg.row[j].post_img+' width="275" height="169" /></a>';
                        pro += "<p><a href='/video/index.html?id="+msg.row[j].id+"' title='"+msg.row[j].ps+"'>"+msg.row[j].ps+"</a></p>";
						pro += "</li>";
					}
					pro +="</ul>";
					$('.proShow').html(pro);
					if(msg.totalPages > 1){
						var showpage = '';
						showpage += '<img src="/Public/Home/images/faq/01.png">';
						showpage += '<img src="/Public/Home/images/faq/02.png">';
						$('.proShowPage').html(msg.show);
					}
				}
		});
}
</script>
<input type="hidden" class= "q" value = "<?php echo $q;?>"  />
<div class="faq_banner">
	<div class="faq_search">
    	<div class="faq_search_txt">
            <h3>Foscam Support</h3>
            <p>Our FAQs, support videos, and other resources will help you use Foscam products to the best advantage.</p>    
            <div class="searchinput">
            	<form action="<?php echo Url::to(['video/search']);?>" method="get">
                <?php if($q == ""){ ?>
            	<input type="search" name="q" value="What are you looking for?" autocomplete="off" class="hero_round_search_input ui-autocomplete-input" style="color:#FFF;" onFocus="if(value==defaultValue){value='';this.style.color='#FFF'}" onBlur="if(!value){value=defaultValue; this.style.color='#fff'}">
                <?php }else{ ?>
                <input type="search" name="q" value="<?php echo $q;?>" autocomplete="off" class="hero_round_search_input ui-autocomplete-input" style="color:#FFF;" onBlur="if(!value){value=defaultValue; this.style.color='#fff'}">
                <?php } ?>
				
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
      <ul class="support_tabs_nav">
        <li><a href="<?php echo Url::to(['faqs/index']);?>" class="support_tabs_nav_cta tab">FAQs</a></li>
        <li><a href="<?php echo Url::to(['downloads/index']);?>" class="support_tabs_nav_cta tab">Downloads</a></li>
        <li><a href="<?php echo Url::to(['video/index']);?>" class="support_tabs_nav_cta tab active">Videos</a></li>
      </ul>
    </div>
</section>
<div class="new_faq_main">
	<div class="new_faq_nav"><a href="/">Home</a> &gt; <a href="<?php echo Url::to(['video/index']);?>">Video</a> &gt; <?php echo $q;?></div>
	
</div>


<div class="faq_video_list">
	<div class="proShow"></div>
</div>
<div style="width:1160px; margin:0px auto; text-align:center;" class="proShowPage"></div>
<div style="width: 1160px;margin: 0 auto;">
    <?php echo $this->render('/include/public_contact.php'); ?>
</div>

