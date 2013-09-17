<?PHP ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>存入發問問題</title>
</head>
<?PHP
include("loginConfirm.php");
include("server.php"); //連結資料庫
include("addtime.php"); //抓現在時間
include("resize.php"); //縮圖
include("commodityPath.php"); //上傳檔案
$m_number = $_SESSION['m_number'];
$i_time = $addtime;
if($_POST['captcha'] == "")
{
	?> <script> 
			window.alert("請輸入驗證碼"); window.history.back(); 
	</script> <?PHP
	die(); 
}
if($_SESSION['test'] != $_POST['captcha'])
{
	?> <script> 
			window.alert("驗證碼輸入錯誤"); window.history.back(); 
	</script> <?PHP 
	die();
}
if(!empty($_FILES["i_picture"]["name"]))//i_picture有值上傳
{
	$file = explode (".",$_FILES['i_picture']['name']);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = date("ymdhis").".".$extension;

	$tmpfile=$_FILES["i_picture"]["tmp_name"];//server端站存檔名
 $file2=mb_convert_encoding($_FILES["i_picture"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
	if (($_FILES["i_picture"]["type"] == "image/gif") || ($_FILES["i_picture"]["type"] == "image/jpeg")||($_FILES["i_picture"]["type"] == "image/jpg")||($_FILES["i_picture"]["tmp_name"]==""))//限定檔案gif jpg
	{
		if (move_uploaded_file($tmpfile,$questionPathWeb.$name))//上傳檔案
		{
			$src = $questionPathWeb.$name;
			$dest = $src;
			$destW = 500;
			$destH = 450;
			imagesResize($src,$dest,$destW,$destH);
			$i_picture = $name;
			
		}//上傳檔案if
		else
		{
			echo "上傳檔案失敗";
				switch ($_FILES["c_movie"]["error"])
					{
				case 1:
				?><script> window.alert("圖片超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?PHP
				break;
				case 2:
				?><script> window.alert ("圖片大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?PHP
				break;
				case 3:
				?><script> window.alert ("圖片上傳不完整"); window.history.back(); </script><?PHP
				break;
				case 6:
				?><script> window.alert('圖片暫存資料夾不存在'); window.history.back(); </script> <?PHP
				break;
				case 7:
				?><script> window.alert ("圖片上傳檔案無法寫入"); window.history.back(); 
				</script><?PHP
				case 8:
				?><script> window.alert ("圖片上傳停止"); window.history.back(); </script><?PHP
				break;
					}	

		}
	  }//限定檔案if
 else//限定檔案
  {
	?><script> window.alert ("請上傳正確的購買憑證檔案"); window.history.back(); </script><?PHP
  }
}
$sql_query = "INSERT into interactive (i_title
,i_time,i_content,i_picture,m_number)
			VALUES (
			'".$_POST['i_title']."',
			'$i_time',
			'".$_POST['i_content']."',
			'$i_picture',
			'$m_number')";
mysql_query($sql_query);

?>
        	<script>
				location.href = 'question.php';
			</script>


<body>
</body>
</html>