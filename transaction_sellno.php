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
<title>賣家提出交易失敗</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("#commentForm").validate(); //表單名稱
});
</script>
<style type="text/css">
#background20
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:482px;
	left:161px;
	top: 217px;
}
#background21
{
	position:absolute;
	width:751px;
	height:530px;
	z-index:8;
	left: 0px;
	top: 40px;
}
</style>
</head>
<body>
<?PHP 
	$m_number = $_SESSION["m_number"];		
	$c_number = $_GET['c_number'];
	
	$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number,transaction.sendTimeButton from transaction join members join commodity on commodity.orbidder = transaction.m_number and members.m_number = transaction.m_number and commodity.c_number = '$c_number' where transaction.c_number = '$c_number' and commodity.m_number = '$m_number'";	
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if($_SESSION['m_number'] == $row[2])
	{
		
	if($row[0] != '交易完成' and $row[0] != '交易失敗')
	{
		
		$sql_ = "select * from f_record where c_number = '$c_number'";
		$query_ = mysql_query($sql_);
		$list3_ = mysql_num_rows($query_);
		$row_ = mysql_fetch_array($query_);
		
		if($list3_ == 1)
		{
?>
		<div id="background20">
		<div align="center" id="background21">
        
        <font size="5" color="#FF0000"><strong>賣家提出交易失敗</strong></font>
		<p></p>
        
        <strong>
        <form action="transaction_no_update.php" method="post">
        <table align="center" border="1" width="470" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
        	<tr>
            	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">提出交易失敗</font></td>
            </tr>
            <tr>
            	<td height="30" align="center">失敗原因：</td>
                <td>
				<?PHP if($row_['fr_number'] == '41') echo "面交時，買家未到面交地點" ?>
                <?PHP if($row_['fr_number'] == '42') echo "賣家(我)後悔上架此商品" ?>
                <?PHP if($row_['fr_number'] == '43') echo "買方不滿意此商品，想退貨" ?>
                <?PHP if($row_['fr_number'] == '44') echo "買家未匯款" ?>
                <?PHP if($row_['fr_number'] == '45') echo "買家未評價" ?>
                </td>
            </tr>
            <tr>
            	<td height="30" align="center">提出時間：</td>
                <td><?PHP echo $row_['f_time'];?></td>
            </tr>
			<tr>
				<td colspan="2"height="30" align="center"><font color="#00CCCC">▲交易失敗已送出</font></td>
			</tr> 
        </table>
        </form>
        </strong>
        
        <p></p>    
		<a align="center" href="sold.php" style="color:#0000FF;text-decoration:none;">
    	<strong>回上一頁</strong>
    	</a>
        
        </div>
        </div>
<?PHP
		}
		else
		{
?>
		<div id="background20">
		<div align="center" id="background21">
        
        <font size="5" color="#FF0000"><strong>賣家提出交易失敗</strong></font>
		<p></p>

        <strong>
        <form action="transaction_no_update.php" method="post" name="commentForm" id="commentForm">
        <table align="center" border="1" width="470" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
        	<tr>
            	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">提出交易失敗</font></td>
            </tr>
            <tr>
            	<td rowspan="6" height="30" align="center">失敗原因：</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="lost" class="required" value="41">面交時，買家未到面交地點</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="lost" class="required" value="42">賣家(我)後悔上架此商品</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="lost" class="required" value="43">買方不滿意此商品，想退貨</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="lost" class="required" value="44">買家未匯款</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="lost" class="required" value="45">買家未評價</td>
            </tr>
            <tr>
                <td colspan="2"height="70" align="center"><font color="#FF0000">一、點選第一項至第四項者，扣點數一千點<br/>二、第二項為扣賣家點數，其餘扣買家點數<br/>三、若點選買家未評價，之後仍可繼續修改</font></td>
			</tr>
			<tr>
                <td colspan="2"height="70" align="center"><font color="#00CCCC">▲請慎重選擇正確的失敗原因，<br/>可以先和買家聯絡、進行溝通，<br/>如確定送出則無法更改，謝謝！</font></td>
			</tr>
            <tr>
            	<td colspan="2" height="30" align="center">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                <input type="submit" value="確定送出">
                <input type="reset" value="重新填寫">
                </td>
            </tr>
        </table>
        </form>
        </strong>
        
        <p></p>    
		<a align="center" href="sold.php" style="color:#0000FF;text-decoration:none;">
    	<strong>回上一頁</strong>
    	</a>
        
        </div>
        </div>	
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