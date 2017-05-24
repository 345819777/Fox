<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= Html::encode($this->title) ?></title>
<meta name="description" content="Default Description" />
<meta name="keywords" content="Magento, Varien, E-commerce" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
<link rel="stylesheet" type="text/css" href="/Public/App/css/common.css" media="all" />
<script type="text/javascript" src="/Public/App/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script><script type='text/javascript'>
window.__lo_site_id = 64166;

	(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	  })();
	</script><script>!function(n){var e=n.document,t=e.documentElement,i=1000,d=i/100,o="orientationchange"in n?"orientationchange":"resize",a=function(){var n=t.clientWidth||320;n>1000&&(n=1000),t.style.fontSize=n/d+"px"};e.addEventListener&&(n.addEventListener(o,a,!1),e.addEventListener("DOMContentLoaded",a,!1))}(window);</script>
    </head>
<body>
<header id="mobile-header" style="width:100%;">
	<if condition="$hideTit neq 1">
    <!--<div class="hd_top">
        <a class="home" onclick="history.go(-1);">
        	<img alt="Foscam" id="logoPic" src="/Public/App/images/topnav_return_nor@2x.png">
        	<i></i>
        </a>
        <h1 class="caption" id="recent-btn">FAQ</h1>
    </div>-->
    </if>
    <div class="hd_bottom" style="display: block;">
	<?php if($hideTit != 1){ ?>
    	<div class="nav_back" style="clear:both;font-size:0.4rem;color:#FFF;"><a onclick="history.go(-1);">&lt;&lt;Back</a></div>
	<?php } ?>
	<div style="text-align:center; color:#FFF;padding-top:20px; padding-bottom:10px; font-size: 0.5rem;">Welcome to Foscam Support</div>
		<div class="search_box">
			<form action="<?php echo Url::to(['appfaq/search']);?>" method="get">
            	<input type="hidden" name="hideTit" value="<?php echo $hideTit;?>" />
            	<input type="text" class="s_txt" placeholder="Search Support..." id="searchContent" name="q">
            	<input type="submit" class="s_btn" id="doSearch" value="">
                <i class="clear_btn"></i>
            </form>
		</div>
	</div>
</header>




<div style="background:#FFF; margin-top:0.3rem;">
    <div class="list-box" style="clear:both; overflow: hidden;">
        <div class="list-title"><b><?php echo $cate->title;?></b></div>
        <input type="hidden" value="2" name="page_num" id="page_num">
        <input type="hidden" value="<?php echo $cateid;?>" name="cateid" id="cateid">
        <ul class="model-list">
			<?php foreach($row as $val){ ?>			
            <li><a href='<?php echo Url::to(['appfaq/view','hideTit'=>$hideTit,'id'=>$val->id]);?>'><div class="info"><?php echo $val->title;?></div><p class="watch"><i class="g-ico"></i></p></a></li>
            <?php } ?>		
        </ul>
		<?php if($more == 1){ ?>
        <div class="showmore">Load More</div>
        <?php } ?>
    </div>
</div>


<script>
    function myEvent(obj,ev,fn){
        if(obj.attachEvent){
            obj.attachEvent('on'+ev,fn);
        }else{
            obj.addEventListener(ev,fn,false);
        }
    }
    myEvent(window,'load',function(){
		
        var oRTT=document.getElementById('gototop');
        var pH=document.documentElement.clientHeight;
        var timer=null;
        var scrollTop;
        var scrollHeight;
		
        window.onscroll=function(){
            scrollTop=document.documentElement.scrollTop||document.body.scrollTop;

            //
            scrollHeight = document.documentElement.scrollHeight||document.body.scrollHeight;
            if (scrollHeight - scrollTop < 800) {
                var page = oPageNum.val();
                _getInfoFlowList(page);
            }


            if(scrollTop>=pH){
                oRTT.style.display='block';
            }else{
                oRTT.style.display='none';
            }
            return scrollTop;
        };
        oRTT.onclick=function(){
            clearInterval(timer);
            timer=setInterval(function(){
                var now=scrollTop;
                var speed=(0-now)/10;
                speed=speed>0?Math.ceil(speed):Math.floor(speed);
                if(scrollTop==0){
                    clearInterval(timer);
                }
                document.documentElement.scrollTop=scrollTop+speed;
                document.body.scrollTop=scrollTop+speed;
            }, 10);
        }
    });

    var loading = false;  //加载的全局标志
    var oListArea = $(".list-box").find(".model-list"); //todo
    var oPageNum = $("#page_num");
    //评论列表
    $(".showmore").click(function() {
        var page = oPageNum.val();
        _getInfoFlowList(page);
    });

    //ajax获取评论列表
    var _getInfoFlowList = function(page) {
        if(loading) {
            return;
        }
        loading = true;
        $(".showmore").text("Loading..");
		var cateid = $("#cateid").val();
        $.ajax({
            url: '<?php echo Url::to(['appfaq/jsondata']);?>',
            dataType: 'json',
            type: 'GET',
            data: {
                'cateid': cateid,
                'p': page
            },
            success: function (json) {
              
					//var data = json.data;
                    var page = json.page;
                    var show_more = json.show_more;
                    var infoList = '';

					for (var i=0; i<json.lists.length; i++) {
                         /*infoList  +=   '<a class="item opacity" href="'+json.lists[i].id+'">'
                                          
                                            +'<h3>'+json.lists[i].model+'</h3>'
                                            +'<span class="date">'+json.lists[i].id+'</span>'
                                        +'</a>';*/
					infoList += '<li><a href="/appfaq/view.html?id='+json.lists[i].id+'"><div class="info">'
						 			+''+json.lists[i].title+''
						 		     +'</div><p class="watch"><i class="g-ico"></i></p></a></li>';
                       

                       
                    }
					/*page++;*/
                    oPageNum.val(page);
                    oListArea.append(infoList);
                    if (show_more == true) {
                        $(".showmore").text("Load More");
                        loading = false;
                    } else {
                        $(".showmore").text("");
                    }
             
            },
            error: function () {
                alert("Error");
            }
        })
    }
</script>
<!--
<div class="btmfixed">
 CONTACT US
</div>
-->

</body>
</html>
