<?php //加入追蹤清單的會員 通知他們 此商品被其他買家出價
	$c_number = $_POST['c_number'];
	
	$bid_select = "select bid_number from bid where bid_time = '$addtime' and c_number = $c_number";
	$bid_result = mysql_query($bid_select);
	$bid_row = mysql_fetch_row($bid_result);
	
	$bid_number = $bid_row[0];
	$addtime = $time_row[0];
	
	//查出追蹤清單加入此商品的所有會員
	$track_sql = "select m_number from track where c_number = $c_number and m_number != $m_number";
	$track_result = mysql_query($track_sql);
	while($track_row = mysql_fetch_row($track_result)){
		$track_m_number = $track_row[0];
		
		//存入push(通知) 資料表
		$push_sql = "insert into push(p_type,p_time,c_number,push_m_number,bid_number) values ('出價','$addtime','$c_number','$track_m_number','$bid_number')";
		mysql_query($push_sql);
	}
?>