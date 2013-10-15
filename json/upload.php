<?php
	include("../resize.php");
	include("../commodityPath.php");
	
	if(!empty($_FILES["pop"]["name"])){//   如果憑證有值上傳 score + 5
	// 取得完整路徑與上傳的檔名
		$file = basename($_FILES['pop']['name']);
		$file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
		$extension = $file[count($file)-1];
		$name = date("ymdhis").".".$extension;
		$tmpfile=$_FILES["pop"]["tmp_name"];//server端站存檔名
	// 將上傳的檔案移動到我們設定的路徑
				if (move_uploaded_file($tmpfile, "../".$popPathWed.$name)) {
				$src = "../".$popPathWed.$name;
				$dest = $src;
				$destW = 400;
				$destH = 400;
				imagesResize($src,$dest,$destW,$destH);
				$src = "../".$popPathWed.$name;
				$dest = "../".$popPathPhone.$name;
				$destW = 260;
				$destH = 250;
				imagesResize($src,$dest,$destW,$destH);
				echo "YES";
			}else{	
				echo "NO";
			}
	}
?>
