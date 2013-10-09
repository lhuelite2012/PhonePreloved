<?php	//搜尋全部收品  商品名稱及品牌名稱
	include("../server.php");
	include("../commodityPath.php");
	$json = array();
	$repeat = array();
	$keyword = $_REQUEST['keyword'];

	$sql = "select * from commodity where orend != '1' and c_name like '%".$keyword."%'";
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)){
		$json['c_number'] = $row['c_number'];
		$json['c_mp'] = $displayPathPhone.$row['c_mp'];
		$json['c_name'] = $row['c_name'];
		$json['hi_bid_price'] = $row['hi_bid_price'];
		$json['c_price'] = $row['c_price'];
		$json['location'] = $row['location'];
		$data['search'][]=$json;
		$repeat[] = $row['c_number'];
		$total ++;
		$data['total'] = $total;
	}
	$sql_brand = "SELECT * FROM `brand` join commodity on brand.b_number = commodity.b_number where brand.b_name like '".$keyword."' or aliases like '".$keyword."'";
	$result_brand = mysql_query($sql_brand);
	while($row2 = mysql_fetch_array($result_brand)){
		//如果商品已出現過則跳過此商品
		$te=true;
		for($a = 0 ; $a< count($repeat) ; $a++){
			if($row2['c_number'] == $repeat[$a]){
				$te = false;
				break;
			}
		}
		if(!$te)
			continue;
		//end	
			
		$json['c_number'] = $row2['c_number'];
		$json['c_mp'] = $displayPathPhone.$row2['c_mp'];
		$json['c_name'] = $row2['c_name'];
		$json['hi_bid_price'] = $row2['hi_bid_price'];
		$json['c_price'] = $row2['c_price'];
		$json['location'] = $row2['location'];
		$data['search'][]=$json;
		$total ++;
		$data['total'] = $total;
	}
	//沒有搜尋到任何商品則傳YY
	if(mysql_num_rows($result_brand)==0 and mysql_num_rows($result) == 0){
		$data['yy'] = "沒有搜尋到任何商品";
		echo json_encode($data);
	}else {
		echo json_encode($data);
	}	
	
?>