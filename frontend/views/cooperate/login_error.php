<style type="text/css">
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}

	#tpl_main li{float:left; list-style-type:none; width:297px; display:block; margin-top:10px;}
	#tpl_main li a{  color:#006fbc;}
	#tpl_main a{ text-decoration:none;}
	#tpl_main a:hover{ text-decoration:underline;}
body,td,th { font-family: "Î¢ÈíÑÅºÚ"; }
</style>
		<!--µÇÂ¼Ê§°Ü,ÇëÏÈµÇÂ¼-->
        <div style="width:1020px; height:200px; margin:0 auto; border:1px solid #bfbfbf; margin-top:100px; margin-bottom:100px;">
        	
        	<p style="text-align:center; font-size:35px;margin:0 auto;margin-top:60px;"><?php echo($message);?></p><!--µÇÂ¼Ê§°Ü,ÇëÏÈµÇÂ¼-->
       
        </div>
<p class="detail" style="display:none;"></p><!--Î´¸Ä-->
        <p class="jump" style="display:none;" >
        Page automatic <a id="href" href="<?php echo($jumpUrl); ?>">jump</a> Waiting time£º <b id="wait"><?php echo($waitSecond); ?></b>
        </p>
	<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>