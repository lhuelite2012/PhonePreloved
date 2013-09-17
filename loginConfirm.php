<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>無標題文件</title>
	</head>
	<body>
    <?php
		if(!isset($_SESSION['m_number'])){
			?>
        	<script>
				window.alert('請先登入會員');
				location.href = './login.php?c_number=<?php echo $_SESSION['c_number']; ?>';
			</script>
        	<?php
			die();
		}
		
	?>
	</body>
</html>