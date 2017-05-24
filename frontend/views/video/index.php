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
		var data = {'big_category':1,'count':8,'pagename':'index','cateid':cateid};
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
						$('.proShowPage').html(msg.show);
					}
				}
		});
	
});

function gotopage(page){
		var q = $(".q").val();
		var cateid = $(".cateid").val();
		var data = {'big_category':1,'count':8,'pagename':'index','p':page,'cateid':cateid};
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
						$('.proShowPage').html(msg.show);
					}
				}
		});
}
</script>
<input type="hidden" class= "cateid" value = "<?php echo $cateid;?>"  />
<div class="faq_banner">
	<div class="faq_search">
    	<div class="faq_search_txt">
            <h3>Foscam Support</h3>
            <p>Our FAQs, support videos, and other resources will help you use Foscam products to the best advantage.</p>    
            <div class="searchinput">
            	<form action="<?php echo Url::to(['video/search']);?>" method="get">
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
      <ul class="support_tabs_nav">
        <li><a href="<?php echo Url::to(['faqs/index']);?>" class="support_tabs_nav_cta tab">FAQs</a></li>
        <li><a href="<?php echo Url::to(['downloads/index']);?>" class="support_tabs_nav_cta tab">Downloads</a></li>
        <li><a href="<?php echo Url::to(['video/index']);?>" class="support_tabs_nav_cta tab active">Videos</a></li>
      </ul>
    </div>
</section>
<div class="new_faq_main">
	<div class="faq_product_icon">
    	<ul>
        	<foreach name="cate" item="val"> 
			<?php foreach($cate as $val){ ?>
        	<li>
            	<a href='<?php echo Url::to(['video/index',"cateid"=>$val->id,"id"=>$id]);?>'>
				<?php if($val->id == $cateid){ ?>
                <img src="<?php echo $val->icon?>_1.png" />
                <?php }else{ ?>
                <img src="<?php echo $val->icon?>.png" onmouseover="icon_tu('<?php echo $val->icon?>_1.png',<?php echo $val->id?>)" onmouseout="icon_tu('<?php echo $val->icon?>.png',<?php echo $val->id?>)" id="icon_<?php echo $val->id?>" />
                <?php } ?>
                </a>
                <p><a href='<?php echo Url::to(['video/index',"cateid"=>$val->id,"id"=>$id]);?>'><?php echo $val->title?></a></p>
            </li>
			<?php } ?>
            </foreach>
            
        </ul>
    </div>
	
	
    
	
</div>

<div class="faq_big_video">
	<div class="faq_big_video_m">
        <div class="faq_big_video_sc">
        <volist name="index" id="val" empty="The page you are looking for does not exist.">
			<?php if($index->source1 == ''){ ?>
            <?php echo $index->source2;?>
            <?php }else{ ?>

            <video id="example_video_1" class="video-js vjs-default-skin" controls="" preload="none" width="802" height="450" poster="http://www.foscam.com/Public/Home/images/index_img/v.png" data-setup="{}">
                                <source src="{$val.source1}" type="video/mp4">
                                <source src="{$val.source1}" type="video/flv">
                              <!--  <source src="http://视频地址格式2.webm" type='video/webm' />
                                <source src="http://视频地址格式3.ogv" type='video/ogg' />-->
                                <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"><!-- Tracks need an ending tag thanks to IE9 -->
                                <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"><!-- Tracks need an ending tag thanks to IE9 -->
                            </video>
                            <?php } ?>
                            
                            
        
        </div>
        <div class="faq_big_video_cont">
        	<div class="faq_big_video_cont_left">
            	<h3><?php echo $index->ps;?></h3>
            	<p><?php echo $index->desc;?></p>
            </div>
            </volist>
        </div>
    </div>
</div>
<div class="faq_video_list">
	<div class="proShow"></div>
</div>
<div style="width:1160px; margin:0px auto; text-align:center;" class="proShowPage"></div>
<div style="width: 1160px;margin: 0 auto;">
   <?php echo $this->render('/include/public_contact.php'); ?>
</div>

