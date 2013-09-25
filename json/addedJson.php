<?php
	include("../server.php");
	include("../addtime.php");
	include("../dateadd.inc");
	include("../commodityPath.php");

	$c_name=$_REQUEST["c_name"];	//商品名稱varchar(50)
	$c_price=$_REQUEST["c_price"];	//價格int(11)
	$c_gender=$_REQUEST["c_gender"];	//商品性質varchar(3)
	$location=$_REQUEST["location"];	//所在地varchar(20)
	$oan=$_REQUEST["oan"];	//商品新舊varchar(20)
	$uptime= $addtime;	//****************************************上架時間datetime
	
	$downtime=$_REQUEST["downtime"];	
	$temptime = time($addtime);				
	$temptime = DateAdd("d" ,$downtime,$temptime);
	$downtime = strftime( "%Y-%m-%d %H:%M:%S",$temptime); //下架日期datetime
	
	$c_mp=$_REQUEST["c_mp"];	//主要圖片varchar(50)
	$c_movie=$_REQUEST["c_movie"];	//商品影片varchar(50)
	$pop=$_REQUEST["pop"];	//購買憑證varchar(50)
	$c_rp=$_REQUEST["c_rp"];	//旋轉圖片varchar(50)
	$c_date=$_REQUEST["c_date"];	//購買日期datetime
	$c_address=$_REQUEST["c_address"];	//購買地址varchar(50)
	$c_height=$_REQUEST["c_height"];	//商品長度int(11)
	$c_shoulder=$_REQUEST["c_shoulder"];	//商品寬度int(11)
	$c_bust=$_REQUEST["c_bust"];	//商品胸寬int(11)
	$c_waistline=$_REQUEST["c_waistline"];	//商品腰寬int(11)
	$c_hips=$_REQUEST["c_hips"];	//商品臀寬int(11)
	$c_try_height=$_REQUEST["c_try_height"];	//試穿者身高int(11)
	$c_try_weight=$_REQUEST["c_try_weight"];	//試穿者體重int(11)
	$c_try_shoulder=$_REQUEST["c_try_shoulder"];	//試穿者肩寬int(11)
	$c_try_bust=$_REQUEST["c_try_bust"];	//試穿者胸圍int(11)
	$c_try_waistline=$_REQUEST["c_try_waistline"];	//試穿者腰圍int(11)
	$c_try_hips=$_REQUEST["c_try_hips"];	//試穿者臀圍int(11)
	$c_try_foot=$_REQUEST["c_try_foot"];	//試穿者腳尺寸varchar(10)
	$c_try_foot2=$_REQUEST["c_try_foot2"];	//試穿者腳尺寸2int(11)
	$material=$_REQUEST["material"];	//商品材質varchar(50)
	$m_number=$_REQUEST["m_number"];	//會員編號int(11)
	$b_number=$_REQUEST["b_number"];	//品牌編號int(11)
	$s_number=$_REQUEST["s_number"];	//分類編號int(11)
	$colors_number=$_REQUEST["colors_number"];	//色系編號int(11)
	$s_size=$_REQUEST["s_size"];	//尺寸格式varchar(10)
	$size=$_REQUEST["size"];	//尺寸varchar(10)
	$UDHeight=$_REQUEST["UDHeight"];	//上下高度int(11)
	$LRLength=$_REQUEST["LRLength"];	//左右寬度int(11)
	$bWidth=$_REQUEST["bWidth"];	//底部寬度int(11)
	$MWidth=$_REQUEST["MWidth"];	//提把寬度int(11)
	$SLongest=$_REQUEST["SLongest"];	//背帶最長int(11)
	$c_description=$_REQUEST["c_description"];	//商品描述varchar(100)
	$lowest_record=$_REQUEST["lowest_record"];	//評價限制int(11)
	
	
	
	
	
	$insert_sql = "insert into commodity (c_name,
hi_bid_price,
c_price,
c_gender,
location,
oan,
uptime,
downtime,
c_mp,
c_movie,
c_rp,
c_date,
c_address,
pop,
c_height,
c_shoulder,
c_bust,
c_waistline,
c_hips,
c_try_height,
c_try_weight,
c_try_shoulder,
c_try_bust,
c_try_waistline,
c_try_hips,
c_try_foot,
c_try_foot2,
material,
m_number,
b_number,
s_number,
colors_number,
s_size,
size,
UDHeight,
LRLength,
bWidth,
MWidth,
SLongest,
c_description,
lowest_record
) value ('$c_name',
'$hi_bid_price',
'$c_price',
'$c_gender',
'$location',
'$oan',
'$uptime',
'$downtime',
'$c_mp',
'$c_movie',
'$c_rp',
'$c_date',
'$c_address',
'$pop',
'$c_height',
'$c_shoulder',
'$c_bust',
'$c_waistline',
'$c_hips',
'$c_try_height',
'$c_try_weight',
'$c_try_shoulder',
'$c_try_bust',
'$c_try_waistline',
'$c_try_hips',
'$c_try_foot',
'$c_try_foot2',
'$material',
'$m_number',
'$b_number',
'$s_number',
'$colors_number',
'$s_size',
'$size',
'$UDHeight',
'$LRLength',
'$bWidth',
'$MWidth',
'$SLongest',
'$c_description',
'$lowest_record'
)";




if($insert_result = mysql_query($insert_sql)){
	$sql = "select c_number from commodity where c_name = '$c_name' and c_price = '$c_price' and c_gender = '$c_gender' and uptime = '$uptime'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	
	$c_number = $row[0];
	//交易方式
	$c_mode = array();
	$c_mode[] = $_REQUEST["c_mode1"];
	$c_mode[] = $_REQUEST["c_mode2"];
	$c_mode[] = $_REQUEST["c_mode3"];
	$c_mode[] = $_REQUEST["c_mode4"];
	for($a=0 ; $a < count($c_mode);$a++){
		if(isset($c_mode[$a]) and $c_mode[$a] != ""){
			$sql = "insert into c_mode (c_number,c_mode) value ('$c_number','$c_mode[$a]')";
			mysql_query($sql);
		}
	}
	
	//付款方式	
	$c_payment = array();
	$c_payment[] = $_REQUEST["c_payment1"];
	$c_payment[] = $_REQUEST["c_payment2"];
	for($a=0 ; $a < count($c_payment);$a++){
		if(isset($c_payment[$a]) and $c_payment[$a] != ""){
			$sql = "insert into c_payment (c_number,c_payment) value ('$c_number','c_payment[$a]')";
			mysql_query($sql);
		}
	}
	include("upload5.php");
	//include("addedUploadJson.php");
	$json['yy'] = 1;
}else{
	$json['yy'] = 0;
}
echo json_encode($json);

?>