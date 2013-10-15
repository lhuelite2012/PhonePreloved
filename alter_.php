<?PHP
ob_start();
session_start();
?>
<?PHP
include("server.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?PHP
	$colors_number = $_POST["colors_number"];

	if($colors_number=="")
	{
?>
<script>
window.alert("請選擇偏愛色系");
window.history.back();
</script>
<?PHP
	die();
	}
?>
<?PHP
	$_POST["county"];
	$_POST["city"];
	
	$sql_county = "select * FROM `county` WHERE `county_name` = '".$_POST["county"]."'";
	$query_county = mysql_query($sql_county);
	$list3_county = mysql_fetch_array($query_county);
	
	$sql_city = "select * FROM `city` WHERE `city_name` = '".$_POST["city"]."'";
	$query_city = mysql_query($sql_city);
	$list3_city = mysql_fetch_array($query_city);
	
	$sql = "UPDATE `members` SET `address`='".$_POST["address"]."',`county`='".$list3_county["county_number"]."',`city`='".$list3_city["city_number"]."',`phone`='".$_POST["phone"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
	mysql_query($sql); //執行$sql更新語法地址、電話
	
	$sql_b = "UPDATE `p_brand` SET `b_number`='".$_POST["b_number"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
	mysql_query($sql_b); //執行$sql_b刪除語法，品牌(單選)
		
	//$sql_b = "DELETE FROM `p_brand` WHERE `m_number`='".$_SESSION["m_number"]."'";
	//mysql_query($sql_b); //執行$sql_b刪除語法，品牌(多選)
	
	$m_number = $_SESSION["m_number"];
	//$b_number = $_POST["b_number"];
	$colors_number = $_POST["colors_number"];
	
	//for($b=0;$b<count($b_number);$b++)
	//{
	//	$sql_b = "INSERT INTO `p_brand` (m_number,b_number) values ('$m_number','$b_number[$b]')";
	//	mysql_query($sql_b); //執行$sql_b新增語法，品牌(多選)	
	//}
	
	$sql_c = "DELETE FROM `p_color` WHERE `m_number`='".$_SESSION["m_number"]."'";
	mysql_query($sql_c); //執行$sql_c刪除語法，色系(多選)
	
	for($c=0;$c<count($colors_number);$c++)
	{
		$sql_c = "INSERT INTO `p_color` (m_number,colors_number) values ('$m_number','$colors_number[$c]')";
		mysql_query($sql_c); //執行$sql_c新增語法，色系(多選)
	}
		
	if($_FILES["file"]["error"]>0)
	{
		//echo "Error：".$_FILES["file"]["error"];
	}
	else
	{
		//echo "檔案名稱：".$_FILES["file"]["name"]."<br/>";
		//echo "檔案類型：".$_FILES["file"]["type"]."<br/>";
		//echo "檔案大小：".($_FILES["file"]["size"]/1024/1024)."MB<br/>";
		//echo "暫存名稱：".$_FILES["file"]["tmp_name"]."<br/>";
		
		if (($_FILES["file"]["type"] == "image/gif")||($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/jpg")||($_FILES["file"]["type"] == "image/png"))
		{	
		
			if($_FILES["file"]["name"] != $list3[6]) //判斷圖片路徑有無修改，如果不等於資料庫上的路徑就更改
			{
				$sql_f = "UPDATE `members` SET `file`='"."upload/".$_FILES["file"]["name"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
				mysql_query($sql_f); //執行$sql_f更新語法，大頭照
			}
		
			if(($_FILES["file"]["size"]/1024/1024) > 5)
			{
		?>		
				<script>
				window.alert("檔案大小過大，請小於5MB");
				window.history.back();
				</script>
		<?PHP
            	die();
            }
			
			if(file_exists("upload/".$_FILES["file"]["name"]))
			{
		?>		
				<script>
				window.alert("檔案名稱重覆，請重新命名再上傳");
				window.history.back();
				</script>
		<?PHP
            	die();
            }
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
			}
		}
		else
		{
			?>		
				<script>
				window.alert("檔案類型不正確，副檔名為GIF、JPEG、JPG，PNG");
				window.history.back();
				</script>
			<?PHP
			die();
		}
	}
	
	//////////////////////以下為不是空值//////////////////////
	
	if($_POST['birthday'] != "")
	{
		$sql = "UPDATE `members` SET `birthday` = '".$_POST['birthday']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法生日
	}
	
	if($_POST['fb_id'] != "")
	{
		$sql = "UPDATE `members` SET `fb_id` = '".$_POST['fb_id']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法FB帳號
	}
		
	if($_POST['line_id'] != "")
	{
		$sql = "UPDATE `members` SET `line_id` = '".$_POST['line_id']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法Line帳號
	}
	
	//if($_POST['rank_account'] != "")
	//{
	//	$sql = "UPDATE `members` SET `rank_account` = '".$_POST['rank_account']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
	//	mysql_query($sql); //執行$sql更新語法銀行帳號
	//}
	
	if($_POST['height'] != "")
	{
		$sql = "UPDATE `members` SET `height` = '".$_POST['height']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法身高
	}
	
	if($_POST['weight'] != "")
	{
		$sql = "UPDATE `members` SET `weight` = '".$_POST['weight']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法體重
	}
	
		if($_POST['clothes_size'] != "")
	{
		$sql = "UPDATE `members` SET `clothes_size` = '".$_POST['clothes_size']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法衣服尺寸
	}
	
	if($_POST['bust'] != "")
	{
		$sql = "UPDATE `members` SET `bust` = '".$_POST['bust']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法胸圍
	}
	
	if($_POST['waistline'] != "")
	{
		$sql = "UPDATE `members` SET `waistline` = '".$_POST['waistline']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法腰圍
	}	
	
	if($_POST['hips'] != "")
	{
		$sql = "UPDATE `members` SET `hips` = '".$_POST['hips']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法臀圍
	}	
	
	if($_POST['shoulder'] != "")
	{
		$sql = "UPDATE `members` SET `shoulder` = '".$_POST['shoulder']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法肩寬
	}	
	
	if($_POST['shoes_size'] != "")
	{
		$sql = "UPDATE `members` SET `shoes_size` = '".$_POST['shoes_size']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法鞋子尺寸
	}	
	
	if($_POST['shoes_size2'] != "")
	{
		$sql = "UPDATE `members` SET `shoes_size2` = '".$_POST['shoes_size2']."' WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法鞋子尺寸公分
	}
	
	//////////////////////以下為是空值//////////////////////
	
	if($_POST['birthday'] == "")
	{
		$sql = "UPDATE `members` SET `birthday` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法生日
	}
	
	if($_POST['fb_id'] == "")
	{
		$sql = "UPDATE `members` SET `fb_id` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法FB帳號
	}
		
	if($_POST['line_id'] == "")
	{
		$sql = "UPDATE `members` SET `line_id` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法Line帳號
	}
	
	//if($_POST['rank_account'] == "")
	//{
	//	$sql = "UPDATE `members` SET `rank_account` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
	//	mysql_query($sql); //執行$sql更新語法銀行帳號
	//}
	
	if($_POST['height'] == "")
	{
		$sql = "UPDATE `members` SET `height` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法身高
	}
	
	if($_POST['weight'] == "")
	{
		$sql = "UPDATE `members` SET `weight` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法體重
	}
	
		if($_POST['clothes_size'] == "")
	{
		$sql = "UPDATE `members` SET `clothes_size` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法衣服尺寸
	}
	
	if($_POST['bust'] == "")
	{
		$sql = "UPDATE `members` SET `bust` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法胸圍
	}
	
	if($_POST['waistline'] == "")
	{
		$sql = "UPDATE `members` SET `waistline` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法腰圍
	}	
	
	if($_POST['hips'] == "")
	{
		$sql = "UPDATE `members` SET `hips` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法臀圍
	}	
	
	if($_POST['shoulder'] == "")
	{
		$sql = "UPDATE `members` SET `shoulder` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法肩寬
	}	
	
	if($_POST['shoes_size'] == "" || $_POST['shoes_size2'] == "")
	{
		$sql = "UPDATE `members` SET `shoes_size` = NULL , `shoes_size2` = NULL WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql); //執行$sql更新語法鞋子尺寸、鞋子尺寸公分	
	}
?>
<Script>
function goback()
{
        alert("修改成功");
        history.go(-1);
}
</Script>
<body onload=goback()></body>
</html>