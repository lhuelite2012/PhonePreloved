<?PHP
session_start();
?>
<?PHP
include("main.php");
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>評價紀錄</title>
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
<body onload="MM_preloadImages('素材/全部評價鈕-藍字.png','素材/買家評價鈕-藍字.png','素材/賣家評價鈕-藍字.png')">
<?PHP
	//查詢會員帳號
	$u = $_SESSION["m_number"];  
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
?>
<div id="apDiv62"><img src="素材/我的帳號下-白底.png" width="751" height="1102" alt="我的帳號下白底" />
<div align="center" id="apDiv63">
	<font size="5" color="#FF0000"><strong>評價紀錄</strong></font>
    <p></p>
    <hr width="500" size="1" />
    <p></p>
<form action="" method="post" name="form">
	<table width="300">
        <tr>
			<td><strong><font size="3" color="#0000FF">您好，<?PHP echo $list3[3]?>，歡迎進入到評價紀錄首頁</font></strong></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">目前您的評價分數為 <?PHP echo $list3['25']/200?> 分，其中：</font></strong></td>
		</tr>
        <tr>
			<td><p></p></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">評價說明：</font></strong></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">當交易完成時買賣家給予5到-3的評價</font></strong></td>
        </tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">非常滿意為5分，滿意為3分，普通為1分</font></strong></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">不滿意為-1分，非常不滿意為-3分</font></strong></td>
		</tr> 
        <tr>
            <td><strong><font size="3" color="#FF0000">(5分最高，-3分最差)</font></strong></td>
		</tr>
		<tr>
			<td><p></p></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">提出交易失敗說明：</font></strong></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#FF0000">若賣家點選交易失敗，則出現以下原因</font></strong></td>
        </tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">面交時，賣家未到面交地點 ▶ -5 分</font></strong></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">買家(我)後悔下標此商品 ▶ -5 分</font></strong></td>
		</tr> 
        <tr>
            <td><strong><font size="3" color="#0000FF">賣家未對帳 ▶ -5 分</font></strong></td>
		</tr> 
		<tr>
            <td><strong><font size="3" color="#0000FF">賣家未寄出 ▶ -5 分</font></strong></td>
		</tr> 
		<tr>
            <td><strong><font size="3" color="#0000FF">賣家未評價 ▶ 不扣分，可重新評價</font></strong></td>
		</tr> 
        <tr>
			<td><p></p></td>
		</tr> 
		<tr>
			<td><strong><font size="3" color="#0000FF">提出交易失敗說明：</font></strong></td>
		</tr> 
		<tr>
			<td><strong><font size="3" color="#FF0000">若買家點選交易失敗，則出現以下原因</font></strong></td>
        </tr>
        <tr>
			<td><strong><font size="3" color="#0000FF">面交時，買家未到面交地點 ▶ -5 分</font></strong></td>
		</tr> 
        <tr>
			<td><strong><font size="3" color="#0000FF">賣家(我)後悔上架此商品 ▶ -5 分</font></strong></td>
		</tr> 
        <tr>
            <td><strong><font size="3" color="#0000FF">買方不滿意此商品，想退貨 ▶ -5 分</font></strong></td>
		</tr> 
		<tr>
            <td><strong><font size="3" color="#0000FF">買家未匯款 ▶ -5 分</font></strong></td>
		</tr> 
		<tr>
            <td><strong><font size="3" color="#0000FF">買家未評價 ▶ 不扣分，可重新評價</font></strong></td>
		</tr> 
	</table>
</form>
</div>
    <div id="apDiv64"><a href="aller.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','素材/全部評價鈕-藍字.png',1)"><img src="素材/全部評價鈕-白字.png" name="Image2" width="131" height="61" border="0" id="Image2" /></a></div>
    <div id="apDiv65"><a href="buyer.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','素材/買家評價鈕-藍字.png',1)"><img src="素材/買家評價鈕-白字.png" name="Image3" width="131" height="61" border="0" id="Image3" /></a></div>
    <div id="apDiv66"><a href="seller.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','素材/賣家評價鈕-藍字.png',1)"><img src="素材/賣家評價鈕-白字.png" name="Image4" width="131" height="61" border="0" id="Image4" /></a></div>
</div>
</body>
</html>