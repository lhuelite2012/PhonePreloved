<?PHP ob_start();
session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP  
$m_number = $_SESSION['m_number']; ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第一次存入上架資料</title>
</head>
<body>
 <?PHP
 include("loginConfirm.php");
 include("server.php");
 include("resize.php");
 include("commodityPath.php");
 include("addtime.php");
 $b_number = $_GET['id'];
 $c_gender = $_GET['gender'];
 $s_number = $_GET['s_number'];
 $_SESSION['c_name'] = $_POST['c_name'];
 $_SESSION['added'] = "0";
 
 $sql = "select score from members where account='$account'"; // 找出members裡的score
 $query = mysql_query($sql);
 $rows = mysql_fetch_array($query);
 $score = $rows['score'];
 
if($_POST['c_name'] == "")
{
	?><script>window.alert('商品標題未填');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['location'] == "")
{
	?><script>window.alert('請選擇商品所在地');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['oan'] == "")
{
	?><script>window.alert('未填寫商品新舊');
	window.history.back();
	</script>
    <?PHP
	die();

}
else if($_SESSION['Specification'] == "1")//上衣
{
	if($_POST['size'] == "")
	{
		?><script>window.alert('請填寫尺寸');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_height'] == "")
	{
		?><script>window.alert('商品全長未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_shoulder'] == "")
	{
		?><script>window.alert('商品肩寬未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_bust'] == "")
	{
		?><script>window.alert('商品胸圍未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
}
else if($_SESSION['Specification'] == "2")//褲子
{
	if($_POST['size'] == "")
	{
		?><script>window.alert('請填寫尺寸');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_height'] == "")
	{
		?><script>window.alert('商品全長未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_waistline'] == "")
	{
		?><script>window.alert('商品腰圍未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_hips'] == "")
	{
		?><script>window.alert('商品臀圍未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
}
else if($_SESSION['Specification'] == "3")//洋裝
{
	if($_POST['size'] == "")
	{
		?><script>window.alert('請填寫尺寸');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['c_height'] == "")
	{
		?><script>window.alert('商品全長未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
}
else if($_SESSION['Specification'] == "4")//包包
{
	if($_POST['UDHeight'] == "")
	{
		?><script>window.alert('請填寫上下高度');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['LRLength'] == "")
	{
		?><script>window.alert('請填寫左右寬度');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['bWidth'] == "")
	{
		?><script>window.alert('請填寫底部寬度');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['MWidth'] == "")
	{
		?><script>window.alert('請填寫提把寬度');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
		if($_POST['SLongest'] == "")
	{
		?><script>window.alert('請填寫背帶最長');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}

}
else if($_SESSION['Specification'] == "5")//鞋子
{
	if($_POST['s_size'] == "")
	{
		?><script>window.alert('請選擇尺寸');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
	if($_POST['size'] == "")
	{
		?><script>window.alert('尺寸未填寫');
		window.history.back();
		</script>
		<?PHP
		die();
	
	}
}

if($_POST['colors_number'] == "")
{
	?><script>window.alert('請選擇商品色系');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['material'] == "")
{
	?><script>window.alert('請填入商品材質');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['c_price'] == "")
{
	?><script>window.alert('商品價格未填寫');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['lowest_record'] == "")
{
	?><script>window.alert('請設定評價限制');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['c_price'] == "")
{
	?><script>window.alert('商品價格未填寫');
	window.history.back();
	</script>
    <?PHP
	die();

}
if($_POST['c_date'] != "")
{
	if($_POST['c_date'] > $addtime)
	{
		?><script>window.alert('商品購買日期不能超過今天');
		window.history.back();
		</script>
    	<?PHP
		die();
	}
}
if(!empty($_FILES["c_movie"]["name"]))//  如果有值上傳影片 score + 5
{
			 $file = explode (".",$_FILES['c_movie']['name']);//找出檔案的副檔名
			 $extension = $file[count($file)-1];
			 $name = date("ymdhis").".".$extension;
			// $uploaddir="C:/AppServ/www/mp/";//上傳檔案存放位置
			 $tmpfile=$_FILES["c_movie"]["tmp_name"];//server端站存檔名
			 $file2=mb_convert_encoding($_FILES["c_movie"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
			  if (($_FILES["c_movie"]["name"] == "movie/mp4"))//限定檔案mp4
  {
				if (move_uploaded_file($tmpfile,$moviePathWeb.$m_number."_".$name))//上傳檔案
				{
					$c_movie = $m_number."_".$name;
					$score = $score + 5 ;
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
			  }//限定檔案if
 else//限定檔案
  {
	?><script> window.alert ("請上傳.mp4檔案"); window.history.back(); </script><?PHP
  }
}

if(!empty($_FILES["pop"]["name"]))//   如果憑證有值上傳 score + 5
{
 $file = explode (".",$_FILES['pop']['name']);//找出檔案的副檔名
 $extension = $file[count($file)-1];
 $name = date("ymdhis").".".$extension;
// $uploaddir="C:/AppServ/www/mp/";//上傳檔案存放位置
 $tmpfile=$_FILES["pop"]["tmp_name"];//server端站存檔名
 $file2=mb_convert_encoding($_FILES["pop"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
 if (($_FILES["pop"]["type"] == "image/gif") || ($_FILES["pop"]["type"] == "image/jpeg")||($_FILES["pop"]["type"] == "image/jpg")||($_FILES["pop"]["tmp_name"]==""))//限定檔案gif jpg
  {
  if (move_uploaded_file($tmpfile,$popPathWeb.$m_number."_".$name))//上傳檔案
    {	
   $src = $popPathWeb.$m_number."_".$name;
   $dest = $src;
   $destW = 400;
   $destH = 400;
   imagesResize($src,$dest,$destW,$destH);
   $pop = $m_number."pop_".$name;
      
   $src = $popPathWeb.$m_number."_".$name;
   $dest = $popPathPhone.$m_number."_".$name;
   $destW = 260;
   $destH = 250;
   imagesResize($src,$dest,$destW,$destH);
   
	$score = $score + 5 ;
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

if(empty($_FILES['c_mp']['name'])) //  主要圖片不可為空值
{
	?><script>window.alert('請上傳主要圖片');
	window.history.back();
	</script>
    <?PHP
	die();

} 
else if(!empty($_FILES['c_mp']['name'])) //  如果有值上傳主要圖片
{
	 $file = explode (".",$_FILES['c_mp']['name']);//找出檔案的副檔名
	 $extension = $file[count($file)-1];
	 $name = date("ymdhis").".".$extension;
	// $uploaddir="C:/AppServ/www/mp/";//上傳檔案存放位置
	 $tmpfile=$_FILES["c_mp"]["tmp_name"];//server端站存檔名
	 $file2=mb_convert_encoding($_FILES["c_mp"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
	 if (($_FILES["c_mp"]["type"] == "image/gif") || ($_FILES["c_mp"]["type"] == "image/jpeg")||($_FILES["c_mp"]["type"] == "image/jpg")||($_FILES["c_mp"]["tmp_name"]==""))//限定檔案gif jpg
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
	   $hi_bid_price = $_POST['c_price'];
		$sql_query ="INSERT into  commodity(b_number,c_gender,s_number,c_name,location,oan,c_price,lowest_record,c_date,c_height,c_shoulder,c_bust,c_waistline,c_hips,size,s_size,UDHeight,LRLength,bWidth,MWidth,SLongest,colors_number,material,c_mp,c_movie,pop,m_number,hi_bid_price)
		VALUES(
	'$b_number',
	'$c_gender',
	'$s_number',
	'".$_SESSION['c_name']."',
	'".$_POST['location']."',
	'".$_POST['oan']."',
	'".$_POST['c_price']."',
	'".$_POST['lowest_record']."',
	'".$_POST['c_date']."',
	'".$_POST['c_height']."',
	'".$_POST['c_shoulder']."',
	'".$_POST['c_bust']."',
	'".$_POST['c_waistline']."',
	'".$_POST['c_hips']."',
	'".$_POST['size']."',
	'".$_POST['s_size']."',
	'".$_POST['UDHeight']."',
	'".$_POST['LRLength']."',
	'".$_POST['bWidth']."',
	'".$_POST['MWidth']."',
	'".$_POST['SLongest']."',
	'".$_POST['colors_number']."',
	'".$_POST['material']."',
	'$c_mp',
	'$c_movie',
	'$pop',
	'$m_number',
	'$hi_bid_price')";
		mysql_query($sql_query);
		
	$_SESSION['score'] = $score;
	$_SESSION['added'] = "1";		
		header("Location:added_44.php");
	
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
}


        ?>
       
</body>
</html>