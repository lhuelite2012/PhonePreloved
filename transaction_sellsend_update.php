<?PHP
ob_start();
session_start();
?>
<?PHP
include("main.php");
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?PHP
	$m_number = $_SESSION['m_number'];
	$c_number = $_POST['c_number'];
	
	$time_sql = "SELECT NOW()";
	$time_query = mysql_query($time_sql);
	$time_row = mysql_fetch_row($time_query);
	$addtime = $time_row[0];
	
	$sql = "update transaction set sendTimeButton = '$addtime',t_schedule = '已寄出' where c_number = '$c_number'";
	mysql_query($sql);
	
	header("location:transaction_sellevaluate.php?c_number=$c_number");
?>
</body>
</html>