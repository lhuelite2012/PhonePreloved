<?PHP
ob_start();
session_start();
?>
<?PHP
include("main.php");
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?PHP
	$m_number = $_SESSION['m_number'];
	$c_number = $_POST['c_number'];
	
	$time_sql = "SELECT NOW()";
	$time_query = mysql_query($time_sql);
	$time_row = mysql_fetch_row($time_query);
	$addtime = $time_row[0];
	
	if($_POST['lost'] == "36")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','面交時，賣家未到面交地點')";
		mysql_query($sql); //評價編號為36
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //扣賣家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:won.php");
	}
	
	if($_POST['lost'] == "37")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','買家(我)後悔下標此商品')";
		mysql_query($sql); //評價編號為37
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = '$m_number' and members.m_number = '$m_number' and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //扣買家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:won.php");
	}
	
	if($_POST['lost'] == "38")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','賣家未對帳')";
		mysql_query($sql); //評價編號為38
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //扣賣家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:won.php");
	}

	if($_POST['lost'] == "39")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','賣家未寄出')";
		mysql_query($sql); //評價編號為39
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //扣賣家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:won.php");
	}	
	
	if($_POST['lost'] == "40")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','賣家未評價')";
		mysql_query($sql); //評價編號為40
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:won.php");
	}
	
	if($_POST['lost'] == "41")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','面交時，買家未到面交地點')";
		mysql_query($sql); //評價編號為41
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //扣買家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:sold.php");
	}
	
	if($_POST['lost'] == "42")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','賣家(我)後悔上架此商品')";
		mysql_query($sql); //評價編號為42
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = '$m_number' and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //扣賣家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:sold.php");
	}
	
	if($_POST['lost'] == "43")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','買方不滿意此倉品，想退貨')";
		mysql_query($sql); //評價編號為43
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //扣買家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:sold.php");
	}
	
	if($_POST['lost'] == "44")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','買家未匯款')";
		mysql_query($sql); //評價編號為44
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']-1000;
		$total = $row['total']-1000;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //扣買家分數為-5分(-1000點)
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:sold.php");
	}
	
	if($_POST['lost'] == "45")
	{
		$lost = $_POST['lost'];
		
		$sql = "insert into f_record_ (c_number,fr_number,f_time,comment_) values ('$c_number','$lost','$addtime','買家未評價')";
		mysql_query($sql); //評價編號為45
		
		$sql = "update transaction set t_schedule = '交易失敗' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:sold.php");
	}
	
	$sql_ = "select * from f_record_ where c_number = '$c_number'";
	$result_ = mysql_query($sql_);
	$row_ = mysql_fetch_array($result_);
	
	if($row_['fr_number'] == '40' and $_POST['again'] == "重新評價")
	{
		$sql = "delete from f_record_ where c_number = '$c_number'";
		mysql_query($sql);
		
		$sql = "update transaction set t_schedule = '選擇評價' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:sold.php");
	}
	
	if($row_['fr_number'] == '45' and $_POST['again'] == "重新評價")
	{
		$sql = "delete from f_record_ where c_number = '$c_number'";
		mysql_query($sql);
		
		$sql = "update transaction set t_schedule = '選擇評價' where c_number = '$c_number'";
		mysql_query($sql);
		
		header("location:won.php");
	}
?>
</body>
</html>