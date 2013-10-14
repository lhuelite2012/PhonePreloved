<?php //地圖搜尋 searchMapJson.php
	include("../server.php");
	include("../commodityPath.php");
	$area = $_REQUEST['area'];
	
	
	$sql = "select * from commodity where orend != 1 and location like '$area'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		$json['c_number'] = $row['c_number'];
		$json['c_name'] = $row['c_name'];
		$json['c_mp'] = $displayPathPhone.$row['c_mp'];
		$json['hi_bid_price'] = $row['hi_bid_price'];
		$json['c_price'] = $row['c_price'];
		$json['location'] = $row['location'];
		$data['search'][]=$json;
		$repeat[] = $row['c_number'];
		$total ++;
		$data['total'] = $total;
	}
	if(mysql_num_rows($result)==0){
		$data['yy'] = "沒有搜尋到任何商品";
		echo json_encode($data);
	}else
		echo json_encode($data);
?>