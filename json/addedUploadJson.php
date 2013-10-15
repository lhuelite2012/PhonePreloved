<?php //圖片影片上傳Json
	include("../commodityPath.php");
	include("../resize.php");
	/*
	//  如果有值上傳影片 score + 5
	if(!empty($_FILES["c_movie"]["name"])){
		$file = explode (".",$_FILES['c_movie']['name']);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["c_movie"]["tmp_name"];//server端站存檔名
		$file2=mb_convert_encoding($_FILES["c_movie"]["name"],"big5","utf8");
		if(move_uploaded_file($tmpfile,"../".$moviePathWeb.$name)){//上傳檔案
			echo $c_movie = $name;
			$score = $score + 5 ;
			$json['yy'] = "成功上傳影片";
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
			echo json_encode($json);
			die();
		}			  
	}
	*/
	
	
	if(!empty($_FILES["pop"]["name"])){//   如果憑證有值上傳 score + 5
		$file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["pop"]["tmp_name"];//server端站存檔名
		if($_FILES["pop"]["type"] == "image/jpeg"){//限定檔案gif jpg
			if (move_uploaded_file($tmpfile,"../".$popPathWeb.$name)){//上傳檔案
				$src = "../".$popPathWeb.$name;
				$dest = $src;
				$destW = 400;
				$destH = 400;
				imagesResize($src,$dest,$destW,$destH);
				$pop = $name;
		  
				$src = "../".$popPathWeb.$name;
				$dest = "../".$popPathPhone.$name;
				$destW = 260;
				$destH = 250;
				imagesResize($src,$dest,$destW,$destH);
	   
				$score = $score + 5 ;
			}else{//上傳檔案
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
				echo json_encode($json);
				die();
			}//上傳檔案else
		}else{//限定檔案
			$json['error'] = "POP檔案格式錯誤2";
			echo json_encode($json);
			die();
		}
	}
	/*
	if(!empty($_FILES['c_mp']['name'])){ //  如果有值上傳主要圖片
		 $file = explode (".",$_FILES['c_mp']['name']);
		 $extension = $file[count($file)-1];//找出檔案的副檔名
		 $name = date("ymdhis").".".$extension;
		 $tmpfile=$_FILES["c_mp"]["tmp_name"];//server端站存檔名
		 $file2=mb_convert_encoding($_FILES["c_mp"]["name"],"big5","utf8");
		 if (($_FILES["c_mp"]["type"] == "image/gif") || ($_FILES["c_mp"]["type"] == "image/jpeg")||($_FILES["c_mp"]["type"] == "image/jpg")||($_FILES["c_mp"]["tmp_name"]=="")){//限定檔案gif jpg
			if (move_uploaded_file($tmpfile,"../".$picturePathWeb.$name)){//上傳檔案
				$src = "../".$picturePathWeb.$name;
				$dest = $src;
				$destW = 400;
				$destH = 400;
				imagesResize($src,$dest,$destW,$destH);
				$c_mp = $name;
		   
				$src = "../".$picturePathWeb.$name;
				$dest = "../".$displayPathWeb.$name;
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
	
if(!empty($_FILES["c_picture"]["name"])){
	$file = explode (".",$_FILES['c_picture']['name'][$j]);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = date("ymdhis").".".$extension;
	$i = count($_FILES["c_picture"]["name"]);
	for($j=0;$j<$i;$j++){
		$file = explode (".",$_FILES['c_picture']['name'][$j]);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["c_picture"]["tmp_name"][$j];//server端站存檔名
		$file2=mb_convert_encoding($_FILES["c_picture"]["name"][$j],"big5","utf8");
		if (($_FILES["c_picture"]["type"][$j] == "image/gif") || ($_FILES["c_picture"]["type"][$j] == "image/jpeg")||($_FILES["c_picture"]["type"][$j] == "image/jpg")||($_FILES["c_picture"]["tmp_name"][$j] == "")){//限定檔案gif jpg
	  		if(move_uploaded_file($tmpfile,$picturePathWeb."c_picture_".$j."_".$name)){//上傳檔案
				$src = "../".$picturePathWeb."c_picture_".$j."_".$name;
				$dest = $src;
				$destW = 400;
				$destH = 400;
				imagesResize($src,$dest,$destW,$destH);
				$c_picture = $picturePathPhone."c_picture_".$j."_".$name;
			   
				$src = "../".$picturePathWeb."c_picture_".$j."_".$name;
				$dest = "../".$picturePathPhone."Phone_".$j."_".$name;
				$destW = 260;
				$destH = 250;
				imagesResize($src,$dest,$destW,$destH);
			
				$sql_query2 = "INSERT into c_picture(c_number,c_picture) VALUES ('$c_number',''$c_pictur')";
				mysql_query($sql_query2);				
			}//上傳檔案if
		}
		else{//限定檔案
			$json['error'] = "主要圖片檔案格式錯誤4";
			echo json_encode($json);
			die();
		}
	}//for迴圈
	
}*/
?>