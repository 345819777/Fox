<style type="text/css">
#prev{opacity:0;position:absolute; z-index:10; margin-top:225px; cursor:pointer; height:65px; width:65px;}
#next{position:absolute; z-index:10;margin-top:225px;cursor:pointer; height:65px;width:65px; margin-left:1160px;opacity:0;}

#main9_9 ul li{ float:left;}
#main9_9 ul li img{ width:255px;}
</style>

 <foreach name="row" item="val">
 	<div class="banner">
	<div class="banner_img" style="background:none; height:433px;">
    <div style="width:1160px; margin:0 auto;">
    <a id="prev" style="margin-top:380px;">
    <img src="/Public/Home/images/goods_img/goods_info_left.png" width="40" /></a>
    <a id="next"  style="margin-top:380px;">
    <img src="/Public/Home/images/goods_img/goods_info_right.png" width="40" />
    </a>
    </div>
    <ul style="width:100%;height:433px;overflow:hidden;">
    	<li style="width:100%; position:absolute;height:433px;background:url(/<?php echo $row->scroll1;?>) no-repeat center; background-size:cover;display:none;"></li>
       	<li style="width:100%; position:absolute;height:433px;background:url(/<?php echo $row->scroll2;?>) no-repeat center; background-size:cover;display:none;"></li>
        <li style="width:100%; position:absolute;height:433px;background:url(/<?php echo $row->scroll3;?>) no-repeat center; background-size:cover;display:block;"></li>
    </ul>
    </div>  

</div>
<!--banner完-->

<div style="width:100%; background:rgba(0,0,0,0.8); display:none;position:fixed; overflow:hidden; z-index:20;">
<div class="name">
	<ul>
    	<li><a id="Features_name">Features</a></li>
        <li><a id="Tech_name" >Specifications</a></li>
        <li><a id="Download_name">Download</a></li>
    </ul>
</div>
</div>
<!--name完-->
<p style="font-size:28px; color:#f92323; height:50px; line-height:50px;width:1160px; margin:0 auto; padding-top:33px;">
        <?php echo $row->name;?>
       
        </p>
<div id="features">

<div class="main9">
	<div class="main9_9" id="main9_9">
    
    	<!--<p style="font-size:28px; color:#f92323; margin-top:15px;margin-bottom:15px;">
        {$val.name}
        <a style="font-size:16px;color:#000;float:right; line-height:33px; cursor:pointer; padding-right:10px;" id="Download">Download Center</a>
        <a style="font-size:16px;color:#000;float:right;line-height:33px;cursor:pointer;" id="Tech">Tech specs &nbsp;&nbsp;|&nbsp;&nbsp;</a>
        <a style="font-size:16px; color:#000; float:right;line-height:33px;cursor:pointer;" id="Features">Features &nbsp;&nbsp;|&nbsp;&nbsp;</a>
        </p>
      <ul>
       		<li><img src="/{$val.img1}" alt="{$val.name}" /></li>
            <li><img src="/{$val.img2}" alt="{$val.name}" /></li>
            <li><img src="/{$val.img3}" alt="{$val.name}" /></li>
            <li><img src="/{$val.img4}" alt="{$val.name}" /></li>
       </ul> 
-->
       <div class="main9_9_info" style=" background:url(/<?php echo $row->bg;?>) no-repeat center;">
       <p style="font-size:28px; color:red; line-height:60px;">Features</p>
       <?php echo $row->function;?>
       </div>
        </foreach>
	<!--<div class="brand">
    	<ol>
        	<li>
            	<img src="/Public/Home/images/goods_img/brand1.gif" />
            	<a>Video Comperssion</a>
            </li>
            <li>
                <img src="/Public/Home/images/goods_img/brand2.gif" />
                <a>1.3MP</a>
            </li>
            <li>
            	<img src="/Public/Home/images/goods_img/brand3.gif" />
                <a>ONVIF</a>
                </li>
                
            <li>
            	<img src="/Public/Home/images/goods_img/brand4.gif" />
                <a>Foscam DDNS Service Inside</a>
                </li>
                
            <li>
            	<img src="/Public/Home/images/goods_img/brand5.gif" />
                <a>iOS&Android</a>
                </li>
              
            <li style="border-right:0px;">
            	<img src="/Public/Home/images/goods_img/brand6.gif" />
                <a>IP66</a>
                </li>
                
        </ol>
    </div>-->
    </div>
     <div class="hidden" id="hidden">
			<div style="width:1160px; margin:0 auto;">
            <img src="" height="450" />
            <a style="height:30px;width:30px; display:block; margin-left:830px; margin-top:-445px; z-index:21;">
            <img src="/Public/Home/images/index_img/close.png" width="100%" />
            </a>
            <a><img src="/Public/Home/images/index_img/goods_info_left.gif" height="40"  style="float:left; margin-left:300px; margin-top:170px;"/></a>
            <a><img src="/Public/Home/images/index_img/goods_info_right.gif" height="40" style="float:right;margin-top:170px; margin-right:300px;" /></a>
            </div>
</div>
</div>
<!--main完--></div>


 
<div id="techspecs" style="display:none;">

<div class="main8">
	<div class="main8_8">
<!--    	<p>Tech Specs Table</p>-->
        <foreach name="tech" item="val" key="key">
		<?php foreach($tech as $key=>$val){?>
        <if condition="$key neq 'id'"><span style="width:300px;"><?php $key=str_replace('_',' ',$key); echo $key;?></span><span style="width:800px;"><?php if($val ==1){?>√<?php }else{ ?><?php echo $val; ?><?php } ?></span><br /></if>
		<?php } ?>
		</foreach>
    </div>
</div>
<!--main完-->

</div>

<div id="download" style="display:none;">
<foreach name="row" item="val">
<div class="main7">
	<div class="main7_7">
    	<p>Download Center</p>
        <div class="main7_7_div">
        	<div class="left">
            	<div style=" height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/user_mannual.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download User Manual</p></a>
                </div>
                <div style=" margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/quick_installation_guide.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Quick Guide</p></a> 
                </div>
            </div>
            <div class="right">
            	<div style=" float:right; height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/index.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Firmware</p> </a>
                </div>
                <div style=" float:right;  margin-top:30px;height:52px; width:294px; border:1px solid #85d7f3; background:url(images/goods_img/download.gif) 5px 5px no-repeat; ">
              		<a href="/downloads/app_software.html"><p style="color:#13a3d8; padding-top:0px; padding-left:30px;line-height:52px;font-size:20.85px;text-align:center;">Download Software</p></a> 
                </div>
            </div>
        </div>
    </div>
</div>
<!--main完-->
</div>
</foreach>
<div style="clear:both;"></div>




<script>
$(document).ready(function(e) {
title();//fixed位置
fade();//图片详细切换
//checkImg();//判断图片是否成功加载
auto();//幻灯片
double();//双击放大
square();//function p前面加点
p();//#hidden前一张
n();//#hidden后一张
});
window.onload = function () {
    checkImg();
}
function p(){
		$('#hidden a').eq(1).click(function(index){
			var img_url=$('#hidden img').first().attr('src');
			var index=img_url.substr(-5,1);//索引
			index2=index-1;
			if(index2<=0){
			index2=4;
			}
			img_url=img_url.replace('-'+index+'.','-'+index2+'.');
			$('#hidden img').first().attr('src',img_url);
			})
	}//前一张
function n(){
		$('#hidden a').eq(2).click(function(index){
			var img_url=$('#hidden img').first().attr('src');
			var index=img_url.substr(-5,1);//索引
			index=parseInt(index);
			index2=index+1;
			if(index2>4){
			index2=1;
			}
			
			img_url=img_url.replace('-'+index+'.','-'+index2+'.');
			
			$('#hidden img').first().attr('src',img_url);
			})
	}
function square(){
	$('.main9_9_info p').not(':first').prepend('★ &nbsp;');
	}
function auto(){
	var now=2;
	var length=$('.banner_img li').length;
	var speed=3000;//自动变幻速度 1秒=1000
	var auto=setInterval(function(){
		now-=1;
		if(now<0){
			now=length-1;
			}
		$('.banner_img li').css('display','none');
		$('.banner_img li').eq(now).fadeIn();
		},speed);
		$('.banner_img ul li').hover(function(){
			$('#prev').css('opacity',1);
			$('#next').css('opacity',1);
			},function(){
			$('#prev').css('opacity',0);
			$('#next').css('opacity',0);
			})
	$('#prev').hover(function(){
		$('#prev').css('opacity',1);
		$('#next').css('opacity',1);
		clearInterval(auto);
		},function(){
			$('#prev').css('opacity',0);
			$('#next').css('opacity',0);
			auto=setInterval(function(){
		now-=1;
		if(now<0){
			now=length-1;
			}
		$('.banner_img li').css('display','none');
		$('.banner_img li').eq(now).fadeIn();
		},speed);
			})//前一张鼠标事件
	$('#next').hover(function(){
		$('#prev').css('opacity',1);
		$('#next').css('opacity',1);
		clearInterval(auto);
		},function(){
			$('#prev').css('opacity',0);
			$('#next').css('opacity',0);
			auto=setInterval(function(){
		now-=1;
		if(now<0){
			now=length-1;
			}
		$('.banner_img li').css('display','none');
		$('.banner_img li').eq(now).fadeIn();
		},speed);
			})//后一张鼠标事件
	$('#prev').click(function(){
		now-=1;
		if(now<0){
			now=length-1;
			}
		$('.banner_img li').css('display','none');
		$('.banner_img li').eq(now).fadeIn();
		})//幻灯片上一张
	$('#next').click(function(){
		now+=1;
		if(now>=length){
			now=0;
			}
		$('.banner_img li').css('display','none');
		$('.banner_img li').eq(now).fadeIn();
		})	//幻灯片下一张
	}
function checkImg() {
    $("#main9_9 ul li img").each(function () {
        if (this.height <= 50) {
            $(this).parent().remove();
        } 
    });
}
function fade(){
	$('#Features').click(function(){
		$('#download').css('display','none');
		$('#techspecs').css('display','none');
		$('#features').css('display','block');
		})
	$('#Download').click(function(){
		$('#features').css('display','none');
		$('#techspecs').css('display','none');
		$('#download').css('display','block');
		})
	$('#Tech').click(function(){
		$('#features').css('display','none');
		$('#download').css('display','none');
		$('#techspecs').css('display','block');
		})
		
	$('#Features_name').click(function(){
		$('#download').css('display','none');
		$('#techspecs').css('display','none');
		$('#features').css('display','block');
		})
	$('#Download_name').click(function(){
		$('#features').css('display','none');
		$('#techspecs').css('display','none');
		$('#download').css('display','block');
		})
	$('#Tech_name').click(function(){
		$('#features').css('display','none');
		$('#download').css('display','none');
		$('#techspecs').css('display','block');
		})

	}
function title(){
	$(document).scroll(function(){
	var main2_2=$('.banner').offset().top+200;//main1_1的高度
	var scroll_height=$(document).scrollTop();//滚动条当前的高度
	var window_height=$(window).height();//当前窗口的高度，改变浏览器大小，会随着变
	if(scroll_height>=main2_2){
			$('.name').parent().css('top','0px');
			$('.name').parent().css('display','block');
		}else{
			$('.name').parent().css('display','none');
			}
		})
	}
function double(index){
		
		$('.main9_9 ul li').click(function(){
			var imgurl=$(this).find('img').attr('src');
			var bigimgurl=imgurl.replace('/S/','/B/');
			$('#hidden img').first().attr('src',bigimgurl);
			$('#hidden img').first().error(function(){
				bigimgurl=imgurl.replace('/S/','/B/B');
				$(this).attr('src',bigimgurl);
				})	
			$('#hidden').fadeIn(1000);
			})//显示
		$('#hidden a').first().click(function(){
			$('#hidden').css('display','none');
			$('#hidden img').first().attr('src','');
			})//关闭
	}
</script>
