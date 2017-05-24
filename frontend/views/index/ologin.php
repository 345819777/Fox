
<link href="/Public/Home/css/yun.css" type="text/css" rel="stylesheet" />
<script>
	$(function(){
		$('.submit').css({'opacity':'1','cursor':'pointer'});
		//查询官网老用户状态
		$('#sstep1').click(function(){		
		var url = '/index/ologin_do.html?Username='+$('#username').val();
			$.ajax({
				type:'GET',
				url:url,
				dataType:"json",
				success: function(data){					
					if(data.errorCode=='020010'){						
						$('.isemail').html("This account has not been registered yet, please register.");
						$('#sswitch').css('display','inline-block');
						$('#sstep1').hide();	
											
					}else if(data.errorCode=='020017' || data.errorCode=='020018'){					
						window.open('/index/lonfind.html','_self');					
					}else if(data.errorCode=='000099'){
						$('.isemail').html("Mailbox format error !");											
					}else if(data.errorCode=='000006'){						
						$('.isemail').html("Mailbox format error !");					
					}else if(data.errorCode=='009999'){
						$('.isemail').html("The api does not exist.");												
					}else{
						$('.isemail').html("");
					}
					if(data.data.mustResetPwd==true){						
						//$('.isemail').html("请重新设置密码");
						$('#table1').css('display','none');
						$('#table2').css('display','block');						
					}else if(data.data.mustResetPwd==false){
						$('.isemail').html('');
					}
					if(data.data.actived==false){
					//$('.isemail').html("请重新设置密码");
						$('#table1').css('display','none');
						$('#table2').css('display','block');
				
					}else{
						$('.isemail').html('The user has activated, please login.');
						$('#slogin').css('display','inline-block').click(function(){
							$('.logina').trigger('click');
						});
						$('#sstep1').hide();	
						
					}
								
				},
					
				});		
		});
		
	});
	checkpass = false;
	checkrepass=false;
	checkboxs=false;
	function isEmails(obj){   
		reg=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;   
		if(!reg.test(obj)){        
			$(".isemail").html("Mailbox format error"); 
			 $('#email').focus();
		}else{   
			$(".isemail").html("");  
		}   
	}
	function checkpasswd(obj){
		password=/^(?![\d]+$)(?![a-zA-Z]+$)(?![!#$%^&*]+$)[\da-zA-Z!#$%^&*]{6,20}$/;		
		if(!password.test(obj)){
			$('.passwd').html("The password should be 6-20 numbers, letters, symbols combination.");
			checkpass = false;			
		}else{			
			$('.passwd').html("");
			checkpass = true;
		}		
	}
	function checkpasswd2(){
		
		if($('#password2').val() != $("#password").val()){
			$('.passwd2').html('The two passwords do not match.');
			checkrepass=false;
		}else{		
			$('.passwd2').html("");	
			checkrepass=true;
		}
	
	}
	function myCheckbox(obj,thisobj){
		var o = document.getElementById(obj);
		if(o.checked){
			thisobj.style.backgroundImage="url(/Public/Home/images/index_img/checkOff.JPG)";
			o.checked = false;
			checkboxs=false;
		}else{
			thisobj.style.backgroundImage="url(/Public/Home/images/index_img/checkOn.JPG)";
			o.checked = true;
			checkboxs=true;
		}
	}
	function checkAll(){
		//控制激活按钮
		if(checkpass == false ||
			checkrepass==false ||
			checkboxs==false ){
			//$('.submit').css({'opacity':'0.2','cursor':'default'});
		}else{
			
			//完善老用户信息，发送激活邮件	
		var data ={'username':$('#username').val(),'password':$('#password').val(),'pwdType':$('#pwdType').val()};
			$.ajax({
				type:'POST',
				url:"/index/ologin_do53",
				data:data,
				dataType:"json",
				success: function(data){
					if(data.errorCode == ''){
						window.open('/index/tip','_self');						
					}
				}					
			});
		}	
	}
</script>
<div class="wrap">
  <div class="top">
    <p class="l_logo"><span style="position:relative; top:-15px;">If you want to log in with an account of Foscam, you should fill the following information and active the account.</span></p>
  </div>
  <div id="content">
    <div class="table" id="table1"  style=" position:absolute; top:144px; left:55px;">
      <div class="row">
        <div class="cell right">E-Mail:</div>
        <div class="cell">
          <input type="text" onblur="isEmails(this.value)" placeholder="&nbsp;Please input your E-Mail." class="txt" id="username" name="username" />
        </div>
        <div class="cell colspan">
          <p class="isemail"  style="width:320px;"></p>
        </div>
      </div>
     
      <div class="row">
        <div class="cell"></div>
        <div class="cell"> <i>The e-mail must be signed up on foscam.com.</i> </div>
        <div class="cell"></div>
      </div>
      <div class="row">
        <div class="cell"></div>
        <div class="cell">
          <input type="button" id="sstep1" style="color:#fff; font-size:16px; background:#e83426;" value="Next"  />
          <a id="sswitch" style=" font-size:16px; background:#E83426; color:#fff;width:320px;height: 40px; display:none; line-height:40px; text-align:center;" href="https://www.myfoscam.com/user/register">Register</a>
          
          <a id="slogin" style=" font-size:16px; background:#E83426; color:#fff;width:320px;height: 40px; display:none; line-height:40px; text-align:center;" href="javascript:void(0)">Login</a>
          
        </div>
        <div class="cell"></div>
      </div>
       </div>
       <div class="table"  id="table2" style="position:absolute;top: 144px;display:none;" >
      <div class="row">
        <div class="cell right">Password:</div>
        <div class="cell">
          <input id="password" type="password" class="txt" onkeyup="checkpasswd(this.value)" placeholder=" &nbsp;Please set a password." name="password" />
        </div>
        <div class="cell">
          <p class="passwd" style="width:320px; color:red;"></p>
        </div>
      </div>
      <div class="row">
        <div class="cell right">Confirm Password:</div>
        <div class="cell">
          <input type="password" id="password2" class="txt" onkeyup="checkpasswd2()" placeholder="&nbsp;Please repeat the password." name="repassword" />
        </div>
        <div class="cell">
          <p class="passwd2"  style="width:320px; color:red;"></p>
        </div>
      </div>
      <div class="row">
        <div class="cell"></div>
        <div class="cell">
          <input type="checkbox" name="cc" id="cc" value="checkbox" style="display:none;" />
          <div style=" display:inline-block;width:22px; height:22px;background-image:url(/Public/Home/images/index_img/checkOff.JPG);" onclick="myCheckbox('cc',this);">&nbsp;</div>
          <span style="line-height:22px; font-size:14px; color:#444; margin-left:10px;">I have read and agreed &nbsp;<a style="color:#199bf0;" href="https://www.myfoscam.com/user/service_agreement" target="_blank">Registration Terms of Service</a> </span> </div>
        <div class="cell"></div>
      </div>
      <input type="hidden" id="pwdType" value="1" />
      <div class="row">
        <div class="cell"></div>
        <div class="cell">
          <input type="submit" class="submit" onclick="return checkAll();" value="Active the Account" />
        </div>
        <div class="cell"></div>
      </div>
    </div>
  </div>
</div>

