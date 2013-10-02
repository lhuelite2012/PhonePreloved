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
<title>拍賣紀錄</title>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onload="MM_preloadImages('素材/競標中鈕-藍字.png','素材/沒得標鈕-藍字.png','素材/已得標鈕-藍字.png','素材/販賣中鈕-藍字.png','素材/沒賣出鈕-藍字.png','素材/已賣出鈕-藍字.png')">
<?PHP	
	//查詢會員帳號
	$u = $_SESSION["m_number"];  
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
?>
<div id="apDiv56"><img src="素材/我的帳號下-白底.png" width="751" height="1102" alt="我的帳號下白底" />
<div align="center" id="apDiv61">
	<font size="5" color="#FF0000"><strong>拍賣紀錄</strong></font>
    <p></p>
    <hr width="500" size="1" />
    <p></p>
<form action="" method="post" name="form">
	<table width="300">
        <tr>
			<td><strong><font size="3" color="#0000FF">您好，<?PHP echo $list3[3]?>，歡迎進入到拍賣紀錄首頁</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">您可以依據您所點選的連結，分別：</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">競標中、沒得標、已得標、</strong></td>
        <tr>
			<td><strong><font size="3" color="#0000FF">販賣中、沒賣出、已賣出，</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">來查詢您的拍賣紀錄。</strong></td>
		</tr>
        <tr>
        	<td><p></p></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#FF0000">再次貼心提醒您，</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#FF0000">最高出價者並不等於得標者！</strong></td>
		</tr>
        <tr>
        	<td><p></p></td>
		</tr> 
		<tr>
			<td><strong><font size="3" color="#0000FF">競標中：表示商品目前還可以繼續出價</strong></td>
		</tr>
		<tr>
			<td><strong><font size="3" color="#0000FF">沒得標：時間已經超過或已被決定得標者</strong></td>
		</tr>
		<tr>
			<td><strong><font size="3" color="#0000FF">已得標：已被使用者本人得標</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#FF0000">(而已得標中可以看到賣家付款資訊)</strong></td>
		</tr>
		<tr>
			<td><strong><font size="3" color="#0000FF">販賣中：表示商品還沒有被售出</strong></td>
		</tr>
		<tr>
			<td><strong><font size="3" color="#0000FF">沒賣出：時間已經超過或沒被會員出價，</strong></td>
		</tr>
		<tr>
			<td><strong><font size="3" color="#0000FF">或是放棄拍賣此商品(此原因會被扣評價)</strong></td>
		</tr>
		<tr>
			<td><strong><font size="3" color="#0000FF">已賣出：已被其他會員所得標</strong></td>
		</tr>
		<tr>
        	<td><p></p></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="FF0000">然而，已得標、已賣出有交易進度圖示：</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="FF0000">已得標：點選按鈕可以進行付款寄出評價</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="FF0000">已賣出：點選按鈕可以進行付款寄出評價</strong></td>
		</tr>
        <tr>
        	<td><p></p></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">選擇交易方式：未付款、未寄出、未評價</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">已付款：已付款、未寄出、未評價</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">已寄出：已付款、已寄出、未評價</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">選擇評價：已付款、已寄出、未評價</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">交易完成：已付款、已寄出、已評價</strong></td>
		</tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">交易失敗：已評價</strong></td>
		</tr> 
	</table>
</form>
</div>
	<div id="apDiv80"><a href="buying.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','素材/競標中鈕-藍字.png',1)"><img src="素材/競標中鈕-白字.png" name="Image6" width="131" height="61" border="0" id="Image6" /></a></div>
	<div id="apDiv57"><a href="lost.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','素材/沒得標鈕-藍字.png',1)"><img src="素材/沒得標鈕-白字.png" name="Image2" width="131" height="61" border="0" id="Image2" /></a></div>
  <div id="apDiv58"><a href="won.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','素材/已得標鈕-藍字.png',1)"><img src="素材/已得標鈕-白字.png" name="Image3" width="131" height="61" border="0" id="Image3" /></a></div>
    <div id="apDiv81"><a href="solding.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','素材/販賣中鈕-藍字.png',1)"><img src="素材/販賣中鈕-白字.png" name="Image7" width="131" height="61" border="0" id="Image7" /></a></div>
    <div id="apDiv59"><a href="unsold.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','素材/沒賣出鈕-藍字.png',1)"><img src="素材/沒賣出鈕-白字.png" name="Image4" width="131" height="61" border="0" id="Image4" /></a></div>
    <div id="apDiv60"><a href="sold.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','素材/已賣出鈕-藍字.png',1)"><img src="素材/已賣出鈕-白字.png" name="Image5" width="131" height="61" border="0" id="Image5" /></a></div>
</div>
</body>
</html>