<?php
	ob_start();
	session_start();
	include("main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>推薦 recommend</title>
</head>

<body>
<?php
	include("server.php");
	include("loginConfirm.php");
	include("phpFunction.php");
	
	$m_number = $_SESSION['m_number'];
	$limit = "20";	 //存入幾筆
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
WHERE view.m_number =$m_number and commodity.m_number !=$m_number
GROUP BY view.c_number
ORDER BY 3 desc , view.v_time desc
LIMIT $limit";
	floor_count($s_sql,$r_type,$r_score,$m_number,$what);
	
	
//------------------------------|||||||||----------------------------------
	
//-------------------------------------------------------------------------
//賣家有自然人憑證  r_type =10


	$r_type = 10;
	$r_score = 8;
	delete_recommend($r_type,$m_number);
	
	//擁有自然人憑證的商品
	$s_sql = "select c.c_number,m.people from commodity c join members m on c.m_number = m.m_number where m.people=1";
	insert_recommend($s_sql,$r_type,$r_score,$m_number);
	
	
//------------------------------|||||||||----------------------------------	

//-------------------------------------------------------------------------
//試穿尺寸推薦  r_type =11
	//+-5公分

	$r_type = 11;
	$r_score = 2;
	$what = "c_number";
	delete_recommend($r_type,$m_number);
	
	//會員的 身高 體重 三圍
	$s_sql = "SELECT height,weight,shoulder,bust,waistline,hips from members where m_number = $m_number";
	try_recommend($s_sql,$r_type,$r_score,$m_number,$what);
	
	
//------------------------------|||||||||----------------------------------	

//-------------------------------------------------------------------------
//鞋子尺寸推薦  r_type =12
	//+-5公分

	$r_type = 12;
	$r_score = 6;
	$what = "c_number";
	delete_recommend($r_type,$m_number);
	
	//會員的 身高 體重 三圍
	$s_sql = "SELECT shoes_size,shoes_size2 from members where m_number = $m_number";
	try_shoes_recommend($s_sql,$r_type,$r_score,$m_number,$what);
	
	
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
WHERE view.m_number =$m_number and commodity.m_number !=$m_number
GROUP BY commodity.m_number
ORDER BY 2 DESC , view.v_time DESC 
LIMIT $limit";
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
WHERE view.m_number = $m_number and commodity.m_number !=$m_number
GROUP BY commodity.b_number
ORDER BY 2 DESC , view.v_time DESC 
LIMIT $limit";
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
WHERE view.m_number = $m_number and commodity.m_number !=$m_number
GROUP BY commodity.location
ORDER BY 2 DESC , view.v_time DESC 
LIMIT $limit";
	
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
		$c_sql = "select c_number from commodity where b_number = $b_number and commodity.m_number !=$m_number and orsell=0 and orend=0";
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
	$s_sql = "select colors_number from p_color where m_number = $m_number ";
	$s_query = mysql_query($s_sql);
	while($s_row = mysql_fetch_array($s_query))
	{
		$colors_number = $s_row['colors_number']; //顏色編號
		$c_sql = "select c_number from commodity where colors_number = $colors_number and commodity.m_number !=$m_number  and orsell=0 and orend=0";
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
	$c_sql = "select c_number from commodity where location = '$location' and commodity.m_number !=$m_number";
	insert_recommend($c_sql,$r_type,$r_score,$m_number);
	
//------------------------------|||||||||----------------------------------
	header("Location:display_recommend.php");
?>
</body>
</html>