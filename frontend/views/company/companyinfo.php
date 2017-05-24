 <style>
 	#submenu{ display:none;}
	#submenu li{ margin:0; padding:0; height:28px;}
	#submenu li a{ color:red;}
	#menu:hover #submenu{ display:inline-block;}
 </style>
<div class="banner">
	<a href="http://community.foscam.com/" target="_blank"><div class="banner_img"></div></a>
</div>
<!--banner完-->
<volist name="row" id="val" empty="The page you are looking for does not exist.">
<div class="main">
	<?php echo $this->render('/include/public_about_left.php',['company'=>$company,'action'=>Yii::$app->controller->action->id]); ?>
    <div class="main_right">
     	
        <?php echo $company->content;?>
        
		
    </div>
    
</div>
</volist>
<!--main完-->