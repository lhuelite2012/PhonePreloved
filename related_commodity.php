<?php session_start() ;
include("commodityPath.php");
include("server.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/jscript" src="imageScaling.js"></script>
<title>相關商品</title>
<style type="text/css">
#apDiv76 {
	position:absolute;
	width:125px;
	z-index:1;
	background-color:#fff;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 5px;
	border: 2px solid #A4A4A4;
	top: 200px;
	left: 1000px;

}/*推薦 相關商品欄*/
#apDiv77 {
	text-align:center;
	position:relative;
	float:left;
	width:120px;
	height:120px;
	z-index:1;
	margin: 10px 0px;
	
}
</style>
</head>



<body>


<div id="apDiv76"><font color="#A4A4A4">

  <center>相關商品</center>

<?php
	
	delete_related($c_number);
	$gender = "and c_gender = '".$c_rows['c_gender']."'";  //相同性質 男 女
		
	//相似品牌
	$related_type = 1;
	$related_score = 8;
	$what = "b_number =";
	$is = $c_rows['b_number'];
	related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender);
	
	//相似種類
	$related_type = 2;
	$related_score = 5;
	$what = "s_number =";
	$is = $c_rows['s_number'];
	related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender);
	
	//相似顏色
	$related_type = 3;
	$related_score = 3;
	$what = "colors_number =";
	$is = $c_rows['colors_number'];
	related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender);
	
	//底價價格間距
	$related_type = 4;
	$related_score = 2;
	$what = "c_price ";
	$caps = $c_rows['c_price']*1.5;
	$lower = $c_rows['c_price']/2;
	$is = "between $lower and $caps";
	related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender);
	
	//出價價格間距
	$related_type = 5;
	$related_score = 2;
	$what = "hi_bid_price ";
	$caps = $c_rows['hi_bid_price']*1.5;
	$lower = $c_rows['hi_bid_price']/2;
	$is = "between $lower and $caps";
	related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender);
	
	//相似地點
	$related_type = 6;
	$related_score = 1;
	$what = "location =";
	$is = "'".$c_rows['location']."'";
	related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender);
	
	
	function delete_related($c_number){
		$delete_related = "delete from related where c_number = $c_number";
		$delete_query = mysql_query($delete_related);
	}
	
	function related($related_type,$related_score,$what,$is,$m_number,$c_number,$gender){
		$related_sql="select c_number from commodity where $what $is and c_number !=$c_number $gender limit 50";  //只顯示50筆
		$related_result = mysql_query($related_sql);
		while($b_rows = mysql_fetch_row($related_result)){
			$insert_related_sql="insert into related (related_type,c_number,related_c_number,related_score) value ('$related_type',$c_number,".$b_rows[0].",$related_score);";
			$insert_query = mysql_query($insert_related_sql);
		}
	}
	
	//算出相似總分大於8的商品
	$total_score_sql = "SELECT related_c_number,sum(related_score) FROM `related` WHERE c_number = $c_number  group by related_c_number having sum(related_score) >= 8 order by 2 desc";
	$total_score_query = mysql_query($total_score_sql);
if(mysql_num_rows($total_score_query)>0){
	while($c_number_row = mysql_fetch_row($total_score_query)){
		$related_c_number = $c_number_row[0];
		$c_sql = "select * from commodity where c_number = $related_c_number";
		$c_result = mysql_query($c_sql);
		$list1 = mysql_fetch_array($c_result);
?>
	<a href="commodity.php?c_number=<?php echo $c_number_row[0];?>">
  	
    	<div id="apDiv77"><img src='<?php echo $displayPathWeb.$list1['c_mp'];?>' onload="javascript:DrawImage(this,115,100);"/>
        </div>
    </a>
<?php } 
}?>
</div>
	

</body>
</html>