<?php
use yii\helpers\Url;
?>
<div style="width:600px; height:340px; margin:35px auto; border-radius:8px; position:relative;">
<div style=" position:relative; top:85px; left:33px;">
	<p style="color:#404040; font-size:18px;">Users already registered, please login.</p>
    <p style="color:#404040; font-size:18px;">Forget password, please find the password and log in again.</p>
</div>
	<p style=" position:absolute; top:255px; left:33px;"><a style="text-decoration:none; display:inline-block; width:165px; height:32px; line-height:32px; text-align:center; background:#e83426; color:#fff; margin-right:88px;" href="<?php echo Url::to(['index/signin']);?>">Log in</a><a style="text-decoration:none; display:inline-block; width:165px; height:32px; line-height:32px; text-align:center; background:#05afec; color:#fff;" href="https://www.myfoscam.com/user/findpass1">Find your password
</a></p>
</div>