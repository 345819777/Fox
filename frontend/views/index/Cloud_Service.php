<link href="/Public/Home/css/callcenter.css" type="text/css" rel="stylesheet" />
<style>
.main_right .wrap {
	width: 780px;
	margin: 0 auto;
}
.main_right p {
	font-family: Helvetica;
	text-align: justify;
}
.main_right a {
	color: blue;
}
.main_right table {
	width: 700px;
	margin: 0 auto;
	border-collapse: collapse;
}
.main_right table tr:first-child td {
	color: black;
	font-weight: bold;
	background: #d7d7d7;
	border: 1px solid gray;
	font-size: 14px;
}
.main_right table tr td {
	border: 1px solid gray;
	font-family: Helvetica;
}
.main_right table tr td:last-child {
	/*width: 40%;*/
}
/**专题二*/
.table1 tr td:first-child {
	width: 20%;
}
.table1 tr td:nth-child(2) {
	width: 30%;
	text-align: left;
	padding-left: 12px;
}
.table1 tr td:last-child {
	width: 50%;
	text-align: left;
	padding-left: 12px;
}
.table2 tr td:first-child {
	background: #fff;
}
.table2 tr td:first-child, .table2 tr td:nth-child(2), .table2 tr td:nth-child(3), .table2 tr td:nth-child(4), .table2 tr td:nth-child(5), .table2 tr td:nth-child(6) {
	width: 16%;
}
.table2 tr:first-child td, .table2 tr:nth-child(2) td {
	font-weight: bold;
	background: #d7d7d7;
}
table.table1 tr td:first-child {
	font-weight: bold;
	background: #d7d7d7;
}
.table3 tr:first-child td {
	background: #fff;
}
.table3 tr td:first-child {
	background: #fff;
	width: 28%;
}
.table3 tr td:nth-child(2), .table3 tr td:nth-child(3), .table3 tr td:nth-child(4), .table3 tr td:last-child {
	width: 18%;
}

.ul1 li {
  width: 226px;
  height: auto;
  line-height: 38px;
  margin: 0 auto;
  font-size: 13px;
}
</style>
<script>
$(function(){
	tab();
});
function tab(){
	$('.main_left li').each(function(index) {
        $(this).click(function(){
			$(this).css('color','red').siblings().css('color','black');
			$('.main_right .wrap').hide().eq(index).show();
			$('.banner .banner_img').hide().eq(index).show();
		});
    });
}
</script>
<div class="banner">
  <div class="banner_img" style="background:url(/Public/Home/images/Cloud_Service_Img/couldTopic_banner.jpg) center no-repeat;display:none;"></div>
  <div class="banner_img" style="background:url(/Public/Home/images/Cloud_Service_Img/topic2_1.jpg) center no-repeat; display:none;"></div>
  <div class="banner_img" style="background:url(/Public/Home/images/Cloud_Service_Img/mdam_0.jpg) center no-repeat; display:'';"></div>
  <!--<div class="banner_img" style="background:url(/Public/Home/images/Cloud_Service_Img/zhuanti_ad.jpg) center no-repeat; "></div>-->
</div>
<!--banner完-->
<div class="main">
  <div class="main_left">
    <ul class="ul1">
      <p>Cloud Service</p>
      <li>Brief Introduction</li>
      <li>Cloud Storage</li>
       <li style="color:red;">Motion Detection and Alert Messages</li>
     <!-- <li style="color:red;">April's promotion activity</li>-->
    </ul>
  </div>
  <div class="main_right"> 
    <!-- Brief Introduction-->
    <div class="wrap" style="display:none;">
      <p><br />
      </p>
      <p style="text-align:center; font-weight:bold; font-size:22px;">Brief Introduction of Foscam Cloud</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What is Foscam Cloud generally?</strong></p>
      <p><br />
      </p>
      <p>Foscam Cloud is a platform or center for IP cameras management and control. It allows you to conveniently and effortlessly access, view and control your IP cameras anywhere, anytime, making it simple to stay connected with everything that matters most to you. Once the network is connected, everything is in the palm of your hand. You can access your recordings flexibly, save live videos and images with secure Foscam Cloud Video Recording, save and share your favorites and unforgettable moments with your loved ones.</p>
      <p><br />
      </p>
      <p style="text-align:center;"><img src="/Public/Home/images/Cloud_Service_Img/couldTopic_1.jpg" /></p>
      <p><br />
      </p>
      <p>Once you register an account on it, you own a personal cloud, which dramatically improves the setup procedure and simplifies cameras management, and you can freely add your IP cameras, and control them on any devices anywhere, anytime you want. </p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What does Foscam Cloud Service consist of?</strong></p>
      <p><br />
      </p>
      <p>Foscam Cloud Service, so far, can offer users convenient services such as<strong> Cloud Storage, Rich Media Message Push</strong>(alert push notifications with real-time snapshots), and <strong>Alert Message Push.</strong> However, what you can get out of Foscam Cloud is much more than those. In the coming future, much more customized services will be introduced to you to bring you a better user experience, like cloud share.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What can I get from Foscam Cloud Service?</strong></p>
      <p><br />
      </p>
      <p align="left"><strong>Video memories from Cloud Storage</strong></p>
      <p><br />
      </p>
      <p align="left" style="float:left; margin-top:0; padding-right:85px;"><img src="/Public/Home/images/Cloud_Service_Img/couldTopic_2.jpg" /></p>
      <p>Cloud Storage is a paid subscription service that enables you to put your home&office&factory significant videos, photos and valuable evidence on your private account, so that you can go back in time to see what you have missed, on your mobile devices, tablet or computer from anywhere, anytime. With Foscam Cloud Storage, your IP cameras can record video triggered by motion or activity and save them in the cloud conveniently, meanwhile securely. Every time when you check the video records on a computer, a timer axis below the split screen with distinguishable alarm and normal records marked by different colors, is designed for you to make it quite convenient to see the selected time period. </p>
      <p style="clear:both;"><br />
      </p>
      <p>In addition, Foscam Cloud storage offers 7-day and 30-day record plan, which are 4 choices in total. You can purchase your own record plan that meets your need. Once you select one record plan, videos which is expired will be automatically covered, unless you have saved it before.</p>
      <p><br />
      </p>
      <p><strong>Alerts message with real-time snapshots </strong></p>
      <p><br />
      </p>
      <p align="left" style="float:right; margin-top:0px; padding-left:55px;"><img style=" width: 50%;
  float: right;
  margin-right: 25px;" src="/Public/Home/images/Cloud_Service_Img/couldTopic_3.jpg" /></p>
      <p>Foscam Cloud adopts an advanced technology, called Rich Media Message Push, which can directly send you alert push notifications with real-time snapshots to your mobile APP, keeping you always stay connected with the newly events and never missing something important.</p>
      <p style="clear:both;"><br />
      </p>
      <p>One thing you should notice is that, every brand new IP camera which is newly added to your Foscam Cloud account comes with a 30-day free trial of Rich Media Message Push function, therefore, you can receive real-time alerts with 30 snapshots at most per day and save them for 7-day for a later view. After 30 days, your free trial will end. However, if you have already been a Foscam Cloud storage user, you’ll experience alert message with unlimited real-time snapshots all for free, and save them for the days according to your subscribed package; otherwise, you’ll no longer receive any alerts with real-time snapshots.</p>
      <p><br />
      </p>
      <p align="left" style="float:left; margin-top:0; padding-right:15px;"><img width="50%" src="/Public/Home/images/Cloud_Service_Img/couldTopic_4.jpg" /></p>
      <P>What you have to do is to make sure your camera version is updated to the version of 2.x.1.18 or above.
        
        Besides, another kind of alert message called message push, which can send you alert messages when motion or sound is detected. This also makes you know what’s happening anywhere you’re.</P>
      <p style="clear:both;"><br />
      </p>
      <p><br />
      </p>
      <p><strong>Safe privacy preserving</strong></p>
      <p><br />
      </p>
      <p align="left" style="float:right; margin-top:0; padding-left:45px;"><img width="80%" src="/Public/Home/images/Cloud_Service_Img/couldTopic_5.jpg" /></p>
      <P>Unlike SD card storage, which can be easily damaged or stolen, thus, result in video loss or privacy leakage, Cloud storage is a highly secure way for privacy preserving.
        Foscam Cloud can not only provide you with a convenient and powerful way of video and pictures saving, but also can assure the safety of things you store on it. So, you can freely save much video records and need not worry about the information leakage issues any more as long as you use official Foscam cloud application.</P>
      <p style="clear:both;"><br />
      </p>
      <p><strong>Storage Plan</strong></p>
      <p><br />
      </p>
      <p>Foscam Cloud storage offers 7-day and 30-day record plan, and each plan has monthly and yearly payment option, which are 4 choices in total. You can pay for your selected plan once a month, or for a better choice, you can directly pay for it for a full year, which will be much more favorable.</p>
      <p><br />
      </p>
      <p>The four different plans are as follows
      <p>
      <p><br />
      </p>
      <table>
        <tr>
          <td>Package One:</td>
          <td>7-day plan for one month</td>
          <td>The monthly price is $4.99.</td>
        </tr>
        <tr>
          <td>Package Two:</td>
          <td>7-day plan for one year</td>
          <td>The yearly price is $12.99.</td>
        </tr>
        <tr>
          <td>Package Three:</td>
          <td>30-day plan for one month</td>
          <td>The monthly price is $49.99.</td>
        </tr>
        <tr>
          <td>Package Four:</td>
          <td>30-day plan for one year </td>
          <td>The yearly price is $129.99.</td>
        </tr>
      </table>
      <p><br />
      </p>
      <p>You can purchase your own record package that meets your need. Once you select one record plan, videos which is expired will be automatically covered, which helps you save much more spaces, unless you have saved it before.</p>
      <p><br />
      </p>
      <p><strong>Multiple languages support</strong></p>
      <p><br />
      </p>
      <p style="text-align:center;"><img src="/Public/Home/images/Cloud_Service_Img/couldTopic_6.jpg" /></p>
      <p><br />
      </p>
      <p>Multi-languages, such as Chinese, English, Germany, French, and Spanish, are now supported both on Foscam Cloud official website <a href="https://www.myfoscam.com/">www.myfoscam.com</a>, and on Foscam APP. Foscam Cloud users from countries and areas of different languages can choose your own language version for a smooth experience.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>In which countries is Foscam Cloud available now?</strong></p>
      <p><br />
      </p>
      <p>Foscam Cloud Service are globally available in about 31 countries and regions in the Europe, North and South America, Asia, and Oceania, such as the United States, Canada, Mexico, Brazil, Netherlands, Germany, France, UK, Spain, Australia, Russia and so on. And more countries and regions will be covered soon.</p>
      <p><br />
      </p>
      <p>If you have any questions about Foscam Cloud service, please feel free to send us an e-mail at <a href="mailto:product15@foscam.com">product15@foscam.com</a> or <a href="mailto:product17@foscam.com">product17@foscam.com</a>, we’ll be glad to help.</p>
      <p><br />
      </p>
      <p><br />
      </p>
    </div>
    
    <!--专题一完--> 
    <!--Cloud Storage-->
    <div class="wrap" style="display:none;">
      <p><br />
      </p>
      <p style="text-align:center; font-weight:bold; font-size:22px;">Foscam Cloud Storage</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What is Foscam Cloud Storage? </strong></p>
      <p><br />
      </p>
      <p>Cloud Storage is a paid subscription service that enables you to put your home&office&factory significant videos, photos and valuable evidence on your private account, so that you can go back in time to see what you have missed, on your mobile devices, tablet or computer from anywhere, anytime. </p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>And why do you need Cloud Storage?</strong></p>
      <p><br />
      </p>
      <table class="table1">
        <tr>
          <td></td>
          <td>Foscam IP camera only</td>
          <td>Foscam IP camera + Foscam Cloud</td>
        </tr>
        <tr>
          <td>Pricing</td>
          <td>Camera <br />
            No additional fees</td>
          <td><b>7-day storage plan</b><br />
            &nbsp;&nbsp;&nbsp;&nbsp;Monthly price: <b>$4.99</b><br />
            &nbsp;&nbsp;&nbsp;&nbsp;Yearly price: <b>$49.99</b><br />
            <b>30-day storage plan</b><br />
            &nbsp;&nbsp;&nbsp;&nbsp;Monthly price:<b> $12.99</b><br />
            &nbsp;&nbsp;&nbsp;&nbsp;Yearly price:<b> $129.99</b><br /></td>
        </tr>
        <tr>
          <td>Basic Experience</td>
          <td>24*7 Live viewing<br />
            EZLink & Plug and Play<br />
            Night vision<br />
            Two-way audio<br />
            Zoom in and out<br />
            Foscam APP</td>
          <td>24*7 Live viewing<br />
            EZLink & Plug and Play<br />
            Night vision<br />
            Two-way audio<br />
            Zoom in and out<br />
            Foscam APP</td>
        </tr>
        <tr>
          <td>Video Records</td>
          <td>Store in SD Card (not supplied);<br />
            limited capacity;<br />
            no guarantee for the file security;<br />
            30-day free trial of Rich Media Message Push(for new IPCs).</td>
          <td>Alarm recording <b>in HD resolution;<br />
            7-day video cloud storage;<br />
            30-day video cloud storage;<br />
            Alert message push;<br />
            Lifetime free Rich Media Message Push</b> (alerts message with real-time snapshots);<br />
            Powerful storage capacity;<br />
            Secure Privacy preserving.</td>
        </tr>
        <tr>
          <td>More Convenience</td>
          <td>/</td>
          <td>Much more features to come, like cloud share, rich media alert message push with real-time captured video record, etc.</td>
        </tr>
      </table>
      <p style="text-align:center;"><strong>Comparison between single IPCs and IPCs with Cloud Storage</strong></p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p>Foscam Cloud Storage bears the ability to save and playback video clips of important moments and valuable evidences recorded by your cameras. With Foscam Cloud Storage, your IP cameras can record video triggered by motion or activity and save them in the cloud conveniently, meanwhile securely. Every time when you check the video records on a computer, a timer axis below the split screen with distinguishable alarm and normal records marked by different colors, is designed for you to make it quite convenient to see the selected time period.</p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_2.jpg" /></p>
      <p><br />
      </p>
      <p>In addition, Foscam Cloud storage offers 7-day and 30-day record plan, which are 4 packages in total. You can purchase your own record plan that meets your need. Once you select one record plan, videos which is expired will be automatically covered, unless you have saved it before.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What are the applicable models for Foscam Cloud Storage currently?</strong></p>
      <p><br />
      </p>
      <p>For the purpose of user experience enhancement of each IP camera, convenience of saving as much video histories as you want, we tries to upgrade the firmware of cameras to make them be compatible with Foscam Cloud Storage.  
        So far, Foscam IP cameras which support Foscam Cloud Storage are all listed as the following chart.</p>
      <p><br />
      </p>
      <table class="table2">
        <tr>
          <td colspan="4">Indoor IP Camera</td>
          <td colspan="2">Outdoor IP Camera</td>
        </tr>
        <tr>
          <td>Cube</td>
          <td>PT</td>
          <td>PTZ</td>
          <td>Baby Monitor</td>
          <td>Bullet</td>
          <td>Dome</td>
        </tr>
        <tr>
          <td>C1</td>
          <td>R4</td>
          <td>FI9826P V2</td>
          <td>FosBaby</td>
          <td>FI9900P</td>
          <td>FI9851P</td>
        </tr>
        <tr>
          <td>C2</td>
          <td>R2</td>
          <td></td>
          <td>FosBaby P1</td>
          <td>FI9900EP</td>
          <td>FI9853EP</td>
        </tr>
        <tr>
          <td>C1 Lite</td>
          <td>FI9816P</td>
          <td></td>
          <td></td>
          <td>FI9800P</td>
          <td>FI9961EP</td>
        </tr>
        <tr>
          <td></td>
          <td>FI9821P V2</td>
          <td></td>
          <td></td>
          <td>FI9803P</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>FI9821EP</td>
          <td></td>
          <td></td>
          <td>FI9803EP</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>FI9821W V2.1</td>
          <td></td>
          <td></td>
          <td>FI9901EP</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>FI9831P V2</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What kind of packages we offer to you to subscribe?</strong></p>
      <p><br />
      </p>
      <p>Foscam Cloud storage offers two options to cloud users: 7-day and 30-day record plan; and each plan has monthly and annual payment option, which are 4 packages in total. You can pay for your selected plan once a month, or for a better choice, you can directly pay for it for a full year, which will be much more favorable.</p>
      <p><br />
      </p>
      <p style="text-align:center;"><strong>Price of Four Packages</strong></p>
      <table class="table3">
        <tr>
          <td><i style="
    font-style: normal;
    position: relative;
    left: 45px;
">Price</i> <span style=" display:inline-block; border-bottom:1px solid gray; width:300px; height:1px; transform:rotate(10deg);"></span> <i style="
    font-style: normal;    position: relative;    
    left: -45px;
">Package</i></td>
          <td>U.S.A<br />
            (USD: $)</td>
          <td>Europe<br />
            (EUR: €)</td>
          <td>U.K<br />
            (GBP: ￡)</td>
          
        </tr>
        <tr>
          <td>7-day / Month</td>
          <td>4.99</td>
          <td>4.99</td>
          <td>3.99</td>
        </tr>
        <tr>
          <td>7-day / Year</td>
          <td>49.99</td>
          <td>49.99</td>
          <td>39.99</td>
        </tr>
        <tr>
          <td>30-day / Month</td>
          <td>12.99</td>
          <td>12.99</td>
          <td>9.99</td>
        </tr>
        <tr>
          <td>30-day / Year</td>
          <td>129.99</td>
          <td>129.99</td>
          <td>99.99</td>
        </tr>
      </table>
      <p><br />
      </p>
      <p><strong>Notice: </strong></p>
      <p>If your IPCs are among the following models such as <b>C2, R2, R4, FI9900P, FI9900EP</b>, you’ll enjoy a lifetime free service of Rich Media Message Push feature so long as you have purchase Foscam Cloud storage. You’ll get unlimited real-time alert snapshots per day to keep notified of every event timely.
        More models will soon be covered.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><b>How to purchase Foscam Cloud Storage?</b></p>
      <p><br />
      </p>
      <p>First of all, you have to log in with the foscam cloud account of your own on <a href="http://www.myfoscam.com">www.myfoscam.com</a>, and then, add your Foscam cameras, which you can add as much as you want, onto your personal cloud account. If you don’t have an account yet, you’ll have to create one before purchasing.
        One thing should be mentioned is that, your personal cloud account can be logged in on both Web and mobile APP. Once you log in, you enter into the cloud home page as the following shows, and you can do some settings for the cameras added before. </p>
      <p><br />
      </p>
      <p>There are two ways to purchase the Foscam Cloud package:</p>
      <p><br />
      </p>
      <p><strong>On mobile Foscam APP</strong></p>
      <p><br />
      </p>
      <p>1.Choose the camera you want to purchase the subscription for; then click the purchase icon “<img src="/Public/Home/images/Cloud_Service_Img/cut.png" />” among the ten buttons below the video;<br />
        <br />
        2.Select your own “plan” from the given options (Annual plans and Monthly plans) and type of “currency”;<br />
        <br />
        3.Review your order information and read the “Terms of service” before complete your purchase;<br />
        <br />
        4.Pay for your order with PayPal (you have to log in your PayPal account first);<br /><br />
        5.Pay successfully and begin to the video playback. </p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_3.jpg" /></p>
      <p><br />
      </p>
      <p><strong>On Web <a href="http://www.myfoscam.com">www.myfoscam.com</a></strong></p>
      <p><br />
      </p>
      <p>1.Choose the camera you want to purchase the subscription for in the list on the right; then click “Purchase Cloud Recording” below the right side of the screen;</p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_4.jpg" /></p>
      <p><br />
      </p>
      <p>2.Select one of the plan you want to purchase, and click the button “Purchase Now”;</p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_5.jpg" /></p>
      <p><br />
      </p>
      <p>3.Read the “Cloud Recording Service Agreement” before using the service;</p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_6.jpg" /></p>
      <p><br />
      </p>
      <p>4.Pay your selected package with PayPal;</p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_7.jpg" /></p>
      <p><br />
      </p>
      <p>5.Finish payment and start to enjoy your service.</p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/topic2_8.jpg" /></p>
      <p><br />
      </p>
      <p><b>Note:</b> You cannot buy a package if you do not own a camera or have not added that camera to your Foscam Cloud account.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p>Any problems about Foscam Cloud Storage, please feel free to send an e-mail at <a href="mailto:product15@foscam.com">product15@foscam.com</a>, we’ll glad to help.</p>
      <p><br />
        <br />
      </p>
      <p></p>
    </div>
    <!--专题二完--> 
    <!--Motion Detection-->
    <div class="wrap" style="display:'';">
      <p><br />
      </p>
      <p style="text-align:center; font-weight:bold; font-size:22px;">Motion Detection and Alert Messages</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p>As a Foscam IP camera and official APP “Foscam” user, you can get two kinds of real-time alert push notifications on your Foscam APP: one is called “Message Push”, which will pop up on your phone or tablet just like messages you get from other apps; the other one is “Rich Media Message Push”, an advanced technology which will directly send you real-time alert push notifications with real-time snapshots, keeping you stay connected with the newly events and never missing something important.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What’s the importance of alert push notifications?</strong></p>
      <p><br />
      </p>
      <p><img src="/Public/Home/images/Cloud_Service_Img/mdam_1.jpg" /></p>
      <p><br />
      </p>
  
      <p><br />
      </p>
      <p>At the very beginning, users can receive email notifications for the alerts from the IP camera on the condition that he/she has configured relevant parameters of the e-mail on the local devices already. However, email notifications may sometimes cause delay and users can check the content only by logging in their email from the third-party, which is quite inconvenient</p>
      <p><br />
      </p>

      <p>However, if all the users can receive alert messages from a certain cloud platform like mobile APP, it will be much more convenient for them to keep notice of the alerts timely from their home, office or factory. And if this function comes true, on the one hand, user experience will be dramatically enhanced in that users needn’t configure too much parameters before experiencing the function only by open the button; on the other hand, the timely and real-time alert messages can help prevent intrusion immediately so as to avoid property loss.</p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p><strong>What can Foscam cameras detect in various conditions?</strong></p>
      <p><br />
      </p>
      <p>Foscam camera can help witness things happening around it and <strong>detect motions, sounds, temperature(Baby Monitor only)</strong> and <strong>humidity(Baby Monitor only) as well</strong>. It will send you <strong>motion alerts</strong> and <strong>sound alerts</strong> to keep you master what matters most.</p>
      <p><br />
      </p>
      <p><strong>Sound Detection</strong></p>
      <p><br />
      </p>
      <p>If you turn on sound detection for your camera, it can detect noise and sound around itself while sending alert messages to you via APP to keep you informed of each abnormal condition.</p>
      <p><br />
      </p>
		<p><br />
      </p>
      <p>Foscam cameras feature motion detection which can help keep an eye on what matters most at home, office, factory, store, etc. And till now, Foscam camera support three kinds of motion detection---<strong> Motion Detection, PIR Detection, Motion Detection for specific zone.</strong></p>
      <p><br />
      </p>
      <p><b>Motion Detection</b> </p>
      <p><br />
      </p>
       <p><img  style="  float: right;
  margin-left: 45px; width:30%;" src="/Public/Home/images/Cloud_Service_Img/mdam_2.jpg" /></p>
      

      <p>This is a basic detection type that can automatically detect moving objects and trigger alert. When danger occurs or a motion is detected, the camera witnesses it and send alert message to you via FTP or mobile APP.  
If you open the motion detection for the camera on your APP, it will automatically cover all areas within its line of sight by default.</p>
      <p style="clear:both;"><br />
      </p>
      <p><strong>PIR (Passive Infrared Sensor) Detection
</strong></p>
     
      <p style="clear:both;"></p>     
      <p><br />
      </p>
      <p>Foscam camera has advanced PIR detection that can help you keep an eye on things, and it can send you an accurate motion alert when it detects motion.</p>
      <p><br />
      </p>
      <p><img style="float:left; margin-right:45px; width:30%;" src="/Public/Home/images/Cloud_Service_Img/mdam_3.jpg" /></p>
<p>
“A PIR, which is commonly called simply for Passive Infrared Sensor, is an electronic sensor that measures infrared (IR) light radiating from objects in its field of view. They are most often used in PIR-based motion detectors.” A PIR-based motion detection is used to sense movement of people, animals, or other objects. </p>
      <p style="clear:both;"><br />
      </p>
      
      <p>PIR detection detects changes in the amount of infrared radiation impinging upon it, which varies depending on the temperature and surface characteristics when the objects in front of the sensor, thus triggers detection and alert. <br /><br />

With PIR detection, it can help distinguish humans, animals from objects, dramatically lowering the rate of false alarm. And some Foscam cameras have been already equipped with this kind of PIR tool to enable users to accurately monitor home without being annoyed at receiving false alerts with blowing leaves. <br /><br />

Models that support this PIR detection at present are mainly indoor cameras like C1, C2. Yet, for outdoor cameras, our R&D team are doing pre-research and trying to make an early realization. </p>
      <p><br />
      </p>
      
      <p><br />
      </p>
      <p><b>Motion Detection for Specific Zone</b></p>
      <p><br />
      </p>
      <p>Foscam camera features motion detection for specific zone. This kind of motion detection can pay closer attention only to a specific area that you are most interested in. It will send alert message immediately to your mobile APP only when motion is detected in this zone.</p>
      <p><br />
      </p>
      <p><img style="  float: right;
  margin-left: 45px; width:35%;" src="/Public/Home/images/Cloud_Service_Img/mdam_4.jpg" /></p>
      <p><br />
      </p>
      <p>This allows up to 3 specific zones within your camera frame to focus where the motion detection should be captured. You can use motion detection for specific zones to do things like getting an alert if there is motion around your doorway, whether your elderly parents are fine, or if your little kids go back home or not.</p>
      <p style="clear:both;"><br />
      </p>
      <p>By using this kind of detection, you need to do some settings for your camera on your local devices , and then the alert message will timely be send to your mobile APP. And we’re trying to make some changes to realize directly setting operation on mobile APP for convenience consideration.</p>
      <p><br />
      </p><p><br />
      </p>
      <p><b>How does Foscam Cloud send alert messages?</b></p>
      <p><br />
      </p>
      <p><b>Message Push</b></p>
      <p><br />
      </p>
      <p><img style="float:left; margin-right:45px;" src="/Public/Home/images/Cloud_Service_Img/mdam_5.jpg" /></p>
      <p><br />
      </p>
      <p>Foscam IP camera can detect sound and motion around itself and trigger prompt alert; straight after, it will immediately send an alert message to you mobile APP to make you notice of what happening at the first time. In this message, you can get the type of detection (sound or motion), time for the detection as well as the place that the detection happens in the form of words. You can check the alert message whenever you want in the message interface in the Foscam APP.</p>
      <p><br />
      </p>
      <p style="clear:both;"><br />
      </p>
      <p><br />
      </p>
      <p><b>Rich Media Message Push</b></p>
      
      <p style="clear:both;"></p>
      <p><img style=" float:right; margin-left:85px; width:30%;" src="/Public/Home/images/Cloud_Service_Img/mdam_6.jpg" /></p>
      <p><br />
      </p>
      <p>Foscam Cloud adopts an advanced technology, Rich Media Message Push, which is a new message type that can send alerts message with real-time snapshots to your mobile APP. This kind of vivid message can keep you always stay connected with the newly events by real snapshots, but also enable you to make accurate judgment for taking further actions.</p>
      <p style="clear:both;"><br /><br /> </p>
<p>
One thing you should notice is that, every brand new IP camera which is newly added to your Foscam Cloud account comes with a 30-day free trial of Rich Media Message Push function, therefore, you can receive real-time alerts with 30 snapshots at most per day and save them for 7-day for a later view. After 30 days, your free trial will end. However, if you have already been a Foscam Cloud storage user, you’ll experience alert message with unlimited real-time snapshots all for free, and save them for the days according to your subscribed package; otherwise, you’ll no longer receive any alerts with real-time snapshots.<br /><br /> 

What you have to do is to make sure your camera version is updated to the version of 2.x.1.18 or above. And up to now, models that support Rich Media Message Push are <strong>C2, R2, R4, FI9900P, FI9900EP.</strong> More models will soon be covered. </p>
      <p><br />
      </p>
      <p><br />
      </p>
      <p>For more information, please visit Foscam website at <a href="http://www.foscam.com">www.foscam.com</a> or <a href="http://www.myfoscam.com">www.myfoscam.com.</a></p>
      <p><br />
        <br />
      </p>
      <p></p>
    </div>
    <!--专题三完-->
     <!--专题四--> 
    <!--<div class="wrap" style="display:'';">
    <img src="/Public/Home/images/Cloud_Service_Img/zhuanti4_01.jpg" width="100%"; />
     <img src="/Public/Home/images/Cloud_Service_Img/zhuanti4_02.jpg" width="100%"; />
      <img src="/Public/Home/images/Cloud_Service_Img/zhuanti4_03.jpg" width="100%"; />
       <img src="/Public/Home/images/Cloud_Service_Img/zhuanti4_04.jpg" width="100%"; />
    <a href="https://www.myfoscam.com/" style="display: inline-block;
  width: 342px;
  height: 64px;
  position: relative;
  left: 215px;
  top: -92px;"></a>
    </div>-->
  </div>
</div>

<!--main完-->