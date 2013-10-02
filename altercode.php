<?PHP
session_start();
?>
<?PHP
include("server.php");
include("loginConfirm.php");
include("main.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>變更密碼</title>
</head>
<body>
<?PHP
	$u = $_SESSION["m_number"];

	//查詢會員帳號
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
?>
<div id="apDiv44"><img src="素材/購物下左邊商品欄.png" width="141" height="98" />
	<div id="apDiv50"><a href="altercode.php"><img src="素材/個人資料-變更密碼綠.png" width="141" height="49" /></div>
	<div id="apDiv51"><a href="alter.php"><img src="素材/個人資料-帳號資料白.png" width="141" height="49" /></a></div>
</div>
<div id="apDiv47"><img src="素材/我的帳號下-白底.png" width="700" height="500" alt="我的帳號下白底" />
<div align="center" id="apDiv48">
<form action="altercode_.php" method="post" name="form">
	<table>
		<tr>
        	<th colspan="3"><font size="5" color="#FF0000">變更密碼</font></th>
		</tr>
		<tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
		<tr>
			<td><strong>目前使用帳號：</strong></td>
			<td><strong><?PHP echo $list3[1];?></strong></td>
		</tr>
     	<tr>
     		<td><strong>請輸入新密碼：</strong></td>
     		<td><input type="password" name="password1" id="password1" maxlength="10" onKeyUp="checkx()"></td>
            <td><strong>請輸入5~10個以內的字元。</strong></td>
        </tr>
     	<tr>
     		<td><strong>再次輸入密碼：</strong></td>
     		<td><input type="password" name="password2" id="password2" maxlength="10" onKeyUp="checkx()"></td>
     		<td><strong><div id="not"></div></strong></td>
     	</tr>
        <tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
        <tr>
            <td align="center" colspan="3">
            <input type="hidden" name="m_number" id="m_number" value="<?PHP echo $list3[0];?>">
            <div id="apDiv49"><input type="image" img src="素材/變更密碼-變更鈕.png" id="altercode" width="65" height="30" onclick="document.form.submit()">
            <a href="javascript:document.form.reset();"><img src="素材/忘記密碼-取消鈕.png" width="65" height="30"></a></div>
            </td>
     	</tr>
	</table>
</form>
</div>
</div>
</body>
</html>