 <html><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>檔案上傳處理</title></head>
 <body>
 <?php
	include("resize.php");
	include("commodityPath.php");
	$file = "022.jpg";
  $uploaddir="./commodity/test/";
   		$src = $uploaddir.$file;
		$dest = $src;
		$destW = 400;
		$destH = 400;
		imagesResize($src,$dest,$destW,$destH);	
		
		$src = $uploaddir.$file;
		$dest = $displayPathWeb.$file;
		$destW = 240;
		$destH = 155;
		imagesResize($src,$dest,$destW,$destH);	
		
		$src = $uploaddir.$file;
		$dest = $displayPathPhone.$file;
		$destW = 240;
		$destH = 155;
		imagesResize($src,$dest,$destW,$destH);	
		
	
 ?>
 </body></html>

