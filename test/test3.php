<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?
include("server.php");
$test = "select m_number from commodity where c_number = 1";
	$teste = mysql_query($test);
	$rrr = mysql_fetch_array($teste);
$acc_sql = "select m_number,account from members where m_number = '$rrr[0]'";
	$acc_query = mysql_query($acc_sql);
	$acc_rows = mysql_fetch_array($acc_query);
	echo $acc_rows["m_number"];
?>
</body>
</html>