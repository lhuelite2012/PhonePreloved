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
		$data["newCommodityJson"][] = $json;
	}
	echo json_encode($data);
?>
