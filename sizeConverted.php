<?php
	$sea = $_GET['sea'];
		$c_gender = $_GET['c_gender'];			//男女
		$s_fsort = $_GET['s_fsort'];			//父分類
		$s_number = $_GET['s_number'];			//分類編號
		$clothes_size = $_GET['clothes_size'];	//衣服尺寸
		$shoes_size2 = $_GET['shoes_size2'];  //鞋子尺寸(公分)
		$brand_start = $_GET['brand_start']; //品牌字首
		$price_mode = $_GET['price_mode'];  //價格篩選
		$price_range = $_GET['price_range']; //價格
		$location = $_GET['location'];		//地區
	//判斷是否有值
		
		$sea = HaveValue(stripslashes($sea),"c_name"); 	//男女
		$c_gender = HaveValue(stripslashes($c_gender),"c_gender"); 	//男女
		$s_fsort = HaveValue($s_fsort,"s_fsort");		//父分類
		$s_number = HaveValue($s_number,"s_number");	//分類編號
		$clothes_size = HaveValue($clothes_size,"size");	//衣服尺寸
		$shoes_size2 = HaveValue($shoes_size2,'size');  //鞋子尺寸(公分)
		$brand_start = HaveValue($brand_start,'b_name'); //品牌字首
		$price_range = HaveValue($price_range,$price_mode); //價格
		echo $location = HaveValue(stripslashes($location),'location');		//地區
		
	function HaveValue($vale,$str){
		if($vale !="") 
			if($str == "s_fsort")
				$vale = "and $str = '".$vale."' "; 
			else if($str == "b_name")
				$vale = "and b_name like '$vale%'";
			else if($str == "c_price" or $str =="hi_bid_price")
				$vale = "and $str $vale";
			else if($str == "location")
				$vale = "and $vale ";
			else if($str == "c_name"){
				$vale = "and c_name like '%$vale%' or b_name like '%$vale%' or aliases like '%$vale%' ";
			}
			else if($str == "size" and is_numeric($vale)){
				$JP22 = Array(5,4,3.5,36,22);
				//預設為日本
				$nu1 = $vale+0.5;
				$nu2 = $vale-0.5;
				//轉換成美國男
				$us1 = $JP22[0]+($vale-22)*2*0.5+0.5;
				$us2 = $JP22[0]+($vale-22)*2*0.5-0.5;
				//轉換成美國女
				$usS1 = $JP22[1]+($vale-22)*2*0.5+0.5;
				$usS2 = $JP22[1]+($vale-22)*2*0.5-0.5;
				//轉換成英國
				$uk1 = $JP22[2]+($vale-22)*2*0.5+0.5;
				$uk2 = $JP22[2]+($vale-22)*2*0.5-0.5;
				//轉換成法國
				$fr1 = $JP22[3]+($vale-22)*2*0.67+0.7;
				$fr2 = $JP22[3]+($vale-22)*2*0.67-0.7;
				
				$vale = "and size between '$nu2' and '$nu1' or  size between '$us2' and '$us1' or  size between '$usS2' and '$usS1'  or size between '$uk2' and '$uk1'  or size between '$fr2' and '$fr1'";
			}
			else
				$vale = "and commodity.$str = '".$vale."' "; 
		else 
			$vale = "";
		return $vale;
	}
?>