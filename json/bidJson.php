<?php
	session_start();
	//沒有判斷 帳號登入
	//出價等於最高價時 直接結束
	//出價低於最高價時 直接結束
	$json = array();
	include("../server.php");
	include("../addtime.php");    //系統時間
	
	$c_number = $_REQUEST['c_number'];
	$bid = $_REQUEST['bid'];
	$m_number = $_REQUEST['m_number'];
	//此商品的最高出價
	$bid_hi_sql = "select max(bid_price),m_number from bid where c_number = $c_number group by m_number order by 1 desc";
	$bid_hi_query = mysql_query($bid_hi_sql);
	$bid_hi_rows = mysql_fetch_row($bid_hi_query);
	$bid_hi = $bid_hi_rows[0];
	$bid_m_number = $bid_hi_rows[1];
	if($bid > $bid_hi){  //判斷是否大於目前最高價
		if($bid_m_number != $m_number)
		{
		$bid_sql = "insert into bid (bid_price,bid_time,m_number,c_number) values ('$bid','$addtime','$m_number','$c_number')";
		$bid_query = mysql_query($bid_sql);
		
		//推薦-----------------------	
		include("push.php");
		
		//出價最高
		$bid_hi_sql = "select max(bid_price) from bid where c_number = $c_number limit 1";
		$bid_hi_query = mysql_query($bid_hi_sql);
		$bid_hi_rows = mysql_fetch_row($bid_hi_query);
		$bid_commodity_sql = "update commodity set hi_bid_price = ".$bid_hi_rows[0]." where c_number = $c_number";
		$bid_commodity_query = mysql_query($bid_commodity_sql);
		
		$json['yy']=1;
		}
		else
			$json['yy']=3;   //已是目前最高出價者
	}else
		$json['yy']=2;
		
	echo json_encode($json);
?>
