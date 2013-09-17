<?php
		include("../server.php");
		$json = array();
		$m_number = $_REQUEST['m_number'] ;
		$track_sql = "select * from track where m_number = $m_number";
		$track_query = mysql_query($track_sql);
		while($track_row = mysql_fetch_array($track_query))
		{
			//商品資訊
			$c_sql = "select * from commodity where c_number =".$track_row['c_number']; 
			$c_query = mysql_query($c_sql);
			$c_row = mysql_fetch_array($c_query);
			
			
			
			//出價次數
			$bid_sql = "select count(*) from bid where c_number =".$track_row['c_number']; 
			$bid_query = mysql_query($bid_sql);
			$bid_rows = mysql_fetch_row($bid_query);
			
			$json['c_number'] = $track_row['c_number'];
    		$json['c_mp'] = $c_row['c_mp']; 
           	$json['c_name'] = $c_row['c_name'];
            $json['bid_hi'] = $c_row['hi_bid_price'];
            $json['bid_total'] = $bid_rows[0];	
			$data['commoditys'][] = $json;
		}
		echo json_encode($data);
?>