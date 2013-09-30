<?PHP
session_start();
?>
<?PHP
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
<title>評價紀錄</title>
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
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body onload="MM_preloadImages('素材/全部評價鈕-藍字.png','素材/買家評價鈕-藍字.png','素材/賣家評價鈕-藍字.png')">
<?PHP
	$m_number = $_SESSION["m_number"];
	
	//查詢得標者是否為使用者
	$sql_o = "select * from commodity where orbidder = '$m_number'";
	$query_o = mysql_query($sql_o);
	
	//查詢賣家評價筆數
	$row = mysql_num_rows($query_o);
?>
<div id="apDiv62"><img src="素材/我的帳號下-白底.png" width="751" height="1102" alt="我的帳號下白底" />
<div align="center" id="apDiv63">
	<font size="5" color="#FF0000"><strong>評價紀錄</strong></font>
    <hr width="500" size="1" /><p></p>
    <font size="5" color="#0000FF"><strong>賣家評價 共 <?PHP echo $row;?> 筆</strong></font><p></p>
    <hr width="500" size="1" /><p></p>
<?PHP
	while($list3_o = mysql_fetch_row($query_o))
	{
		
		$c_number = $list3_o[0];
		$sell = $list3_o[33];

		//查詢商品名稱及得標金額
		$sql_c = "select * from commodity where c_number = '$c_number'";
		$query_c = mysql_query($sql_c);
		$list3_c = mysql_fetch_array($query_c);
			
		//查詢交易得標時間
		$sql_t = "select * from transaction where c_number = '$c_number'";
		$query_t = mysql_query($sql_t);
		$list3_t = mysql_fetch_array($query_t);
		
		//查詢評價分數及原因
		$sql_f = "select f_record_.*,fraction_.* from fraction_ join f_record_ on f_record_.fr_number = fraction_.fr_number where (f_record_.m_number = '$sell' and f_record_.c_number = '$c_number' and fraction_.fraction_type = '1') or (f_record_.m_number = '0' and f_record_.c_number = '$c_number')";
		$query_f = mysql_query($sql_f);
		$list3_f = mysql_fetch_array($query_f);
?>
<form action="" method="post" name="form">
	<table align="center" width="500">
		<tr><td></td></tr>
    	<tr>
        	<td rowspan="8">　</td>
        	<td align="center" rowspan="8"><a href="commodity.php?c_number=<?PHP echo $list3_c[0]; ?>"><?PHP echo '<img src="'.$displayPathWeb.''.$list3_c[10].'" onload="javascript:DrawImage(this,120,120);"/>'?></a></td>
            <td rowspan="8">　</td>
		</tr>
        <tr>
        	<th><font size="4" color="#880015"><strong><?PHP echo $list3_c[1]?></strong></font></th>
        </tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>
			<?PHP
			if($list3_f[0] != '' and $list3_f[0] != '0') echo 評價人：賣家;
			if($list3_f[0] == '') echo 賣家目前還沒給買家評價分數;
			if($list3_f[0] == '0' and $list3_f[6] == '1') echo 賣家提出交易失敗;
			if($list3_f[0] == '0' and $list3_f[6] == '2') echo 買家提出交易失敗;
			?>
            </strong></font></td>          
        </tr>
   		<tr>
        	<td><font size="3" color="#8080C5"><strong>評價分數：
            <?PHP if($list3_f[8] == '') { echo 尚未評價; } ?>
			<?PHP if($list3_f[8] != '') { echo $list3_f[8]/200; ?> 分<?PHP } ?>
            </strong></font></td>
        </tr>
		<tr>
        	<td><font size="3" color="#8080C5"><strong>得標金額：
			<?PHP echo $list3_c[3]?> 元
            </strong></font></td>
        </tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>得標時間：
			<?PHP echo $list3_t[4]?>
            </strong></font></td>
        </tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>評價時間：
			<?PHP if($list3_f[3] == '') { echo 尚未評價; } ?>
            <?PHP if($list3_f[3] != '') { echo $list3_f[3]; } ?>
            </strong></font></td>
        </tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>評價意見：
			<?PHP if($list3_f[4] == '') { echo 尚未評價; } ?>
            <?PHP if($list3_f[4] != '') { echo $list3_f[4]; } ?>
            </strong></font></td>
        </tr>
        <tr><td></td></tr>
	</table>
	<br/>
<?PHP
	}
	
	if($row==0)
	{
		echo "很抱歉，尚未有任何資料。";
	}
?>
</form>
</div>
    <div id="apDiv64"><a href="aller.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','素材/全部評價鈕-藍字.png',1)"><img src="素材/全部評價鈕-白字.png" name="Image2" width="131" height="61" border="0" id="Image2" /></a></div>
    <div id="apDiv65"><a href="buyer.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','素材/買家評價鈕-藍字.png',1)"><img src="素材/買家評價鈕-白字.png" name="Image3" width="131" height="61" border="0" id="Image3" /></a></div>
    <div id="apDiv66"><a href="seller.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','素材/賣家評價鈕-藍字.png',1)"><img src="素材/賣家評價鈕-白字.png" name="Image4" width="131" height="61" border="0" id="Image4" /></a></div>
</div>
</body>
</html>