<style>
@CHARSET "UTF-8";
/*初始化*/
* {
	margin: 0;
	padding: 0;
}
body {
	font: 14px open_sansregular, Helvetica;
}
p,li{
	font-family:open_sansregular, Helvetica;
}
li {
	list-style: none;
}
/*公共样式*/
.comWith {
	width: 1160px;
	margin: 0 auto;
}
.loginContent {
	background: #f7f3f7;
	width: 100%;
	position: relative;
	height: 788px;
}
.loginContent .inner {
	position: relative;
	top: 56px;
	background: #fff;
	border: 1px solid #e3e3e3;
	padding-left: 15px;
}
.loginContent .innerContent {
	width: 1000px;
	margin: 0 auto;
	height: 555px;
	position: relative;
	border-top: 1px solid #bfbfbf;
}
.loginContent .innerContent .tips {
	position: absolute;
	top: 455px;
	left: 186px;
	font-size: 16px;
	color: #898989;
}
.loginContent h1 {
	font-size: 30px;
	color: #e83827;
	font-weight: 100;
	padding: 25px 0 10px 75px
}
.loginContent .innerContent .signIn {
	width: 480px;
	height: 339px;
	position: absolute;
	top: 66px;
	border-right: 1px solid #b5b5b5;
}
.loginContent .innerContent .signIn ul li {
	font-size: 18px;
	color: #878787;
	height: 45px;
	line-height: 45px;
}
.loginContent .innerContent .signIn ul li span {
	font-size:15px;
}
.loginContent .innerContent .signIn ul li a {
	padding-left:56px;
	color: #878787;
	font-size:15px;
}
.loginContent .innerContent input.email {
	width: 340px;
	height: 35px;
	border: 1px solid #ccc;
}
.loginContent .innerContent .signIn ul li:nth-child(5) input.email {
	font-size: 20px;
	color: #fff;
	background: #e83827;
	margin-top: 58px;
}
.loginContent input[type=checkbox] {
	width: 15px;
	height: 15px;
	margin-right:12px;
}
.loginContent .innerContent .signDesc {
	width: 410px;
	height: 339px;
	position: absolute;
	top: 66px;
	left:600px;
}
.loginContent .innerContent .signDesc ul li {
	font-size:16px;
	color:#898989;
	list-style:circle;
	height:150px;
}
.loginContent .innerContent .signDesc ul li a {
	color:#e83827;
}

</style>
<div class="loginContent clear">
<form action="/index/login.html" method="post">
	<div class="comWith inner">
		<h1>Please Sign In</h1>
		<div class="innerContent">
			<div class="signIn">
            	<ul>
                	<li>E-mail address:</li>
                    <li><input type="text" name="email" class="email"></li>
                    <li>Password:</li>
                    <li><input type="password" name="password" class="email"></li>
                    <li><input type="submit" class="email" value="Sign In"></li>
                    <li><input type="checkbox" name="remember"><span>Remember me</span><a href="https://www.myfoscam.com/user/findpass1">Forgot your password?</a></li>
                </ul>			
			</div>
			<div class="signDesc">
				<ul>
                	<li>Already have an account without password on www.foscam.com?
                     Please <a href="/index/ologin.html">click here</a> to set a password before signing in.</li>
                    <li>Already have an  account on www.myfoscam.com?<br />
                     Please sign in on the left side.</li>
                    <li>Don't have account? <a href="https://www.myfoscam.com/user/register">Create one now.</a></li>
                </ul>
			</div>
            <p class="tips"><font color="#e83827">Tips:</font> With a registered account, you can sign in both www.foscam.com and www.myfoscam.com.</p>
		</div>
	</div>
</form>
</div>