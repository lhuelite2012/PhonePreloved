<?php 	
	session_start();
	include("loginConfirm.php");
	include("server.php"); 
	include("addtime.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>存入資料庫</title>
</head>

<body>
<?php
	if ($_SESSION['test'] == $_POST['test']){
		if(isset($_POST['q_content']) and isset($_POST['c_number'])){
			$c_number = $_POST['c_number'];
			$q_content = $_POST['q_content'];
			$m_number = $_SESSION['m_number'];
			$sql = "insert into qa (q_content,q_time,m_number,c_number) value ('$q_content','$addtime','$m_number','$c_number')";
			$result = mysql_query($sql);
?>
        	<script>
				location.href = 'commodity.php?c_number=<?php echo $c_number ?>&data=4';
			</script>
        <?php
		} 	
	}else if ($_POST['test'] == ""){ ?>
		<script> 
			window.alert("請輸入驗證碼"); window.history.back(); 
        </script> <?php 
		die(); 
	}else if ($_SESSION['test'] != $_POST['test'])
	{ 
   	?> <script> 
			window.alert("驗證碼輸入錯誤,請再重新輸入一次"); window.history.back(); 
       </script> 	<?php 
		die();
	}
	
?>
</body>
</html>