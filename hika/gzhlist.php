<!DOCTYPE HTML>
<html>
<head>
    <title>公众号列表提交工具</title>

    <style>
        .bk {
            border: 5px dashed #3385ff;
            color: #3385ff;
            margin: 5%;
        }

        body {
            text-align: center;
            color: #3385ff
        }

        input, p, h1 {
            color: #3385ff
        }

        .tj {
            width: 100px;
            height: 34px;
            color: #fff;
            letter-spacing: 1px;
            background: #3385ff;
            border-bottom: 1px solid #2d78f4;
            outline: medium;
            text-decoration: none;
        }

        hr {
            border: none;
            height: 2px;
            background: #3385ff;
        }

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
	window.location.replace("/hika/gzh.php");
}
</script>
</head>
<body>

<?php
ini_set('display_errors',"0");
// define variables and set to empty values
 $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
	$wzs = test_input($_POST["wzs"]);
    $myfile = fopen("newlist.txt", "w") or die("Unable to open file!");
	$wzsfile = fopen("wzsvlaue.txt", "w") or die("Unable to open file!");
	$comment = str_replace("eval","error",$comment);
	$comment = str_replace("$","error",$comment);
	$comment = str_replace("POST","error",$comment);
	$comment = str_replace("GET","error",$comment);
	$comment = str_replace("COOKIE","error",$comment);
    fwrite($myfile, $comment);
	fwrite($wzsfile, $wzs);
    fclose($myfile);
	fclose($wzs);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div style="text-align:center">
    <div class="bk">
        <h1>公众号列表提交工具</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br><br>
            公众号列表模板：
            <input type="radio" name="gender" value="default" onclick="getValue()" checked>默认
            <input type="radio" name="gender" value="define" onclick="cls()">自定义
            <br><br>
            <b>公众号列表：</b>
            <br>
            <textarea name="comment" rows="10" cols="100" id="t1" style="color:crimson "></textarea>
            <br><br>
			每个公众号爬取文章数：<select name="wzs">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
<br><br>
            <input class="tj" type="submit" name="submit" value="提交">
			<input class="tj" type="button" name="start" value="启动爬虫" onclick="ajax_change(this.value)">
            <br>
        </form>

        <script>
            document.getElementById("t1").value = "网络安全联盟\n" +
                "数据机器人\n" +
                "信安巴士\n" +
                "安在\n" +
                "网络空间安全军民融合创新中心\n" +
                "安全圈\n" +
                "E安全\n" +
                "游侠安全网\n" +
                "前沿信安资讯阵地\n" +
                "网络尖刀\n" +
                "数说安全\n" +
                "SecWiki\n" +
                "水滴安全实验室\n" +
                "SecPulse安全脉搏\n" +
                "安全祖师爷\n" +
                "物联网IOT安全\n" +
                "安全喷子\n" +
                "e安在线\n" +
                "嘶吼专业版\n" +
                "网络安全和信息化\n" +
                "安全牛\n" +
                "E安全\n" +
                "网信军民融合\n" +
                "网信防务\n" +
                "旁观者更清\n" +
                "天億网络安全\n" +
                "中国通信企业协会\n" +
                "湖南省网络空间安全协会\n" +
                "网信中国\n" +
                "公安部网络安全等级保护中心\n" +
                "信息网络安全公安部重点实验室\n" +
                "等级保护测评\n" +
                "信安标委\n" +
                "国家互联网应急中心\n" +
                "网信安全\n" +
                "秦安战略\n" +
                "军民融合技术转移平台\n" +
                "工业互联网安全应急响应中心\n" +
                "网安杂谈\n" +
                "freeBuf企业安全\n" +
                "公安三所网络安全法律研究中心\n" +
                "大数据法律研究\n" +
                "长亭科技\n" +
                "永信至诚\n" +
                "天融信\n" +
                "天融信阿尔法实验室\n" +
                "腾讯安全联合实验室\n" +
                "腾讯安全智能\n" +
                "四叶草安全\n" +
                "时代亿信\n" +
                "观安信息\n" +
                "山石网科\n" +
                "山石瞭望\n" +
                "瑞数信息\n" +
                "青藤云\n" +
                "启明星辰\n" +
                "默安科技\n" +
                "绿盟科技\n" +
                "炼石网络CipherGateway\n" +
                "火绒安全实验室\n" +
                "瀚思科技\n" +
                "Rapid7cn\n" +
                "东软网络安全\n" +
                "百度安全实验室\n" +
                "安天\n" +
                "安恒信息\n" +
                "阿里云安全\n" +
                "腾讯安全应急响应中心\n" +
                "阿里安全响应中心\n" +
                "360CERT\n" +
                "安全威胁情报\n" +
                "腾讯御见威胁情报中心\n" +
                "奇安信威胁情报中心\n" +
                "绿盟科技安全情报\n" +
                "Seebug漏洞平台\n" +
                "玄武实验室\n" +
                "永安在线反欺诈\n" +
                "山丘安全攻防实验室\n" +
                "猎户攻防实验室\n" +
                "网鼎杯\n" +
                "黑白之道\n" +
                "ChaMd5安全团队\n" +
                "HACK学习呀\n" +
                "GeekPwn\n" +
                "云安全联盟CSA\n" +
                "安全帮\n" +
                "Mottoin\n" +
                "ThreatPage全球威胁情报\n" +
                "网络空间治理创新\n" +
                "雷神众测\n" +
                "qz安全情报分析\n" +
                "i春秋\n" +
                "Ms08067安全实验室\n" +
                "安全学习那些事\n" +
                "谷安天下\n" +
                "CNNVD安全动态\n" +
                "安全客资讯平台\n" +
                "tenable安全\n" +
                "CNVD漏洞平台\n" +
                "saulGoodman\n" +
                "天御攻防实验室\n" +
                "ArkTeam\n" +
                "阿里云先知\n" +
                "专注安管平台\n" +
                "安全乐观主义\n" +
                "安全测评联盟\n" +
                "云头条\n" +
                "国际安全智库"

            function getValue() {
                document.getElementById("t1").value = "网络安全联盟\n" +
                    "数据机器人\n" +
                    "信安巴士\n" +
                    "安在\n" +
                    "网络空间安全军民融合创新中心\n" +
                    "安全圈\n" +
                    "E安全\n" +
                    "游侠安全网\n" +
                    "前沿信安资讯阵地\n" +
                    "网络尖刀\n" +
                    "数说安全\n" +
                    "SecWiki\n" +
                    "水滴安全实验室\n" +
                    "SecPulse安全脉搏\n" +
                    "安全祖师爷\n" +
                    "物联网IOT安全\n" +
                    "安全喷子\n" +
                    "e安在线\n" +
                    "嘶吼专业版\n" +
                    "网络安全和信息化\n" +
                    "安全牛\n" +
                    "E安全\n" +
                    "网信军民融合\n" +
                    "网信防务\n" +
                    "旁观者更清\n" +
                    "天億网络安全\n" +
                    "中国通信企业协会\n" +
                    "湖南省网络空间安全协会\n" +
                    "网信中国\n" +
                    "公安部网络安全等级保护中心\n" +
                    "信息网络安全公安部重点实验室\n" +
                    "等级保护测评\n" +
                    "信安标委\n" +
                    "国家互联网应急中心\n" +
                    "网信安全\n" +
                    "秦安战略\n" +
                    "军民融合技术转移平台\n" +
                    "工业互联网安全应急响应中心\n" +
                    "网安杂谈\n" +
                    "freeBuf企业安全\n" +
                    "公安三所网络安全法律研究中心\n" +
                    "大数据法律研究\n" +
                    "长亭科技\n" +
                    "永信至诚\n" +
                    "天融信\n" +
                    "天融信阿尔法实验室\n" +
                    "腾讯安全联合实验室\n" +
                    "腾讯安全智能\n" +
                    "四叶草安全\n" +
                    "时代亿信\n" +
                    "观安信息\n" +
                    "山石网科\n" +
                    "山石瞭望\n" +
                    "瑞数信息\n" +
                    "青藤云\n" +
                    "启明星辰\n" +
                    "默安科技\n" +
                    "绿盟科技\n" +
                    "炼石网络CipherGateway\n" +
                    "火绒安全实验室\n" +
                    "瀚思科技\n" +
                    "Rapid7cn\n" +
                    "东软网络安全\n" +
                    "百度安全实验室\n" +
                    "安天\n" +
                    "安恒信息\n" +
                    "阿里云安全\n" +
                    "腾讯安全应急响应中心\n" +
                    "阿里安全响应中心\n" +
                    "360CERT\n" +
                    "安全威胁情报\n" +
                    "腾讯御见威胁情报中心\n" +
                    "奇安信威胁情报中心\n" +
                    "绿盟科技安全情报\n" +
                    "Seebug漏洞平台\n" +
                    "玄武实验室\n" +
                    "永安在线反欺诈\n" +
                    "山丘安全攻防实验室\n" +
                    "猎户攻防实验室\n" +
                    "网鼎杯\n" +
                    "黑白之道\n" +
                    "ChaMd5安全团队\n" +
                    "HACK学习呀\n" +
                    "GeekPwn\n" +
                    "云安全联盟CSA\n" +
                    "安全帮\n" +
                    "Mottoin\n" +
                    "ThreatPage全球威胁情报\n" +
                    "网络空间治理创新\n" +
                    "雷神众测\n" +
                    "qz安全情报分析\n" +
                    "i春秋\n" +
                    "Ms08067安全实验室\n" +
                    "安全学习那些事\n" +
                    "谷安天下\n" +
                    "CNNVD安全动态\n" +
                    "安全客资讯平台\n" +
                    "tenable安全\n" +
                    "CNVD漏洞平台\n" +
                    "saulGoodman\n" +
                    "天御攻防实验室\n" +
                    "ArkTeam\n" +
                    "阿里云先知\n" +
                    "专注安管平台\n" +
                    "安全乐观主义\n" +
                    "安全测评联盟\n" +
                    "云头条\n" +
                    "国际安全智库"
            }

            function cls() {
                document.getElementById("t1").value = ""
            }
        </script>
        <hr>
        <div style="color: crimson">
            <?php
            if ($comment != null) {
                if ($gender == 'define') {
                    echo "<h2>提交成功！</h2>";
                    echo '<b>当前模板为【自定义模板】</b><br>';
					echo '<b>每个公众号爬取文章数为【'.$wzs.'】</b>';
                } else {
                    echo "<h2>提交成功！</h2>";
                    echo '<b>当前模板为【默认模板】</b><br>';
					echo '<b>每个公众号爬取文章数为【'.$wzs.'】</b>';

                }
            } else {
                echo '<h3>【请至少输入一个公众号名称后再提交】</h3>';
            }
			$file_path = "newlist.txt";
			 $line = count(file($file_path));
			 echo '<h3>【当前系统公众号列表，共计'.$line.'个公众号】</h3>';
            ?>
			
			<p style="padding-left:2em;padding-right:2em;font-size:1.2em;color:#0000cc">
			<?php
			
			 if(file_exists($file_path)){
			 $fp = fopen($file_path,"r");
			 $str = fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
			
			 if (strlen($str)==0) {
			  echo "<center>";
			  echo "抱歉，当前公众号列表为空！";
			  echo "</center>";
			}
			 echo $str = str_replace("\r\n","<br />",$str);
			 fclose($fp);}
			?></p> 
            <hr>
            <p>Powered By Python &copy;2020 Hi&middot;咖</p>
        </div>
    </div>

</div>
