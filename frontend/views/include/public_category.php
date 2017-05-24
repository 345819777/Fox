<?php
use yii\helpers\Url;
?>
<div class="faq_product_icon">
    	<ul>
			<?php foreach($cate as $val){ ?>
        	<li>
				<?php if($val->id == 8 || $val->id == 9){ ?>
					<a href='<?php echo Url::to(['faqs/list','cateid'=>$val->id,'cid'=>0]);?>'>
					<?php if($val->id == $cateid){ ?>
					<img src="<?php echo $val->icon;?>-2.png" />
					<?php }else{ ?>
					<img src="<?php echo $val->icon;?>-1.png" onmouseover="icon_tu('<?php echo $val->icon;?>-2.png',<?php echo $val->id;?>)" onmouseout="icon_tu('<?php echo $val->icon;?>-1.png',<?php echo $val->id;?>)" id="icon_<?php echo $val->id;?>" />
					<?php } ?>
					</a>
					<p><a href='<?php echo Url::to(['faqs/list','cateid'=>$val->id,'cid'=>0]);?>'><?php echo $val->title;?></a></p>
				<?php }else{ ?>
					<a href='<?php echo Url::to(['faqs/list','cateid'=>$val->id,'cid'=>$cid]);?>'>
					<?php if($val->id == $cateid){ ?>
					<img src="<?php echo $val->icon;?>-2.png" />
					<?php }else{ ?>
					<img src="<?php echo $val->icon;?>-1.png" onmouseover="icon_tu('<?php echo $val->icon;?>-2.png',<?php echo $val->id;?>)" onmouseout="icon_tu('<?php echo $val->icon;?>-1.png',<?php echo $val->id;?>)" id="icon_<?php echo $val->id;?>" />
					<?php } ?>
					</a>
					<p><a href='<?php echo Url::to(['faqs/list','cateid'=>$val->id,'cid'=>$cid]);?>'><?php echo $val->title;?></a></p>
				<?php } ?>
				
                
            </li>
			<?php } ?>
        </ul>
    </div>
	<?php if($cateid == 8 || $cateid == 9){ ?>
	<?php }else{ ?>
    <div class="faq_product_class">
    	<ul>
			<?php foreach($productcate as $val){ ?>
			<?php if($val->id == $cid){ ?>
        	<li><a href='<?php echo Url::to(['faqs/list','cateid'=>$cateid,'cid'=>$val->id]);?>'><span style="color:#F00;"><?php echo $val->title;?></span></a></li>
            <?php }else{ ?>
            <li><a href='<?php echo Url::to(['faqs/list','cateid'=>$cateid,'cid'=>$val->id]);?>'><?php echo $val->title;?></a></li>
            <?php } ?>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>