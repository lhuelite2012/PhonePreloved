<?PHP
session_start();
include("main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP
session_cache_limiter('private,must_revalidate');
?>
<head>
<style type="text/css">
saveHistory{behavior:url(#default#savehistory);}

.ap{
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left:50px;
	top: 240px;
	margin: 0 auto; 
	
}/*註冊步驟底圖片*/

#apDiv{
	position:absolute;
	text-align:center;
	width:474px;
	height:308px;
	z-index:2;
	left: 210px;
	top: 190px;
	z-index:15;
}/*註冊步驟2欄位*/

p{
	padding:0 8 0 8;
}
c{
	color:#FF0000;
	font-size:20px;
	font-weight:500;
	padding:0 8 0 8;

}
</style>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>


</head>
<body >


<div class="ap"><img src="素材/註冊會員2.png" width="896" height="624" alt="註冊會員2" />
  <div id="apDiv">
  <?PHP
include("server.php");
include("graph_.php");
$account = $_SESSION['account'];
$_SESSION['testmail'] = $_SESSION['test'];
//echo $_SESSION['account']; 
//echo $_SESSION['testmail'];
//echo $_SESSION['test'];
?>
<form name = "form1" action="register_3.php" method="post">
<table border="0" width="474" height="286">
<tr>
	<td>
    	<font color="#FFFFFF" size="+2" face="微軟正黑體"><b>感謝您的註冊</b><br></font>
   	  <font color="#FFFFFF" size="+2" face="微軟正黑體"><b>系統發送了一封驗證郵件至您的信箱，</b><br></font>
   	  <font color="#FFFFFF" size="+2" face="微軟正黑體"><b>請盡速進行驗證。</b><br></font>
      <font color="#FFFFFF" size="+2" face="微軟正黑體"><b>謝謝</b></font>
	</td>
</tr>
<tr>
	<td>
    	<font color="#FFFFFF" size="+1" face="微軟正黑體"><b>請輸入驗證碼</b></font>
		<input type="text" name="mail" id="mail" size="15" />
	</td>
</tr>
<tr>
<tr>
	<td height="32">
    	<center><input type="submit" id="Submit" name="Submit" value="送出"> 
    </td>
</tr>
</table>
<table width="474">
<tr>
	<td>
		
		<?PHP //<font size="+1" face="微軟正黑體" style="font-weight:800;"><center><p>獲得點數：<c>
		$sql2="select score from members where account='$account'";
		$query2= mysql_query($sql2);
		$rows = mysql_fetch_array($query2);
		 $rows['score'];
		?></c></p></center></font>
    </td>
</tr>
</table>

	<?PHP
			$User="lhuelite2012@gmail.com";
			$Pass="hahahahahaha";

			// 解壓縮後的檔案位置
			require("C:/AppServ/www/register_phpMailer/class.phpmailer.php");

			// 產生 Mailer 實體
			$mail = new PHPMailer();

			$mail->IsSMTP(); // 設定為 SMTP 方式寄信
			$mail->SMTPSecure = "ssl"; 
			$mail->Host = "smtp.gmail.com"; 	
			$mail->Port = 465;
			$mail->SMTPAuth = true; // SMTP 伺服器的設定，以及驗證資訊      

			// SMTP 驗證的使用者資訊
			$mail->Username = $User;
			$mail->Password = $Pass;    

			$mail->From = "lhuelite2012@gmail.com"; //寄件人
			$mail->AddAddress($account, "收信人"); // 收件人

			// 電郵內容，以下為發送 HTML 格式的郵件
			$mail->IsHTML(true); 									//設置郵件格式為HTML
			$mail->CharSet = 'UTF-8';								//設定編碼
			$mail->Encoding = "base64";								//設定信件編碼
			$FromName = "=?UTF-8?B?".base64_encode($FromName)."?=";
			$mail->FromName = "瘋二手 Phone Reloved";				//寄件人名稱
			$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
			$mail->Subject = "瘋二手會員信箱驗證"; 						//郵件標題
			$mail->Body = "您的驗證碼為：".$_SESSION['testmail']."<br/>"; 				//郵件內容
			$mail->Body .= "請盡速回網頁進行驗證<br/>";
			$mail->Body .= "感謝您!"; 
						
			$rzt = '';
		
			if(!$mail->Send())
			{
				$rzt .= "Message was not sent <p>";
				$rzt .= "Mailer Error: " . $mail->ErrorInfo;
				exit;
			}
			if($_POST['new'] == "再傳一次")
			{
			$User="lhuelite2012@gmail.com";
			$Pass="hahahahahaha";

			// 解壓縮後的檔案位置
			require("C:/AppServ/www/phpMailer/class.phpmailer.php");

			// 產生 Mailer 實體
			$mail = new PHPMailer();

			$mail->IsSMTP(); // 設定為 SMTP 方式寄信
			$mail->SMTPSecure = "ssl"; 
			$mail->Host = "smtp.gmail.com"; 	
			$mail->Port = 465;
			$mail->SMTPAuth = true; // SMTP 伺服器的設定，以及驗證資訊      

			// SMTP 驗證的使用者資訊
			$mail->Username = $User;
			$mail->Password = $Pass;    

			$mail->From = "lhuelite2012@gmail.com"; //寄件人
			$mail->AddAddress($account, "收信人"); // 收件人

			// 電郵內容，以下為發送 HTML 格式的郵件
			$mail->IsHTML(true); 									//設置郵件格式為HTML
			$mail->CharSet = 'UTF-8';								//設定編碼
			$mail->Encoding = "base64";								//設定信件編碼
			$FromName = "=?UTF-8?B?".base64_encode($FromName)."?=";
			$mail->FromName = "瘋二手 Phone Reloved";				//寄件人名稱
			$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
			$mail->Subject = "瘋二手會員信箱驗證"; 						//郵件標題
			$mail->Body = "您的驗證碼為：".$_SESSION['testmail']."<br>"; 				//郵件內容
			$mail->Body .= "請盡速回網頁進行驗證<br/>";
			$mail->Body .= "感謝您!"; 
						
			$rzt = '';
		
			if(!$mail->Send())
			{
				$rzt .= "Message was not sent <p>";
				$rzt .= "Mailer Error: " . $mail->ErrorInfo;
				exit;
			}
			?><script> window.alert("已傳送驗整碼至信箱。");</script><?PHP
die();
			}
			
?>
</form>
  </div></div>
</div>
</div>

</body>
</html>