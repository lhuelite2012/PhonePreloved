<?
session_start();
?>
<?
include("server.php");
include("loginConfirm.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>會員中心</title>
</head>
<body>
<?
	$u = $_SESSION['m_number'] ;
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_row($query);
?>
<table>
    <tr>
        <td>您好，<? echo $list3[3]?></td>
    </tr>
    <tr>
        <td>歡迎來到瘋二手首頁，</td>
    </tr>
    <tr>
        <td>可以依據您點選的連結，</td>
    </tr>
    <tr>
        <td>查詢您所需要的資料，</td>
    </tr>
    <tr>
        <td>感謝您的使用！</td>
    </tr>
    <tr>
        <td><p></p></td>
    </tr>
    <tr>
        <td><a href="alter.php">我的帳號</a></td>
    </tr>
        <tr>
        <td><a href="logout.php">登出</a></td>
    </tr>
</table>
<?
	mysql_free_result($query);
	mysql_close();
?>
</body>
</html>