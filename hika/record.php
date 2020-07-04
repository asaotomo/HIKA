<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>结果处理</title>
</head>
<style>

body{
text-align:center;
}
p{
margin-top:5%;
color:#696969
}

</style> 
<body>
<p>
<?php

$TOKEN = $_POST["token"];
$COOKIE = $_POST["cookie"];
$SECTET = $_POST["secret"];

if($SECTET=='hika123'){
	echo 'Token:'.$TOKEN.'<br>';
	echo 'Cookie:'.$COOKIE.'<br>';
	$filename="info.ini";
	$handle=fopen($filename,"w+");
	fwrite($handle,$TOKEN."\r\n");
	fwrite($handle,$COOKIE."\r\n");
	fclose($handle);
	echo '信息提交成功,并已写入配置文件！<br>';
}else{
    echo '抱歉提交码错误，请重新输入！<br>';
}
?>
</p>
</body>
</html>