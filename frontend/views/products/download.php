
<div class="banner">
 
	<div class="banner_img"></div>
 <div class="small">
 	<div class="people">
    		<p>Some Security Tips to Make Your Camera SaferSome Security Tips to Make Your Camera SaferSome Security Tips to Make Your Camera Safer............</p>
            </div>
    <div class="peopic">
    	<p>Some Security Tips to Make Your Camera SaferSome Security Tips to Make Your Camera SaferSome Security Tips to Make Your Camera Safer............</p>
    </div>
 </div>
<!--small完--> 

</div>
<!--banner完-->
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


<script>
$(document).ready(function(e) {
title();//fixed位置
});
function title(){
	$(document).scroll(function(){
	var main2_2=1221;//main1_1的高度
	var scroll_height=$(document).scrollTop();//滚动条当前的高度
	var window_height=$(window).height();//当前窗口的高度，改变浏览器大小，会随着变
	if(scroll_height+window_height>=main2_2){
		$('.name').parent().css('top','0px');
			$('.name').parent().css('display','block');
		}else{
			$('.name').parent().css('display','none');
			}
		})
	}
</script>