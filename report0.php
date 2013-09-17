<?PHP ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?PHP include('server.php');
$Code = $_REQUEST["Turing"]; 
if($_SESSION['total'] < 1)
{
	?> <script> window.alert("很抱歉!評價必須大於或等於1才能提出檢舉。"); window.history.back(); </script> 
	<?PHP
	die();
}
if ($_SESSION['test'] = $_POST['test'])
{ ?> <a href="" </a> <?PHP }
else if ($_POST['test'] == "") 
{ ?> <script> window.alert("請輸入驗證碼"); window.history.back(); </script> <?PHP 
	die(); 
}
else if ($_SESSION['test'] != $_POST['test'])
{ 
   ?> <script> window.alert("驗證碼輸入錯誤,請再重新輸入一次"); window.history.back(); </script> <?PHP 
	die();
}
$report_count = $_SESSION['report_count'] + 1 ;
$sql_query="INSERT into c_report(c_number,p_number,c_description,account)
VALUES(
'".$_SESSION['c_number']."',
'".$_POST['p_number']."',
'".$_POST['c_description']."',
'".$_SESSION['account']."')";
$mysql_query($sql_query);

$sql_query2="UPDATE commodity SET
report_count = '".$report_count."' where c_number = ".$_SESSION['c_number'];
$mysql_query($sql_query2);
?>
</body>
</html>