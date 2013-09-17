<?
session_start();
?>
<?
include("server.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?	
	$sql = "UPDATE `members` SET `password`='".$_POST["password1"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
	
	mysql_query($sql); //執行$sql更新語法
?>
<Script>
function goback()
{
        alert("修改成功");
        history.go(-1);
}
</Script>
<body onload=goback()></body>
</html>