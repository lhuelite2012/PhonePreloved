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
<title>賣家個人賣場</title>
<style type="text/css">
table
{
	border-color:#000000;border-style:solid;border-radius:10px;
}
#time
{
	float:left;
}
#b
{
	position:absolute;
	border-color:#99FF99;
	border-style:solid;
	border-radius:10px;
	height:500px;
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
	width:551px;
	height:1070px;
	z-index:8;
	left: 240px;
	top: 150px;
}
#d
{
	border-color:#000000;
	border-style:solid;
	border-radius:10px;
	position:absolute;
	width:335px;
	height:985px;
	z-index:1;
	left: -100px;
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
	
	//查詢會員編號
	$sql_m = "select * from members where m_number = '$mart'";
	$query_m = mysql_query($sql_m);
	$list3_m = mysql_fetch_array($query_m);
	
	//利用商品編號找賣家
	$sql_mart = "select commodity.* from commodity where m_number = '$mart' and orend = '0'";
	$query_mart = mysql_query($sql_mart);
	
	//查詢此賣家的所有商品筆數
	$row = mysql_num_rows($query_mart);
?>
    <div align="center" id="background20">
    
    <div align="left" id="b">
    <div align="left" id="c">
    <strong><font size="4" color="#0000FF">
    歡迎光臨瘋二手網站，這是賣家的個人賣場，<br/>
    以下的拍賣商品都是經由同一位賣家所販賣，<br/>
    希望能找到您喜愛的商品，並祝您購物愉快！
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
			
		//出價次數
		$sql_b = "select count(*) from bid where c_number = '$mart_c_number'";
		$query_b = mysql_query($sql_b);
		$list3_b = mysql_fetch_array($query_b);
		
		$a[] = $list3_mart['downtime'];
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
			<td><font size="3" color="#8080C5"><strong>商品價格：<?PHP echo $list3_c[4]?> 元</strong></font></td>
		</tr>
        <tr>
			<td><font size="3" color="#8080C5"><strong>最高出價：<?PHP if($list3_c[2] != "0"){echo $list3_c[2];?> 元<?PHP }else{echo 目前並沒有下標出價;}?></strong></font></td>
		</tr>
		<tr>
            <td><font size="3" color="#8080C5"><strong>出價次數：<?PHP echo $list3_b[0]?></strong></font></td>
		</tr>
        <tr>
        	<td><font size="3" color="#8080C5"><strong>上架時間：<?PHP echo $list3_c[8]?></strong></font></td>
		</tr>
        
<script>
	var b = new Array(<?PHP echo count($a);?>);
</script>
<?PHP
	for($i=1;$i<= count($a);$i++){
?>
<script>
	b[<?PHP echo $i;?>]="<?PHP echo $a[$i-1];?>";
</script>
<?PHP
    }
?>
<script>
function cal()
{
	var i = 1;
	
	while(i <= <?PHP echo count($a); ?>)
	{
		var startDate = new Date();
		var endDate = new Date(b[i]);
		var spantime = (endDate - startDate)/1000;
					
		if(spantime >=0)
		{
			spantime --;
			var d = Math.floor(spantime / (24 * 3600));
			var h = Math.floor((spantime % (24*3600))/3600);
			var m = Math.floor((spantime % 3600)/(60));
			var s = Math.floor(spantime%60);
			str = d + " 天 " + h + " 小時 " + m + " 分 " + s + " 秒";
			document.getElementById("time_"+i).innerHTML = str;
		}
		else
		{
			str = "時間已到期";
			document.getElementById("time_"+i).innerHTML = str;
		}
			i++;
	}	
}
window.onload = function()
{
	setInterval(cal, 1000);
}
</script>

        <tr>
            <td><div id="time"><font size="3" color="#8080C5"><strong>剩餘時間：</strong></font></div><strong><div style="font-size:16px;color:#8080C5" id="time_<?PHP echo $n?>"></div></strong></td>
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
		echo "很抱歉，目前此賣家沒有販賣任何商品。";
	}
?>
</form>

	</div>
    
    <div align="left" id="d">
    
    <strong>
    <p></p>
    <font size="4" color="#0000FF">　<img src="素材/紙膠橘(賣家資訊.png" /></font><p></p>
    <font size="4" color="#0000FF">　賣家帳號：</font><p></p>
	<font size="4" color="#000000">　<?PHP echo $list3_m['account'] ?></font><p></p>
    <font size="4" color="#0000FF">　賣家姓名：</font>
	<font size="4" color="#000000">  <?PHP echo $list3_m['name'] ?></font><p></p>
    <font size="4" color="#0000FF">　賣家評價：</font>
	<font size="4" color="#000000">  <?PHP echo $list3_m['sell']/200 ?> 分</font><p></p>
    　------------------------------------------------------------<br/><p></p>
    <font size="4" color="#0000FF">　<img src="素材/紙膠橘(付款方式.png" /></font><p></p>
    <font size="4" color="#000000">　▼ 郵寄：匯款成功再點選交易方式</font><p></p>
    <font size="4" color="#000000">　▼ 面交：與賣家當場現金交易商品</font><p></p>
    　------------------------------------------------------------<br/><p></p>
    <font size="4" color="#0000FF">　<img src="素材/紙膠橘(交易方式.png" /></font><p></p>
	<font size="4" color="#000000">　▼ 全家店到店：到指定門市收取貨件</font><p></p>
    <font size="4" color="#000000">　▼ 7-11店到店：到指定門市收取貨件</font><p></p>
    <font size="4" color="#000000">　▼ 郵寄：等待郵差送達指定的地址</font><p></p>
    <font size="4" color="#000000">　▼ 面交：與賣家當面時純取貨商品</font><p></p>
    <font size="4" color="#FF0000">　注意：付款及交易方式是由賣家決定</font><p></p>
    　------------------------------------------------------------<br/><p></p>
    <font size="4" color="#0000FF">　<img src="素材/紙膠橘(交易流程.png" /></font><p></p>
    <font size="4" color="#000000">　▼ 填匯款單：買家填入商品收件資訊</font><p></p>
    <font size="4" color="#000000">　▼ 對帳查款：等待賣家對帳查帳成功</font><p></p>
    <font size="4" color="#000000">　▼ 賣家寄出：對帳查帳成功立即寄出</font><p></p>
    <font size="4" color="#000000">　▼ 買家收貨：成功等待買家收到商品</font><p></p>
    <font size="4" color="#000000">　▼ 互給評價：買家賣家相互給予評價</font><p></p>
    <font size="4" color="#FF0000">　注意：若交易成功，則出現綠色勾勾</font><p></p>
    </strong>
    
    </div>
	</div>
    
</body>
</html>