<?PHP session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?PHP
include("loginConfirm.php");
include("server.php");
include("addtime.php");
$sql_query = "UPDATE commodity SET orend = '1' where c_number = ".$_SESSION['c_number'];
mysql_query($sql_query);
	?><script>
	window.alert('下架成功');
	location.href = './index.php';
	</script><?PHP
?>
</body>
</html>