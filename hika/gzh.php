<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <title>公众号爬虫-最新文章</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <style>
* {
  box-sizing: border-box;
}

html,body {
  margin: 0;
  height:100%;
}

/* 头部样式 */
.header {
  background-color: #f1f1f1;
  background-image:url('img/hd.jpg');
  padding: 20px;
  text-align: center;
  color:white
}

/* 导航条 */
.topnav {
  overflow: hidden;
  background-color: #2266ff;
}

/* 导航链接 */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* 链接 - 修改颜色 */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
 
/* 列后清除浮动 */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 
/* 响应式布局 - 小于 600 px 时改为上下布局 */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
 hr{
  height: 5px;
  background-color:#eb7350;
  border: none;
}
a:link{text-decoration:none ; color:#cc0000;}

.bigbigbox {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    height: 100%;
    background: url(img/bd.jpg) center no-repeat;
    background-size: 100% 100%;
}
.box {
    position: relative;
    overflow: auto;
    padding: 2rem 0;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-box-flex: 1;
    box-flex: 1;
    -webkit-overflow-scrolling: touch;
	background: rgba(245,245,245,0.7);
    background-size: 100% 100%;
	margin:0.8em;
}
.box::-webkit-scrollbar {
        display: none;
    }
.spig {display:block;width:104px;height:104px;position:absolute;bottom: 385px;left:2px;z-index:9999;}

#message{color :#191919;border: 1px solid #c4c4c4;background:#ddd;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;min-height:1em;padding:1px;top:-60px;position:absolute;text-align:center;width:auto !important;z-index:10000;-moz-box-shadow:0 0 15px #eeeeee;-webkit-box-shadow:0 0 15px #eeeeee;border-color:#eeeeee;box-shadow:0 0 15px #eeeeee;outline:none;}

.mumu{width:104px;height:104px;cursor: move;background:url(img/naruto1.png) no-repeat;}
</style> 
<script type="text/javascript">
function ajax_change(){
        info_http=new XMLHttpRequest();
        info_http.onreadystatechange=function(){
        if(info_http.readyState==4 && info_http.status==200 ){	    
        alert('信息爬取完成！')
		location.reload();
	   }
        }
        info_http.open("GET","start.php",true);
        info_http.send();
		setTimeout(reloadme, 2000)
		
        }
function reloadme(){
	alert('爬虫启动成功！')
	location.reload();
}
</script>
 </head> 
 <body> 
  <div class="header"> 
   <h1>公众号爬虫-最新文章</h1> 
   <div id="cg"></div> 
    </div>
  <div class="topnav" > 
   <a href="http://123.56.156.168/" style="color:#eee">我的博客</a> 
   <a href="https://weixin.sogou.com" target="_blank" style="color:#eee">搜狗|微信</a> 
   <a href="#" style="color:#eee" onclick="ajax_change(this.value)">启动爬虫</a> 
   <a href="tj.html" target="_blank" style="color:#eee">配置爬虫</a> 
    <a href="gzhlist.php" target="_blank" style="color:#eee">配置公众号列表</a> 
   <a href="Hi咖科技-公众号最新文章.xlsx" download style="color:#eee">下载Excel版</a>
  </div> 
 <div class="bigbigbox">
<div class='box'>
<p style="padding-left:2em;padding-right:2em;font-size:1.2em;color:#0000cc">
   <?php
$file_path = "gzhxx.txt";
 if(file_exists($file_path)){
 $fp = fopen($file_path,"r");
 $str = fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
 if (strlen($str)==0) {
  echo "<center>";
  echo "抱歉，当前爬虫正在努力爬取信息，请稍后刷新重试！";
  echo "</center>";
}
else{
 echo $str = str_replace("\r\n","<br />",$str);
 fclose($fp);
	 echo '<b>【爬取失败'.substr_count($str,'错误：抱歉爬取该公众号信息失败！').'个公众号信息】</b>';
}
 }

?>
<div>
   <h6 style="text-align:center;color:white">
   <?php
	$file = "tongji.txt";
	if(is_file($file))
	{

	$num = file_get_contents($file)+1;
	file_put_contents("tongji.txt", $num);
	echo '当前页面浏览人数为：'.$num;
	}
	else
	{
	$bol = file_put_contents($file, 1);
	echo '当前页面浏览人数为：1';
	}
   ?></h6>
  </div>
  
  </p> 
</div>

  <div class="topnav"> 
   <h3 style="text-align:center;color:white">Powered By Python &copy;2020 Hi&middot;咖</h3> 
  
  </div> 
   
  <script>
setInterval("cg.innerHTML=new Date().toLocaleString()",1000);
</script>   
 <script type="text/javascript" src="https://cdn.staticfile.org/jquery/3.1.1/jquery.min.js"></script> 
  <script src="img/spig.js"></script> 
  <!--博客精灵 start*--> 
  <div id="spig" class="spig"> 
   <div id="message">
    ……
   </div> 
   <div id="mumu" class="mumu"></div> 
  </div> 
  <script type="text/javascript">
var isindex=true;
var title="";
var visitor="这位老板，";
</script>   
 </body>
</html>