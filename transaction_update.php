<?PHP
ob_start();
include("phpFunction.php");
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
	
	$c_mode = $_POST['c_mode'];
	$c_payment = $_POST['c_payment'];
	
	$buy_remit = $_POST['buy_remit'];
	$buy_remitmoney = $_POST['buy_remitmoney'];
	$buy_remitdate = $_POST['buy_remitdate'];
	
	$time_sql = "SELECT NOW()";
	$time_query = mysql_query($time_sql);
	$time_row = mysql_fetch_row($time_query);
	$addtime = $time_row[0];
	
	$sql_county = "select * from county where county_name = '".$_POST["county"]."'";
	$query_county = mysql_query($sql_county);
	$list3_county = mysql_fetch_array($query_county);
	
	$sql_city = "select * from city where city_name = '".$_POST["city"]."'";
	$query_city = mysql_query($sql_city);
	$list3_city = mysql_fetch_array($query_city);
	
	$sql = "update transaction set tr_mode = '$c_mode',tr_payment = '$c_payment',t_schedule = '已付款',payTimeButton = '$addtime' where c_number = '$c_number'";
	mysql_query($sql); //更新付款方式及交易方式、已付款、付款時間
	
	//找出商品賣家
	$m_sql = "select m_number from commodity where c_number = $c_number";
	$m_re = mysql_query($m_sql);
	$m_r = mysql_fetch_row($m_re);
	$seller = $m_r[0];
	push("交易確認",$addtime,$c_number,$seller);
	if($_POST['buy_remit'] != "" && $_POST['buy_remitmoney'] != "" && $_POST['buy_remitdate'] != "")
	{
		$sql = "update transaction set buy_remit = '".$_POST['buy_remit']."',buy_remitmoney = '".$_POST['buy_remitmoney']."',buy_remitdate = '".$_POST['buy_remitdate']."' where c_number = '$c_number'";
		mysql_query($sql); //更新匯款後五碼、匯款總金額及匯款的日期
	}
	
	if($county != "")
	{
		$sql = "update members set county = '".$list3_county["county_number"]."' where m_number = '$m_number'";
		mysql_query($sql); //更新城市
	}
	
	if($city != "")
	{
		$sql = "update members set city = '".$list3_city["city_number"]."' where m_number ='$m_number'";
		mysql_query($sql); //更新縣市
	}
	
	if($_POST['address'] != "")
	{
		$sql = "update members set address = '".$_POST["address"]."' where m_number ='$m_number'";
		mysql_query($sql); //更新地址
	}
	
	if($_POST['phone'] != "")
	{
		$sql = "update members set phone = '".$_POST["phone"]."' where m_number ='$m_number'";
		mysql_query($sql); //更新電話
	}
	
	if($_POST['buy_paydate'] != "")
	{
		$sql = "update transaction set buy_paydate = '".$_POST['buy_paydate']."' where c_number = '$c_number'";
		mysql_query($sql); //更新買家面交日期
	}
	
	if($_POST['buy_paytime'] != "")
	{
		$sql = "update transaction set buy_paytime = '".$_POST['buy_paytime']."' where c_number = '$c_number'";
		mysql_query($sql); //更新買家面交時段
	}
	
	if($_POST['buy_pay'] != "")
	{
		$sql = "update transaction set buy_pay = '".$_POST['buy_pay']."' where c_number = '$c_number'";
		mysql_query($sql); //更新買家面交地點
	}
	
	if($_POST['storename'] != "")
	{
		$sql = "update transaction set storename = '".$_POST['storename']."' where c_number = '$c_number'";
		mysql_query($sql); //更新店門市店名
	}
	
	if($_POST['storenumber'] != "")
	{
		$sql = "update transaction set storenumber = '".$_POST['storenumber']."' where c_number = '$c_number'";
		mysql_query($sql); //更新店門市店號
	}
		
	if($_POST['sendtime'] != "")
	{
		$sql = "update transaction set sendtime = '".$_POST['sendtime']."' where c_number = '$c_number'";
		mysql_query($sql); //更新收貨時段
	}
	
	if($_POST['remark'] != "")
	{
		$sql = "update transaction set remark = '".$_POST['remark']."' where c_number = '$c_number'";
		mysql_query($sql); //更新備註注意事項或備註的事項
	}
	
	header("location:transaction_choose.php?c_number=$c_number"); //回到本頁，若成功到訂單頁面
?> 
</body>
</html>