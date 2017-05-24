
<!--header完-->
<div class="banner">
 
	<div class="banner_img"></div>
</div>
<!--banner完-->
<?php
$net = isset($_GET['net']) ? $_GET['net'] : '';
$cate = isset($_GET['cate']) ? $_GET['cate'] : '';
?>
<div class="main">
	<div class="main_left">
    	<ul class="ul1">
             <p>Resellers</p>
            <li><a href="/where-to-buy/Oceania.html"
            <?php if($cate =='Oceania'){ ?>style="color:red;"<?php } ?>
            >Oceania</a></li>
           
           
              <p><a href="/where-to-buy/net/Ebay.html"
              <?php if($net =='Ebay'){ ?>style="color:red;"<?php } ?>
              >Buy from ebay</a></p>
          
        </ul>
    </div>
    
<div class="main_right" style="background-color:#E7E7ED;">
        	<p class="title" style="color:#ff1f1f" >Where to buy</p>
            
            <div id="main_right">
			<?php if($net == ""){ ?>
            <p style="line-height:52px; width:192px;"><b>Flag</b></p>
            <p style="line-height:52px; width:192px;"><b>Country</b></p>
            <p style="line-height:52px; width:192px;"><b>Reseller Name</b></p>
            <p style="width:192px;"><b>The links of the resellers’ webstore </b></p>
			 <?php foreach($row as $val){ ?>
           		<p style="line-height:52px; width:192px;"><img src="<?php echo $val->flag_img;?>" width="60" height="37" /></p> 
                <p style="line-height:52px; width:192px;"><?php echo $val->country;?></p>
                <p style="line-height:52px; width:192px;"><?php echo $val->reseller_name;?></p>
                <p style="line-height:52px; width:192px;"><a href="<?php echo $val->the_links_of_the_resellers_webstore;?>"  title="<?php echo $val->the_links_of_the_resellers_webstore;?>" style="color:blue; display:inline-block;" target="_blank">Buy</a></p>
           <?php } ?>
			<?php }else{ ?>
            <p style=" width:255px;"><b>Region</b></p>
            <p style=" width:502px;"><b>Authorised online shops</b></p>
				<?php foreach($row as $val){ ?>
                <p style=" width:255px;"><?php echo $val['region'];?></p>
                <p style=" width:250px;"><?php echo $val['net'];?></p>
                <p style=" width:250px;"><a href="<?php echo $val['url'];?>" title="<?php echo $val['url'];?>" style="width:250px; display:block; height:50px; overflow:hidden;" target="_blank">buy</a></p>
				<?php } ?>
			<?php } ?>
           
           </div>
    </div>
    <!--div class=""></div>-->
</div>

<!--main完-->