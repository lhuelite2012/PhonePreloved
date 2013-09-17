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
<title>回答問題</title>
</head>

<body>
<?php
	if(isset($_POST['qa_content']) and isset($_POST['q_number'])){
		$q_number = $_POST['q_number'];
		$qa_content = $_POST['qa_content'];
		$sql = "insert into q_answer (q_number,qa_content,qa_time ) value ('$q_number','$qa_content','$addtime')";
		$result = mysql_query($sql);
		?>
        	<script>
				location.href = 'commodity.php?c_number=<?php echo $c_number ?>&data=4';
			</script>
        <?php
	}
?>
</body>
</html>