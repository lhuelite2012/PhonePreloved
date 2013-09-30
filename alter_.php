<?PHP
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
	
	$sql = "UPDATE `members` SET `name`='".$_POST["name"]."',`gender`='".$_POST["gender"]."',`address`='".$_POST["address"]."',`county`='".$list3_county["county_number"]."',`city`='".$list3_city["city_number"]."',`phone`='".$_POST["phone"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
	mysql_query($sql); //執行$sql更新語法，姓名、性別、地址、電話
	
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
	
	if($_FILES["file"]["name"] != $list3[6]) //判斷圖片路徑有無修改
	{
		$sql_f = "UPDATE `members` SET `file`='"."upload/".$_FILES["file"]["name"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
		mysql_query($sql_f); //執行$sql_f更新語法，大頭照
	}
		
	if($_FILES["file"]["error"]>0)
	{
		//echo "Error：".$_FILES["file"]["error"];
	}
	else
	{
		//echo "檔案名稱：".$_FILES["file"]["name"]."<br/>";
		//echo "檔案類型：".$_FILES["file"]["type"]."<br/>";
		//echo "檔案大小：".($_FILES["file"]["size"]/1024)."KB<br/>";
		//echo "暫存名稱：".$_FILES["file"]["tmp_name"]."<br/>";
	
		if(file_exists("upload/".$_FILES["file"]["name"]))
		{
			//echo "檔案已經存在，請勿重覆上傳相同檔案";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
		}
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