<?php 	
	session_start();
	include("loginConfirm.php");
	include("server.php"); 
	include("addtime.php");
	include("main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>回答問題</title>
<style type="text/css">
	#qa{
		position:absolute;
		width:600px;
		height:500px;
		background:#EAEAEA;
		left:50%;
		margin-left: -300px;
		border-radius:5px 5px 5px 5px;
	}
</style>
</head>

<body>
<?php
	echo $q_content = $_POST['q_content'];
	echo $q_number = $_POST['q_number'];
?>
<div id="ce2">
	<div id="qa">
    </div>
</div>
</body>
</html>