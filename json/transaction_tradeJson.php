<?php	//存入資料庫
	include("../server.php");
	$c_mode = $_REQUEST['c_mode'];			//交易方式
	$c_payment = $_REQUEST['c_payment'];	//付款方式
	$c_number = $_REQUEST['c_number'];	//商品編號
	$buyers = $_REQUEST['buyers'];	//買家編號
	$buy_remit = $_REQUEST['buy_remit'];	//匯款後五碼
	$buy_remitmoney = $_REQUEST['buy_remitmoney']; //匯款總金額
	$buy_remitdate = $_REQUEST['buy_remitdate'];	//匯款日期
	
	//面交
	$b_phone = $_REQUEST['b_phone'];	//買家電話
	$date = $_REQUEST['date'];	//可面交日期
	$time = $_REQUEST['time'];	//可面交時段
	$per_place = $_REQUEST['per_place'];	//詳細面交地點
	$remark = $_REQUEST['remark'];	//備註注意事項
	
	//店到店
	$storename = $_REQUEST['storename'];
	$storenumber = $_REQUEST['storenumber'];
	//郵寄
	$sendtime = $_REQUEST['sendtime'];
	
	if($c_payment == "面交"){
		if($b_phone != ""){
			$sql = "UPDATE members SET phone = '$b_phone' WHERE m_number = '$buyers' ";
			mysql_query($sql);
		}
		$sql = "update transaction set buy_paydate = '$date', t_schedule='已付款',tr_payment='面交',tr_mode='面交', buy_paytime = '$time',buy_pay = '$per_place',remark = '$remark' where c_number = $c_number";
		mysql_query($sql);
	}
	if($c_payment == "匯款"){
		if($c_mode == "面交"){
			if($b_phone != ""){
				$sql = "UPDATE members SET phone = '$b_phone' WHERE m_number = '$buyers' ";
				mysql_query($sql);
			}
			$sql = "update transaction set buy_paydate = '$date', t_schedule='已付款',tr_payment='匯款',tr_mode='面交', , buy_paytime = '$time',buy_pay = '$per_place',remark = '$remark' where c_number = $c_number";
			mysql_query($sql);
		}else if($c_mode == "7-11店到店"){
			if($b_phone != ""){
				$sql = "UPDATE members SET phone = '$b_phone' WHERE m_number = '$buyers' ";
				mysql_query($sql);
			}
			$sql = "update transaction set storename = '$storename',t_schedule='已付款',tr_payment='匯款',tr_mode='7-11店到店' ,storenumber = '$storenumber',remark = '$remark' where c_number = $c_number";
			mysql_query($sql);
		}else if($c_mode == "全家店到店"){
			if($b_phone != ""){
				$sql = "UPDATE members SET phone = '$b_phone' WHERE m_number = '$buyers' ";
				mysql_query($sql);
			}
			$sql = "update transaction set storename = '$storename',t_schedule='已付款',tr_payment='匯款',tr_mode='全家店到店' ,storenumber = '$storenumber',remark = '$remark' where c_number = $c_number";
			mysql_query($sql);
		}else if($c_mode == "郵寄"){
			if($b_phone != ""){
				$sql = "UPDATE members SET phone = '$b_phone' WHERE m_number = '$buyers' ";
				mysql_query($sql);
			}
			$sql = "update transaction set sendtime ='sendtime',t_schedule='已付款',tr_payment='匯款',tr_mode='郵寄'  where c_number = $c_number";
			mysql_query($sql);
		}
	}
?>