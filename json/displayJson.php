<?php
	$json = array();
	include("../server.php");
	include("../addtime.php");
	include("../commodityPath.php");
	$sql = "select * from commodity where orsell =0 and	orend = 0";
	$query = mysql_query($sql);
	while($row = mysql_fetch_array($query))
	{
		if($row['downtime'] <= $addtime)
		{
			//更新商品 截止(orend)
			$down = "update commodity set orend = 1 where c_number =".$row['c_number']; 
			$down_query = mysql_query($down);
			break; 	
		}
		$json['c_number'] = $row['c_number'];
		$json['c_name'] = $row['c_name'];
                $json['hi_bid_price'] = $row['hi_bid_price'];
		$json['c_price'] = $row['c_price'];
		$json['c_gender'] = $row['c_gender'];
		$json['location'] = $row['location'];
		$json['oan'] = $row['oan'];
		$json['uptime'] = $row['uptime'];
		$json['downtime'] = $row['downtime'];
		$json['c_mp'] = $displayPathPhone.$row['c_mp'];
		$json['seller_number']= $row['m_number'];  //賣家
		$sql_people = "select people from members where m_number = ".$row['m_number'];
		$query_people = mysql_query($sql_people);
		$row_people = mysql_fetch_array($query_people);
		$json['people'] = $row_people[0];
		$data["commodity"][] = $json;
	}
	echo json_encode($data);
?>
