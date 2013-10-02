<?PHP
ob_start();
session_start();
?>
<?PHP
include("server.php");
include("loginConfirm.php");
include("main.php");
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
	
	if($_POST['evaluate'] == "26")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為26
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']+1000;
		$total = $row['total']+1000;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //買東西分數為5分(1000點)
		
		header("location:transaction_sellevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "27")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為27
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']+600;
		$total = $row['total']+600;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //買東西分數為3分(600點)
		
		header("location:transaction_sellevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "28")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為28
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']+200;
		$total = $row['total']+200;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //買東西分數1分(200點)
		
		header("location:transaction_sellevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "29")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為29
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']-200;
		$total = $row['total']-200;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //買東西分數為-1分(-200點)
		
		header("location:transaction_sellevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "30")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為30
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$buy = $row['buy']-600;
		$total = $row['total']-600;
				
		$sql = "update `members` set `buy`='".$buy."',`total`='".$total."' where `m_number`= $row[1]";
		mysql_query($sql); //買東西分數為-3分(-600點)
		
		header("location:transaction_sellevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "31")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為31
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']+1000;
		$total = $row['total']+1000;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //賣東西分數為5分(1000點)
		
		header("location:transaction_buyevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "32")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為32
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']+600;
		$total = $row['total']+600;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //賣東西分數為3分(600點)
		
		header("location:transaction_buyevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "33")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為33
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']+200;
		$total = $row['total']+200;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //賣東西分數為1分(200點)
		
		header("location:transaction_buyevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "34")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為34
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']-200;
		$total = $row['total']-200;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //賣東西分數為-1分(-200點)
		
		header("location:transaction_buyevaluate.php?c_number=$c_number");
	}
	
	if($_POST['evaluate'] == "35")
	{
		$evaluate = $_POST['evaluate'];
		$comment = $_POST['comment'];
		
		$sql = "insert into f_record_ (m_number,c_number,fr_number,f_time,comment_) values ('$m_number','$c_number','$evaluate','$addtime','$comment')";
		mysql_query($sql); //評價編號為35
		
		$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,members.buy,members.sell,members.total from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = commodity.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = commodity.m_number";	
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sell = $row['sell']-600;
		$total = $row['total']-600;
				
		$sql = "update `members` set `sell`='".$sell."',`total`='".$total."' where `m_number`= $row[2]";
		mysql_query($sql); //賣東西分數為-3分(-600點)
		
		header("location:transaction_buyevaluate.php?c_number=$c_number");
	}
	
	$sql_ = "select * from f_record_ where c_number = '$c_number'";
	$query_ = mysql_query($sql_);
	$list3_ = mysql_num_rows($query_);
	$row_ = mysql_fetch_array($query_);

	if($list3_ == 2)
	{
		$sql = "update transaction set t_schedule = '交易完成' where c_number = '$c_number'";
		mysql_query($sql);
	}
?>
</body>
</html>