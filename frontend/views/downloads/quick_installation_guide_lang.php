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
$(function(){
 	$('.leftPrev').click(function(){
		$('.proList').animate({
			'left':'0'	
		},500,function(){
			$('.leftPrev').hide();	
			$('.rightNext').show();
		});	
	});
	$('.rightNext').click(function(){
		$('.proList').animate({
			'left':'-696px'	
		},500,function(){
			$('.leftPrev').show();	
			$('.rightNext').hide();
		});	
	});
		var q = $("#q").val();
		if(q == 'What are you looking for?'){
			q="";
		}
		var category = $(".categroy_lang").val();
		var data = {'big_category':'','count':18,'pagename':'index','q':q,'category':category};
		//console.log(data);
		$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['downloads/qigajaxjson']);?>",
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
						pro += "<div class='one'>";
						pro += "<div class='down_product_list_img'>";
						pro += '<img src=/'+msg.row[j].img_url+' width="176" />';
						pro += "</div>";
						
						pro +='<div class="down_product_list_title">';
                	    pro +='<div class="down_product_list_title_left">';
                    	pro +='<p class="tit">'+msg.row[j].model+'</p>';
                        pro +='<p class="vs">'+msg.row[j].size+' - '+msg.row[j].version+'</p>';
                        pro += "</div>";
                        pro += '<div class="down_product_list_title_right">';
                    	pro += '<span class="firmware_download_btn"><a href="'+msg.row[j].url+'">Download</a></span>';
                        pro += "</div>";
                        pro += "</div>";
						pro += "</div>";
						pro += "</li>";
					}
					pro +="</ul>";
					$('.proShow').html(pro);
					if(msg.totalPages > 1){
						$('.proShowPage').html(msg.show);
					}
				}
		});
	
	var big_category = [
		'Cube_Camera','PT_Camera','PTZ_Camera','Baby_Monitor','Dome_Camera','Bullet_Camera','NVR','NVR Kits'
	];
	$('.proInner .proList img').each(function(index, element) {
		$(this).css('cursor','pointer');
		
		var data = {'big_category':big_category[index],'count':18,'category':$('#cates').val()};
		
        $(this).click(function(){
			//console.log(data);
			$(".categroy_big").val(big_category[index]);
			$('.proShowPage').html('');
			$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['downloads/qigajaxjson']);?>",
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
						pro += "<div class='one'>";
						pro += "<div class='down_product_list_img'>";
						pro += '<img src=/'+msg.row[j].img_url+' width="176" />';
						pro += "</div>";
						
						pro +='<div class="down_product_list_title">';
                	    pro +='<div class="down_product_list_title_left">';
                    	pro +='<p class="tit">'+msg.row[j].model+'</p>';
                        pro +='<p class="vs">'+msg.row[j].size+' - '+msg.row[j].version+'</p>';
                        pro += "</div>";
                        pro += '<div class="down_product_list_title_right">';
                    	pro += '<span class="firmware_download_btn"><a href="'+msg.row[j].url+'">Download</a></span>';
                        pro += "</div>";
                        pro += "</div>";
						pro += "</div>";
						pro += "</li>";
					
					}
					pro +="</ul>";
					$('.proShow').html(pro);
					if(msg.totalPages > 1){
						$('.proShowPage').html(msg.show);
					}else{
						$('.proShowPage').html('');
					}
				}
			});
		});
    });
	
	
});

function gotopage(page){
	var q = $("#q").val();
	if(q == 'What are you looking for?'){
		q="";
	}
	var big_category = $(".categroy_big").val();
	var category = $(".categroy_lang").val();
	$('.proShowPage').html('');
	var data = {'big_category':big_category,'count':18,'pagename':'index','p':page,'q':q,'category':category};
	
		//console.log(data);
		$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['downloads/qigajaxjson']);?>",
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
						pro += "<div class='one'>";
						pro += "<div class='down_product_list_img'>";
						pro += '<img src=/'+msg.row[j].img_url+' width="176" />';
						pro += "</div>";
						
						pro +='<div class="down_product_list_title">';
                	    pro +='<div class="down_product_list_title_left">';
                    	pro +='<p class="tit">'+msg.row[j].model+'</p>';
                        pro +='<p class="vs">'+msg.row[j].size+' - '+msg.row[j].version+'</p>';
                        pro += "</div>";
                        pro += '<div class="down_product_list_title_right">';
                    	pro += '<span class="firmware_download_btn"><a href="'+msg.row[j].url+'">Download</a></span>';
                        pro += "</div>";
                        pro += "</div>";
						pro += "</div>";
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
<input type="hidden" class= "categroy_lang" value = "<?php echo $category;?>"  />
<input type="hidden" class= "categroy_big" value = ""  />
<div class="faq_banner">
	<div class="faq_search">
    	<div class="faq_search_txt">
            <h3>Foscam Support</h3>
            <p>Our FAQs, support videos, and other resources will help you use Foscam products to the best advantage.</p>    
            <div class="searchinput">
            	<form action="/downloads/quick_installation_guide_lang.html?category={$category}" method="get">
                <input type="hidden" name="category" value="<?php echo $category;?>" />
				<?php if($q == ""){ ?>
            	<input type="search" name="q" id="q" value="What are you looking for?" autocomplete="off" class="hero_round_search_input ui-autocomplete-input" style="color:#FFF;" onFocus="if(value==defaultValue){value='';this.style.color='#FFF'}" onBlur="if(!value){value=defaultValue; this.style.color='#fff'}">
                <?php }else{ ?>
                <input type="search" name="q" id="q" value="<?php echo $q;?>" autocomplete="off" class="hero_round_search_input ui-autocomplete-input" style="color:#FFF;" onBlur="if(!value){value=defaultValue; this.style.color='#fff'}">
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
	  <?php echo $this->render('/include/public_nav_download.php'); ?>
    </div>
</section>
<div class="new_faq_main">
	<div class="faq_product_icon_down">
		<?php echo $this->render('/include/public_down_category.php',['action'=>$action]); ?>		
    </div>
    <p class="hot">Browse by product</p>
    <div class="hotPro">	
    <img class="leftPrev" src="/Public/Home/images/faq/preNext.png">
    <div class="proInner">
        <div class="proList">
        <input type="hidden" value="<?php echo $cate;?>" id="cates" />
            <volist name="productcate" id="val">
			<?php foreach($productcate as $val){ ?>
			<img src="<?php echo $val->icon;?>">
			<?php } ?>
			</volist>       
        </div>
    </div>   	
     <img class="rightNext" src="/Public/Home/images/faq/preNext.png"> 
     
  	
</div>

	<div class="faq_new_down_product_list">
    	<div class="proShow">
         <empty name = "guide">
    		<font color="red" size="+1">No results found. Please try another search.</font>
   		 <else />
    	<ul>
        <foreach name="guide" item="val">
    	
        </foreach>
        </ul>
        </empty>
        </div>
        
    </div>
    
    <div style="padding:20px 0px 20px 0px; text-align:center;" class="proShowPage"></div>
	<?php echo $this->render('/include/public_contact.php'); ?>
</div>
</body>
</html>
