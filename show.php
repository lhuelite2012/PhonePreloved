<?
session_start();
?>
<?
include("server.php");
include("loginConfirm.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./素材/icon.png"> 
<title>查詢個人資料</title>
</head>
<body>
<?	
	//查詢會員帳號
	$u = $_SESSION["m_number"]; 
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_row($query);
	
	//查詢偏愛品牌
	$m_number = $list3[0]; 
	$sql_b = "select * from p_brand where m_number = '$m_number'";
	$query_b = mysql_query($sql_b);
	$list3_b = mysql_fetch_array($query_b);
	
	//查詢偏愛顏色
	$m_number = $list3[0];
	$sql_c = "select * from p_color where m_number = '$m_number'";
	$query_c = mysql_query($sql_c);
	$list3_c = mysql_fetch_array($query_c);
	
	//查詢偏愛品牌名稱
	$sql_bn = "select * from brand where b_number = '$list3_b[1]'";
	$query_bn = mysql_query($sql_bn);
	$list3_bn = mysql_fetch_array($query_bn);
	
	//查詢偏愛顏色名稱
	$sql_cn = "select * from colors where colors_number = '$list3_c[2]'";
	$query_cn = mysql_query($sql_cn);
	$list3_cn = mysql_fetch_array($query_cn);
?>
<form action="" method="post" name="form">
	<table>
		<tr>
			<td><font size="5" color="#FF0000">查詢個人資料</font></td>
		</tr>
		<tr>
			<td><hr size="1" /></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 電子郵件：</strong></td>
			<td><label><? echo $list3[1];?></label></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong><font color="#0000FF"> 基本資料</font></strong></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 姓名：</strong></td>
			<td><label><? echo $list3[3]?></label></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 大頭照：</strong></td>
			<td><label><? echo '<img width="50" src="'.$list3[6].'"/>'?></label></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 地址：</strong></td>
			<td><label><? echo $list3[8]?></label></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 性別：</strong></td>
			<td><label><? echo $list3[4]?></label></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 生日：</strong></td>
			<td><label><? echo $list3[5]?></label></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 手機：</strong></td>
			<td><label><? echo $list3[7]?></label></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 偏愛品牌：</strong></td>
			<td><label><? echo $list3_bn[1]?></label></td>
		</tr>
		<tr>
			<td><strong><font color="#FF0000">*</font> 偏愛顏色：</strong></td>
			<td><label><? echo $list3_cn[1]?></label></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong><font color="#0000FF"> 身材</font></strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 身高：</strong></td>
			<td><label><? echo $list3[9]?></label><strong> cm(公分)</strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 鞋子尺寸：</strong></td>
			<td><label><? echo $list3[15]?></label><strong> cm(公分)</strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 臀圍：</strong></td>
			<td><label><? echo $list3[13]?></label><strong> 吋</strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 胸圍：</strong></td>
			<td><label><? echo $list3[11]?></label><strong> 吋</strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 腰圍：</strong></td>
			<td><label><? echo $list3[12]?></label><strong> 吋</strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 肩寬：</strong></td>
			<td><label><? echo $list3[10]?></label><strong> cm(公分)</strong></td>
		</tr>
		<tr>
			<td><font color="#FFFFFF">*</font><strong> 衣服尺寸：</strong></td>
			<td><label><? echo $list3[14]?></label><strong> TW/US</strong></td>
		</tr>
		<tr>
			<td><hr size="1" /></td>
		</tr>
	</table>
</form>
</body>
</html>