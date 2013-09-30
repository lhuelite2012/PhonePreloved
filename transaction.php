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
<title>賣家付款資訊</title>
<style type="text/css">
#background1
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:612px;
	left:161px;
	top: 217px;
}
#background2
{
	position:absolute;
	width:751px;
	height:660px;
	z-index:8;
	left: 0px;
	top: 40px;
}
</style>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body>
<div id="background1">
<div align="center" id="background2">

    <font size="5" color="#FF0000"><strong>賣家付款資訊</strong></font>
    <p></p>
  
<?PHP	
	$m_number = $_SESSION["m_number"];
	
	if(isset($_GET['c_number'])) //若已得標
	{
		
		$c_number = $_GET['c_number'];
		$sql = "select * from transaction where c_number = '$c_number'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$sql = "select transaction.*,commodity.c_mp,commodity.c_number,commodity.c_name,commodity.bid_price,commodity.c_gender,commodity.location,commodity.oan,commodity.m_number,members.* from transaction join commodity join members on transaction.c_number = commodity.c_number and commodity.m_number = members.m_number where transaction.c_number = '$c_number' and transaction.m_number = '$m_number'";
		$result = mysql_query($sql);
		$true = mysql_num_rows($result);
		$row = mysql_fetch_array($result);
		
		if($true > 0) //若transaction內有交易資料
		{
?>
<?PHP //style="table-layout:fixed" 平均分配欄寬 ?>
<table width="570" height="450" border="1" cellspacing="3" bordercolor="#cococo" style="border-collapse:collapse">
    <tr height="30">
        <th width="170px" bgcolor="#999999"><font color="#FFFFFF">商品名稱：</font></th>
        <th width="200px"><?PHP echo $row['c_name']; ?></th>  
        <th width="200px" rowspan="5"><?PHP echo '<img src="'.$displayPathWeb.''.$row['c_mp'].'"onload="javascript:DrawImage(this,120,120);"/>'?></th>  
	</tr>
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">得標價格：</font></th>
        <th><?PHP echo $row['bid_price']; ?></th>
	</tr>
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">商品性質：</font></th>
        <th><?PHP echo $row['c_gender']; ?></th>
	</tr>
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">商品所在：</font></th>
        <th><?PHP echo $row['location']; ?></th>
	</tr>
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">商品新舊：</font></th>
        <th><?PHP echo $row['oan']; ?></th>
	</tr>
    
    <tr height="30">
		<th colspan="3" bgcolor="#999999">
        <font color="#FFFFFF">賣家付款方式為：</font><font color="#FFFF99">
		<?PHP 
			//查詢賣家付款方式
			$sql_p = "select * from  c_payment where c_number = '$c_number'";
			$result_p = mysql_query($sql_p);
		
			while($row_p = mysql_fetch_array($result_p))
			{
				echo $row_p['c_payment']." "; 
			}
		?>
        </font>
        </th>
	</tr>
        
	<tr height="30">
		<th colspan="3" bgcolor="#999999">
        <font color="#FFFFFF">賣家交易方式為：</font><font color="#FFFF99">
		<?PHP 
			//查詢賣家交易方式
			$sql_m = "select * from c_mode where c_number = '$c_number'";
			$result_m = mysql_query($sql_m);
		
			while($row_m = mysql_fetch_array($result_m))
			{
				echo $row_m['c_mode']." "; 
			}
		?>
        </font>
        </th>
	</tr>
    
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">賣家帳號：</font></th>
        <th colspan="2"><?PHP echo $row['account']; ?></th>
	</tr>
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">賣家姓名：</font></th>
        <th colspan="2"><?PHP echo $row['name']; ?></th>
	</tr>
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">賣家電話：</font></th>
        <th colspan="2"><?PHP echo $row['phone']; ?></th>
	</tr>
	<tr height="30">
        <th bgcolor="#999999"><font color="#FFFFFF">賣家FB帳號：</font></th>
        <th colspan="2">
        <?PHP 
			if($row['fb_id'] != '')
			{ 
				echo $row['fb_id']; 
			}
			else
			{
				echo "目前賣家不提供FB帳號";
			}
		?>
        </th>
	</tr>
    <tr height="30">
        <th bgcolor="#999999"><font color="#FFFFFF">賣家Line帳號：</font></th>
        <th colspan="2">
		<?PHP 
			if($row['line_id'] != '')
			{ 
				echo $row['line_id']; 
			}
			else
			{
				echo "目前賣家不提供Line帳號";
			}
		?>
        </th>
    </tr>
	<?PHP 
		 
		//查詢賣家付款方式
		$sql_pp = "select * from c_payment where c_number = '$c_number'";
		$result_pp = mysql_query($sql_pp);
		
		while($row_pp = mysql_fetch_array($result_pp))
		{
	
			if($row_pp['c_payment'] == '匯款')
			{
	?>
    <tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">賣家銀行帳號：</font></th>
        <th colspan="2"><?PHP echo $row['rank_account']; ?></th>
    </tr>
	<?PHP 
			}
	
			if($row_pp['c_payment'] == '面交')
			{
	?>							
	<tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">賣家面交時段：</font></th>
        <th colspan="2"><?PHP echo $row['per_time']; ?></th>
	</tr>
    <tr height="30">
		<th bgcolor="#999999"><font color="#FFFFFF">賣家面交詳細資料：</font></th>
        <th colspan="2"><?PHP echo $row['personally']; ?></th>
	</tr>
    <?PHP 
			}
		}
	?>
</table>
	
    <p></p>    
	<a align="center" href="won.php" style="color:#0000FF;text-decoration:none;">
    <strong>回上一頁</strong>
    </a>
    
<?PHP 
		}
		else
		{
?>
			<script>
				location.href = './index.php';
			</script>
<?PHP
		}
	}
	else
	{
?>
		<script>
			location.href = './index.php';
		</script>
<?PHP
	}
?>
</div>
</div>
</body>
</html>