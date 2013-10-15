<?php 	session_start();
	include("server.php");
	include("addtime.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>扣除分數</title>
</head>

<body>
<?php
	$m_number = $_SESSION['m_number'];
	if($_POST['deduct']==2){				//若有人出價 則扣分數 再下架
		$c_number = $_POST['c_number'];
		$sql = "update commodity set orend = 1,orbidder = 0 where c_number = $c_number";
		mysql_query($sql);
		$sql = "insert into  f_record (m_number,c_number,f_number,f_time)value('$m_number','$c_number',23,'$addtime')";
		mysql_query($sql);
		$sql = "SELECT SUM(fraction) FROM f_record join fraction on f_record.f_number = fraction.f_number where m_number = $m_number ";
		$relu = mysql_query($sql);
		$row = mysql_fetch_row($relu);
		$sql = "update members set sell ='".$row[0]."' where m_number = $m_number";
		mysql_query($sql);
		
		
?>
		<script>
			alert("商品已下架");
			location.href = './display.php';
		</script>
<?php
	}else if($_POST['deduct']==1){				//沒人出價 則直接下架
		$c_number = $_POST['c_number'];
		$sql = "update commodity set orend = 1,orbidder = 0 where c_number = $c_number";
		mysql_query($sql);
?>
		<script>
			alert("商品已下架");
			location.href = './display.php';
		</script>
<?php
	}
	else {
?>
		<script>
			location.href = './index.php';
		</script>
<?php
	}
?>
</body>
</html>