<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
	#sort{
	position: absolute;
	left: 520px;
	top: 238px;
	float: left;
	width: 500px;
	color:#03C;
	font-size:14px;
	}
	#timeSort{
		position:relative;
		float:left;
		width:90px;
	}
	#priceSort{
		position:relative;
		float:left;
		width:120px;
	}
	#bid_priceSort{
		position:relative;
		float:left;
		width:120px;
	}
</style>
</head>

<body>
<?php  
	//時間排序   timeSort
	$timeSort=1; 
	$timeSort2=2;
	$imgsize = "onload='javascript:DrawImage(this,15,15)';";
	if(isset($_GET['timeSort'])){
		if($_GET['timeSort']==$timeSort2){
			$timeSort = 1;
			$sort = " downtime";  //由小到大
			$up = "<img src='素材/箭頭上.png' $imgsize>";  //圖片
		}else{
			$timeSort = 2;
			$sort = " downtime desc"; //由大到小
			$up = "<img src='素材/箭頭下.png' $imgsize>"; 	 //圖片
		}
	}
	
	//起標價格排序   priceSort
	$priceSort=1; 
	$priceSort2=2;
	if(isset($_GET['priceSort'])){
		if($_GET['priceSort']==$priceSort2){
			$priceSort = 1;
			$sort = " c_price";
			$up = "<img src='素材/箭頭上.png' $imgsize>";  //圖片
		}else{
			$priceSort = 2;
			$sort = " c_price desc";
			$up = "<img src='素材/箭頭下.png' $imgsize>";  //圖片
		}
	}
	
	//出價價格排序   bid_priceSort
	$bid_priceSort=1; 
	$bid_priceSort2=2;
	if(isset($_GET['bid_priceSort'])){
		if($_GET['bid_priceSort']==$bid_priceSort2){
			$bid_priceSort = 1;
			$sort = " hi_bid_price";
			$up = "<img src='素材/箭頭上.png' $imgsize>";  //圖片
		}else{
			$bid_priceSort = 2;
			$sort = " hi_bid_price desc";
			$up = "<img src='素材/箭頭下.png' $imgsize>";  //圖片
		}
	}
	
	//瀏覽次數排序  viewSort
	/*$viewSort = 1;
	$viewSort2 = 2;
	if(isset($_GET['viewSort'])){
		if($_GET['viewSort']==$viewSort2){
			$viewSort = 1;
			$sort = " hi_bid_price";
			$up = "放圖片(由小到大)";  //圖片
		}else{
			$viewSort = 2;
			$sort = " hi_bid_price desc";
			$up = "放圖片(由大到小)";  //圖片
		}
	}*/
	
	
	
?>	
<div id="sort">
	<div id="timeSort">
    	<a href="?<?php 
		if(isset($_GET['s_fsort']))
			if(isset($_GET['s_number'])) 
				echo "s_fsort=".$_GET['s_fsort']."&s_number=".$_GET['s_number'];					
			else
				echo "s_fsort=".$_GET['s_fsort'];		
?>&timeSort=<?php echo $timeSort;?>">時間排序<?php if(isset($_GET['timeSort'])) echo $up;?></a>
    </div>
    <div id="priceSort">
    	<a href="?<?php
        if(isset($_GET['s_fsort']))
			if(isset($_GET['s_number'])) 
				echo "s_fsort=".$_GET['s_fsort']."&s_number=".$_GET['s_number'];					
			else
				echo "s_fsort=".$_GET['s_fsort'];		
?>&priceSort=<?php echo $priceSort;?>">起標價格排序<?php if(isset($_GET['priceSort'])) echo $up;?></a>
    </div>
    <div id="bid_priceSort">
    	<a href="?<?php
        if(isset($_GET['s_fsort']))
			if(isset($_GET['s_number'])) 
				echo "s_fsort=".$_GET['s_fsort']."&s_number=".$_GET['s_number'];					
			else
				echo "s_fsort=".$_GET['s_fsort'];		
?>&bid_priceSort=<?php echo $bid_priceSort;?>">出價價格排序<?php if(isset($_GET['bid_priceSort'])) echo $up;?></a>
    </div>
</div>    
</body>
</html>