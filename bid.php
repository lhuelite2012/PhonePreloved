<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出價</title>
</head>

<body>
<?php
	include("server.php");
	include("addtime.php");
	if(isset($_SESSION['m_number'])){	//判斷登入
		$c_number = $_POST['c_number'];
		$m_number = $_SESSION['m_number'];
		$sql = "select max(bid_price),m_number from bid where c_number =$c_number  group by m_number order by 1 desc";
		$result = mysql_query($sql);
		$rows = mysql_fetch_row($result);
		if($_SESSION['m_number'] != $rows[1] ){	//判斷非最高出價者
			$bid = $_POST['bid'];
			$bid_hi = $_SESSION['bid_hi'];
	
			//新增出價
			$bid_sql = "insert into bid (bid_price,bid_time,m_number,c_number) values ('$bid','$addtime','$m_number','$c_number')";
			$bid_query = mysql_query($bid_sql);
			
			
			
			include("./push/push.php");
		
			//出價最高  存入目前最高價
			$bid_hi_sql = "select max(bid_price) from bid where c_number = '$c_number' group by c_number limit 1";
			$bid_hi_query = mysql_query($bid_hi_sql);
			$bid_hi_rows = mysql_fetch_row($bid_hi_query);
		
			$bid_commodity_sql = "update commodity set hi_bid_price = ".$bid_hi_rows[0]." where c_number = $c_number";
			$bid_commodity_query = mysql_query($bid_commodity_sql);
					?>
		<script>
			window.alert('出價成功');
			location.href = "./commodity.php?c_number=<?php echo $c_number; ?>";
		</script>
		<?php
		}else{
?>
			<script>
				window.alert('您為目前出價最高者');
				location.href = "./commodity.php?c_number=<?php echo $c_number; ?>";
			</script>
<?php
		}
	}
	else
		include("loginConfirm.php");
?>
</body>
</html>