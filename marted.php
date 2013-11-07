<?PHP
session_start();
?>
<?PHP
include("main.php");
include("server.php");
include("commodityPath.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看歷史評價</title>
<style type="text/css">
table
{
	border-color:#000000;border-style:solid;border-radius:10px;
}
#b
{
	position:absolute;
	border-color:#99FF99;
	border-style:solid;
	border-radius:10px;
	width:861px;
	left:-100px;
	height: 100px;
	background-color: #99FF99;
}
#c
{
	position:absolute;
	height:78px;
	width:408px;
	left:272px;
	top:19px;
}
#background20
{
	position: absolute;
	width:751px;
	height:1022px;
	left:120px;
	top: 240px;
}
#background21
{
	position:absolute;
	width:751px;
	height:1070px;
	z-index:8;
	left: 0px;
	top: 150px;
}
</style>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body>
<?PHP
	$c_number = $_GET['c_number'];
	
	//查詢商品編號
	$sql = "select * from commodity where c_number = '$c_number'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
	
	$mart = $list3['m_number'];
	
	//查詢會員的自然人憑證為0或1
	$sql_m = "select * from members where m_number = '$mart'";
	$query_m = mysql_query($sql_m);
	$list3_m = mysql_fetch_array($query_m);
	
	//利用商品編號找賣家
	$sql_mart = "select commodity.* from commodity where m_number = '$mart' and orend = '1'";
	$query_mart = mysql_query($sql_mart);
	
	//查詢此賣家的所有商品筆數
	$row = mysql_num_rows($query_mart);
?>
    <div align="center" id="background20">
    
    <div align="left" id="b">
    <div align="left" id="c">
    <strong><font size="4" color="#FF0000">
    以下的商品都是此賣家<?PHP echo $list3_m['name'] ?>的已下架商品，<br/>
    可以查看所有買家對該賣家所有的評價紀錄，<br/>
    若要返回可以點下方回賣家個人賣場，謝謝！
    </font></strong>
    </div>
    </div>
    
    <div align="center" id="background21">
     
<?PHP 
	
	$n = 1;
	
	while($list3_mart = mysql_fetch_array($query_mart))
	{
		
		if($row > 0)
		{
			
		$mart_c_number = $list3_mart['c_number'];
		
		//商品資訊
		$sql_c = "select * from commodity where c_number = '$mart_c_number'"; 
		$query_c = mysql_query($sql_c);
		$list3_c = mysql_fetch_array($query_c);

		//評價資訊
		$sql_e = "select * from f_record_ where c_number = '$mart_c_number' and m_number != '$mart'"; 
		$query_e = mysql_query($sql_e);
		$list3_e = mysql_fetch_array($query_e);	
?>
<form action="" method="post" name="form">
	<table align="center" width="500">
		<tr><td></td></tr>
    	<tr>
        	<td rowspan="6">　</td>
        	<td align="center" rowspan="6"><a href="commodity.php?c_number=<?PHP echo $list3_c[0]; ?>"><?PHP echo '<img src="'.$displayPathWeb.''.$list3_c[10].'" onload="javascript:DrawImage(this,120,120);"/>'?></a></td>
            <td rowspan="6">　</td>
			<th><font size="4" color="#880015"><strong><?PHP echo $list3_c[1]?></strong></font></th>
		</tr>
        <tr>
			<td><font size="3" color="#8080C5"><strong>
            <?PHP if($list3_e[2] == '') echo "評價分數：此商品沒有被賣出" ?>
			<?PHP if($list3_e[2] == '31') echo "評價分數：非常滿意 (5分)" ?>
            <?PHP if($list3_e[2] == '32') echo "評價分數：滿意 (3分)" ?>
            <?PHP if($list3_e[2] == '33') echo "評價分數：普通 (1分)" ?>
            <?PHP if($list3_e[2] == '34') echo "評價分數：不滿意 (-1分)" ?>
            <?PHP if($list3_e[2] == '35') echo "評價分數：非常不滿意 (-3分)" ?>
            </strong></font></td>
		</tr>
        <tr>
			<td><font size="3" color="#8080C5"><strong>評價意見：<?PHP if($list3_e[4] == '') echo "此商品沒有被賣出"; if($list3_e[4] != '') echo $list3_e[4];?></strong></font></td>
		</tr>
		<tr>
            <td><font size="3" color="#8080C5"><strong>評價時間：<?PHP if($list3_e[3] == '') echo "此商品沒有被賣出"; if($list3_e[3] != '') echo $list3_e[3];?></strong></font></td>
		</tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>上架時間：<?PHP echo $list3_c[8]?></strong></font></td>
		</tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>下架時間：<?PHP echo $list3_c[9]?></strong></font></td>
		</tr>      
        <tr><td></td></tr>
	</table>
    <br/>
<?PHP
			$n++;
		}
	}
	
	if($row==0)
	{
		echo "很抱歉，目前此賣家沒有任何歷史評價。";
	}
?>
	<p></p>
</form>

	<a align="center" href="mart.php?c_number=<?PHP echo $c_number ?>" style="color:#0000FF;text-decoration:none;"><strong>回到該賣家個人賣場</strong></a>

	</div>
	</div>
    
</body>
</html>