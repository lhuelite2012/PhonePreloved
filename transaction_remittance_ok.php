<?php 
	include("loginConfirm.php");
	include("addtime.php");
	include("server.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>完成匯款 輸入匯款明細</title>
</head>

<body>
<?php //remit_name='$remit_name',remit_account='$remit_account'
	if(isset($_POST['payment'])){
		 $payment = $_POST['payment'];
		 $c_number = $_POST['c_number'];
		 $addtime;
		$sql = "update transaction set t_schedule = '$payment',payTimeButton='$addtime'  where c_number = $c_number";
		mysql_query($sql);	
	if($phone != "" and isset($phone)){
		$sql = "update members set phone = '$phone' where m_number = $m_number";
		mysql_query($sql);
	}
	if($storename != "" and isset($storename)){
		$sql = "update members set storename = '$storename' where m_number = $m_number";
		mysql_query($sql);
	}
	if($date != "" and isset($date)){
		$sql = "update transaction set per_date = '$date'  where c_number = $c_number";
		mysql_query($sql);
	}
	if($time != "" and isset($time)){
		$sql = "update members set per_time = '$time' where m_number = $m_number";
		mysql_query($sql);
	}
	if($send != "" and isset($send)){
		$sql = "update members set address = '$send' where m_number = $m_number";
		mysql_query($sql);
	}
	if($sendtime !="" and isset($sendtime)){
		$sql = "update members set sendtime = '$sendtime' where m_number = $m_number";
		mysql_query($sql);
	}
	if($per_place != "" and isset($per_place)){
		$sql = "update members set personally = '$per_place' where m_number = $m_number";
		mysql_query($sql);
	}	
?>
		<script>
			alert("匯款手續完成");
			location.href = './commodity.php?c_number=<?php echo $c_number; ?>&data=1';
		</script>
<?php		        
	}else{
?>
		<script>
			location.href = './index.php';
		</script>
<?php
	}
?>
</body>
</html>