<?php
	ob_start(); 
	session_start();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>登出</title>
	</head>
    <body>
			<script>
				window.alert('成功登出');
				location.href = "./index.php";
			</script>
<?php
    	session_unset();
    	session_destroy();
		//header("Location:index.php");
?>
   </body>
</html>
