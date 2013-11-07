<?php
	ob_start();
	session_start();
	include("../server.php");
	include("../phpFunction.php");
	include("../commodityPath.php");
	$m_number = $_REQUEST['m_number'];
	
//-------------------------------------------------------------------------
//瀏覽商品次數  r_type = 1


	//判斷 推薦(recommend)內 是否有 此會員的商品瀏覽次數(r_type=1)
	//有則刪除此會員之推薦(recommend)內的商品瀏覽次數(r_type=1)資料
	$r_type = 1;
	$r_score = 5;
	$what = "c_number";
	
	delete_recommend($r_type,$m_number);
	
	
	//列出此會員對商品的點閱率 前20名  編號:1
	$s_sql = "SELECT view.c_number, commodity.m_number, COUNT( * )  'total'
FROM VIEW JOIN commodity ON view.c_number = commodity.c_number
WHERE view.m_number =$m_number
GROUP BY view.c_number
ORDER BY 3 desc , view.v_time desc
LIMIT 20";
	floor_count($s_sql,$r_type,$r_score,$m_number,$what);
	
	
//------------------------------|||||||||----------------------------------
	
	
	
//-------------------------------------------------------------------------
//瀏覽賣家次數  r_type = 2

	
	//判斷 推薦(recommend)內 是否有 此會員的商品瀏覽次數(r_type=2)
	//有則刪除此會員之推薦(recommend)內的商品瀏覽次數(r_type=2)資料
	$r_type = 2;
	$r_score = 8;
	$what = "m_number";
	
	delete_recommend($r_type,$m_number);
	
	//找出此會員最常瀏覽的賣家 前20名  編號:2
	$s_sql = "SELECT commodity.m_number, COUNT( * ) 
FROM VIEW JOIN commodity ON view.c_number = commodity.c_number
WHERE view.m_number =$m_number
GROUP BY commodity.m_number
ORDER BY 2 DESC , view.v_time DESC 
LIMIT 20";
	floor_count($s_sql,$r_type,$r_score,$m_number,$what);
	
//------------------------------|||||||||----------------------------------
	
	
	
//-------------------------------------------------------------------------
//瀏覽品牌  r_type = 3

	
	//判斷 推薦(recommend)內 是否有 此會員的品牌瀏覽次數(r_type=3)
	//有則刪除此會員之推薦(recommend)內的品牌瀏覽次數(r_type=3)資料
	$r_type = 3;
	$r_score = 7;
	$what = "b_number";
	
	delete_recommend($r_type,$m_number);
	
	
	//找出此會員最常瀏覽的品牌 前20名  編號:3
	$s_sql = "SELECT commodity.b_number, COUNT( * ) 
FROM VIEW JOIN commodity ON view.c_number = commodity.c_number
WHERE view.m_number = $m_number
GROUP BY commodity.b_number
ORDER BY 2 DESC , view.v_time DESC 
LIMIT 20";
	floor_count($s_sql,$r_type,$r_score,$m_number,$what);

//------------------------------|||||||||----------------------------------


	
//-------------------------------------------------------------------------	
//瀏覽地區  r_type = 4

	
	//判斷 推薦(recommend)內 是否有 此會員的地區瀏覽次數(r_type=4)
	//有則刪除此會員之推薦(recommend)內的地區瀏覽次數(r_type=4)資料
	$r_type = 4;
	$r_score = 6;
	$what = "location";
	
	delete_recommend($r_type,$m_number);
	
	//找出此會員最常瀏覽的地區 前20名  編號:4
	$s_sql = "SELECT commodity.location, COUNT( * ) 
FROM VIEW JOIN commodity ON view.c_number = commodity.c_number
WHERE view.m_number = $m_number
GROUP BY commodity.location
ORDER BY 2 DESC , view.v_time DESC 
LIMIT 20";
	
	floor_count($s_sql,$r_type,$r_score,$m_number,$what);
	
//------------------------------|||||||||----------------------------------
	

	/*
//-------------------------------------------------------------------------	
//瀏覽過的賣家評價  r_type = 5

	
	//判斷 推薦(recommend)內 是否有 此會員的瀏覽賣家評價分數(r_type=5)
	//有則刪除此會員之推薦(recommend)內的瀏覽賣家評價分數(r_type=5)資料
	$r_type = 5;
	$r_score = 5;
	$what = "score";
	
	delete_recommend($r_type,$m_number);
	
	//找出此會員最常瀏覽的賣家 前20名  編號:4
	$s_sql = "SELECT distinct commodity.m_number
FROM VIEW JOIN commodity JOIN members ON view.c_number = commodity.c_number
WHERE view.m_number = $m_number
GROUP BY view.c_number
ORDER BY  view.v_time desc
LIMIT 20";
	
	floor_count($s_sql,$r_type,$r_score,$m_number,$what);
	
//------------------------------|||||||||----------------------------------

*/
	
	// 未啟用   每天晚上更新一次
//-------------------------------------------------------------------------
//偏愛品牌 p_brand  r_type = 7
	
	
	//刪除 推薦(recommend) 內 此會員的偏愛品牌( r_type = 7)
	$r_type = 7;
	$r_score = 10;
	
	delete_recommend($r_type,$m_number);

	//找出此會員的偏愛品牌  目前為單選
	$s_sql = "select b_number from p_brand where m_number = $m_number";
	$s_query = mysql_query($s_sql);
	while($s_row = mysql_fetch_array($s_query))
	{
		$b_number = $s_row['b_number']; //品牌編號
		$c_sql = "select c_number from commodity where b_number = $b_number";
		insert_recommend($c_sql,$r_type,$r_score,$m_number);
	}
	
//------------------------------|||||||||----------------------------------
	


//-------------------------------------------------------------------------	
//偏愛顏色 p_color  r_type = 8
	
	
//刪除 推薦(recommend) 內 此會員的偏愛顏色( r_type = 8)
	$r_type = 8;
	$r_score = 9;
	
	delete_recommend($r_type,$m_number);

	//找出此會員的偏愛顏色  目前為多選
	$s_sql = "select colors_number from p_color where m_number = $m_number";
	$s_query = mysql_query($s_sql);
	while($s_row = mysql_fetch_array($s_query))
	{
		$colors_number = $s_row['colors_number']; //顏色編號
		$c_sql = "select c_number from commodity where colors_number = $colors_number";
		insert_recommend($c_sql,$r_type,$r_score,$m_number);
	}
//------------------------------|||||||||----------------------------------
	


//-------------------------------------------------------------------------	
//會員所在地 member_location  r_type = 9

	
	//刪除 推薦(recommend) 內 此會員的所在地( r_type = 9)
	$r_type = 9;
	$r_score = 8;
	
	delete_recommend($r_type,$m_number);
	
	//找出此會員的所在地
	$s_sql = "select address from members where m_number = $m_number";
	$s_query = mysql_query($s_sql);
	$s_row = mysql_fetch_array($s_query);
	$address = $s_row['address']; //地址
	$location = mb_substr($address,0,3,'UTF-8'); //抓取 縣
	$c_sql = "select c_number from commodity where location = '$location'";
	insert_recommend($c_sql,$r_type,$r_score,$m_number);
	
//------------------------------|||||||||----------------------------------
$json = array();
$sql = "SELECT COUNT( * ) ,commodity. c_number,commodity. c_name, commodity. c_price, commodity.c_gender,  commodity.location,  commodity.oan,  commodity.uptime, commodity.downtime,  commodity. c_mp,commodity.m_number
FROM recommend
JOIN commodity ON recommend.c_number = commodity.c_number
WHERE recommend.m_number =$m_number
AND commodity.orend =0
AND commodity.orsell =0
GROUP BY recommend.c_number
ORDER BY 1 DESC";
$reslut = mysql_query($sql);
while($row = mysql_fetch_array($reslut)){
	$json['c_number'] = $row['c_number'];
	$json['c_name'] = $row['c_name'];
	$json['c_price'] = $row['c_price'];
	$json['c_gender'] = $row['c_gender'];
	$json['location'] = $row['location'];
	$json['oan'] = $row['oan'];
	$json['uptime'] = $row['uptime'];
	$json['downtime'] = $row['downtime'];
	$json['c_mp'] = $displayPathPhone.$row['c_mp'];
	$sql_people = "select people from members where m_number = ".$row['m_number'];
		$query_people = mysql_query($sql_people);
		$row_people = mysql_fetch_array($query_people);
		$json['people'] = $row_people[0];
	$json['seller_number']= $row['m_number'];  //賣家
	$data["displayRecomment"][] = $json;
}
echo json_encode($data);

	
?>