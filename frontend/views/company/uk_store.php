
<!--header完-->
<div class="banner">
 
	<div class="banner_img"></div>
</div>
<!--banner完-->

<div class="main">
	<div class="main_left">
    	<ul class="ul1">
           <p><a href="/where-to-buy/North_America.html"
              <?php 
				$net = isset($_GET['net']) ? $_GET['net'] : '';
				if($net == 'Ebay'){ ?>style="color:red;"<?php } ?>
              >Online Stores</a></p>
           <p><a href="javascript:" onclick="retailers()"
           <?php if($net == 'Amazon'){ ?>style="color:red;"<?php } ?>
           >Retailers</a></p>
              <p><a href="javascript:"  onclick="distributors()"
              <?php if($net == 'Ebay'){ ?>style="color:red;"<?php } ?>
              >Distributors</a></p>
          
        </ul>
    </div>
    
<div class="main_right" style="background-color:#E7E7ED;">
        	<p class="title" style="color:#ff1f1f" >Where to buy</p>
            <style type="text/css">
			#main_right .uk_logo {
				padding-top:30px;
			}
			#main_right .uk_logo ul li a {
				width: 196px;
				float:left;
				display: inline;
				color: #212121;
				height: 22px;
			}
			#main_right .uk_logo ul li {
				width: 196px;
				margin: 0;
				height: 85px;
				float: left;
				display: inline;
			}
			</style>
            <script type="text/javascript">
				function retailers(){
					str = '<ul>';
					str += '<li><a href="http://www.argos.co.uk/static/Search/searchTerm/foscam.htm"><img src="/Public/Home/images/uklogo/2/Argos.jpg" width="188"></a></li>';
					str += '<li><a href="http://www.qvcuk.com/CatalogSearch?langId=-2&storeId=10252&catalogId=10152&sc=SRCH&keyword=foscam"><img src="/Public/Home/images/uklogo/2/QVC.jpg" width="188"></a></li>';
					str += '<li><a href="http://www.tesco.com/direct/search-results/results.page?catId=4294967294&searchquery=foscam&SrchId=4294967294"><img src="/Public/Home/images/uklogo/2/Tesco.jpg" width="188"></a></li>';
					str += '</ul>';
					$("#uk_logo").html(str);
				}
				function distributors(){
					str = '<ul>';
					str += '<li><a href="http://www.centerprise.co.uk/"><img src="/Public/Home/images/uklogo/3/Centerprise-International.jpg" width="188"></a></li>';
					str += '<li><a href="http://gadgetfreakz.co.uk/"><img src="/Public/Home/images/uklogo/3/GadgetFreakz-LTD.jpg" width="188"></a></li>';
					str += '<li><a href="http://www.techdata.co.uk/Pages/Start.aspx?corpregionid=14&Culture=en-GB&cos=&REDIR=1"><img src="/Public/Home/images/uklogo/3/TechData.jpg" width="188"></a></li>';
					str += '</ul>';
					$("#uk_logo").html(str);
				}
			</script>
            <div id="main_right">
				<div class="uk_logo" id="uk_logo">
                	<ul>
                    	<li><a href="https://www.amazon.co.uk/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=Foscam"><img src="/Public/Home/images/uklogo/1/Amazon.jpg" width="188" /></a></li>
                        <li><a href="http://www.argos.co.uk/static/Search/searchTerm/foscam.htm"><img src="/Public/Home/images/uklogo/1/Argos.jpg" width="188" /></a></li>
                        <li><a href="http://www.box.co.uk/products/keywords/foscam/ex/true"><img src="/Public/Home/images/uklogo/1/Box.jpg" width="188" /></a></li>
                        <li><a href="https://www.broadbandbuyer.com/search/?q=foscam"><img src="/Public/Home/images/uklogo/1/Broadbandbuyer.jpg" width="188"  /></a></li>
                        <li><img src="/Public/Home/images/uklogo/1/Groupon.jpg" width="188" /></li>
                        <li><a href="http://www.tesco.com/direct/search-results/results.page?catId=4294967294&searchquery=foscam&SrchId=4294967294"><img src="/Public/Home/images/uklogo/1/Tesco.jpg" width="188" /></a></li>
                    </ul>
                </div>     
           </div>
    </div>
    <!--div class=""></div>-->
</div>

<!--main完-->