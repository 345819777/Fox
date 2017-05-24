<style type="text/css">
#prev{opacity:0;position:absolute; z-index:10; margin-top:225px; cursor:pointer; height:65px; width:65px;}
#next{position:absolute; z-index:10;margin-top:225px;cursor:pointer; height:65px;width:65px; margin-left:1160px;opacity:0;}

#main9_9 ul li{ float:left;}
#main9_9 ul li img{ width:255px;}
.main9_9_info p { width:500px;}
.content-img .big-img {
    position: absolute;
    top: 605px;
    left: 700px;
    width: 328px;
    height: 303px;
}
.content-img .small-content {
    position: absolute;
    top: 635px;
    left: 1058px;
    width: 204px;
    height: 302px;
    overflow: hidden;
}
.content-img .small-list {
    height: 418px;
    z-index: 1;
    position: relative;
    top: 0;
}
.content-img .small-list div {
    width: 92px;
    height: 92px;
    border: 1px solid #eee;
    float: left;
    margin: 3px;
}
</style>
<script>
$(function() {
	/*聚合页左侧products*/
	var leftList = $('.leftlist li');
	for ( var i = 0; i < leftList.length; i++) {

		if (leftList.eq(i).children().html().indexOf('&nbsp;') < 0) {
			leftList.eq(i).addClass('first');
		}
		// 空格出现一次
		if (leftList.eq(i).children().html().split('&nbsp;').length = 2) {
			// leftList.eq(i).addClass('two');
		} else {
			// leftList.eq(i).addClass('last');
		}
	}
	/*var leftList2 = $('.leftlist-2 li');
	leftList2.each(function(){
		var g = $(this).children().click(function(){
			$('.rightContent h3').text($(this).text());
		});
	});	*/
	/*产品页product*/
	var jsImg = $('input[type=hidden]').val();
	
	//图片上下滚动
	var prev = $('.content-img .prev');
	var next = $('.content-img .next');
	var list = $('.content-img .small-list');
	function animate(offset){
		var top = parseInt(list.css('top'))+offset;
		if(offset>0){
			offset = '+='+offset;	
		}else{
			offset = '-='+Math.abs(offset);	
		}
		list.animate({'top':offset},300,function(){
			if(top>50){
				list.css('top',0);	
			}
			if(top<-150){
				list.css('top','-100px');	
			}
		});
	}
	prev.bind('click',function(){
		animate(100);	
	});
	next.bind('click',function(){
		animate(-100);
	});
	
	//移动图片高亮
	//根据图片的数量动态创建div的数量
    var number=$('#number').val();
	createDivs(number);
	 var moveDivs = list.children();
      var big_img = $('.content-img .big-img');
	  
	//如果图片小于7张 上下箭头隐藏
		if(moveDivs.length<7){
				big_img.next().css('display','none').next().next().css('display','none');
		}	 
	 
	 //var prefix  = $('.border-bottom .title').text()+'_';//图片的前缀
	 var prefix  = 'box_';
	 
	for(var i=0; i<moveDivs.length; i++){
		//moveDivs.eq(0).css('background-color','#eee');
		moveDivs.eq(0).css('border','1px solid #ccc');
		big_img.css('background','url('+jsImg+'/'+prefix+'0'+'.jpg)');
		
		moveDivs.eq(i).css({
			
			'background':'url('+jsImg+'/'+prefix+i+'.jpg) no-repeat center',
			'background-size':'cover'
		});
		moveDivs.eq(i).data('id',i);//把每个i值存起来		
		moveDivs.eq(i).bind({
			'mouseover':function(){
				//$(this).css('background-color','#c9c9c9').siblings('div').css('background-color','white');
				$(this).css('border','1px solid #ccc').siblings('div').css('border','1px solid #eee');
					
			},			
			'click':function(){
				var id = $(this).data('id');//读出每个i值
				big_img.css({
					'background':'url('+jsImg+'/'+prefix+id+'.jpg)',	
				});
			}						
		});
	};
        pro_change();
        dsd();////切换页面
        toTop();//返回顶部
       // turn();//首页轮播
        newturn();//首页轮播改版
     
});
function createDivs(number){
    for(var i=0; i<number; i++){
         $('<div></div>').appendTo($('.small-list'));
    }
}
</script>

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
       <!--<div class="main9_9_info" style=" background:url(/{$val.bg}) no-repeat center;">-->
       
       <div class="main9_9_info">
       		<input type="hidden" name="jsImg" value="/Public/Home/images/goods_img/boxnew" />

       		<input type="hidden" id="number" value="2" />
       		<div style="float:left; width:500px;" class="detail-content">
               <p style="font-size:28px; color:red; line-height:60px;">Features</p>
			   <?php echo $row->function;?>
            </div>
            <div style="float:left;" class="content-img">
            
            
           		<!--<img src="/Public/Home/images/goods_img/box/1.jpg" width="100%" />-->
                
                            <img src="/Public/Home/images/function.jpg" alt="" title="" style="display:none;" />
                  <div class="big-img"></div>
                   <img class="prev" src="/Public/Home/images/preNext.png" />
                   <div class="small-content">
                    <div class="small-list"></div>
                    </div>
                    <img class="next" src="/Public/Home/images/preNext.png" />    

            </div>
       
       </div>
        </foreach>
        
        

        
        
   
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
