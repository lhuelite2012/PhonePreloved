<?
session_start();
?>
<?
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
include("commodityPath.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>拍賣紀錄</title>
<style type="text/css">
table
{
	border-color:#000000;border-style:solid;border-radius:10px;
}
</style>
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
<style type="text/css">
#items
{
	position:absolute;
	left: 158px;
	top: 63px;
	width: 163px;
	height: 26px;
	font-size: 24px;
	color: #00F;
}
</style>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body onload="MM_preloadImages('素材/競標中鈕-藍字.png','素材/沒得標鈕-藍字.png','素材/已得標鈕-藍字.png','素材/販賣中鈕-藍字.png','素材/沒賣出鈕-藍字.png','素材/已賣出鈕-藍字.png')">
<?		
	//查詢會員帳號
	$u = $_SESSION["m_number"];
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);

	//查詢商品名稱為未得標
	$m_number = $list3[0];
	$sql_c = "select * from commodity where orend = '0'";
	$query_c = mysql_query($sql_c);
?>
<div id="apDiv56"><img src="素材/我的帳號下-白底.png" width="751" height="1102" alt="我的帳號下白底" />
<div align="center" id="apDiv61">
	<font size="5" color="#FF0000"><strong>拍賣紀錄</strong></font>
    <p></p>
    <hr width="500" size="1" /><p></p>
    <font size="5" color="#0000FF"><strong>　</strong></font><p></p>
    <hr width="500" size="1" /><p></p>
<?	
	//預設目前0筆資料
	$items = 0;
	
	while($list3_c = mysql_fetch_row($query_c))
	{
		
		$m_number = $list3[0];	
		$c_number = $list3_c[0];
	
		//查詢出價資料表有使用者出價的會員標號以及商品編號
		$sql_b = "select * from bid where m_number = '$m_number' and c_number = '$c_number'";
		$query_b = mysql_query($sql_b);
		$list3_b =  mysql_num_rows($query_b);
	
		//如果大於0
		if($list3_b > 0)
		{
		
			//則筆數加1	
			$items++;
	
			//出價最高
			//$sql_b = "select max(bid_price) from bid where c_number = '$c_number'";
			//$query_b = mysql_query($sql_b);
			//$list3_b = mysql_fetch_array($query_b);
			
			//查詢商品出價最高得標者
			$sql_bm = "select bid.*,members.name,commodity.hi_bid_price from bid join members  join commodity on commodity.orend = '0' and commodity.m_number != '$m_number' and bid.bid_price = commodity.hi_bid_price and bid.m_number = members.m_number where bid.c_number = '$c_number'";
			$query_bm = mysql_query($sql_bm);
			$list3_bm = mysql_fetch_array($query_bm);	
?>
<form action="" method="post" name="form">
	<table align="center" width="500">
		<tr><td></td></tr>
    	<tr>
        	<td rowspan="6">　</td>
        	<td align="center" rowspan="6"><a href="commodity.php?c_number=<? echo $list3_c[0]; ?>"><? echo '<img src="'.$displayPathWeb.''.$list3_c[10].'" onload="javascript:DrawImage(this,120,120);"/>'?></a></td>
            <td rowspan="6">　</td>
		</tr>
        <tr>
        	<th><label><font size="4" color="#880015"><strong><? echo $list3_c[1]?></strong></font></label></th>
        </tr>
        <tr>
			<td><label><font size="3" color="#8080C5"><strong>最高出價：<? echo $list3_c[2]?> 元</strong></font></label></td>
		</tr>
		<tr>
			<td><label><font size="3" color="#8080C5"><strong>最高出價者：<? echo $list3_bm[5]?></strong></font></label></td>
		</tr>
        <tr>
        	<td><label><font size="3" color="#8080C5"><strong>上架時間：<? echo $list3_c[8]?></strong></font></label></td>
		</tr>
        <tr>
        	<td><label><font size="3" color="#8080C5"><strong>下架時間：<? echo $list3_c[9]?></strong></font></label></td>
		</tr>
        <tr><td></td></tr>
	</table>
    <br/>
<?
		}
	}
	
	if($items==0)
	{
		echo "很抱歉，尚未有任何資料。";
	}
?>
	<div id="items"><strong>競標中 共 <? echo $items;?> 筆</strong></div>
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