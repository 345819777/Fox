<?php
use yii\widgets\LinkPager;
?>
<!--<div class="banner">
	<a href="/solution/motion-detection.html"><div class="banner_img_zc"></div></a>
</div>-->
<div class="banner">
	<a href="http://community.foscam.com/" target="_blank"><div class="banner_img"></div></a>
</div>
<!--banner完-->
<div class="main">
<!--<form method="post"; action="/products/ip_camera" id="ajax">
<if condition="!empty($category)">
	<select style=" float:right;">
    	<option value="all">All</option>
    <foreach name="category" item="val">
    	<option value="{$val.id}" title="{$val.category}" <if condition="$val.category eq $cate">selected="selected"</if>>{$val.category}</option>
    </foreach>
    </select>
</if>
</form>-->
<div class="listleft" id="ajax" alt="/products/ip_camera">
	<ul>
    <foreach name="category" item="val">
	<?php foreach($category as $val){ ?>
    	<li><a href="/products/<?php $category=$val['category'];echo str_replace(".",",","$category");?>.html" alt="<?php echo $val['category']; ?>"><?php echo $val['name']; ?>
       
      <?php 
			$category=$val['category'];
			echo str_replace("_"," ","$category");
      ?>

        </a></li>
	<?php } ?>
     </foreach>
    </ul>
</div>
	<div class="list" root="/products/ip_camera">
    	<ul>
        <foreach name="row" item="val">
		<?php foreach ($models as $model){ ?>
            <li style="cursor:pointer;" root=""  onclick="window.open('/product/<?php echo $model->id;?>.html','_self');">
            	 
            	<div><img src="/<?php echo $model->big_img;?>" alt=""></div>
                <p><?php echo $model->name;?>
                </p>
                <span><?php echo $model->display_resolution;?></span>
                <a href="/product/<?php echo $model->id;?>.html">Learn More ></a>
               
            </li>
        <?php } ?>     
         </foreach>  
        </ul>
        
        
    </div>
	<div class="page">
        <div style="margin:0 auto; width:220px;">
		<?php
		echo LinkPager::widget([
		  'pagination' => $pages,
		  'maxButtonCount' => 5, 
		]);
		?>
       
        </div>
        </div>
</div>
<!--main完-->
<script>
$(document).ready(function(e) {
$('.page div').eq(1).css({'float':'left','height':'32px','line-height':'32px'});
title();//fixed位置
font_size();//字体变化
ajax();//ajax筛选
href_replace();//过滤href的内容
});
function href_replace(){
	$('.page a').each(function(index, element) {
        var href=$(this).attr('href');//当前a的href
		//alert(href)
		href=href.replace('index.php/Home/','');
		$(this).attr('href',href);
    });
	}
function font_size(){
	$('.listleft a').each(function(){
        		var html=$(this).html();
				html=html.substr(0,1);
				if(html!='&'){
				$(this).css({'font-size':'18px','line-height':'40px','border-left-color':'#E83827','border-left-style':'solid','border-left-width':'3px'});
					}
				
    });
	}
function ajax(){
$('.listleft a').click(function(){
$('.listleft a').css('color','#000');
$(this).css('color','red');
	var category=$(this).attr('alt');
	var root=$('.list').attr('root');
	var url=$('#ajax').attr('alt');
		$.ajax({
			url:url+'.html',
			data:{category:category},
			type:"POST",
			dataType:"json",
			success:function(msg){
				var products='';
				var products_length=msg.row.length;
				for(var j=0;j<products_length;j++){
					if(msg.row[j].display_resolution == 'null'){
						msg.row[j].display_resolution=' ';
						}
					products+="<li style='cursor:pointer;' root=" + root + " >";
					products+='<div><img src=/'+msg.row[j].big_img+' alt=""></div>';
					products+='<p>'+msg.row[j].name+'</p>';
					products+='<span>'+msg.row[j].display_resolution+'</span>';
					products+='<a href="/product/'+msg.row[j].id+'.html">Learn More ></a>';
					products+='</li>';
					}
				$('.list ul').html(products);
				$('.page').empty();
				}
				
				})
			return false;	
			
})
	}
	
function title(){
	$(document).scroll(function(){
	var main2_2=1221;//main1_1的高度
	var scroll_height=$(document).scrollTop();//滚动条当前的高度
	var window_height=$(window).height();//当前窗口的高度，改变浏览器大小，会随着变
	if(scroll_height+window_height>=main2_2){
			$('.name').parent().css('top','0px');
			$('.name').parent().css('display','block');
		}else{
			$('.name').parent().css('display','none');
			}
		})
	}
</script>