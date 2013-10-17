<?PHP ob_start();?>
<?PHP session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP  
$m_number = $_SESSION['m_number']; 
$c_number = $_GET['c'];
?>
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved(alter_added0)</title>
</head>

<body>
<?PHP
//include("loginConfirm.php");//判斷是否會員登入
include("server.php");//連資料庫
include("resize.php");//上傳圖片縮圖
include("commodityPath.php");//上傳圖片路徑

$sql = "select * from commodity where c_number = '$c_number'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);//所有commodity商品資訊

$query1 = "select * from c_picture where c_number = 'c_number'";
$result3 = mysql_query($query1);
$pictures = mysql_fetch_array($result3);//商品圖片

if($_POST['c_name'] != $row["c_name"])
{
	$sql_query = "UPDATE commodity SET 
	c_name = '".$_POST['c_name']."' where c_number = '$c_number'";
	mysql_query($sql_query);
}
if($_POST['location'] != $row["location"])
{
	$sql_query2 = "UPDATE commodity SET 
	location = '".$_POST['location']."' where c_number = '$c_number'";
	mysql_query($sql_query2);
}
if($_POST['oan'] != $row["oan"])
{
	$sql_query3 = "UPDATE commodity SET 
	oan = '".$_POST['oan']."' where c_number = '$c_number'";
	mysql_query($sql_query3);
}
/*$sql_mp = "DELETE c_mp FROM commodity WHERE c_number = '$c_number'";
mysql_query($sql_mp);//刪除c_picture裡的圖片*/
if($_FILES['c_mp']['name'] != "") //判斷圖片路徑有無修改
	{
	 $file = explode (".",$_FILES['c_mp']['name']);
	 $extension = $file[count($file)-1];//找出檔案的副檔名
	 $name = date("ymdhis").".".$extension;
	// $uploaddir="C:/AppServ/www/mp/";//上傳檔案存放位置
	 $tmpfile=$_FILES["c_mp"]["tmp_name"];//server端站存檔名
	 $file2=mb_convert_encoding($_FILES["c_mp"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
	 if (($_FILES["c_mp"]["type"] == "image/gif") || ($_FILES["c_mp"]["type"] == "image/jpeg")||($_FILES["c_mp"]["type"] == "image/jpg")||($_FILES["c_mp"]["tmp_name"]=="image/png")||($_FILES["pop"]["tmp_name"]==""))//限定檔案gif jpg png
	  {
	  if (move_uploaded_file($tmpfile,$picturePathWeb.$m_number."_".$name))//上傳檔案
		{	
	   $src = $picturePathWeb.$m_number."_".$name;
	   $dest = $src;
	   $destW = 400;
	   $destH = 400;
	   imagesResize($src,$dest,$destW,$destH);
		$c_mp = $m_number."_".$name;
	   
	   $src = $picturePathWeb.$m_number."_".$name;
	   $dest = $displayPathWeb.$m_number."_".$name;
	   $destW = 240;
	   $destH = 155;
	   imagesResize($src,$dest,$destW,$destH);
	   
	   $src = $picturePathWeb.$m_number."_".$name;
	   $dest = $displayPathPhone.$m_number."_".$name;
	   $destW = 260;
	   $destH = 250;
	   imagesResize($src,$dest,$destW,$destH);
	   
$sql_query4 = "UPDATE commodity SET 
c_mp = '$c_mp' where c_number = '$c_number'";
mysql_query($sql_query4);
	
    }//上傳檔案if
  	else//上傳檔案
    	{
	 			switch ($_FILES["c_mp"]["error"])
			{
				case 1:
				?><script> window.alert("主要圖片大小超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?PHP
				break;
				case 2:
				?><script> window.alert ("主要圖片大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?PHP
				break;
				case 3:
				?><script> window.alert ("主要上傳不完整"); window.history.back(); </script><?PHP
				break;
				case 4:
				?><script> window.alert("主要圖片沒有檔案上傳"); window.history.back(); </script><?PHP
				break;
				case 6:
				?><script> window.alert('主要圖片暫存資料夾不存在'); window.history.back(); </script> <?PHP
				break;
				case 7:
				?><script> window.alert ("主要圖片上傳檔案無法寫入"); window.history.back(); 
				</script><?PHP
				case 8:
				?><script> window.alert ("主要圖片上傳停止"); window.history.back(); </script><?PHP
				break;
			}//switch
    	}//上傳檔案else
  }//限定檔案if
 else//限定檔案
  {
	?><script> window.alert ("主要檔案不合法"); window.history.back(); </script><?PHP
  }


if($_FILES["c_movie"]["name"] != "") //判斷影片路徑有無修改
{
			 $file = explode (".",$_FILES['c_movie']['name']);//找出檔案的副檔名
			 $extension = $file[count($file)-1];
			 $name = date("ymdhis").".".$extension;
			// $uploaddir="C:/AppServ/www/mp/";//上傳檔案存放位置
			 $tmpfile=$_FILES["c_movie"]["tmp_name"];//server端站存檔名
			 $file2=mb_convert_encoding($_FILES["c_movie"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
			  
				if (move_uploaded_file($tmpfile,$moviePathWeb.$m_number."_".$name))//上傳檔案
				{
					$c_movie = $m_number."_".$name;
	$sql_query5 = "UPDATE commodity SET 
	c_movie = '$c_movie' where c_number = '$c_number'";
	mysql_query($sql_query5);

				}
				else
				{
					switch ($_FILES["c_movie"]["error"])
					{
					case 1:
					?><script> window.alert("失敗原因:影片大小超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?PHP
					case 2:
					?><script> window.alert ("失敗原因:影片大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?PHP
					case 3:
					?><script> window.alert ("失敗原因:影片上傳不完整"); window.history.back(); </script><?PHP
					case 4:
					?><script> window.alert("失敗原因:影片沒有檔案上傳"); window.history.back(); </script><?PHP
					case 6:
					?><script> window.alert('失敗原因:影片暫存資料夾不存在'); window.history.back(); </script> <?PHP
					case 7:
					?><script> window.alert ("失敗原因:影片上傳檔案無法寫入"); window.history.back(); 
					</script><?PHP
					case 8:
					?><script> window.alert ("失敗原因:影片上傳停止"); window.history.back(); </script><?PHP
					}	
				}
	}
}

if($_POST['size'] != $row["size"])
{
	$sql_query6 = "UPDATE commodity SET 
	size = '".$_POST['size']."' where c_number = '$c_number'";
	mysql_query($sql_query6);
}
if($_POST['c_height'] != $row["c_height"])
{
	$sql_query7 = "UPDATE commodity SET 
	c_height = '".$_POST['c_height']."' where c_number = '$c_number'";
	mysql_query($sql_query7);
}
if($_POST['c_shoulder'] != $row["c_shoulder"])
{
	$sql_query8 = "UPDATE commodity SET 
	c_shoulder = '".$_POST['c_shoulder']."' where c_number = '$c_number'";
	mysql_query($sql_query8);
}
if($_POST['c_bust'] != $row["c_bust"])
{
	$sql_query9 = "UPDATE commodity SET 
	c_bust = '".$_POST['c_bust']."' where c_number = '$c_number'";
	mysql_query($sql_query9);
}
if($_POST['c_waistline'] != $row["c_waistline"])
{
	$sql_query10 = "UPDATE commodity SET 
	c_waistline = '".$_POST['c_waistline']."' where c_number = '$c_number'";
	mysql_query($sql_query10);
}
if($_POST['c_hips'] != $row["c_hips"])
{
	$sql_query11 = "UPDATE commodity SET 
	c_hips = '".$_POST['c_hips']."' where c_number = '$c_number'";
	mysql_query($sql_query11);
}
if($_POST['s_size'] != $row["s_size"])
{
	$sql_query12 = "UPDATE commodity SET 
	s_size = '".$_POST['s_size']."' where c_number = '$c_number'";
	mysql_query($sql_query12);
}
if($_POST['colors_number'] != $row["colors_number"])
{
	$sql_query13 = "UPDATE commodity SET 
	colors_number = '".$_POST['colors_number']."' where c_number = '$c_number'";
	mysql_query($sql_query13);
}
if($_POST['material'] != $row["material"])
{
	$sql_query14 = "UPDATE commodity SET 
	material = '".$_POST['material']."' where c_number = '$c_number'";
	mysql_query($sql_query14);
}
if($_POST['c_price'] != $row["c_price"])
{
	$sql_query15 = "UPDATE commodity SET 
	c_price = '".$_POST['c_price']."' where c_number = '$c_number'";
	mysql_query($sql_query15);
}
if($_FILES["pop"]["name"] != "") //判斷圖片路徑有無修改
{
 $file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
 $extension = $file[count($file)-1];
 $name = date("ymdhis").".".$extension;
// $uploaddir="C:/AppServ/www/mp/";//上傳檔案存放位置
 $tmpfile=$_FILES["pop"]["tmp_name"];//server端站存檔名
 $file2=mb_convert_encoding($_FILES["pop"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
 if (($_FILES["pop"]["type"] == "image/gif") || ($_FILES["pop"]["type"] == "image/jpeg")||($_FILES["pop"]["type"] == "image/jpg")||($_FILES["pop"]["tmp_name"]=="image/png"))//限定檔案gif jpg png
  {
  if (move_uploaded_file($tmpfile,$popPathWeb.$m_number."_".$name))//上傳檔案
    {	
   $src = $popPathWeb.$m_number."_".$name;
   $dest = $src;
   $destW = 400;
   $destH = 400;
   imagesResize($src,$dest,$destW,$destH);
   $pop = $m_number."_".$name;
      
   $src = $popPathWeb.$m_number."_".$name;
   $dest = $popPathPhone.$m_number."_".$name;
   $destW = 260;
   $destH = 250;
   imagesResize($src,$dest,$destW,$destH);
$sql_query16 = "UPDATE commodity SET 
	pop = '$pop' where c_number = '$c_number'";
	mysql_query($sql_query16);

   
    }//上傳檔案if
  	else//上傳檔案
    	{
	 			switch ($_FILES["pop"]["error"])
			{
				case 1:
				?><script> window.alert("失敗原因:購買憑證大小超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?PHP
				break;
				case 2:
				?><script> window.alert ("失敗原因:購買憑證大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?PHP
				break;
				case 3:
				?><script> window.alert ("購買憑證上傳不完整"); window.history.back(); </script><?PHP
				break;
				case 4:
				?><script> window.alert("請上傳購買憑證"); window.history.back(); </script><?PHP
				break;
				case 6:
				?><script> window.alert('失敗原因:購買憑證暫存資料夾不存在'); window.history.back(); </script> <?PHP
				break;
				case 7:
				?><script> window.alert ("失敗原因:購買憑證上傳檔案無法寫入"); window.history.back(); 
				</script><?PHP
				case 8:
				?><script> window.alert ("失敗原因:購買憑證上傳停止"); window.history.back(); </script><?PHP
				break;
			}//switch
    	}//上傳檔案else
  }//限定檔案if
 else//限定檔案
  {
	?><script> window.alert ("請上傳正確的購買憑證檔案"); window.history.back(); </script><?PHP
  }
}

if($_POST['c_date'] != $row["c_date"])
{
	$sql_query17 = "UPDATE commodity SET 
	c_date = '".$_POST['c_date']."' where c_number = '$c_number'";
	mysql_query($sql_query17);
}
if($_POST['c_address'] != $row["c_address"])
{
	$sql_query18 = "UPDATE commodity SET 
	c_address = '".$_POST['c_address']."' where c_number = '$c_number'";
	mysql_query($sql_query18);
}
if($_POST['c_description'] != $row["c_description"])
{
	$sql_query19 = "UPDATE commodity SET 
	c_description = '".$_POST['c_description']."' where c_number = '$c_number'";
	mysql_query($sql_query19);
}
if($_POST['c_try_height'] != $row["c_try_height"])
{
	$sql_query20 = "UPDATE commodity SET 
	c_try_height = '".$_POST['c_try_height']."' where c_number = '$c_number'";
	mysql_query($sql_query20);
}
if($_POST['c_try_weight'] != $row["c_try_weight"])
{
	$sql_query21 = "UPDATE commodity SET 
	c_try_weight = '".$_POST['c_try_weight']."' where c_number = '$c_number'";
	mysql_query($sql_query21);
}
if($_POST['c_try_shoulder'] != $row["c_try_shoulder"])
{
	$sql_query22 = "UPDATE commodity SET 
	c_try_shoulder = '".$_POST['c_try_shoulder']."' where c_number = '$c_number'";
	mysql_query($sql_query22);
}
if($_POST['c_try_bust'] != $row["c_try_bust"])
{
	$sql_query23 = "UPDATE commodity SET 
	c_try_bust = '".$_POST['c_try_bust']."' where c_number = '$c_number'";
	mysql_query($sql_query23);
}
if($_POST['c_try_waistline'] != $row["c_try_waistline"])
{
	$sql_query24 = "UPDATE commodity SET 
	c_try_waistline = '".$_POST['c_try_waistline']."' where c_number = '$c_number'";
	mysql_query($sql_query24);
}
if($_POST['c_try_hips'] != $row["c_try_hips"])
{
	$sql_query25 = "UPDATE commodity SET 
	c_try_hips = '".$_POST['c_try_hips']."' where c_number = '$c_number'";
	mysql_query($sql_query25);
}
if($_POST['c_try_foot'] != $row["c_try_foot"])
{
	$sql_query26 = "UPDATE commodity SET 
	c_try_foot = '".$_POST['c_try_foot']."' where c_number = '$c_number'";
	mysql_query($sql_query26);
}
if($_POST['c_try_foot2'] != $row["c_try_foot2"])
{
	$sql_query27 = "UPDATE commodity SET 
	c_try_foot2 = '".$_POST['c_try_foot2']."' where c_number = '$c_number'";
	mysql_query($sql_query27);
}

if($_POST["c_mode"] != "")//交貨方式
{
$sql_mode = "DELETE FROM c_mode WHERE c_number = '$c_number'";
mysql_query($sql_mode);//刪除交貨方式							
	foreach($_POST["c_mode"] as $key => $value)
	{
	$sql_query3 = "INSERT into c_mode(c_number,c_mode) VALUES ('".$_SESSION['c_number']."','$value')";
	mysql_query($sql_query3);
	}
}	
if($_POST["c_payment"] != "")//新增付款方式
	{							
	$sql_mode = "DELETE FROM c_payment WHERE c_number = '$c_number'";
	mysql_query($sql_mode);//刪除付款方式

	foreach($_POST["c_payment"] as $key => $value1)
	{
	$sql_query4 = "INSERT into c_payment(c_number,c_payment) VALUES ('".$_SESSION['c_number']."','$value1')";
	mysql_query($sql_query4);
	}
}

if($_FILES["c_picture"]["name"] != "")
{
	$sql_query = "DELETE FROM c_picture WHERE c_number = '$c_number'";
	mysql_query($sql_query);//刪除所有圖片

 $file = explode (".",$_FILES['c_picture']['name'][$j]);//找出檔案的副檔名
 $extension = $file[count($file)-1];
 $name = date("ymdhis").".".$extension;
 $i = count($_FILES["c_picture"]["name"]);
 for($j=0;$j<$i;$j++)
 {
	$file = explode (".",$_FILES['c_picture']['name'][$j]);
	$extension = $file[count($file)-1];//找出檔案的副檔名
	$name = date("ymdhis").".".$extension;
	 $tmpfile=$_FILES["c_picture"]["tmp_name"][$j];//server端站存檔名
	 $file2=mb_convert_encoding($_FILES["c_picture"]["name"][$j],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
	 if (($_FILES["c_picture"]["type"][$j] == "image/gif") || ($_FILES["c_picture"]["type"][$j] == "image/jpeg")||($_FILES["c_picture"]["type"][$j] == "image/jpg")||($_FILES["c_picture"]["tmp_name"][$j] == "image/png"))//限定檔案gif jpg png
	  {
	  if (move_uploaded_file($tmpfile,$picturePathWeb.$j."_".$m_number."_".$name))//上傳檔案
		{
			//echo "上傳成功<br>";
			$src = $picturePathWeb.$j."_".$m_number."_".$name;
			$dest = $src;
			$destW = 400;
			$destH = 400;
			imagesResize($src,$dest,$destW,$destH);
			$c_picture = $j."_".$m_number."_".$name;
			   
			$src = $picturePathWeb.$j."_".$m_number."_".$name;
			$dest = $picturePathPhone.$j."_".$m_number."_".$name;
			$destW = 260;
			$destH = 250;
			imagesResize($src,$dest,$destW,$destH);
						
			$sql_query2 = "INSERT into c_picture(c_number,c_picture) VALUES ('$c_number','$c_picture')";
			mysql_query($sql_query2);
			
						
		}//上傳檔案if
		else if($_FILES['c_picture']['error']==4)//上傳檔案
		{
			echo "請至少上傳一個檔案";
		}//上傳檔案else
	}//限定檔案
			else//限定檔案
		{
			//errorreport($_FILES["file"]["error"]);
			?><script> window.alert ("檔案不符合規定"); window.history.back(); </script><?PHP
		}
	 
	 }//for迴圈
}
header("Location:commodity.php?c_number='$c_number'&data=1");
?>
</body>
</html>