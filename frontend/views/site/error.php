<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use yii\helpers\Html;
$this->title = $name;
?>
<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv=refresh content=2;url=http://www.foscam.com/>
<title>404</title>
<style type="text/css">
<!--
body {
	font-size: 13px;
	filter: progid:dximagetransform.microsoft.gradient(gradienttype=0,startcolorstr=#dbebfa,endcolorstr=#f9fcfd);
	margin: 0px;
}
-->
</style>
<script language="javascript" type="text/javascript" src="http://js.521.cc/js/user.js"></script></head>

<body>
<table border=0 cellpadding=0 cellspacing=0 width="100%" height="100%">
<tr>
	<td align="center" style="padding-top:60px;">
    <img src="/001.png" />   </td>
</tr>
<tr>
<form name=loading>
<td align=center>

<p>
<input type=text name=chart size=46 style="font-family:arial;
font-weight:bolder; color:gray;
background-color:white; padding:0px; border-style:none;">
<br>
<input type=text name=percent size=46 style="font-family:arial;
color:gray; text-align:center;
border-width:medium; border-style:none;">
<script>var bar = 0
var line = "||"
var amount ="||"
count()
function count(){
bar= bar+2
amount =amount + line
document.loading.chart.value=amount
document.loading.percent.value=bar+"%"
if (bar<99)
{settimeout("count()",1);}//这里修改载入时间
else
{window.location = "http://www.foscam.com/";}//这里改成你的网站地址
}
</script>
</p>
</td>
</form>
</tr>
</table>
<!--cnzz-->
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_4131021'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D4131021%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script>
<!--cnzz-->
</body>
</html>

