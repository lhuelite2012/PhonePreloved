<?PHP ob_start();
session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
 <?PHP

$colors = $_POST['colors'];
$score = 100;

//for($a=0;$a<count($colors);$a++)

if($_POST['account']=="")//account
{
	?><script>window.alert('請填入帳號');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['password']=="")//password
{
	?><script>window.alert('請填入密碼');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['password2']=="")//password2
{
	?><script>window.alert('請再次確認密碼');
	window.history.back();
	</script>
    <?PHP
	die();
}
if(($_POST['password'])!=($_POST['password2']))//判斷兩次輸入密碼是否相同
{
	?><script>window.alert('兩次密碼輸入不相同');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['name']=="")//name
{
	?><script>window.alert('請填入姓名');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['gender']=="")//gender
{
	?><script>window.alert('請選擇性別');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['City']=="")//City
{
	?><script>window.alert('請選擇縣市');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['caddress']=="")//address
{
	?><script>window.alert('地址未填寫完成寫');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['phone']=="")//phone
{
	?><script>window.alert('請填入電話');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($_POST['b_number']==0)//b_number
{
	?><script>window.alert('請選擇偏愛品牌');
	window.history.back();
	</script>
    <?PHP
	die();
}
if($colors=="")//colors
{
	?><script>window.alert('請選擇偏愛色系');
	window.history.back();
	</script>
    <?PHP
	die();
}
if((!empty($_POST['shoes_size']))&(empty($_POST['shoes_size2'])))//shoes_size
{
	?><script> window.alert ("請填完整的鞋子尺寸"); window.history.back(); </script><?PHP
	die();
}
if((empty($_POST['shoes_size']))&(!empty($_POST['shoes_size2'])))//shoes_size2
{
	?><script> window.alert ("請填完整的鞋子尺寸"); window.history.back(); </script><?PHP
	die();
}


include("errorreport.php");
include("server.php");
include("addtime.php");
$m_addtime = $addtime;
$address=$_POST['City'].$_POST['Canton'].$_POST['caddress'];
//必填部分嫌存入資料庫↓
$sql_query = "INSERT into members (account
,password,name,gender,phone,address,m_addtime,score)
			VALUES (
			'".$_POST['account']."',
			'".$_POST['password']."',
			'".$_POST['name']."',
			'".$_POST['gender']."',
			'".$_POST['phone']."',	
			'$address',
			'$m_addtime',
			'$score')";
mysql_query($sql_query);

$sql="select m_number from members where account='".$_POST['account']."'";//找出m_number
$query2= mysql_query($sql);
$rows = mysql_fetch_array($query2);
echo $m_number = $rows["m_number"]."<br>";

$sql_query4="INSERT into p_brand (m_number,b_number)
VALUES ('$m_number','".$_POST['b_number']."')";//存入b_number
mysql_query($sql_query4);
//echo ",".$_POST['b_number'].",";

foreach($_POST["colors"] as $key => $value)
{
	$sql_query5="INSERT into p_color (m_number,colors_number )VALUES ('$m_number','$value')";//把colors被選取項目存在value字串裡
	mysql_query($sql_query5);
				//echo $value;
}
$height_fraction = "15";
$sql_query6 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$height_fraction','$m_addtime')";
mysql_query($sql_query6);
		
//必填儲存完畢↑

if(empty($_FILES["file"]["name"]))//file是空值的話,預設圖
{
	$_FILES["file"]["name"]="register-1.gif";
	$file = $_FILES["file"]["name"];
	$fraction = "15";
	$sql_query2 = "INSERT into  f_record (m_number,f_number,f_time) VALUES ('$m_number','$fraction','$m_addtime')";
	mysql_query($sql_query2);
			
}
else if(!empty($_FILES["file"]["name"]))//file有值,重新上傳新圖
{
	$uploaddir="C:/AppServ/www/file/";//上傳檔案存放位置
	$tmpfile=$_FILES["file"]["tmp_name"];//server端站存檔名
	$file2=mb_convert_encoding($_FILES["file"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
	if (($_FILES["file"]["type"] == "image/gif")||($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/jpg")||($_FILES["file"]["tmp_name"]==""))//限定檔案gif jpg
 	{
		if (move_uploaded_file($tmpfile,$uploaddir.$file2))//上傳檔案
		{	
			$f_file = explode (".",$_FILES['file']['name']);//找出檔案的副檔名
			$extension = $f_file[count($f_file)-1];
			$f_name = date("ymdhis").".".$extension;
			$file = $f_name;
			
			$score = $score +5;
			$file_fraction = "6";
			$sql_query2 = "INSERT into f_record (m_number,f_number,f_time) VALUES ('$m_number','$file_fraction','$m_addtime')";
			mysql_query($sql_query2);
		}//上傳檔案if
	}//限定檔案if
	else//限定檔案
	{
		//errorreport($_FILES["file"]["error"]);
		?><script> window.alert ("上傳失敗!請選擇jpg、gif的圖上傳,檔案必須小於5M 。"); window.history.back(); </script><?PHP
		die();
	}
}
if(!empty($_POST['birthday']))//birthday
{
	$score = $score +5;
	$birthday_fraction = "5";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$birthday_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['height']))//height
{
	$score = $score +5;
	$height_fraction = "7";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$height_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['weight']))//weight
{
	$score = $score +5;
	$weight_fraction = "8";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$weight_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['clothes_size']))//clothes_size
{
	$score = $score +5;
	$clothes_size_fraction = "9";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$clothes_size_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['bust']))//bust
{
	$score = $score +5;
	$bust_fraction = "10";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$bust_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['waistline']))//waistline
{
	$score = $score +5;
	$waistline_fraction = "11";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$waistline_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['hips']))//hips
{
	$score = $score +5;
	$hips_fraction = "12";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$hips_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['shoulder']))//shoulder
{
	$score = $score +5;
	$shoulder_fraction = "13";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$shoulder_fraction','$m_addtime')";
	mysql_query($sql_query2);
}

if(!empty($_POST['shoes_size']))//shoes_size
{
	$score = $score +5;
	$shoes_size_fraction = "14";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$shoes_size_fraction','$m_addtime')";
	mysql_query($sql_query2);
}
if(!empty($_POST['fb_id']))//fb_id
{
	$score = $score +25;
	$shoes_size_fraction = "16";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$shoes_size_fraction','$m_addtime')";
	mysql_query($sql_query2);
}
if(!empty($_POST['line_id']))//line_id
{
	$score = $score +25;
	$shoes_size_fraction = "17";
	$sql_query2 = "INSERT into f_record(m_number,f_number,f_time) VALUES('$m_number','$shoes_size_fraction','$m_addtime')";
	mysql_query($sql_query2);
}


$_SESSION['account'] = $_POST['account'];


			//更改資料庫↓
			$sql_query3="UPDATE members SET 
			birthday = '".$_POST['birthday']."',
			height = '".$_POST['height']."',
			clothes_size = '".$_POST['clothes_size']."',
			bust = '".$_POST['bust']."',
			waistline = '".$_POST['waistline']."',
			hips = '".$_POST['hips']."',
			shoulder = '".$_POST['shoulder']."',
			shoes_size = '".$_POST['shoes_size']."',
			shoes_size2 = '".$_POST['shoes_size2']."',
			weight = '".$_POST['weight']."',
			file = '".$file."',
			score = '".$score."',
			fb_id = '".$_POST['fb_id']."',
			line_id = '".$_POST['line_id']."' where m_number = '$m_number'";
			mysql_query($sql_query3);

			header("Location:register_2.php");
			
/*
$max ="select m_number from members where account='" .$_SESSION['account']. "'and  password='" .$_POST['password']."' order by m_number desc";
$query3 = mysql_query($max);
$row1 = mysql_fetch_array($query3);
$mnumber = $row1["m_number"];


			$sql_query3="UPDATE members SET (birthday,height,clothes_size,bust,waistline,hips,shoulder,shoes_size,shoes_size2,weight,file) 
			VALUES(
			'".$_POST['birthday']."',
			'".$_POST['height']."',
			'".$_POST['clothes_size']."',
			'".$_POST['bust']."',
			'".$_POST['waistline']."',
			'".$_POST['hips']."',
			'".$_POST['shoulder']."',
			'".$_POST['shoes_size']."',
			'".$_POST['shoes_size2']."',
			'".$_POST['weight']."',
			'$file')";
							
	$uploaddir="C:/AppServ/www/file/";//上傳檔案存放位置
	$tmpfile=$_FILES["file"]["tmp_name"];//server端站存檔名
	$file2=mb_convert_encoding($_FILES["file"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
 	if (($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg"))//限定gif、jpg檔
	{
		if (move_uploaded_file($tmpfile,$uploaddir.$file2))//上傳大頭照
		{
			echo "上傳成功<br>";
			$score = $score +5;
			header("Location: http://localhost/register1.php?account=".$accout."&password=".$password."&name=".$name."&gender=".$gender."&birthday=".$birthday."&phone=".$phone."&file=".$file."&height=".$height."&clothes_size=".$clothes_size."&bust=".$bust."&waistline=".$waistline."&hips=".$hips."&shoulder=".$shoulder."&shoes_size2=".$shoes_size2."&shoes_size=".$shoes_size."&c_address=".$c_address."&colors=".$colors."&b_number=".$b_number."&score=".$score);
		}else//上傳檔案
		{
			echo "上傳失敗<br>";
		}//上傳檔案else
		}else//限定檔案
		{
			?><script>window.alert('只能上傳.gif或.jpg檔案的圖片');window.history.back();</script><?PHP 
		}//限定檔案else
*/
/*if($_POST["colors"])
{								
	foreach($_POST["colors"] as $key => $value)
	{
		$strvalue=$strvalue.",".$value;//黃,紅,藍,黑,綠
	}
}
$sql="insert into table(color)values('$strvalue')";
*/
	?>
</body>
</html>