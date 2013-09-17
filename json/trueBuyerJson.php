<?php	//得標者存入資料庫   commodity的 orbidder 及 transaction 內的 m_number
	include("../server.php");
	include("../addtime.php");
	$m_number = $_REQUEST['m_number'];
	$c_number = $_REQUEST['c_number'];
	$bidder = $_REQUEST['bidder'];
	$phone = $_REQUEST['phone'];
	$fb_id = $_REQUEST['fb_id'];
	$line_id = $_REQUEST['line_id'];
	
	$sql = "select * from transaction where c_number = $c_number";
	$result = mysql_query($sql);
	$being = mysql_num_rows($result);
	if($being == 0){
		$sql = "SELECT MAX( bid.bid_price ) as bid_price FROM bid JOIN members ON bid.m_number = members.m_number WHERE bid.c_number =$c_number and bid.m_number = $bidder GROUP BY bid.m_number ORDER BY 1 DESC";
		$result = mysql_query($sql);
		$bid_price = mysql_fetch_row($result);
		$bid_price = $bid_price[0];
		
		//得標者
		$sql = "update commodity set downtime = '$addtime',orbidder = $bidder,bid_price = '$bid_price',orend = 1 where c_number = $c_number";
		mysql_query($sql);
		
		//會員資料
		$sql = "update members set phone = '$phone',fb_id = '$fb_id',line_id = '$line_id' where m_number = $m_number";
		mysql_query($sql);
		
		
		if(isset($_REQUEST['personally'])){
			$personally = $_REQUEST['personally'];
			$sql = "update members set personally = '$personally' where m_number = $m_number";
			mysql_query($sql);
			//交易資料庫 有personally
			$sql = "insert into transaction (t_time,m_number,c_number,personally) value ('$addtime','$bidder','$c_number','$personally')";
			mysql_query($sql);	
		}else{
			//交易資料庫 沒有personally
			$sql = "insert into transaction (t_time,m_number,c_number) value ('$addtime','$bidder','$c_number')";
			mysql_query($sql);		
		}
		$data["yy"] = "存入成功" ;
	}else 
		$data["yy"] = "transaction已有得標者" ;
	echo json_encode($data);
?>