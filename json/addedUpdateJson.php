<?php
	include("../resize.php");
	include("../commodityPath.php");
 	$json = array();
	$m_number_ = $_REQUEST['m_number']."_";
	$front = "../";
	

	//主要圖片上傳
	
 	$tmpfile=$_FILES["c_mp"]["tmp_name"];
	$file = explode (".",$_FILES['c_mp']['name']);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = $m_number_.date("ymdhis").".".$extension;
	if(($extension != "png") and ($extension != "gif") and ($extension != "jpeg") and ($extension != "jpg")){
		$json['yy'] = "c_mp檔案格式錯誤";
		echo json_encode($json);
		die();
 	}
 	if(move_uploaded_file($tmpfile,$front.$displayPathWeb.$name)){
		$src = $front.$displayPathWeb.$name;
		$dest = $src;
		$destW = 400;
		$destH = 400;
		imagesResize($src,$dest,$destW,$destH);
		$c_mp = $name;
		  
		$src = $front.$displayPathWeb.$name;
		$dest = $front.$displayPathPhone.$name;
		$destW = 240;
	    $destH = 155;
		imagesResize($src,$dest,$destW,$destH);
	   
		$score = $score + 5 ;	
		
		$json['yy'][] = "主要圖片上傳成功";
 	}
 	else{
    	$json['yy'] = "主要圖片上傳失敗";
		echo json_encode($json);
		die();
 	} 
	
	
	//購買憑證上傳
 	
 	$tmpfile=$_FILES["pop"]["tmp_name"];
	$file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = $m_number_.date("ymdhis").".".$extension;
	if($_FILES['pop']['name'] !=""){
		if(($extension != "png") and ($extension != "gif") and ($extension != "jpeg") and ($extension != "jpg")){
				$json['yy'] = "pop檔案格式錯誤";
				echo json_encode($json);
				die();
			}
		if(move_uploaded_file($tmpfile,$front.$popPathWeb.$name)){
			$src = $front.$popPathWeb.$name;
			$dest = $src;
			$destW = 400;
			$destH = 400;
			imagesResize($src,$dest,$destW,$destH);
			$pop = $name;
			  
			$src = $front.$popPathWeb.$name;
			$dest = $front.$popPathPhone.$name;
			$destW = 200;
			$destH = 200;
			imagesResize($src,$dest,$destW,$destH);
		   
			$score = $score + 5 ;	
			
			$json['yy'][] = "POP上傳成功";
		}
		else{
			$json['yy'] = "POP上傳失敗";
			echo json_encode($json);
			die();
		} 
	}
	
	//商品圖片上傳
	$c_picture = array();
	for($a=1 ; $a <=7 ; $a++){
		$tmpfile=$_FILES["c_picture".$a]["tmp_name"];
		$file = explode (".",$_FILES["c_picture".$a]['name']);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = $m_number_.$a."_".date("ymdhis").".".$extension;
		
		if(($extension != "png") and ($extension != "gif") and ($extension != "jpeg") and ($extension != "jpg")){
				$json['yy'] = "商品圖片檔案格式錯誤";
				echo json_encode($json);
				die();
 		}
		if(move_uploaded_file($tmpfile,$front.$picturePathWeb.$name)){
			$src = $front.$picturePathWeb.$name;
			$dest = $src;
			$destW = 400;
			$destH = 400;
			imagesResize($src,$dest,$destW,$destH);
			$c_picture[] = $name;
			  
			$src = $front.$picturePathWeb.$name;
			$dest = $front.$picturePathPhone.$name;
			$destW = 260;
			$destH = 250;
			imagesResize($src,$dest,$destW,$destH);
			
			
			$json['yy'][] = $a."商品圖片上傳成功";
			$picTotal =+ 1;
		}
	}
	if($picTotal<1){
		$json['yy'] = "至少上傳一個";
 		echo json_encode($json);
		die();
	}
/*
	//影片上傳
	$name = $_FILES['c_movie']['name'];  //獲取客戶端機器原文件的名稱 
	$type = strstr($name,".");  //獲取從"."到最後的字符 
 	
 	$tmpfile=c;
	$file = explode (".",$_FILES['c_movie']['name']);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = $m_number_.date("ymdhis").".".$extension;
 	if(move_uploaded_file($tmpfile,$front.$moviePathWeb.$name)){
		if($type != ".mp4" and $type != ".wmv" and $type != ".mp3"){
			$json['yy'] = "影片檔案格式錯誤";
			echo json_encode($json);
			die();
		}
		$json['yy'][] = "影片上傳成功";
		echo json_encode($json);
 	}
 	else{
    	$json['yy'] = "影片上傳失敗".$_FILES['c_movie']['error'];
		echo json_encode($json);
		die();
 	} 
*/
	//影片上傳 new
	$tmpfile=$_FILES["c_movie"]["tmp_name"];
	$file = explode (".",$_FILES['c_movie']['name']);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = $m_number_.date("ymdhis").".".$extension;
	if($_FILES['c_movie']['name'] !=""){
		if(($extension != "mp4") and ($extension != "wmv") and ($extension != "mov") and ($extension != "mkv")){
				$json['yy'] = "影片檔案格式錯誤";
				echo json_encode($json);
				die();
		}
		if(move_uploaded_file($tmpfile,$front.$moviePathWeb.$name)){
			$json['yy'][] = "影片上傳成功";
			$c_movie = $name;
		}
		else{
			$json['yy'] = "影片上傳失敗";
			echo json_encode($json);
			die();
		} 
	}
?>