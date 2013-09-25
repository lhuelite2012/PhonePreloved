<?
	include("../resize.php");
	include("../commodityPath.php");
 	$json = array();
	
	//購買憑證上傳
	$m_number_ = $_REQUEST['m_number']."_";
 	if(($_FILES["pop"]["type"] != "image/png") and ($_FILES["pop"]["type"] != "image/gif") and ($_FILES["pop"]["type"] != "image/jpeg")){
   		$json['yy'] = "檔案格式錯誤";
		echo json_encode($json);
		die();
 	}
 	$tmpfile=$_FILES["pop"]["tmp_name"];
	$file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = $m_number_.date("ymdhis").".".$extension;
	$front = "../";
 	if(move_uploaded_file($tmpfile,$front.$popPathWeb.$name)){
		$src = $front.$popPathWeb.$name;
		$dest = $src;
		$destW = 400;
		$destH = 400;
		imagesResize($src,$dest,$destW,$destH);
		$pop = $name;
		  
		$src = $front.$popPathWeb.$name;
		$dest = $front.$popPathPhone.$name;
		$destW = 260;
		$destH = 250;
		imagesResize($src,$dest,$destW,$destH);
	   
		$score = $score + 5 ;	
		
		$json['yy'] = "上傳成功";
		echo json_encode($json);
 	}
 	else{
    	$json['yy'] = "上傳失敗";
 	} 
?>