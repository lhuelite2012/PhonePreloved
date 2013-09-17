<?
session_start();
?>
<?
include("server.php");
include("main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>忘記密碼</title>
</head>
<body>
<?
	//查詢會員帳號
	$u = $_POST["account"];
	$sql = "select * from members where account = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
?>
<div id=ce2>
<div id="apDiv36"><img src="素材/忘記密碼底.png" alt="查詢密碼底" width="739" height="590" />
<div align="center" id="apDiv37">
<form action="" method="post" name="form">
	<table>
		<tr>
			<th><font size="5" color="#FF0000">忘記密碼</font></th>
		</tr>
		<tr>
			<td><hr size="1" /></td>
		</tr>
		<tr>
			<td><strong>請輸入您的電子信箱以及驗證碼，我們會將密碼寄至信箱，謝謝您。</strong></td>
		</tr>
        <tr>
            <td><p></p></td>
        </tr>
		<tr>
			<td align="center">
			<strong>信箱：</strong><input type="text" name="account" id="account">
            </td>
        </tr>
        <tr>
            <td align="center">
            <strong>驗證：</strong><input type="text" name="graph" id="graph" maxlength="7">
            </td>
        </tr>
        <tr>
            <td><p></p></td>
        </tr>
        <tr>
            <div id="apDiv55"><td a align="center">
            <img src="graph.php" alt="show image">
            <input type="hidden" id="search" name="search">
            <!--<input type="image" img src="素材/按鈕-查詢.png" width="65" height="30" onclick="document.form.submit()">-->
            <input type="image" img src="素材/按鈕-查詢.png" width="65" height="30" onclick="subtxt()">
            <a href="javascript:document.form.reset();"><img src="素材/忘記密碼-取消鈕.png" width="65" height="30"></a>
            </td></div>
        </tr>
        <tr>
			<td><hr size="1" /></td>
		</tr>
	</table>
</form>
<script>
	function subtxt()
	{
		document.getElementById('search').value="search";
		document.form.submit();
	}
</script>
<?php
	if($_POST["search"] == "search")
	{
		
		//如果沒有輸入電子信箱
		if($_POST["account"] == "") 
		{
			echo "您沒有輸入電子信箱，請再輸入一次。";
?>
<p></p>
<?php
		}
		
		//如果沒有輸入驗證碼
		else if($_POST["graph"] == "")
		{
			echo "您沒有輸入驗證碼，請再輸入一次。";
?>
<p></p>
<?php
		}
		
		//如果輸入的驗證碼有錯誤
		else if($_POST["graph"] != $_SESSION['test'])
		{
			echo "不好意思，您輸入的信箱或是驗證碼有錯誤，請重新輸入，謝謝";
?>
<p></p>
<?php
		}
		
		//如果輸入的信箱有存在資料庫中
		else if($_POST["account"]==$list3[1])
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
			$mail->AddAddress($_POST["account"], "收信人"); // 收件人

			// 電郵內容，以下為發送 HTML 格式的郵件
			$mail->IsHTML(true); 									//設置郵件格式為HTML
			$mail->CharSet = 'UTF-8';								//設定編碼
			$mail->Encoding = "base64";								//設定信件編碼
			$FromName = "=?UTF-8?B?".base64_encode($FromName)."?=";
			$mail->FromName = "瘋二手 Phone Reloved";				//寄件人名稱
			$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
			$mail->Subject = "瘋二手會員密碼"; 						//郵件標題
			$mail->Body = "歡迎您加入瘋二手會員!!!<br/>"; 				//郵件內容
			$mail->Body .= "謝謝您的使用!!!<br/>";
			$mail->Body .= "您個人的會員密碼為 ".$list3[2]; 
						
			$rzt = '';
		
			if(!$mail->Send())
			{
				$rzt .= "Message was not sent <p>";
				$rzt .= "Mailer Error: " . $mail->ErrorInfo;
				exit;
			}
			else
			{
				echo "您輸入了：".$_POST["account"]; //顯示您輸入的資料
?>
<p></p>
<?php
				echo "謝謝您的使用，我們已將您的密碼寄至您的信箱中。";
			}
		}
		else
		{
			echo "不好意思，您輸入的信箱或是驗證碼有錯誤，請重新輸入，謝謝";
		}
	}
?>
</div>
</div>
</div>
</body>
</html>