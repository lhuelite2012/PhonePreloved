<?
session_start();
?>
<?
include("server.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?
	$colors_number = $_POST["colors_number"];

	if($colors_number=="")
	{
?>
<script>
window.alert("請選擇偏愛色系");
window.history.back();
</script>
<?
	die();
}
?>
<?
	$_POST["county"];
	$_POST["city"];
	
	$sql_county = "select * FROM `county` WHERE `county_name` = '".$_POST["county"]."'";
	$query_county = mysql_query($sql_county);
	$list3_county = mysql_fetch_array($query_county);
	
	$sql_city = "select * FROM `city` WHERE `city_name` = '".$_POST["city"]."'";
	$query_city = mysql_query($sql_city);
	$list3_city = mysql_fetch_array($query_city);
	
	$sql = "UPDATE `members` SET `name`='".$_POST["name"]."',`gender`='".$_POST["gender"]."',`birthday`='".$_POST["birthday"]."',`phone`='".$_POST["phone"]."',`address`='".$_POST["address"]."',`county`='".$list3_county["county_number"]."',`city`='".$list3_city["city_number"]."',`height`='".$_POST["height"]."',`weight`='".$_POST["weight"]."',`shoulder`='".$_POST["shoulder"]."',`bust`='".$_POST["bust"]."',`waistline`='".$_POST["waistline"]."',`hips`='".$_POST["hips"]."',`clothes_size`='".$_POST["clothes_size"]."',`shoes_size`='".$_POST["shoes_size"]."',`fb_id`='".$_POST["fb_id"]."',`line_id`='".$_POST["line_id"]."',`rank_account`='".$_POST["rank_account"]."',`shoes_size2`='".$_POST["shoes_size2"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
	
	mysql_query($sql); //執行$sql更新語法
	
	if($_FILES["file"]["name"] != $list3[6]) //判斷圖片路徑有無修改
	{
		$sql = "UPDATE `members` SET `file`='"."upload/".$_FILES["file"]["name"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
		
		mysql_query($sql); //執行$sql更新語法
	}
	
	$sql_b = "UPDATE `p_brand` SET `b_number`='".$_POST["b_number"]."'WHERE `m_number`='".$_SESSION["m_number"]."'";
	
	mysql_query($sql_b);
		
	//$sql_b = "DELETE FROM `p_brand` WHERE `m_number`='".$_SESSION["m_number"]."'";
	
	//mysql_query($sql_b); //執行$sql_b刪除語法
	
	$m_number = $_SESSION["m_number"];
	//$b_number = $_POST["b_number"];
	$colors_number = $_POST["colors_number"];
	
	//for($b=0;$b<count($b_number);$b++)
	//{
	//	$sql_b = "INSERT INTO `p_brand` (m_number,b_number) values ('$m_number','$b_number[$b]')";
	//	
	//	mysql_query($sql_b); //執行$sql_b新增語法	
	//}
	
	$sql_c = "DELETE FROM `p_color` WHERE `m_number`='".$_SESSION["m_number"]."'";
	
	mysql_query($sql_c); //執行$sql_c刪除語法
	
	for($c=0;$c<count($colors_number);$c++)
	{
		$sql_c = "INSERT INTO `p_color` (m_number,colors_number) values ('$m_number','$colors_number[$c]')";
		
		mysql_query($sql_c); //執行$sql_c新增語法
	}
		
	if($_FILES["file"]["error"]>0)
	{
		echo "Error：".$_FILES["file"]["error"];
	}
	else
	{
		echo "檔案名稱：".$_FILES["file"]["name"]."<br/>";
		echo "檔案類型：".$_FILES["file"]["type"]."<br/>";
		echo "檔案大小：".($_FILES["file"]["size"]/1024)."KB<br/>";
		echo "暫存名稱：".$_FILES["file"]["tmp_name"]."<br/>";
	
		if(file_exists("upload/".$_FILES["file"]["name"]))
		{
			echo "檔案已經存在，請勿重覆上傳相同檔案";
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