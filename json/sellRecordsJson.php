<?php
	include("../server.php");
	include("../commodityPath.php");
	$json = array();
	$m_number = $_REQUEST['m_number'];
	$option = $_REQUEST['option'];
	if($option ==1 )
		$sql = "SELECT max(bid.bid_price) self,bid.c_number,commodity.* FROM `bid` join commodity on bid.c_number = commodity.c_number  WHERE bid.m_number = $m_number and commodity.orbidder is null  group by bid.c_number order by downtime";
	else if($option ==2)
		$sql = "SELECT max(bid.bid_price) self,bid.c_number,commodity.* FROM `bid` join commodity on bid.c_number = commodity.c_number  WHERE bid.m_number = $m_number and commodity.orbidder = $m_number and orend = 1 group by bid.c_number";
	else if($option ==3)
		$sql = "select * from commodity where m_number = $m_number  and orbidder is null order by downtime";
	else if($option ==4)
		$sql = "select * from commodity where m_number = $m_number and orend = 1 and orbidder is not null and orbidder !=0 order by downtime";
	else if($option ==5)
		$sql = "SELECT max(bid.bid_price) self,bid.c_number,commodity.* FROM `bid` join commodity on bid.c_number = commodity.c_number  WHERE bid.m_number = $m_number and commodity.orbidder !=$m_number and orend = 1 and orbidder is not null group by bid.c_number order by downtime";
	else 
		$sql = "select * from commodity where m_number = $m_number and orend = 1 and orbidder = 0 order by downtime";
	
	
	$result = mysql_query($sql);
	if($total = mysql_num_rows($result)>0){
		while($row = mysql_fetch_array($result)){
			
			if(isset($row['orbidder'])){
				$m_sql = "select account from members where m_number = ".$row['orbidder'];
				$m_query = mysql_query($m_sql);
				$m_row = mysql_fetch_row($m_query);
				$or_account = $m_row[0];
			}else 
				$or_account = "目前沒得標者";
			
			$json['c_number'] = $row['c_number'];
			$json['c_name'] = $row['c_name'];
			$json['hi_bid_price'] = $row['hi_bid_price'];
			$json['c_price'] = $row['c_price'];
			$json['orbidder'] = $or_account;
			$json['hi_price_self'] = $row['self'];
			$json['c_mp'] = $displayPathPhone.$row['c_mp'];
			$json['downtime'] = $row['downtime'];
			$data['commodity'][] = $json;
		}
	}else {
		$data["yy"] = 1 ;
	}
	echo json_encode($data);
?>