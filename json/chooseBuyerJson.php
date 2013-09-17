<?php
	include("../server.php");
	$c_number = $_REQUEST['c_number'];
	$m_number = $_REQUEST['m_number'];
	$json = array();
	$json1 = array();
	$sql_c = "select * from commodity where c_number = $c_number  and orbidder is null";
	$result_c = mysql_query($sql_c);
	$total = mysql_num_rows($result_c);
	
	$sql = "SELECT MAX( bid.bid_price ) as bid_price ,bid.m_number, bid.bid_number, bid_time, members.account, members.total, members.buy, members.sell, members.score
FROM bid
JOIN members ON bid.m_number = members.m_number
WHERE bid.c_number = $c_number
GROUP BY bid.m_number
ORDER BY 1 DESC";
	$result = mysql_query($sql);
	
	//賣家資料
	$m_sql = "select * from members where m_number = $m_number";
	$m_result = mysql_query($m_sql);
	$m_row = mysql_fetch_array($m_result);
	
	$json1['name'] = $m_row['name'];
	$json1['phone'] = $m_row['phone'];
	$json1['account'] = $m_row['account'];
	$json1['fb_id'] = $m_row['fb_id'];
	$json1['line_id'] = $m_row['line_id'];
	$sql ="select c_mode from c_mode where c_number = $c_number and c_mode = '面交'";
	$result_c = mysql_query($sql);
	$total_c = mysql_num_rows($result_c);
	if($total_c == 1)
		$json1['personally'] = $m_row['personally'];
	$data['seller'] = $json1;
	
	
	
	if($total>0){
		while($row = mysql_fetch_array($result)){
			$json['bid_price'] = $row['bid_price'];
			$json['m_number'] = $row['m_number'];
			$json['bid_time'] = $row['bid_time'];
			$json['account'] = $row['account'];
			$json['total'] = $row['total'];
			
			$data['bidder'][] = $json;
		}
	}
	else {
		$data["yy"] = 1 ;
	}
	echo json_encode($data);

?>