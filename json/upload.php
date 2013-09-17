<?php
	// 圖片儲存路徑
	$dir = '';
	// 取得完整路徑與上傳的檔名
	$file = basename($_FILES['imageFilename']['name']);
	$uploadfile = $dir . $file;
	
	// 將上傳的檔案移動到我們設定的路徑
	if (move_uploaded_file($_FILES['imageFilename']['tmp_name'], $uploadfile)) {
        echo "YES";
	}else{	
		echo "NO";
	}
?>
