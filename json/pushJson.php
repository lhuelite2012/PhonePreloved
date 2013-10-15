<?php
	
$c_number = $_REQUEST['c_number'];
	
	//查出追蹤清單加入此商品的所有會員
	$track_sql = "select m_number from track where c_number = $c_number and m_number != $m_number";
	$track_result = mysql_query($track_sql);
	while($track_row = mysql_fetch_row($track_result)){
		$track_m_number = $track_row[0];
		//存入push(通知) 資料表
		push('追蹤被出價',$addtime,$c_number,$track_m_number);
	}
	
//通知 販賣此商品的賣家 已被其他買家出價  出價者  商品編號  賣家 
	$sql = "select m_number from commodity where c_number = $c_number";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	$seller = $row[0];
	push('販賣被出價',$addtime,$c_number,$seller);
	
?>