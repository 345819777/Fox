<link href="/Public/Home/css/solution.css" type="text/css" rel="stylesheet" />
<div class="banner">
	<div class="banner_img"></div>
</div>
<div class="smain">
<div class="smain1">
 <p style="font-size:20px; color:red; height:46px; line-height:46px;">Solutions</p>
 <ul>
 	<volist name="solution" id="val" key="k" >
	<?php
		$i=0;
		foreach($solution as $v){ 
	?>
 	<li style="float:left; display:inline; <?php if($i > 0){ ?>margin-left:8px;<?php } ?>">
    	<img src="/<?php echo $v->img;?>" width="100%">
        <div class="smain_info1">
       		<p><?php echo $v->title;?></p>
            <span><?php echo $v->desc;?></span>
            <a href="/solution/<?php echo $v->url;?>.html">Learn More ></a>
        </div>
    	
    </li>
	<?php $i++; } ?>
    </volist>
 </ul>
</div>
</div>