 <?php
use yii\helpers\Url;
?>
 <style>
 	#submenu{ display:none;}
	#submenu li{ margin:0; padding:0; height:28px;}
	#submenu li a{ color:red;}
	#menu:hover #submenu{ display:inline-block;}
	
	.banner_img {
    max-width: 100%;
    min-width: 1160px;
    height: 300px;
    background: url(/Public/Home/images/goods_img/hbanner.jpg) center no-repeat;
    background-size: cover;
	color:#FFF;
	font-size:30px; }
.main_htb {
    width: 1160px;
    margin: 0 auto;
	background:#FFF;
}
.text_title{padding:40px 70px 40px 70px;}
.text_title p{font-size:18px; }
.input-form{border:none; border-bottom:1px solid #727272;}
.required{color:#F00;}
.authorized_banner{/*position: absolute;left: 300px;top: 0px;*/text-align:center; padding-top:100px;}
.error{color:#F00;}
 </style>
 <script>
 	$().ready(function() {
		$("#signupForm").validate({
			rules: {
				business_name:"required",
				billing_address:"required",
				city_country:"required",
				year_started:"required",
				number_employees:"required",
				number_salespeople:"required",
				number_service:"required",
				business_is:"required",
				question_c:"required",
				question_d:"required",
				question_e:"required",
				question_f:"required",
				question_h:"required",
				question_i:"required",
				salutation:"required",
				firstname: "required",
				lastname: "required",
				job_title: "required",
				skype: "required",
				phone: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {
				salutation: "Please enter your salutation",
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				job_title: "Please enter your Job Title",
				skype: "Please enter your Skype",
				phone: "Please enter your Phone",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy",
				topic: "Please select at least 2 topics"
			}
		});		
	});
 </script>
 <script src="/Public/Home/js/jquery.validate.min.js" type="text/javascript"></script>
<div class="banner">
	<div class="banner_img"><div class="authorized_banner">Foscam Authorized<br>Dealer Application</div></div>
</div>
<form action="<?php echo Url::to(['cooperate/authsave']);?>"  id="signupForm" method="post">
<input type="hidden" name="_csrf" id='csrf' value="<?= Yii::$app->request->csrfToken ?>">  
<div style="background:#EEEEEE;">
<div style="width:1160px; margin:0 auto; height:20px;"></div>
<div class="main_htb">
	<div class="text_title" style="font-size:26px;">
		<p>Thank you for your interest in Foscam. We are seeking partners with expertise or interest in expanding into security video surveillance working in specific maket segments. Please complete the following application form to have a Foscam sales representative contacting you when needed.</p> 
		<p>&nbsp;</p>
		<p>Notes: All field marked with <span class="required">*</span> is required.</p>
		<p>&nbsp;</p>
		<div style="text-align:center;color:#F00">Business Information</div>
			<div style="font-size:18px;color:#727272">
			<table width="100%">
				<tr height="40">
					<td colspan="2">Legal Business Name <span class="required">*</span> <input type="text" size="88" name="business_name" class="input-form"></td>
				</tr>
				<tr height="40">
					<td width="50%">Billing Address <span class="required">*</span> &nbsp;&nbsp;<input type="text" size="36" name="billing_address" class="input-form"></td>
					<td width="50%">City, Country  <span class="required">*</span> &nbsp;&nbsp;<input type="text" size="38" name="city_country" class="input-form"></td>
				</tr>
				<tr height="40">
					<td  width="50%">Website Address  &nbsp;&nbsp;<input type="text" size="36" name="website" class="input-form"></td>
					<td  width="50%"><input type="checkbox" name="nowebsite[]" value="No website" /> No Website</td>
				</tr>
				<tr height="40">
					<td width="50%">Year Started <span class="required">*</span> &nbsp;&nbsp;<input type="text" size="38" name="year_started" class="input-form"></td>
					<td width="50%">Number of Full-time Employees <span class="required">*</span> &nbsp;&nbsp;<input type="text" size="20" name="number_employees" class="input-form"></td>
				</tr>
				<tr height="40">
					<td width="50%">Number of Salespeople <span class="required">*</span> &nbsp;&nbsp;<input type="text" size="28" name="number_salespeople" class="input-form"></td>
					<td width="50%">Number of Aftersales Service Staff <span class="required">*</span> &nbsp;&nbsp;<input type="text" size="18" name="number_service" class="input-form"></td>
				</tr>
				<tr height="40">
					<td colspan="2">Business is a  <span class="required">*</span>
						<span><input type="checkbox" name="business_is[]" value="Corporation" required minlength="1" />&nbsp;&nbsp;Corporation</span>
						<span style="margin-left:40px;"><input type="checkbox" name="business_is[]" value="LLC" />&nbsp;&nbsp;LLC</span>
						<span style="margin-left:40px;"><input type="checkbox" name="business_is[]" value="Partnership" />&nbsp;&nbsp;Partnership</span>
						<span style="margin-left:40px;"><input type="checkbox" name="business_is[]" value="Proprietorship" />&nbsp;&nbsp;Proprietorship</span>
						<label for="business_is[]" class="error"></label>

					</td>
				</tr>
			</table>
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div style="font-size:18px; clear:both;">
			<div style="font-size:18px;color:#727272"><b>Main Business Focus <span class="required">*</span> </b> Please check all that apply now  <label for="main_business[]" class="error"></label></div>
			<div style="font-size:18px; clear:both; height:300px;color:#727272">
				<table width="90%" align="right">
					<tr height="60">
						<td width="25%"><input type="checkbox" name="main_business[]" value="Distributor" required minlength="1"  /> Distributor</td>
						<td width="25%"><input type="checkbox" name="main_business[]" value="Wholesaler" /> Wholesaler</td>
						<td width="25%"><input type="checkbox" name="main_business[]" value="Reseller" /> Reseller</td>
						<td width="25%"><input type="checkbox" name="main_business[]" value="OEM" /> OEM</td>
					</tr>
					<tr height="60">
						<td><input type="checkbox" name="main_business[]" value="E-commerce" /> E-commerce</td>
						<td><input type="checkbox" name="main_business[]" value="Retail Store" /> Retail Store</td>
						<td colspan="2"><input type="checkbox" name="main_business[]" value="Value Added Reseller (VAR)" name="Value Added Reseller (VAR)"/> Value Added Reseller (VAR)</td>
					</tr>
					<tr height="60">
						<td><input type="checkbox" name="main_business[]" value="Corporate" /> Corporate</td>
						<td><input type="checkbox" name="main_business[]" value="System Integrator" /> System Integrator</td>
						<td colspan="2"><input type="checkbox" name="main_business[]" value="System Installer" /> System Installer</td>
					</tr>
					<tr height="60">
						<td colspan="4"><input type="checkbox" name="main_business[]" value="Other" /> Other  <input type="text" size="90" name="main_business_other" class="input-form">
						</td>
					</tr>
					</table>
						
			</div>
			
			<div style="font-size:18px;color:#727272"><b>How will you resell the Foscam security cameras? <span class="required">*</span></b> <label for="question_a[]" class="error"></label></div>
				<div style="font-size:18px; clear:both; height:300px;color:#727272">
				<table width="90%" align="right">
					<tr height="60">
						<td width="25%"><input type="checkbox" name="question_a[]" value="Storefront" required minlength="1"  /> Storefront</td>
						<td width="25%"><input type="checkbox" name="question_a[]" value="Distribution" /> Distribution</td>
						<td width="25%"><input type="checkbox" name="question_a[]" value="Installation" /> Installation</td>
						<td width="25%"><input type="checkbox" name="question_a[]" value="Retail" /> Retail</td>
					</tr>
					<tr height="60">
						<td><input type="checkbox" name="question_a[]" value="Online" /> Online </td>
						<td></td>
						<td colspan="2"></td>
					</tr>
					<tr height="30" style="font-size:15px;">
						<td colspan="2">using your own website</td>
						<td colspan="2">Link:<input type="text" size="50" name="using_website" class="input-form"></td>
					</tr>
					<tr height="30" style="font-size:15px;">
						<td colspan="2">using marketplace such as Amazon, Newegg, EBay, Best Buy...</td>
						<td colspan="2">Link:<input type="text" size="50" name="using_marketplace" class="input-form"></td>
					</tr>
					<tr height="60">
						<td colspan="4"><input type="checkbox" name="question_a[]" value="Other" /> Other <input type="text" size="91" name="question_a_other" class="input-form"></td>
					</tr>
					</table> 
			</div>
			
			<div style="font-size:18px;color:#727272"><b>Do you plan to sell Foscam products outside your country? <span class="required">*</span></b> <label for="question_b" class="error"></div>
				<div style="font-size:18px; clear:both; height:135px;color:#727272">
				<table width="90%" align="right">
					<tr height="60">
						<td><input type="radio" value="Yes" name="question_b" required /> Yes <input type="text" size="91" name="question_b_yes" class="input-form"></td>
					</tr>
					<tr height="60">
						<td><input type="radio" value="No" name="question_b" /> No <input type="text" size="91" name="question_b_no" class="input-form"></td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>Approximate annual revenue generated from selling video surveillance products <span class="required">*</span> </b>  <label for="question_c" class="error"></div>
				<div style="font-size:18px; clear:both; height:90px;color:#727272">
				<table width="100%">
					<tr height="60">
						<td><input type="text" size="108" name="question_c" class="input-form"></td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>Estimated Monthly Foscam Sales if approved <span class="required">*</span></b> <label for="question_d" class="error"></div>
				<div style="font-size:18px; clear:both; height:90px;color:#727272">
				<table width="100%">
					<tr height="60">
						<td><input type="text" size="108" name="question_d" class="input-form"></td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>What proportion will Foscam business account for in your future annual revenue?<span class="required">*</span></b> <label for="question_e" class="error"></div>
				<div style="font-size:18px; clear:both; height:90px;color:#727272">
				<table width="100%">
					<tr height="60">
						<td><input type="text" size="108" name="question_e" class="input-form"></td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>What's your budget for promoting Foscam cameras every quarter? <span class="required">*</span></b> <label for="question_f" class="error"></div>
				<div style="font-size:18px; clear:both; height:90px;color:#727272">
				<table width="100%">
					<tr height="60">
						<td><input type="text" size="108" name="question_f" class="input-form"></td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>Do you have any promotion ideas on selling Foscam cameras?</b></div>
				<div style="font-size:18px; clear:both; height:90px;color:#727272">
				<table width="100%">
					<tr height="60">
						<td><input type="text" size="108" name="question_g" class="input-form"></td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>Do you currently purchase Foscam products through a distributor? <span class="required">*</span></b> <label for="question_h" class="error"></div>
				<div style="font-size:18px; clear:both; height:135px;color:#727272">
				<table width="90%" align="right">
					<tr height="60">
						<td><input type="radio" value="yes" name="question_h" required /> Yes <input type="text" size="91" name="question_h_yes" class="input-form"></td>
					</tr>
					<tr height="60">
						<td><input type="radio" value="no" name="question_h" /> No <input type="text" size="91" name="question_h_no" class="input-form"></label>
</td>
					</tr>
					</table> 
				</div>
				<div style="font-size:18px;color:#727272"><b>Other brands you carry <span class="required">*</span></b> <label for="question_i" class="error"></div>
				<div style="font-size:18px; clear:both; height:90px;color:#727272">
				<table width="100%">
					<tr height="60">
						<td><input type="text" size="108" name="question_i" class="input-form"></td>
					</tr>
					</table> 
				</div>
				
				
			</div>
			
		
	</div>
</div>

<div style="width:1160px; margin:0 auto; height:20px; clear:both;"></div>
<div class="main_htb">
	<div class="text_title" style="font-size:26px;">
		<div style="text-align:center;color:#F00">Contact Information</div>
		<p>&nbsp;</p>
		
		<div style="font-size:18px;color:#727272">
			<table width="100%">
				<tr height="40">
					<td colspan="2">Salutation <span class="required">*</span> <input type="text" size="95" name="salutation" class="input-form"></td>
				</tr>
				<tr height="40">
					<td width="50%">First Name <span class="required">*</span> <input type="text" size="40" name="firstname" class="input-form"></td>
					<td width="50%">Last Name <span class="required">*</span> <input type="text" size="38" name="lastname" class="input-form"></td>
				</tr>
				<tr height="40">
					<td colspan="2">Job Title<span class="required">*</span><input type="text" size="98" name="job_title" class="input-form"></td>
				</tr>
				<tr height="40">
					<td width="50%">Email <span class="required">*</span> <input type="text" size="44" name="email" class="input-form"></td>
					<td width="50%">Skype <span class="required">* </span><input type="text" size="42" name="skype" class="input-form"></td>
				</tr>
				<tr height="40">
					<td width="50%">Phone <span class="required">*</span> <input type="text" size="43" name="phone" class="input-form"></td>
					<td width="50%">Ext <input type="text" size="47" name="ext" class="input-form"></td>
				</tr>
				<tr height="40">
					<td colspan="2">Mobile Number<input type="text" size="92" name="mobile_number" class="input-form"></td>
				</tr>
			</table>
		</div>
		
	</div>
</div>

<div style="width:1160px; margin:0 auto; height:20px;"></div>
<div class="main_htb">
	<div class="text_title" style="font-size:26px; color:#727272;">
		<p>By signing below, you certify that all information provided above is true and correct. Any willful dishonesty may render for refusal of this application or immediate termination of Foscam's authorized dealer qualification.</p> 
		<p>&nbsp;</p>
		<div style="font-size:18px;">
			<table width="100%">
				<tr height="40">
					<td width="60%" align="right">Authorized Individual:</td>
					<td> &nbsp;&nbsp;<input type="text" size="40" name="authorized_individual" class="input-form"></td>
				</tr>
				<tr height="40">
					<td align="right">Title:</td>
					<td> &nbsp;&nbsp;<input type="text" size="40" name="title" class="input-form"></td>
				</tr>
			</table>
		</div>
		<p>&nbsp;</p>
		<p>By submitting this application form, you confirm that your company complies with Foscam's MSRP (Manufacturer Suggested Retail Price) policy and other marketing management regulations, both of which may be revised by Foscam from time to time. Besides, you expressly agree to press your sub-resellers to comply with Foscam's MSRP and other marketing management regulations.</p>
		<p>&nbsp;</p>
		<p>Authorized dealers may request Foscam to offer the latest MSRP List.</p>
		<div style="text-align:center; margin-top:50px; margin-bottom:30px;"><input type="submit" value="Submit" class="authsubmit"></div>
	</div>
</div>
</div>
</form>
<style>
.authsubmit {
 width:160px; 
 height:40px;
 border-radius: 5px;
 background:#F00;
 line-height:30px;
 text-align:center;
 color:#fff;font-size:18px;
 border:none;
}

</style>