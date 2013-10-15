<?php //圖片影片上傳Json
	include("../commodityPath.php");
	include("../resize.php");
	if(!empty($_FILES["pop"]["name"])){//   如果憑證有值上傳 score + 5
		$file = explode (".",basename($_FILES['pop']['name']));//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["pop"]["tmp_name"];//server端站存檔名
		if(($_FILES["pop"]["type"] == "image/gif") || ($_FILES["pop"]["type"] == "image/jpeg")||($_FILES["pop"]["type"] == "image/jpg")||($_FILES["pop"]["tmp_name"]=="")){//限定檔案gif jpg
			if (move_uploaded_file($tmpfile,"../".$popPathWeb.$name)){//上傳檔案

				echo "YES";
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
				echo json_encode($json);
				die();
			}//上傳檔案else
		}//限定檔案if
		else{//限定檔案
			$json['error'] = "POP檔案格式錯誤2";
			echo json_encode($json);
			die();
		}
	}
?>