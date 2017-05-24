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
</script>
<div class="faq_banner">
	<div class="faq_search">
    	<div class="faq_search_txt">
            <h3>Foscam Support</h3>
            <p>Our FAQs, support videos, and other resources will help you use Foscam products to the best advantage.</p>    
            <div class="searchinput">
            	<form action="/downloads/quick_installation_guide_lang.html?category=English" method="get">
                <input type="hidden" name="category" value="English" />
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
    
    <div class="faq_enlish_select_icon">
    	<p>Please choose your language to download Quick Installation Guide.</p>
        <div class="select_enlish"><a href="/downloads/quick_installation_guide_lang.html?category=English"><img src="/Public/Home/images/faq/qig2_0.png" /></a></div>
    </div>
    <div class="faq_country_select_icon">
    	<ul>
        	
        	<li><a href="/downloads/quick_installation_guide_lang.html?category=German">Deutschland</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Spanish">España</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Greek">Ελλάδα</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=French">France</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Italian">Italia</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Hungarian">Magyarország</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Dutch">Nederland </a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Russian">Россия</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Polish">Polska</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Portuguese">Portugal</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Romanian">România</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Czech"> Eská</a></li>
            <li><a href="/downloads/quick_installation_guide_lang.html?category=Danish">Danmark</a></li>

        </ul>
	</div>
	<?php echo $this->render('/include/public_contact.php'); ?>
</div>

