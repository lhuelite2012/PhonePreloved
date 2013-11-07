<?php
	$json = array();
	include("../server.php");
	include("../commodityPath.php");
	$sql = "select * from commodity where orsell =0 and	orend = 0 order by uptime desc limit 8";
	$query = mysql_query($sql);
	while($row = mysql_fetch_array($query))
	{
		$json["c_number"] = $row['c_number'];
		$json["c_name"] = $row['c_name'];
		$json["c_mp"] = $displayPathPhone.$row['c_mp'];
		$json["c_price"] = $row['c_price'];
		$json["location"] = $row['location'];
		$sql_people = "select people from members where m_number = ".$row['m_number'];
		$query_people = mysql_query($sql_people);
		$row_people = mysql_fetch_array($query_people);
		$json['people'] = $row_people[0];
		$data["newCommodityJson"][] = $json;
	}
	echo json_encode($data);
?>
