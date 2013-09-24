<?php
	include("../server.php");
	include("../addtime.php");
	include("../dateadd.inc");
	include("../commodityPath.php");
	include("../resize.php");
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


$json = array();

	if(!empty($_FILES["c_movie"]["name"])){//  如果有值上傳影片 score + 5
		$file = explode (".",$_FILES['c_movie']['name']);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["c_movie"]["tmp_name"];//server端站存檔名
		$file2=mb_convert_encoding($_FILES["c_movie"]["name"],"big5","utf8");
		if(move_uploaded_file($tmpfile,$moviePathWeb.$name)){//上傳檔案
			$c_movie = $name;
			$score = $score + 5 ;
		}
		else{
			switch ($_FILES["c_movie"]["error"]){
				case 1:$json['error'] = "影片大小超過php.ini內設定upload_max_filesize";
				break;
				case 2:$json['error'] = "失敗原因:影片大小超過表單設定MAX_FILE_SIZE";
				break;
				case 3:$json['error'] = "失敗原因:影片上傳不完整";
				break;
				case 4:$json['error'] = "失敗原因:影片沒有檔案上傳";
				break;
				case 6:$json['error'] = "失敗原因:影片暫存資料夾不存在";
				break;
				case 7:$json['error'] = "失敗原因:影片上傳檔案無法寫入"; 
				break;
				case 8:$json['error'] = "失敗原因:影片上傳停止";
				break;
			}	
		}			  
	}
	if(!empty($_FILES["pop"]["name"])){//   如果憑證有值上傳 score + 5
		$file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["pop"]["tmp_name"];//server端站存檔名
		$file2=mb_convert_encoding($_FILES["pop"]["name"],"big5","utf8");
		if(($_FILES["pop"]["type"] == "image/gif") || ($_FILES["pop"]["type"] == "image/jpeg")||($_FILES["pop"]["type"] == "image/jpg")||($_FILES["pop"]["tmp_name"]=="")){//限定檔案gif jpg
			if (move_uploaded_file($tmpfile,$popPathWeb.$name)){//上傳檔案
				$src = $popPathWeb.$name;
				$dest = $src;
				$destW = 400;
				$destH = 400;
				imagesResize($src,$dest,$destW,$destH);
				$pop = $name;
		  
				$src = $popPathWeb.$name;
				$dest = $popPathPhone.$name;
				$destW = 260;
				$destH = 250;
				imagesResize($src,$dest,$destW,$destH);
	   
				$score = $score + 5 ;
			}//上傳檔案if
			else{//上傳檔案
				switch ($_FILES["pop"]["error"]){
					case 1:$json['error'] = "失敗原因:購買憑證大小超過php.ini內設定upload_max_filesize";
					break;
					case 2:$json['error'] = "失敗原因:購買憑證大小超過表單設定MAX_FILE_SIZE";
					break;
					case 3:$json['error'] = "購買憑證上傳不完整";
					break;
					case 4:$json['error'] = "請上傳購買憑證";
					break;
					case 6:$json['error'] = "失敗原因:購買憑證暫存資料夾不存在";
					break;
					case 7:$json['error'] = "失敗原因:購買憑證上傳檔案無法寫入";
					break; 
					case 8:$json['error'] = "失敗原因:購買憑證上傳停止";
					break;
				}//switch
			}//上傳檔案else
		}//限定檔案if
		else{//限定檔案
			$json['error'] = "POP檔案格式錯誤2";
			echo json_encode($json);
			die();
		}
	}
	if(!empty($_FILES['c_mp']['name'])){ //  如果有值上傳主要圖片
		 $file = explode (".",$_FILES['c_mp']['name']);
		 $extension = $file[count($file)-1];//找出檔案的副檔名
		 $name = date("ymdhis").".".$extension;
		 $tmpfile=$_FILES["c_mp"]["tmp_name"];//server端站存檔名
		 $file2=mb_convert_encoding($_FILES["c_mp"]["name"],"big5","utf8");
		 if (($_FILES["c_mp"]["type"] == "image/gif") || ($_FILES["c_mp"]["type"] == "image/jpeg")||($_FILES["c_mp"]["type"] == "image/jpg")||($_FILES["c_mp"]["tmp_name"]=="")){//限定檔案gif jpg
			if (move_uploaded_file($tmpfile,$picturePathWeb.$name)){//上傳檔案
				$src = $picturePathWeb.$name;
				$dest = $src;
				$destW = 400;
				$destH = 400;
				imagesResize($src,$dest,$destW,$destH);
				$c_mp = $name;
		   
				$src = $picturePathWeb.$name;
				$dest = $displayPathWeb.$name;
				$destW = 240;
				$destH = 155;
				imagesResize($src,$dest,$destW,$destH);
		   
				$src = $picturePathWeb.$name;
				$dest = $displayPathPhone.$name;
				$destW = 260;
				$destH = 250;
				imagesResize($src,$dest,$destW,$destH);
			}else{//上傳檔案
				switch ($_FILES["c_mp"]["error"]){
					case 1:$json['error'] = "主要圖片大小超過php.ini內設定upload_max_filesize";
					break;
					case 2:$json['error'] = "主要圖片大小超過表單設定MAX_FILE_SIZE";
					break;
					case 3:$json['error'] = "主要上傳不完整";
					break;
					case 4:$json['error'] = "主要圖片沒有檔案上傳";
					break;
					case 6:$json['error'] = "主要圖片暫存資料夾不存在";
					break;
					case 7:$json['error'] = "主要圖片上傳檔案無法寫入";
					break;
					case 8:$json['error'] = "主要圖片上傳停止";
					break;
				}//switch
			}//上傳檔案else
		 }//限定檔案if
	}
	else{//限定檔案
		$json['error'] = "主要圖片檔案格式錯誤3";
		echo json_encode($json);
		die();
	}
	

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
	
	$json['yy'] = 1;
}else{
	$json['yy'] = 0;
}
echo json_encode($json);

?>