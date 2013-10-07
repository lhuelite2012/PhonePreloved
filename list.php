<?PHP
session_start();
?>
<?PHP
include("main.php");
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
<title>追蹤清單</title>
<style type="text/css">
table
{
	border-color:#000000;border-style:solid;border-radius:10px;
}
#time
{
	float:left;
}
</style>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body>
<?PHP
	//查詢會員帳號
	$u = $_SESSION["m_number"];  
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
	
	//查詢會員的追蹤清單
	$m_number = $list3[0];
	$sql_t = "select track.*,commodity.downtime from track join commodity on track.c_number = commodity.c_number where track.m_number = '$u'";
	$query_t = mysql_query($sql_t);
	
	//查詢使用者追蹤清單筆數
	$row = mysql_num_rows($query_t);
?>
<div id="apDiv56"><img src="素材/我的帳號下-白底.png" width="751" height="1102" alt="我的帳號下白底" />
    <div align="center" id="apDiv67">
    
    <font size="5" color="#FF0000"><strong>追蹤清單</strong></font>
    <p></p>
    
<?PHP 
	$n = 1;
	
	while($list3_t = mysql_fetch_array($query_t))
	{
		
		if($row > 0)
		{
		
		$c_number = $list3_t[1];
		$m_number = $list3[0];
		
		//商品資訊
		$sql_c = "select * from commodity where c_number = '$c_number'"; 
		$query_c = mysql_query($sql_c);
		$list3_c = mysql_fetch_array($query_c);
			
		//出價次數
		$sql_b = "select count(*) from bid where c_number = '$c_number'";
		$query_b = mysql_query($sql_b);
		$list3_b = mysql_fetch_array($query_b);
		
		$a[] = $list3_t['downtime'];
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
		echo "很抱歉，尚未有任何商品被追蹤。";
	}
?>
</form>
</div>
</div>
</body>
</html>