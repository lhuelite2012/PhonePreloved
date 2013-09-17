<?php ob_start();?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php  
$m_number = $_SESSION['m_number']; 
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
include("loginConfirm.php");//判斷是否會員登入
include("server.php");//連資料庫
include("resize.php");//上傳圖片縮圖
include("commodityPath.php");//上傳圖片路徑
include("addtime.php");//抓目前時間
include("dateadd.inc");//加時間(算下架時間)

$downtime = $_POST['downtime'];
$temptime = time($addtime); // 抓現在時間
$temptime = DateAdd("d",$downtime,$temptime);//加dowmtime時間
$temptime = strftime("%Y-%m-%d %H:%M:%S",$temptime);
$score = $_SESSION['score'];
$uptime = $addtime;
$c_paymemt = $_POST['c_paymemt'];
$c_mode = $_POST['c_mode'];
if($_POST['c_address'] == "")
{
	?><script>window.alert('請填入購賣商品地址');
	window.history.back();
	</script>
    <?php
	die();

}
if($_POST['downtime'] == "")
{
	?><script>window.alert('請設定下架時間');
	window.history.back();
	</script>
    <?php
	die();

}
if($c_payment=="")
{
	?><script>window.alert('請至少選一種付款方式');
	window.history.back();
	</script>
    <?php
	die();

}
if($c_mode=="")
{
	?><script>window.alert('請至少選一種交貨方式');
	window.history.back();
	</script>
    <?php
	die();

}


if(!empty($_FILES["c_picture"]["name"]))
{
 $file = explode (".",$_FILES['c_picture']['name'][$j]);//找出檔案的副檔名
 $extension = $file[count($file)-1];
 $name = date("ymdhis").".".$extension;
 $i = count($_FILES["c_picture"]["name"]);
 for($j=0;$j<$i;$j++)
 {
	$file = explode (".",$_FILES['c_picture']['name'][$j]);//找出檔案的副檔名
	$extension = $file[count($file)-1];
	$name = date("ymdhis").".".$extension;
	 $tmpfile=$_FILES["c_picture"]["tmp_name"][$j];//server端站存檔名
	 $file2=mb_convert_encoding($_FILES["c_picture"]["name"][$j],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
	 if (($_FILES["c_picture"]["type"][$j] == "image/gif") || ($_FILES["c_picture"]["type"][$j] == "image/jpeg")||($_FILES["c_picture"]["type"][$j] == "image/jpg")||($_FILES["c_picture"]["tmp_name"][$j] == ""))//限定檔案gif jpg
	  {
	  if (move_uploaded_file($tmpfile,$picturePathWeb."c_picture_".$j."_".$name))//上傳檔案
		{
			//echo "上傳成功<br>";
			$src = $picturePathWeb."c_picture_".$j."_".$name;
			$dest = $src;
			$destW = 400;
			$destH = 400;
			imagesResize($src,$dest,$destW,$destH);
			$c_picture = $picturePathPhone."c_picture_".$j."_".$name;
			   
			$src = $picturePathWeb."c_picture_".$j."_".$name;
			$dest = $picturePathPhone."Phone_".$j."_".$name;
			$destW = 260;
			$destH = 250;
			imagesResize($src,$dest,$destW,$destH);
			
			$sql_query2 = "INSERT into c_picture(c_number,c_picture) VALUES ('".$_SESSION['c_number']."',''$c_pictur')";
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
			?><script> window.alert ("檔案不符合規定"); window.history.back(); </script><?php
		}
	 
	 }//for迴圈
	$sql_query = "UPDATE commodity SET 
	c_address = '".$_POST['c_address']."',
	uptime = '".$uptime."',
	downtime = '".$temptime."',
	c_description = '".$_POST['c_description']."',
	c_try_height = '".$_POST['c_try_height']."',
	c_try_weight = '".$_POST['c_try_weight']."',
	c_try_shoulder = '".$_POST['c_try_shoulder']."',
	c_try_bust = '".$_POST['c_try_bust']."',
	c_try_waistline = '".$_POST['c_try_waistline']."',
	c_try_hips = '".$_POST['c_try_hips']."',
	c_try_foot = '".$_POST['c_try_foot']."',
	c_try_foot2 = '".$_POST['c_try_foot2']."' where c_number = ".$_SESSION['c_number'];
	mysql_query($sql_query);

	$sql_query2 = "UPDATE  members SET 
	score = '".$score."' where m_number = '$m_number'";
	mysql_query($sql_query2);
	

	if($_POST["c_mode"])//交貨方式
	{								
		foreach($_POST["c_mode"] as $key => $value)
		{
			$c_mode=$c_mode.",".$value;//黃,紅,藍,黑,綠
		}
	}
	$sql_query3 = "INSERT into c_mode(c_number,c_mode) VALUES ('".$_SESSION['c_number']."','$c_mode')";
	mysql_query($sql_query3);
	
		if($_POST["c_payment"])//付款方式
	{								
		foreach($_POST["c_payment"] as $key => $value1)
		{
			$c_payment=$c_payment.",".$value1;//黃,紅,藍,黑,綠
		}
	}
	$sql_query4 = "INSERT into c_payment(c_number,c_payment) VALUES ('".$_SESSION['c_number']."','$c_payment')";
	mysql_query($sql_query4);

	$sql_query5 = "UPDATE members SET 
	personally = '".$_POST['personally']."' where $m_number =".$_SESSION['m_number'];
	mysql_query($sql_query5);

}
?>
<FORM name="form1" action="" method="post">
<input type="image" img src="css/added5.png" />
</form>
</body>
</html>