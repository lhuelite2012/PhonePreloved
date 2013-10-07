<?php
	include("../server.php");
	include("../addtime.php");
	include("../commodityPath.php");
	$json = array();
	$c_number =$_REQUEST['c_number'];
	$m_number = $_REQUEST['m_number'];
	
	/*//最高出價     已將此放入 commodity資料表內
	$bid_hi_sql = "select max(bid_price) from bid where c_number = '$c_number' group by c_number limit 1";
	$bid_hi_query = mysql_query($bid_hi_sql);
	$bid_hi_rows = mysql_fetch_row($bid_hi_query);*/
	
	$sql = "select m_number,downtime from commodity where c_number = $c_number";
	$query = mysql_query($sql);
	$rows = mysql_fetch_row($query);
	
	if($rows[1] <= $addtime)
	{
		//更新商品 截止(orend)
		$down = "update commodity set orend = 1 where c_number = $c_number"; 
		$down_query = mysql_query($down);
	}
	
	//判斷賣家不是自己 若是則不新增瀏覽紀錄
	if($m_number!=$rows[0]){
	//判斷與前一次加入瀏覽紀錄時間是否超過3分鐘
		$maxTime_sql = "select max(v_time) from view where m_number = '$m_number' and c_number = '$c_number'"; //最新瀏覽紀錄時間
		$maxTime_query = mysql_query($maxTime_sql);
		$maxTime_rows = mysql_fetch_row($maxTime_query);
		
		
		if(strtotime($addtime)-strtotime($maxTime_rows[0])>180) //大於3分鐘(180秒)
		{
			$view_sql = "insert into view (m_number,c_number,v_time) value ('$m_number','$c_number','$addtime')";
			$view_result = mysql_query($view_sql);
		}
	}
	
	$sql = "select * from commodity where c_number = $c_number";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		$json["seller_number"]=$row["m_number"];
	
	//賣家帳號	
	$sql = "select account from members where m_number =".$row["m_number"];
	$result = mysql_query($sql);
	$account = mysql_fetch_row($result);
		$json["seller_account"]=$account[0];
		$json["c_gender"]=$row["c_gender"];
		$json["s_name"]=$row["s_name"];
		$json["s_fsort"]=$row["s_fsort"];
		
	$sql = "select * from brand where b_number =".$row["b_number"];
	$result = mysql_query($sql);
	$brand = mysql_fetch_row($result);
		$json["b_name"]=$brand[1];
		$json["logo"]=$brand[2];
		$json["c_name"]=$row["c_name"];
		$json["location"]=$row["location"];
		$json["oan"]=$row["oan"];
		$json["colors_name"]=$row["colors_name"];
		$json["material"]=$row["material"];
		$json["c_mp"]=$displayPathPhone.$row["c_mp"];
		$json["c_movie"]=$moviePathPhone.$row["c_movie"];
		$json["c_shoulder"]=$row["c_shoulder"];
		$json["c_height"]=$row["c_height"];
		$json["c_bust"]=$row["c_bust"];
		$json["size"]=$row["size"];
		$json["c_waistline"]=$row["c_waistline"];
		$json["c_hips"]=$row["c_hips"];
		$json["UDHeight"]=$row["UDHeight"];
		$json["LRLength"]=$row["LRLength"];
		$json["bWidth"]=$row["bWidth"];
		$json["MWidth"]=$row["MWidth"];
		$json["Slongest"]=$row["Slongest"];
		$json["s_size"]=$row["s_size"];
		$json["c_price"]=$row["c_price"];
		$json["c_bid_hi"] = $row["hi_bid_price"];
		$json["lowest_record"]=$row["lowest_record"];
		$json["pop"]=$popPathPhone.$row["pop"];
		$json["c_date"]=$row["c_date"];
		$json["c_address"]=$row["c_address"];
		$json["uptime"]=$row["uptime"];
		$json["downtime"]=$row["downtime"];
		$json["c_description"]=$row["c_description"];
		if($row["orend"]==1)
			$json["yy"] = 1;   //已下架
		else
			$json["yy"] = 2;
			
		$data["commodity"] = $json;
	
		//商品圖片
		$json_picture = array();
		$sql = "select * from c_picture where c_number = $c_number";
		$result = mysql_query($sql);
		$a = 0;
		while($row = mysql_fetch_row($result)){
			$data['commodity_picture'][] = $picturePathPhone.$row[1];
			$a++;
		}
	
		//交易方式
		$json_c_mode = array();
		$sql = "select c_mode from c_mode where c_number = $c_number";
		$result = mysql_query($sql);
		$total = mysql_num_rows($result);
		$a = 1;
		while($row = mysql_fetch_row($result)){
			if($a == $total)
				$test = $test.$row[0];
			else
				$test = $test.$row[0].",";
			$a++;
		}
			$data['c_mode'] = $test;
		
		//付款方式
		$json_c_payment = array();
		$sql = "select c_payment from c_payment where c_number = $c_number";
		$result = mysql_query($sql);
		$total = mysql_num_rows($result);
		$a = 1;
		while($row = mysql_fetch_row($result)){
			if($a == $total)
				$test1 = $test1.$row[0];
			else
				$test1 = $test1.$row[0].",";
			$a++;
		}
			$data['c_payment'] = $test1;
		
	echo json_encode($data);
?>