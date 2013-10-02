<?PHP ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP
session_cache_limiter('private,must_revalidate');
?>
<head>
<style>
saveHistory{behavior:url(#default#savehistory);}
</style>
<style type="text/css">
#all
{
	margin:0 auto;
	position:absolute;
	width:900;
	left: 40px;
	top: 180px;
}
#one
{
	border-radius:15px;
	background:#B0FFB0;
	width:850px;
	height:45;
	background:rgba(128, 255, 128, 0.5) none repeat scroll 0 0 !important;/*实现FF背景透明，文字不透明*/
	filter:Alpha(opacity=80);
	background:#fff;/*实现IE背景透明*/
}
a /*連結*/
{
	color:#000; 
	text-decoration:none; 
	font-weight:500;
}
a:hover /*連結滑鼠移到特效*/
{
	color:#06F; 
	text-decoration:none;
}
.one_p
{
	letter-spacing:3px;
}
.table 
{
  border:0; 
  border-collpase:collpase; 
  width:200px;
  border-bottom:1px solid #000;
} 
#title
{
	border-radius:10px;
	border:"1";
	border-collapse:collapse;
	width: 850px;
	height:50;
}
.title{
	background:-webkit-linear-gradient(top,#FFF,#B0FFB0);
}
#bk
{
	padding:10px 20px 10px 20px;
	margin:0 auto;
	position:absolute;
	laft:300;
	border-radius:20px;
	background:#BFB;
	width: 700px;
	left: 55px;
	background:rgba(128, 255, 128, 0.5) none repeat scroll 0 0 !important;/*实现FF背景透明，文字不透明*/
	filter:Alpha(opacity=80);
	background:#fff;/*实现IE背景透明*/
	border-bottom-style: solid;
	border-bottom-color: #FFF;
	border-bottom-width: 10px;
}
.con p{ position:relative;}/*实现IE文字不透明*/}
</style>
<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>
</head>

<body>
<?PHP
include("server.php"); //連結資料庫
include("main.php");
?>
<div id="all">
<div id="title" class="title">
<table width="850px" height="50px">
<tr>
                <td height="30px" width="500">
                	<font color="#000000" style="font-weight:300" face="微軟正黑體" size="+2"><center>標　　　　　　　　　　　題</center></font>
                </td>
                <td width="200px" align="center">
                	<font color="#000000" style="font-weight:300" face="微軟正黑體" size="+１"><center>發　問　人</center></font>
                </td>
                <td width="300" align="right">
                	<font color="#000000" style="font-weight:300" face="微軟正黑體" size="+１"><center>日　　期</center></font>
                </td>
</tr>
</table>
</div>
&nbsp;
<?PHP
			$sql = "select * from interactive order by i_time";
			$result = mysql_query($sql);
			echo $row['i_title'];
			echo $row['i_time'];
?>
  			
<?PHP			while($row = mysql_fetch_array($result))
				{
				$m_sql = "select account from members where m_number = ".$row['m_number'];
				$m_result = mysql_query($m_sql);
				$m_row = mysql_fetch_row($m_result); 
				
?>
<div id="one">
<table width="850px" height="50px">
				<tr>
                <td height="30px" width="444"><a href="question_answer.php?i=<?PHP echo $row['i_number'];?>&m_n=<?PHP echo $row['m_number'];?>" STYLE="text-decoration:none" ><div class="one_p"><?PHP echo "&nbsp;"; echo substr($row['i_title'],0,51);?></div></a></td>
                <td width="156" align="left"><?PHP echo $m_row[0];?></td>
                <td width="234" align="center"><?PHP echo $row['i_time'];?></td>
                </tr>
</table>
</div>
&nbsp;
<?PHP }?>
&nbsp;
<form action="question2.php" method="post" name="question" onsubmit="return chktwo();" enctype="multipart/form-data">
<div id="bk" class="con">
<table width="700">
<tr>
	<td>
    <FONT color="#000000" SIZE=4 face="微軟正黑體">上傳照片:</FONT>
    </td>
	<td>
	  <input type="file" id="i_picture" name="i_picture">
        <input type="hidden" name="mzx_file_size" value="10240000"><FONT color="#FF0000" SIZE=1>最大不可超過100M</FONT>

    </td>
</tr>
<tr>
	<td>
    	<FONT color="#000000" SIZE=4 face="微軟正黑體">標題:</FONT>
    </td>
    <td>
   	  <input type="text" id="i_title" name="i_title" size="40" />
    </td>
</tr>

<tr>
	<td>
    	<FONT color="#000000" SIZE=4 face="微軟正黑體">發問:</FONT>
    </td>
    <td>
   	  <textarea id="i_content" name="i_content" rows="15" cols="65" ></textarea>
    </td>
</tr>

<tr>
	<td colspan="2" align="left">
    	<img src="captcha_.php" alt="show image" id="rand-img">
        <a href="javascript:void(0)" id="reload-img"><font size="-1">重新取得驗證碼</font></a>
        <input type="text" id="captcha" name="captcha" size="10" />
		<center>
        <input type="submit" id="cancel" name="cancel" onchange="javascript:history.back(1)" value="取消">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" id="Submit" name="Submit" value="送出">
        </center>
    </td>
</tr>
</table>
</div>
</form>
</div>

 <script language="javascript">
(function(){
// 重新載入圖形的函數，適用於任何圖形
var reloadImg = function(dImg) {
     // 取得圖形原本的來源 url
     var sOldUrl = dImg.src;
     // 在原本的 url 後面加上亂數的參數，變成新的 url
     var sNewUrl = sOldUrl + "?rnd=" + Math.random();
    //將圖形的來源改為新的 url，就會重新載入圖形了
     dImg.src = sNewUrl;
};
 
// 取得重新載入的超連結元素
var dReloadLink = document.getElementById("reload-img");
 
// 取得驗證碼圖形元素
var dImg = document.getElementById("rand-img");
 
// 定義這個超連結的 onclick 事件
dReloadLink.onclick = function(e) {
      // 呼叫函數重新載入驗證碼圖形
      reloadImg(dImg);
      //停止事件預設的動作，也就是不要跳到超連結的網址
      if(e) e.preventDefault();
      return false;
};
})();
</script>

</body>
</html>