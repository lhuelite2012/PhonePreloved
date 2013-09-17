<?php	//存入交易方式 內容
	include("../server.php");
	include("../addtime.php");
	$json = array();
	$m_number = $_REQUEST['m_number'];		//買家編號
	$c_number = $_REQUEST['c_number'];		//商品編號
	$c_mode = $_REQUEST['c_mode'];			//交易方式
	$c_payment = $_REQUEST['c_payment'];	//付款方式
	
	if(isset($_REQUEST['storename'])) $storename = $_REQUEST['storename']; else $storename;			//門市名稱
	if(isset($_REQUEST['buy_pay'])) {
		$buy_pay = $_REQUEST['buy_pay'];
		$sql = "update members set personally ='$buy_pay' where m_number = '$m_number'"; 
	}else $buy_paytime;																				//面交資料
	if(isset($_REQUEST['buy_paydate'])) $buy_paydate = $_REQUEST['buy_paydate']; else $buy_paydate;	//面交日期
	if(isset($_REQUEST['buy_paytime'])) $buy_paytime = $_REQUEST['buy_paytime']; else $buy_paytime;	//面交時段
	if(isset($_REQUEST['sendtime'])) $sendtime = $_REQUEST['sendtime']; else $sendtime;				//收貨時段
	$sql = "update transaction set tr_mode = '$c_mode', tr_payment = '$c_payment',storename = '$storename',sendtime = '$sendtime',buy_paydate = '$buy_paydate',buy_paytime = '$buy_paytime',buy_pay = '$buy_pay' where c_number = $c_number";
	mysql_query($sql);
?>