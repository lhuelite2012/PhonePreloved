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
<?PHP
include("loginConfirm.php");
include("server.php"); //連結資料庫
include("addtime.php"); //抓現在時間
$m_number = $_SESSION['m_number'];
$answer_time = $addtime;
$i_number = $_GET['i'];
$i_m_number = $_GET['m_n'];
if($_POST['captcha'] == "")
{
	?> <script> 
			window.alert("請輸入驗證碼"); window.history.back(); 
	</script> <?PHP
	die(); 
}
if($_SESSION['test'] != $_POST['captcha'])
{
	?> <script> 
			window.alert("驗證碼輸入錯誤"); window.history.back(); 
	</script> <?PHP 
	die();
}

$sql_query = "INSERT into i_answer (m_number,i_number,answer_content,answer_time)
			VALUES (
			'$m_number',
			'$i_number',
			'".$_POST['answer_content']."',
			'$answer_time')";
mysql_query($sql_query);

		?>
        	<script>
				location.href = 'question_answer.php?i=<?PHP echo "$i_number";?>&m_n=<?PHP echo "$i_m_number";?>';
			</script>
        <?
?>
</body>
</html>