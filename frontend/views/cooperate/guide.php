<?php
use yii\helpers\Url;
?>
 <style>
 	#submenu{ display:none;}
	#submenu li{ margin:0; padding:0; height:28px;}
	#menu:hover #submenu{ display:inline-block;}
	.title{
	font-size: 24px;
  color:#ff1f1f;
  height: 55px;
  line-height: 55px;
  border-bottom: 1px solid #bfbfbf;
  width: 784px;
  margin: 0 auto;
  margin-top:25px;
 }
 p{ border:none; font-family:Verdana, Geneva, sans-serif;}
 p.hot{ 
 color:#2e2e2e;
  font-size:21px;
  margin:31px 0 30px 55px; 
 }
 div.hotPro,.proShow{
	 width:784px;
	 margin:0 auto;
	 height:140px;
	 position:relative;
}
.leftPrev{
-ms-transform:rotate(270deg); 	/* IE 9 */
-webkit-transform:rotate(270deg);  
-moz-transform:rotate(270deg);  
transform:rotate(270deg);
position:absolute; top:65px; left:-10px; cursor:pointer;
}

.rightNext{
-ms-transform:rotate(90deg); 	/* IE 9 */
-webkit-transform:rotate(90deg);  
-moz-transform:rotate(90deg);  
transform:rotate(90deg);
position:absolute; right:-10px; top:65px; cursor:pointer;
}
.proInner{ width:694px; margin:0 auto; height:142px; overflow:hidden;}
.proInner img{ border:none; margin:0 15px; border-bottom:2px solid #fff;}
.proInner img:hover{ border-bottom:2px solid #bfbfbf;}
.proInner .proList{ width:1392px; position:relative; left:0;}

.search{ width:610px;border: none; outline:none;
  font-size: 16px;
  color:gray;
  margin-top: 8px;
  margin-left: 42px;}
.searchBtn{ opacity:0; width:120px; height:41px; border:1px solid red; cursor:pointer;}
.searchBg{ background:url(/Public/Home/images/qig/searchQig.png) no-repeat center; margin-top:35px;}

.proShow{ margin-top:25px;}
.proShow .one{ width:259px; height:276px; border:1px solid #CCC; float:left;}
.one-bottom-boder,.one-desc{ width:214px;  margin:0 auto; }
.one-bottom-boder{height:170px;border-bottom:1px solid gray; text-align:center;}
.one-desc p{ font-size:14px; margin-top:15px;}
.one-desc p a{display: inline-block;
  width: 85px;
  height: 23px;
  background: #e83827;
  border-radius: 17px;
  float: right;
  line-height: 23px;
  text-align: center;
  font-size: 14px;
  color: #fff;}
 .one-desc p span{ font-size:15px; color:#929292;}
 
 .qig-2{ width:784px; height:200px; margin:0 auto; text-align:center; border-bottom:1px dashed gray;}
 .qig-2 img{ position:relative; top:70px;}
 .qig-country{ width:784px; margin:35px auto;}
 .qig-country ul li{ float:left; margin-right:62px; line-height:62px;}
 .qig-country ul li:nth-child(4),.qig-country ul li:nth-child(8),.qig-country ul li:nth-child(12){ margin-right:0;}
 </style>

<div class="banner">
	<a href="http://community.foscam.com/" target="_blank"><div class="banner_img"></div></a>
</div>
<!--banner完-->

<div class="main">
		<div class="main_left">
    	<ul class="ul1">
        	<p>Cooperate</p>
            <li><a href="/download-center/firmware-downloads.html">Firmware Downloads</a></li>
        	<li><a href="/company/why-partner-with-foscam.html">Why choose Foscam</a></li>
            <li><a href="/company/how-to-be-distributor.html" >How to be Distributor</a></li>
            <li><a href="/company/contact-as-partners.html">Contact to be Distributor</a></li>
        </ul>
        <ul class="ul1">
        	<p>Support</p>
        	<li id="menu"><a href="/download-center/user-manual.html">User Manual</a>
            	<ul id="Submenu">
                 
                      <li><a href="/Cooperate/manualCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/manualCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                    
                      <li><a href="/Cooperate/manualCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                  </ul>
            </li>
            <li id="menu"><a href="/download-center/quick-installation-guide.html" style="color:red;">Quick Installation Guide</a></li>
            <li id="menu"><a href="/download-center/video-tutorial.html">Video Tutorial</a>
            	<ul id="Submenu">
                 
                      <li><a href="/Cooperate/videoCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/videoCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                      <li><a href="/Cooperate/videoCate/name/App.html">&nbsp;&nbsp;App</a></li>
                      <li><a href="/Cooperate/videoCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                      <li><a href="/Cooperate/videoCate/name/CloudService.html">&nbsp;&nbsp;Cloud Service</a></li>
                      <li><a href="/Cooperate/videoCate/name/Clientsoftware.html">&nbsp;&nbsp;Client software</a></li>
                     
                  </ul>
            </li>
            <li id="menu"><a href="/faq.html">FAQ</a>
            	<ul id="Submenu">
                 
                      <li><a href="/Cooperate/faqCate/name/HDcameras.html">&nbsp;&nbsp;HD cameras</a></li>
                   
                      <li><a href="/Cooperate/faqCate/name/MJcameras.html">&nbsp;&nbsp;MJ cameras</a></li>
                      <li><a href="/Cooperate/faqCate/name/App.html">&nbsp;&nbsp;App</a></li>
                      <li><a href="/Cooperate/faqCate/name/NVR.html">&nbsp;&nbsp;NVR</a></li>
                      <li><a href="/Cooperate/faqCate/name/CloudService.html">&nbsp;&nbsp;Cloud Service</a></li>
                      <li><a href="/Cooperate/faqCate/name/Clientsoftware.html">&nbsp;&nbsp;Client software</a></li>
                     
                  </ul>
            </li>
             
            <li><a href="/download-center/software-tools.html">Software Tools</a></li>
            <li><a href="/download-center/app-for-mobile-phone.html">App For Mobile Phone</a></li>
            <li><a href="/download-center/user-manual-for-app.html">App User Manual</a></li>
            <li><a href="/company/return-repair-policy.html">Return & Repair Policy</a></li>
            <li><a href="/call-center.html">Call Center</a></li>
        </ul>
        <ul class="ul1">
        	<p style="border-top:1px solid #BFBFBF;"><a href="/news.html">News</a></p>
        	<!--<li><a href="#">Company News</a></li>
            <li><a href="#">Industry News</a></li>
            <li><a href="#">News & Events</a></li>-->
        </ul>
         <ul class="ul1">
        	<p><a href="/company/about-us.html" >About us</a></p>
        </ul>
        <ul class="ul1">
        	<p  style="border:0px;"><a href="/company/contact-us.html">Contact us</a></p>
        </ul>
    </div>
    <div class="main_right">
<p class="title">
				<?php if($cate =='English'){?>Quick Installation Guide
                <?php }else if($cate =='German'){ ?><elseif condition = "$cate eq 'German'" />Kurzanleitung
                <?php }else if($cate =='Spanish'){ ?><elseif condition = "$cate eq 'Spanish'" />Guía rápida de conguración
                <?php }else if($cate =='Greek'){ ?><elseif condition = "$cate eq 'Greek'" />Οδηγός γρήγορης εγκατάστασης
                <?php }else if($cate =='French'){ ?><elseif condition = "$cate eq 'French'" />Guide d’installation rapide
                <?php }else if($cate =='Italian'){ ?><elseif condition = "$cate eq 'Italian'" />Guida Rapida di Installazione
                <?php }else if($cate =='Hungarian'){ ?><elseif condition = "$cate eq 'Hungarian'" />Gyors telepítési útmutató
                <?php }else if($cate =='Dutch'){ ?><elseif condition = "$cate eq 'Dutch'" />Handleiding voor snelle installatie
                <?php }else if($cate =='Russian'){ ?><elseif condition = "$cate eq 'Russian'" />Краткое руководство по установке
                <?php }else if($cate =='Polish'){ ?><elseif condition = "$cate eq 'Polish'" />Skrócona instrukcja instalacji
                <?php }else if($cate =='Portuguese'){ ?><elseif condition = "$cate eq 'Portuguese'" />Guia de instalação rápida
                <?php }else if($cate =='Romanian'){ ?><elseif condition = "$cate eq 'Romanian'" />Ghid de instalare rapida
                <?php }else if($cate =='Czech'){ ?><elseif condition = "$cate eq 'Czech'" />Pruvodce rychlou instalací
                <?php }else if($cate =='Danish'){ ?><elseif condition = "$cate eq 'Danish'" />Lyninstallationsguide
                <?php } ?>
</p>
<p class="hot">
				<?php if($cate =='English'){?>Browse by product
                <?php }else if($cate =='German'){ ?><elseif condition = "$cate eq 'German'" />Nach Produkt suchen
                <?php }else if($cate =='Spanish'){ ?><elseif condition = "$cate eq 'Spanish'" />Buscar en otros idiomas
                <?php }else if($cate =='Greek'){ ?><elseif condition = "$cate eq 'Greek'" />Περιήγηση κατά προϊόν
                <?php }else if($cate =='French'){ ?><elseif condition = "$cate eq 'French'" />Naviguer par produit
                <?php }else if($cate =='Italian'){ ?><elseif condition = "$cate eq 'Italian'" />Scorri per prodotto
                <?php }else if($cate =='Hungarian'){ ?><elseif condition = "$cate eq 'Hungarian'" />Răsfoire după produs
                <?php }else if($cate =='Dutch'){ ?><elseif condition = "$cate eq 'Dutch'" />Zoek op product
                <?php }else if($cate =='Russian'){ ?><elseif condition = "$cate eq 'Russian'" />Просмотр по продуктам
                <?php }else if($cate =='Polish'){ ?><elseif condition = "$cate eq 'Polish'" />Przeglądaj wg produktów
                <?php }else if($cate =='Portuguese'){ ?><elseif condition = "$cate eq 'Portuguese'" />Procurat por produto
                <?php }else if($cate =='Romanian'){ ?><elseif condition = "$cate eq 'Romanian'" />Böngészés termékek szerint
                <?php }else if($cate =='Czech'){ ?><elseif condition = "$cate eq 'Czech'" />Procházet podle produktů
                <?php }else if($cate =='Danish'){ ?><elseif condition = "$cate eq 'Danish'" />Gennemse efter produkt
                 <?php } ?>
</p>
<div class="hotPro">	
    <img class="leftPrev" src="/Public/Home/images/qig/preNext.png" />
    <div class="proInner">
        <div class="proList">
        <input type="hidden" value="<?php echo $cate;?>" id="cates" />
            <img src="/Public/Home/images/qig/hot_01.png" />
           <img src="/Public/Home/images/qig/hot_02.png" />
            <img src="/Public/Home/images/qig/hot_03.png" />
           <img src="/Public/Home/images/qig/hot_04.png" />
            
           <img src="/Public/Home/images/qig/hot_05.png" />
           <img src="/Public/Home/images/qig/hot_06.png" />
           <img src="/Public/Home/images/qig/hot_07.png" />
           <img src="/Public/Home/images/qig/hot_08.png" />           
        </div>
    </div>   	
     <img class="rightNext" src="/Public/Home/images/qig/preNext.png" /> 
     <form method="post" action="<?php echo Url::to(['cooperate/guide']);?>">
     <p class="searchBg"><input type="hidden" name="cate" value="<?php echo $cate;?>" /><input type="text" name="model" class="search" /><input type="submit" class="searchBtn" /></p>
     </form>
  	<div class="proShow">
    <?php if(empty($guide)){ ?>
    	<font color="red" size="+1">No results found. Please try another search.</font>
    <?php }else{ ?>
    
    <foreach name="guide" item="val">
	<?php foreach($guide as $val){ ?>
    	<div class="one">
        	<div class="one-bottom-boder">
            	<img src="/<?php echo $val->img_url;?>" width="150" />
            </div>
        	<div class="one-desc">
            	<!--<p>
                <if condition = "$cate eq 'English'" >Qucik Installation Guide
                <elseif condition = "$cate eq 'German'" />Kurzanleitung
                <elseif condition = "$cate eq 'Spanish'" />Guía rápida de conguración
                <elseif condition = "$cate eq 'Greek'" />Οδηγός γρήγορης εγκατάστασης
                <elseif condition = "$cate eq 'French'" />Guide d’installation rapide
                <elseif condition = "$cate eq 'Italian'" />Guida Rapida di Installazione
                <elseif condition = "$cate eq 'Hungarian'" />Gyors telepítési útmutató
                <elseif condition = "$cate eq 'Dutch'" />Handleiding voor snelle installatie
                <elseif condition = "$cate eq 'Russian'" />Краткое руководство по установке
                <elseif condition = "$cate eq 'Polish'" />Skrócona instrukcja instalacji
                <elseif condition = "$cate eq 'Portuguese'" />Guia de instalação rápida
                <elseif condition = "$cate eq 'Romanian'" />Ghid de instalare rapida
                <elseif condition = "$cate eq 'Czech'" />Pruvodce rychlou instalací
                <elseif condition = "$cate eq 'Danish'" />Lyninstallationsguide
                </if>
                <br /><strong>{$val.model}</strong></p>-->
                <p align="center"><?php echo $val->model;?></p>
                <p><span><?php echo $val->size;?>&nbsp;-&nbsp;<?php echo $val->version;?></span><a href="<?php echo $val->url;?>">Download</a></p>
            </div>
        </div>
	 <?php } ?>
    
   <?php } ?>
    </div>
</div>
</div>
    
</div>
 <script>
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
	var big_category = [
		'Cube_Camera','PT_Camera','PTZ_Camera','Baby_Monitor','Dome_Camera','Bullet_Camera','NVR','NVR Kits'
	];
	$('.proInner .proList img').each(function(index, element) {
		$(this).css('cursor','pointer');
		var data = {'big_category':big_category[index],'category':$('#cates').val()};
        $(this).click(function(){
			//console.log(data);
			$.ajax({
				type:'GET',
				data:data,
				dataType:"json",
				url:"<?php echo Url::to(['cooperate/guide']);?>",
				success: function(msg){
					var pro = '';
					if (msg.row == 1){
						pro +='<font color="red" size="+1">No results found. Please try another search.</font>';
						$('.proShow').html(pro);
						return false;						
					} 
					for(var j=0; j<msg.row.length; j++){
						pro += "<div class='one'>";
						pro += "<div class='one-bottom-boder'>";
						pro += '<img src=/'+msg.row[j].img_url+' width="150" />';
						pro += "</div>";
						pro += "<div class='one-desc'>";
						pro += "<p align='center'>"+msg.row[j].model+"</p>";
						pro += "<p><span>"+msg.row[j].size+"&nbsp;-&nbsp;"+msg.row[j].version+"</span>";
						pro += '<a href="'+msg.row[j].url+'">Download</a></p>';
						pro += "</div>";
						pro += "</div>";
					
					}
					$('.proShow').html(pro);
				}
			});
		});
    });
	
	
	/*var url = $('.one-desc p a').attr('href');
	var uri = encodeURI(url);
	$('.one-desc p a').attr('href',uri);*/
 </script>
<!--main完-->