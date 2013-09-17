<?php
    include("../server.php");
    include("../commodityPath.php");
    $json = array();
    $c_gender = $_GET['c_gender'];			//男女
    $s_fsort = $_GET['s_fsort'];			//父分類
    $s_number = $_GET['s_number'];			//分類編號

//判斷是否有值
	
    $c_gender = HaveValue(stripslashes($c_gender),"c_gender"); 	//男女
    $s_fsort = HaveValue($s_fsort,"s_fsort");		//父分類
    $s_number = HaveValue($s_number,"s_number");	//分類編號
		
	function HaveValue($vale,$str){
		if($vale !="") {
			if($str == "s_fsort")
				$vale = "and $str = '".$vale."' "; 
			else if($str == "s_number")
				$vale = "and commodity.$str = '".$vale."' "; 
			else
				$vale = "and $str = '".$vale."'";
		}
		else 
			$vale = "";
		return $vale;
	}
    $sql = "select commodity.*,sort.s_fsort from commodity join sort on commodity.s_number = sort.s_number where  orend = 0 and orsell = 0  $c_gender $s_fsort $s_number ";
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
