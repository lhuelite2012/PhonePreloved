<?php
	session_start();
	include("server.php");
	include("addtime.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>得標者存入資料庫</title>
</head>

<body>
<?php
	$choosebuyer = $_POST['choose'];
	$c_number =  $_POST['c_number'];
	$fb_id = $_POST['fb_id'];
	$line_id = $_POST['line_id'];
	$rank_account = $_POST['rank_account']; //銀行帳號		
	$personally = $_POST['personally'];   //面交詳細資料
	$per_time = $_POST['time'];
	if(isset($choosebuyer) and isset($c_number)){
		$sql = "SELECT MAX( bid.bid_price ) as bid_price
FROM bid
JOIN members ON bid.m_number = members.m_number
WHERE bid.c_number =$c_number and bid.m_number = $choosebuyer
GROUP BY bid.m_number
ORDER BY 1 DESC";
		$result = mysql_query($sql);
		$bid_price = mysql_fetch_row($result);
		//先判斷是否已經完成選擇買家
		$sql = "select * from transaction where c_number = $c_number";
		$result = mysql_query($sql);
		$being = mysql_num_rows($result);
		if($being == 0){
			//存入transaction
			$sql = "insert into transaction (t_time,m_number,c_number,personally,per_time) value ('$addtime','$choosebuyer','$c_number','$personally','$per_time')";
			mysql_query($sql);
			//存入 commodity orbidder
			$sql = "update commodity set orbidder = '$choosebuyer' ,downtime = '$addtime',bid_price = '".$bid_price[0]."' where c_number = $c_number";
			mysql_query($sql);
			
			$sql = "update members set fb_id = '$fb_id' ,line_id = '$line_id', rank_account = '$rank_account',personally = '$personally' where m_number = $m_number";
			mysql_query($sql);
			
			
			?>
				<script type="text/javascript">
				alert("選擇成功");
				location.href = './commodity.php?c_number=<?php echo $c_number; ?>';
				</script>
			<?php
		} else {
?>	
			<script type="text/javascript">
				alert("已選擇賣家");
				location.href = './commodity.php?c_number=<?php echo $c_number; ?>';
			</script>
<?php
		}
	}else{
?>
	<script type="text/javascript">
		alert("請輸入完整資料");
		window.history.back();
	</script>
<?php }?>
</body>
</html>