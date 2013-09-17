<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
	include("server.php");
	include("addtime.php");
	include("dateadd.inc");
	/*$c_number =  1;	// 商品編號
	//商品
	$c_sql = "select * from commodity where c_number = '$c_number'";
	$c_query = mysql_query($c_sql);
	$c_rows = mysql_fetch_array($c_query);
	echo $uptime = $c_rows['uptime'];echo "<br>";
	
	echo $temptime = DateAdd ("d", "24", $addtime); echo "<br>";
	echo $temptime = strftime("%Y-%m-%d %H:%M:%S",$temptime);
	*/
	echo $addtime;
	echo "<br>";
	echo  $a = mktime($addtime);
	echo "<br>";
	echo date('Y-m-d',$a);
?>
</body>
</html>