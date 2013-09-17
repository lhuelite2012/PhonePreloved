<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns  =  "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
	include("server.php");
	include("addtime.php");
	$uptime = $addtime;   //上架時間
	
	$c_name = $_GET["c_name"];   //商品名稱
	$c_price = $_GET["c_price"];   //價格
	$c_gender = $_GET["c_gender"];   //商品性質
	$location = $_GET["location"];   //所在地
	$oan = $_GET["oan"];   //商品新舊
	$downtime = $_GET["downtime"];   //下架時間
	$c_date = $_GET["c_date"];   //購買日期
	$c_address = $_GET["c_address"];   //購買地址
	$c_height = $_GET["c_height"];   //試穿身高
	$c_shoulder = $_GET["c_shoulder"];   //試穿肩寬
	$c_bust = $_GET["c_bust"];   //試穿胸圍
	$c_waistline = $_GET["c_waistline"];   //試穿腰圍
	$c_hips = $_GET["c_hips"];   //試穿臀圍
	$material = $_GET["material"];   //商品材質
	$m_number = $_GET["m_number"];   //會員編號
	$b_number = $_GET["b_number"];   //品牌編號
	$s_number = $_GET["s_number"];   //分類編號
	$s_size = $_GET["s_size"];   //尺寸格式
	$size = $_GET["size"];   //尺寸
	$UDHeight = $_GET["UDHeight"];   //上下高度
	$LRLength = $_GET["LRLength"];   //左右寬度
	$bWidth = $_GET["bWidth"];   //底部寬度
	$MWidth = $_GET["MWidth"];   //提把寬度
	$SLongest = $_GET["SLongest"];   //背帶最長
	$c_description = $_GET["c_description"];   //商品描述
	$lowest_record = $_GET["lowest_record"];   //評價限制
	
	
	
	
	
	
	
	
	
	$displaydir="./commodity/display/";  //瀏覽圖片路徑
	$moviedir = "./movie/";	//影片路徑
	$commoditydir="./commodity/"; //商品圖片路徑
	$popdir = "./php/"; //購買憑證路徑
	
	
	$c_mp_file = $_FILES["c_mp"]["tmp_name"];   //主要圖片
	$c_mp_file2 = $_FILES["c_mp"]["name"];
	if(move_uploaded_file($c_mp_file,$displaydir.$c_mp_file2))
   {
    echo "yes";
	$c_mp = $displaydir.$c_mp_file2;    //主要圖片
   }
  else
   {
    echo "no";
	exit();
   }
	
	$c_movie_file = $_FILES["c_movie"]["tmp_name"];   //商品影片
	$c_movie_file2 = $_FILES["c_movie"]["name"];
	if(move_uploaded_file($c_movie_file,$moviedir.$c_movie_file2))
   {
    echo "yes";
	$c_movie = $moviedir.$c_movie_file2;  //商品影片
   }
  else
   {
    echo "no";
	exit();
   }
   
	/*
	$c_rp_file = $_FILES["c_rp"]["tmp_name"];   //旋轉圖片
	$c_rp_file2 = $_FILES["c_rp"]["name"];
	if(move_uploaded_file($c_rp_file,$uploaddir.$c_rp_file2))
   {
    echo "yes"; 	$c_rp=$_GET["c_rp"];   //旋轉圖片
   }
  else
   {
    echo "no";
   }	
   */
	
	$pop_file = $_FILES["pop"]["tmp_name"];   //購買憑證
	$pop_file2 = $_FILES["pop"]["name"];
	if(move_uploaded_file($pop_file,$popdir.$pop_file2))
   {
    echo "yes";
	$pop = $popdir.$pop_file2;  //購買憑證
   }
  else
   {
    echo "no";
	exit();
   }	
	$c_number=$_GET["c_number"];   //商品編號
	$c_name=$_GET["c_name"];   //商品名稱
	$c_price=$_GET["c_price"];   //價格
	$c_gender=$_GET["c_gender"];   //商品性質
	$location=$_GET["location"];   //所在地
	$oan=$_GET["oan"];   //商品新舊
	$uptime=$_GET["uptime"];   //上架時間
	$downtime=$_GET["downtime"];   //下架時間	
	$c_date=$_GET["c_date"];   //購買日期
	$c_address=$_GET["c_address"];   //購買地址
	$c_height=$_GET["c_height"];   //試穿身高
	$c_shoulder=$_GET["c_shoulder"];   //試穿肩寬
	$c_bust=$_GET["c_bust"];   //試穿胸圍
	$c_waistline=$_GET["c_waistline"];   //試穿腰圍
	$c_hips=$_GET["c_hips"];   //試穿臀圍
	$material=$_GET["material"];   //商品材質	
	$orbidder=$_GET["orbidder"];   //得標者
	$orsell=$_GET["orsell"];   //是否交易完成	
	$orend=$_GET["orend"];   //是否截止
	$m_number=$_GET["m_number"];   //會員編號
	$b_number=$_GET["b_number"];   //品牌編號
	$s_number=$_GET["s_number"];   //分類編號
	$s_size=$_GET["s_size"];   //尺寸格式
	$size=$_GET["size"];   //尺寸
	$UDHeight=$_GET["UDHeight"];   //上下高度
	$LRLength=$_GET["LRLength"];   //左右寬度
	$bWidth=$_GET["bWidth"];   //底部寬度
	$MWidth=$_GET["MWidth"];   //提把寬度
	$SLongest=$_GET["SLongest"];   //背帶最長
	$c_description=$_GET["c_description"];   //商品描述

	


?>
</body>
</html>