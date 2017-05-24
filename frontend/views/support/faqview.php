<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foscam FAQ</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0">
<link rel="stylesheet" type="text/css" href="/Public/Home/mobile/css/style.css" media="all" />
<style>
.header {align-items: center; height: 44px; border-bottom: 1px solid #f2f2f2; display: flex;left: 0;position: fixed; right: 0; top: 0;z-index: 10; background:#FFF;}
.header img {height: 21px; margin:10px;}
.header .left { position: relative;  z-index: 1;padding-left: 0.2rem;}
.header .tit { flex-grow: 1; margin-left: 0.2rem; width: 100%;}
.header .searchlabel {margin-left: -1px; padding:0 0.2rem;}
.main-home p{padding: 0.3rem 0.2rem 0.2rem;}
.main-home p img{max-width: 100%;/*height: 100%;*/}
</style>
</head>

<body>
<div class="header">
<div class="left">
<a onclick="history.go(-1);"><img alt="Foscam" id="logoPic" src="/Public/Home/mobile/css/return.png"></a>
</div>
<div class="tit"><div class="searchword" style="text-align:center;"></div></div>
<div class="searchlabel"></div>
</div>
 	<div class="indexBanner_img" style="padding: 44px 0px 0px;">
		<img  src="/Public/Home/mobile/css/enbanner.jpg" />
	</div>
    <div class="main-home col1-layout">
    	<foreach name="row" item="val">
        <p> <?php echo $row->content;?></p>
        </foreach>
    </div>
</body>
</html>