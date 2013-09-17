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
	$total = $_SESSION['total'] ;
	if($total < 200){
	?>	
			<script>
				window.alert('評價小於1無法檢舉');
				location.href = './commodity.php?';
			</script>
	<?php	
	}else{
	}
?>
</body>
</html>