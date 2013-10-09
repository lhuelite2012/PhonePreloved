<?PHP
ob_start();
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
<title>查看失敗原因</title>
<style type="text/css">
#background20
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:302px;
	left:121px;
	top: 267px;
}
#background21
{
	position:absolute;
	width:751px;
	height:350px;
	z-index:8;
	left: 0px;
	top: 40px;
}
</style>
</head>
<body>
<?PHP
	$c_number = $_GET['c_number'];
	
	$sql = "select * from transaction where c_number = '$c_number'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		
	if($c_number == $row['c_number'] && $row['t_schedule'] == '交易失敗')
	{
		
		$sql_ = "select * from f_record_ where c_number = '$c_number'";
		$result_ = mysql_query($sql_);
		$row_ = mysql_fetch_array($result_);
?>
		<div id="background20">
		<div align="center" id="background21">
        
        <font size="5" color="#FF0000"><strong>查看失敗原因</strong></font>
		<p></p>
        
        <strong>
        <form action="transaction_no_update.php" method="post">
        <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
        <table align="center" border="1" width="470" style="border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
        	<tr>
            	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">查看失敗原因</font></td>
            </tr>
            <tr>
            	<td height="30"　width="170" align="center">失敗原因：</td>
                <td width="300">
				<?PHP if($row_['fr_number'] == '36') echo "買家提出－面交時，賣家未到面交地點" ?>
                <?PHP if($row_['fr_number'] == '37') echo "買家提出－買家(我)後悔下標此商品" ?>
                <?PHP if($row_['fr_number'] == '38') echo "買家提出－賣家未對帳" ?>
                <?PHP if($row_['fr_number'] == '39') echo "買家提出－賣家未寄出" ?>
                              
                <?PHP
					if($row_['fr_number'] == '40')
					{
				?>
                		買家提出－賣家未評價
                <?PHP		
					$sql__ = "select * from commodity where c_number = '$c_number'";
					$result__ = mysql_query($sql__);
					$row__ = mysql_fetch_array($result__);
										
					if($_SESSION["m_number"] == $row__['m_number'])
					{
				?>
                		<input type="submit" name="again" value="重新評價">
                <?PHP
					}
					}
				?>
                
                <?PHP if($row_['fr_number'] == '41') echo "賣家提出－面交時，買家未到面交地點" ?>
                <?PHP if($row_['fr_number'] == '42') echo "賣家提出－賣家(我)後悔上架此商品" ?>
                <?PHP if($row_['fr_number'] == '43') echo "賣家提出－買方不滿意此商品，想退貨" ?>
                <?PHP if($row_['fr_number'] == '44') echo "賣家提出－買家未匯款" ?>

                <?PHP
					if($row_['fr_number'] == '45')
					{
				?>
                		賣家提出－買家未評價
                <?PHP				
					$sql__ = "select * from commodity where c_number = '$c_number'";
					$result__ = mysql_query($sql__);
					$row__ = mysql_fetch_array($result__);
					
					if($_SESSION["m_number"] == $row__['orbidder'])
					{
				?>
                		<input type="submit" name="again" value="重新評價">
                <?PHP
					}
					}
				?>
				</td>
			</tr>
			<tr>
				<td height="30" align="center">提出時間：</td>
				<td><?PHP echo $row_['f_time'];?></td>
			</tr>
			<tr>
				<td colspan="2"height="70" align="center"><font color="#00CCCC">▲交易失敗已送出，如果原因不是未評價則無法修改。<br/>若原因為買家未評價，則買家會出現重新評價的按鈕；<br/>若原因為賣家未評價，則賣家會出現重新評價的按鈕。</font></td>
			</tr> 
        </table>
        </form>
        </strong>
        
        <p></p>    
		<a align="center" href="javascript:history.back()" style="color:#0000FF;text-decoration:none;">
    	<strong>回上一頁</strong>
    	</a>
        
        </div>
        </div>
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
?>
</body>
</html>