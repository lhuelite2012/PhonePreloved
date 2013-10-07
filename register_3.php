<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP
session_cache_limiter('private,must_revalidate');
?>
<head>
<style type="text/css">
saveHistory{behavior:url(#default#savehistory);}
#apDiv {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 50px;
	top: 240px;
	margin: 0 auto; 
}/*註冊步驟底圖片*/
#ap {
	position:absolute;
	text-align:center;
	width:474px;
	height:308px;
	z-index:2;
	left: 212px;
	top: 170px;
	z-index:15;
	margin: 0 auto;

}/*註冊步驟欄位*/

</style>

<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>



</head>
<body >
<?PHP 
include("server.php");
if($_POST['mail'] == "")
{
	?><script> window.alert("沒有輸入驗證碼喔!請到信箱接收驗證碼。"); window.history.back(); </script><?PHP
die();
}
else if($_POST["mail"] != $_SESSION['testmail'])
{
	?><script> window.alert("您輸入的驗證碼不對喔!本系統將再傳送新的一組驗證碼，請再去信箱收一次信。"); window.history.back(); </script><?PHP
die();
}
else if($_POST["mail"] == $_SESSION['testmail'])
{?>

<?PHP include("main.php"); ?>

<div id="apDiv"><img src="素材/註冊會員3.png" width="896" height="624" alt="註冊會員3" />
<div id="ap">
<form name = "form1" action="index.php" method="post">
<table border="0" width="478" height="308">
<tr>
	<td>
    	<font color="#FFFFFF" size="+3" face="微軟正黑體"><b>恭喜您!</b><br></font>
        <br />
    	<font color="#FFFFFF" size="+3" face="微軟正黑體"><b>您已經完成註冊</b><br></font>
		
	</td>
</tr>
<tr>
	<td>
    	<center><input type="submit" id="Submit" name="Submit" value=" 確認 "></center>

	</td>
</tr>
</table>
<?PHP	
} ?>
</div>
</div>


</body>
</html>