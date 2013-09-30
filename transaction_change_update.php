<?PHP
ob_start();
session_start();
?>
<?PHP
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
	
	if($_POST['changealter'] == '提出修改')
	{
		$sql = "update transaction set changealter = '1' where c_number = '$c_number'";
		mysql_query($sql);
	}

	header("location:transaction_order.php?c_number=$c_number");
?>
</body>
</html>