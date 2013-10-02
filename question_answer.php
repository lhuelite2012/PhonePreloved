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
$i_number = $_GET['i'];
$i_m_number = $_GET['m_n'];

$sql = "select i_number,i_content,i_picture,i_time,i_title from interactive where i_number = '$i_number' and m_number = '$i_m_number'";
$result = mysql_query($sql);
$list = mysql_fetch_row($result);

$m_sql = "select account from members where m_number = '$i_m_number'";
$m_result = mysql_query($m_sql);
$m_row = mysql_fetch_row($m_result);

?>
<table width="850">
  <tr height="5">
    <td width="86"  align="right"> 標題 : </td>
    <td align="left" colspan="2"><?PHP echo $list[4];?></td>
  </tr>
  <tr>
    <td width="89"  align="right"><font size="-1">發問人 : </font></td>
    <td width="169" align="left"><font size="-1"><?PHP echo $m_row[0];?></font></td>
  </tr>
  <tr height="30">
    <td align="right"><font size="-1">發問日期 : </font></td>
    <td width="482"><font size="-1"><?PHP echo $list[3];?></font></td>
    <td width="0"></td>
  </tr>
  <tr height="5">
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
     <td align="left" colspan="2">
    <font face="微軟正黑體"><?PHP echo $list[1];?></font>
    </td>
  </tr>
  <tr>
  <td></td>
    <td align="left" colspan="2">
    <img src="C:/AppServ/www/commodity/question/web/<?PHP echo $list[2];?>" alt="show question">
    </td>
  </tr>
  <tr height="5">
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  </tr>
<?PHP
$q_sql = "select * from i_answer where i_number = ".$i_number;
$q_result = mysql_query($q_sql);	
if($q_row = mysql_fetch_array($q_result)){
?>					<tr><th width="100px" height="30px">發問者回覆</th><td width="500px"></td>
					<td></td>
					</tr>
					<tr><td colspan="2" rowspan="2" height="20px" style="text-indent:20px;" align="left"><?PHP echo $q_row['answer_content']; ?></td>
                    </tr>
                	<tr><td colspan="2" align="right"><?PHP echo $q_row['answer_time']; ?></td>
                    </tr> 
</table>
<?PHP } if($i_m_number == $_SESSION['m_number']){?>
<table>
  <tr>
    <td width="86">
      <form action="question_answer3.php?i=<?PHP echo "$i_number";?>&m_n=<?PHP echo "$i_m_number";?>" method="post" name="question_answer" onsubmit="return chktwo();" enctype="multipart/form-data">
      回覆 :
      </td>
      <td width="180">
      <textarea id="answer_content" name="answer_content" rows="3" cols="70"></textarea>
    </td>
  </tr>
  <tr>
  	<td colspan="2">
        <center><input type="submit" id="Submit" name="Submit" value="送出"></center>
    </td>
  </tr>
</table>
<?PHP }
//=========↑發問人回覆==========↓回答===========

		$sql3 = "select account from members where m_number = ".$_SESSION['m_number'];
		$m_result2 = mysql_query($sql3);
		$m_row2 = mysql_fetch_row($m_result2);

		$sql2= "select * from i_answer where i_number = ".$i_number;
		$result2 = mysql_query($sql2);
		 if($row2 = mysql_fetch_row($result2)){ 
?>
<table>
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
	<td width="700" align="right">
    <?PHP echo $row2['answer_content'];?>
    </td>
</tr>
<?PHP }
	$sql4 = "select * from a_answer where an_number =".$row2['an_number'];
	$result4 = mysql_query($sql4);
	 if($row4 = mysql_fetch_row($result4)){ 
?>
<tr>
    <td width="100" align="left">	
    <font size="-1"><?PHP echo $i_m_number;?></font>
    </td>
</tr>
<tr align="left" style="border-top:#000">
	<td width="100" align="left">
    <?PHP echo $row4['a_time'];?>
    </td>
</tr>
<tr>
	<td width="700" align="right">
    <?PHP echo $row4['a_content'];?>
    </td>
</tr>
<?PHP  } if($i_m_number != $_SESSION['m_number']){?>
</table>
<form action="question_answer2.php?i=<?PHP echo $row['i_number'];?>" method="post" name="question_answer" onsubmit="return chktwo();" enctype="multipart/form-data">
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