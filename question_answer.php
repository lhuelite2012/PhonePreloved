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
saveHistory {
	behavior:url(#default#savehistory);
}
</style>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>
</head>

<body>
<?PHP
include("server.php");
$i_title = $_GET['i_t'];
$i_m_number = $_GET['m_n'];

$sql = "select i_number,i_content,i_picture,i_time from interactive where i_title = '$i_title' and m_number = '$i_m_number'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);

echo $row[2];
echo $row[1];
echo $row[0];
echo $row[3];

$m_sql = "select account from members where m_number = '$i_m_number'";
$m_result = mysql_query($m_sql);
$m_row = mysql_fetch_row($m_result);

?>
<table width="850">
  <tr height="5">
    <td width="86"  align="right"> 標題 : </td>
    <td align="left" colspan="2"><?PHP echo $i_title;?></td>
  </tr>
  <tr>
    <td width="89"  align="right"><font size="-1">發問人 : </font></td>
    <td width="169" align="left"><font size="-1"><?PHP echo $m_row[0];?></font></td>
  </tr>
  <tr height="30">
    <td align="right"><font size="-1">發問日期 : </font></td>
    <td width="482"><font size="-1"><?PHP echo $row[3];?></font></td>
    <td width="0"></td>
  </tr>
  <tr height="200">
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td align="left" rowspan="4">
    <img src="C:/AppServ/www/commodity/file/web/<?PHP echo $row[2];?>" alt="show image" id="rand-img">
    </td>
    <td align="left" rowspan="10" colspan="2">
    <font face="微軟正黑體"><?PHP echo $row4[1];?></font>
    </td>
  </tr>
</table>
<table>
  <tr>
    <td colspan="3"><?PHP if($i_m_number == $_SESSION['m_number'])
		{?>
      <form action="question_answer3.php?i=<?PHP echo $row4['i_number'];?>" method="post" name="question_answer" onsubmit="return chktwo();" enctype="multipart/form-data">
      回覆 :
      <textarea id="i_content" name="i_content" rows="3" cols="100"></textarea>
    </td>
  </tr>
  <tr>
  	<td>
    	<center>
        <input type="submit" id="Submit" name="Submit" value="送出">
        </center>
    </td>
  </tr>
</table>
<?PHP }
//=========↑發問人回覆==========↓回答===========
		else if($i_m_number != $_SESSION['m_number'])
		{?>
<table>
    	<?PHP $sql2= "select * from i_answer where i_number = '$i_number' order by answer_time";
		$result2 = mysql_query($sql2);
		
		if($row2 = mysql_fetch_row($result2)){ 
		$sql3 = "select account from members where m_number = ".$_SESSION['m_number'];
		$m_result2 = mysql_query($sql3);
		$m_row2 = mysql_fetch_row($m_result2);
?>
    <tr>
    <td width="100" align="left">	
    <font size="-1"><?PHP echo $m_row2['account'];?></font>
    </td>
</tr>
<tr align="left" style="border-top:#000">
	<td width="100" align="left">
    <?PHP echo $row2['answer_time'];?>
    </td>
</tr>

<tr>
	<td width="700" align="left">
    <?PHP echo $row2['answer_content'];?>
    </td>
</tr>
<?PHP }?>
</table>
<form action="question_answer2.php?i=<?PHP echo $row4['i_number'];?>" method="post" name="question_answer" onsubmit="return chktwo();" enctype="multipart/form-data">
<table>
  <tr>
    <td><FONT color="#000000" SIZE=4 face="微軟正黑體">回答:</FONT></td>
    <td><textarea id="answer_content" name="answer_content" rows="10" cols="80"></textarea></td>
  </tr>
  <tr>
  	<td colspan="2">
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
<?PHP }?>
</body>
</html>