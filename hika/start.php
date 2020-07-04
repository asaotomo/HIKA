<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title>爬虫引导程序</title>
</head>
<body
<script>alert('爬虫程序开始执行......')</script>;
<?php
header("Content-type: text/html; charset=utf-8");
ignore_user_abort(true);
set_time_limit(0);
//

echo "爬虫程序执行中，请稍后......<br>";
//$output = shell_exec('python 每日资讯收集.py');
$output = shell_exec('每日资讯收集.exe');
echo "<script>alert('抱歉，爬取失败，请检查你提交的Cookie是否在有效！')</script>";
?>  
</body>
</html>