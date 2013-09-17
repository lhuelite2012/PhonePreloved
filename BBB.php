<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
			$uploaddir2="C:/AppServ/www/movie/";
			$tmpfile2=$_FILES["c_movie"]["tmp_name"];
			$file2=mb_convert_encoding($_FILES["c_movie"]["name"],"big5","utf8");
			if(move_uploaded_file($tmpfile2,$uploaddir2.$file2))
			{
				echo "上傳成功"."<br>";
				//header("Location: http://localhost/added4.php?id=".$_GET['id']."&gender=".$_GET['gender']."&s_number=".$_GET['s_number']."&c_name=".$c_name."&location=".$location."&oan=".$oan."&c_mp=".$c_mp."&c_movie=".$c_movie."&colors_number=".$colors_number."&material=".$material."&c_price=".$c_price."&lowest_record=".$lowest_record."&pop=".$pop."&c_date=".$c_date."&c_height=".$c_height."&c_shoulder=".$c_shoulder."&c_bust=" .$c_bust."&c_waistline=".$c_waistline."&c_hips=".$c_hips."&size=".$size."&s_size=".$s_size."&UDHeight=".$UDHeight."&LRLength=".$LRLength."&bWidth=".$bWidth."&MWidth=".$MWidth."&SLongest=".$SLongest);
			}
			else
			{
				echo "上傳失敗"."<br>";
				switch ($_FILES["c_movie"]["error"])
				{
					case 1:
					?><script> window.alert("失敗原因:影片大小超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?
				
					case 2:
					?><script> window.alert ("失敗原因:影片大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?
				
					case 3:
					?><script> window.alert ("失敗原因:影片上傳不完整"); window.history.back(); </script><?
				
					case 4:
					?><script> window.alert("失敗原因:影片沒有檔案上傳"); window.history.back(); </script><?
				
					case 6:
					?><script> window.alert('失敗原因:影片暫存資料夾不存在'); window.history.back(); </script> <?
				
					case 7:
					?><script> window.alert ("失敗原因:影片上傳檔案無法寫入"); window.history.back(); 
					</script><?
				
					case 8:
					?><script> window.alert ("失敗原因:影片上傳停止"); window.history.back(); </script><?
				}	
			}

======			

<tr>
	<td rowspan="4">
		*忘記密碼問題<br>
        <FONT color="#FF0000" SIZE=2>（兩個必須選不同問題）</FONT>
	</td>

	<td>
	<select id="f_password" name="f_password" size="1">
		<option value="請選擇" selected="selected">＝＝＝＝＝請選擇＝＝＝＝＝  </option>
		<option value="我最喜歡的作者名字？" >我最喜歡的作者名字？  </option>
		<option value="我的寵物名字？">我的寵物名字？ </option>
		<option value="我媽媽的生日？">我媽媽的生日？  </option>
		<option value="我爸爸的生日？">我爸爸的生日？ </option>
		<option value="我第一隻寵物是什麼？">我第一隻寵物是什麼？  </option>
		<option value="我最喜歡的餐廳是什麼？">我最喜歡的餐廳是什麼？ </option>
		<option value="我最喜歡的運動是什麼？">我最喜歡的運動是什麼？  </option>
	</select>
	</td>
</tr>
<tr>
	<td>
	<input type="text" id="f_answer" name="f_answer" size="30">
	</td>
</tr>
<tr>
	<td>
	<select id="f_password2" name="f_password2" size="1">
		<option value="請選擇" selected="selected">＝＝＝＝＝請選擇＝＝＝＝＝  </option>
		<option value="我最喜歡的作者名字？" >我最喜歡的作者名字？  </option>
		<option value="我的寵物名字？">我的寵物名字？ </option>
		<option value="我媽媽的生日？">我媽媽的生日？  </option>
		<option value="我爸爸的生日？">我爸爸的生日？ </option>
		<option value="我第一隻寵物是什麼？">我第一隻寵物是什麼？  </option>
    	<option value="我最喜歡的餐廳是什麼？">我最喜歡的餐廳是什麼？ </option>
		<option value="我最喜歡的運動是什麼？">我最喜歡的運動是什麼？  </option>
	</td>
</tr>
<tr>
	<td>
	<input type="text" id="f_answer2" name="f_answer2" size="30">
	</td>
</tr>

======
				else//上傳大頭照失敗
				{
					switch ($_FILES["file"]["error"])

					{
					case 1:
					?><script> window.alert("失敗原因:圖片大小超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?
					break;
					case 2:
					?><script> window.alert ("失敗原因:圖片大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?
					break;
					case 3:
					?><script> window.alert ("失敗原因:圖片上傳不完整"); window.history.back(); </script><?
					break;
					case 4:
					?><script> window.alert("失敗原因:圖片沒有檔案上傳"); window.history.back(); </script><?
					break;
					case 6:
					?><script> window.alert('失敗原因:圖片暫存資料夾不存在'); window.history.back(); </script> <?
					break;
					case 7:
					?><script> window.alert ("失敗原因:圖片上傳檔案無法寫入"); window.history.back(); 
					</script><?
				
					case 8:
					?><script> window.alert ("失敗原因:圖片上傳停止"); window.history.back(); </script><?
				break;

  			}//switch
		}//大頭照else


======
			header("Location: http://localhost/register1.php?account=".$account."&password=".$password."&name=".$name."&gender=".$gender."&birthday=".$birthday."&phone=".$phone."&file=".$file."&height=".$height."&clothes_size=".$clothes_size."&bust=".$bust."&waistline=".$waistline."&hips=".$hips."&shoulder=".$shoulder."&shoes_size2=".$shoes_size2."&shoes_size=".$shoes_size."&c_address=".$c_address."&colors=".$colors."&b_number=".$b_number."&score=".$score);
			
=======
 $uploaddir="C:/AppServ/www/file/";//上傳檔案存放位置
 $tmpfile=$_FILES["file"]["tmp_name"];//server端站存檔名
 $file2=mb_convert_encoding($_FILES["file"]["name"],"big5","utf8");//儲存檔案名稱,name真實的檔名,big5 utf8 修改中文檔案亂碼問題
 if (($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg"))//限定檔案gif jpg
  {
  if (move_uploaded_file($tmpfile,$uploaddir.$file2))//上傳檔案
    {	
   echo "上傳成功<br>";
    $file = $_FILES["file"]["name"];
	$score = $score +5;
    }//上傳檔案if
  	else//上傳檔案
    	{
     		echo "上傳失敗!<br> ";
	 			switch ($_FILES["file"]["error"])
			{
				case 1:
				?><script> window.alert("失敗原因:圖片大小超過php.ini內設定upload_max_filesize"); window.history.back(); </script><?
				break;
				case 2:
				?><script> window.alert ("失敗原因:圖片大小超過表單設定MAX_FILE_SIZE"); window.history.back(); </script><?
				break;
				case 3:
				?><script> window.alert ("失敗原因:圖片上傳不完整"); window.history.back(); </script><?
				break;
				case 4:
				?><script> window.alert("失敗原因:圖片沒有檔案上傳"); window.history.back(); </script><?
				break;
				case 6:
				?><script> window.alert('失敗原因:圖片暫存資料夾不存在'); window.history.back(); </script> <?
				break;
				case 7:
				?><script> window.alert ("失敗原因:圖片上傳檔案無法寫入"); window.history.back(); 
				</script><?
				
				case 8:
				?><script> window.alert ("失敗原因:圖片上傳停止"); window.history.back(); </script><?
				break;
			}//switch
    	}//上傳檔案else
  }//限定檔案if
 else//限定檔案
  {
	?><script> window.alert ("檔案不合法"); window.history.back(); </script><?
  }

============
        <script>
			$(document).ready(function() {
			/* 先停止讀取狀態 */
			$('#Loading').hide();
			/* 填寫好 email 欄位，按下 Tab 會進行讀取 */
			$('#account').blur(function(){
			/* 讀取 email 欄位 */
			var a = $("#account").val();
			/* email 正規語法 */
			var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
			/* 簡易驗證 email */
			if(filter.test(a)){
        	/* 讀取狀態 */
        	$('#Loading').show();
        	/* AJAX 比對資料庫 */
        	$.post("<?php echo base_url()?>controller_name/check_email_availablity", {
           		email: $('#account').val()
        	}, function(response){
            /* 驗證後讀取 reponse 狀態 */
            $('#Loading').hide();
            setTimeout("finishAjax('Loading', '"+escape(response)+"')", 400);
        });
        return false;
    }
});
		</script>
        
==========
?id=<? echo $_GET['id'];?>&gender=<? echo $_GET['gender'];?>&s_number=<? echo $_GET['s_number'];?>&c_name=<? echo $c_name;?>&location=<? echo $location;?>&oan=<? echo $oan;?>&c_mp=<? echo $c_mp;?>&c_movie=<? echo $c_movie;?>&material=<? echo $material?>&colors_number=<? echo $colors_number?>&c_price=<? echo $c_price;?>&lowest_record=<? echo $lowest_record;?>&pop=<? echo $pop;?>&c_date=<? echo $c_date;?>&c_height=<? echo $c_height;?>&c_shoulder=<? echo $c_shoulder;?>&c_bust=<? echo $c_bust;?>&c_waistline=<? echo $c_waistline;?>&c_hips=<? echo $c_hips;?>&size=<? echo $size;?>&s_size=<? echo $s_size;?>&UDHeight=<? echo $UDHeight;?>&LRLength=<? echo $LRLength;?>&bWidth=<? echo $bWidth;?>&MWidth=<? echo $MWidth;?>&SLongest=<? echo $SLongest;?>

==========
else if($_FILES['file']['error']==4)//上傳檔案
		{
			$c_address = $_POST['City']+ $_POST['Canton']+$_POST['address'];
			$sql_query="INSERT into members (account
,password,name,gender,birthday,phone,file,height,clothes_size,bust,waistline,hips,shoulder,shoes_size,shoes_size2,c_address,score) 
			VALUES (
			'".$_POST['account']."',
			'".$_POST['password']."',
			'".$_POST['name']."',
			'".$_POST['gender']."',
			'".$_POST['birthday']."',
			'".$_POST['phone']."',
			'".$_POST['file']."',
			'".$_POST['height']."',
			'".$_POST['clothes_size']."',
			'".$_POST['bust']."',
			'".$_POST['waistline']."',
			'".$_POST['hips']."',
			'".$_POST['shoulder']."',
			'".$_POST['shoes_size']."',
			'".$_POST['shoes_size2']."',
			'$c_address',
			'$score')";
			mysql_query($sql_query);

			if(mysql_query($sql_query))
			{
				$sql2="select m_number from members where account='$account'";
				$query2= mysql_query($sql2);
				$rows = mysql_fetch_array($query2);
			}

			$sql_query2="INSERT into p_brand (m_number,b_number) 
			VALUES ('".$rows["m_number"]."','".$_POST['b_number']."')";
			mysql_query($sql_query2);

			foreach($_POST["colors"] as $key => $value)
			{
				$sql_query3="INSERT into p_color (m_number,colors)VALUES ('".$rows["m_number"]."','{$value}')";//把colors被選取項目存在value字串裡
				mysql_query($sql_query3);
		
			}
			if(mysql_query($sql_query2))
			{
				echo "等於4";
			//header("Location: http://localhost/register1.php");
			}
		}//上傳檔案else
        
        
=========
register2.php
<? //<font color="#FFFFFF" size="+1" face="微軟正黑體"><center><b>共獲得點數：</b>
			//echo $score;
		//</center></font>?>
        
02.
			if($_POST['mail'] != "")
			{
				
			}
			else if($_POST['mail'] != $testmail)
			{
				echo "您輸入的驗證碼不對,請再輸入一次。";
			}


=========
register.php

<?
			if($_POST['account'] != "")
			{
			$account = $_POST['account'];
			$sql ="select account from members where account = '$account'";
			$query= mysql_query($sql);
			$rows = mysql_fetch_array($query);
			
			if($_POST['account'] == $rows['account'])
			{
			echo $_POST['account']."這個帳號已經有人使用了喔!";
			}
			}
        ?>

=========
8/26 question.php

<form name="form1" action="question2.php" method="post" enctype="multipart/form-data">

<table>
<tr>
	<td>
    <FONT color="#000000" SIZE=4 face="微軟正黑體">上傳照片:</FONT>
    </td>
	<td>
		<input type="file" id="i_picture" name="i_picture" size=30>
        <input type="hidden" name="mzx_file_size" value="10240000"><FONT color="#FF0000" SIZE=1>最大不可超過100M</FONT>

    </td>
</tr>
<tr>
	<td>
    	<FONT color="#000000" SIZE=4 face="微軟正黑體">標題:</FONT>
    </td>
    <td>
    	<input type="i_title" id="i_title" name="title" size="40" />
    </td>
</tr>

<tr>
	<td>
    	<FONT color="#000000" SIZE=4 face="微軟正黑體">發問:</FONT>
    </td>
    <td>
    	<textarea id="i_content" name="i_content" rows="20" cols="50"></textarea>
    </td>
</tr>

<tr>
	<td colspan="2">
		<center>
        <input type="submit" id="cancel" name="cancel" onchange="javascript:history.back(1)" value="取消">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" id="Submit" name="Submit" value="送出">
        </center>
    </td>
</tr>

</table>

=========

</body>
</html>