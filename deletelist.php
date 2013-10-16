<?PHP
session_start();
?>
<?PHP
include("server.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?PHP	
	$c_number = $_GET['c_number'];

	$sql = "DELETE FROM `track` WHERE `m_number`='".$_SESSION["m_number"]."' and `c_number`='$c_number'";
	mysql_query($sql); //執行$sql刪除語法，追蹤清單
?>
<Script>
function goback()
{
        alert("取消成功");
        history.go(-1);
}
</Script>
<body onload=goback()></body>
</html>