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
<title>賣家給予買家評價</title>
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
	height:502px;
	left:121px;
	top: 267px;
}
#background21
{
	position:absolute;
	width:751px;
	height:450px;
	z-index:8;
	left: 0px;
	top: 40px;
}
#background14
{
	position: absolute;
	background: #FFF;
	width:494px;
	height:156px;
	left:117px;
	top: 46px;
}
#background18
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:322px;
	left:121px;
	top: 267px;
}
#background19
{
	position:absolute;
	width:751px;
	height:370px;
	z-index:8;
	left: 0px;
	top: 40px;
}
#s {
	position:absolute;
	width:100px;
	height:100px;
	z-index:1;
	left: 22px;
	top: 60px;
}
#ss {
	position:absolute;
	width:360px;
	height:20px;
	z-index:1;
	left: 85px;
	top: 12px;
}
#up {
	position:absolute;
	width:751px;
	height:20px;
	z-index:1;
	top: 225px;
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
		
	if($row[3] != '')
	{
		
		$sql_ = "select * from f_record_ where m_number = '$m_number' and c_number = '$c_number'";
		$query_ = mysql_query($sql_);
		$list3_ = mysql_num_rows($query_);
		$row_ = mysql_fetch_array($query_);
		
		if($list3_ > 0)
		{
?>
		<div id="background20">
		<div align="center" id="background21">
        
        <font size="5" color="#FF0000"><strong>賣家給予買家評價</strong></font>
		<p></p>
        
        <strong>
        <form action="transaction_evaluate_update.php" method="post">
        <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
        	<tr>
            	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">給予評價</font></td>
            </tr>
            <tr>
            	<td height="30" align="center">評價分數：</td>
                <td>
				<?PHP if($row_['fr_number'] == '26') echo "非常滿意" ?>
                <?PHP if($row_['fr_number'] == '27') echo "滿意" ?>
                <?PHP if($row_['fr_number'] == '28') echo "普通" ?>
                <?PHP if($row_['fr_number'] == '29') echo "不滿意" ?>
                <?PHP if($row_['fr_number'] == '30') echo "非常不滿意" ?>
                </td>
            </tr>
            <tr>
            	<td height="30" align="center">評價時間：</td>
                <td><?PHP echo $row_['f_time'];?></td>
            </tr>
            <tr>
            	<td height="60" align="center">評價意見：</td>
                <td><textarea rows="3" cols="18" disabled="disabled"><?PHP echo $row_['comment_'];?></textarea></td>
            </tr>
			<tr>
				<td colspan="2"height="30" align="center"><font color="#00CCCC">▲評價已送出</font></td>
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
        
        <font size="5" color="#FF0000"><strong>賣家給予買家評價</strong></font>
		<p></p>

        <strong>
        <form action="transaction_evaluate_update.php" method="post" name="commentForm" id="commentForm">
        <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
        	<tr>
            	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">給予評價</font></td>
            </tr>
            <tr>
            	<td rowspan="6" height="30" align="center">評價分數：</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="evaluate" class="required" value="26">非常滿意</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="evaluate" class="required" value="27">滿意</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="evaluate" class="required" value="28">普通</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="evaluate" class="required" value="29">不滿意</td>
            </tr>
            <tr>
            	<td height="30"><input type="radio" name="evaluate" class="required" value="30">非常不滿意</td>
            </tr>
            <tr>
            	<td height="60" align="center">評價意見：</td>
                <td><textarea name="comment" rows="3" cols="18" class="required"></textarea></td>
            </tr>
            <tr>
            	<td colspan="2" height="30" align="center">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                <input type="submit" value="確定送出">
                <input type="reset" value="重新填寫">
                </td>
            </tr>
			<tr>
                <td colspan="2"height="55" align="center"><font color="#00CCCC">▲請輸入正確的評價分數及評價意見，<br/>一旦確定送出過後則無法更改，謝謝！</font></td>
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
		<div id="background18">
		<div align="center" id="background19">
        
        <div align="center" id="background14" style="border-color:#000000;border-style:solid;border-radius:10px;">
        <div id="s">
        <img src="素材/驚嘆號.png" width="40" height="40">
        <div id="ss">
        <strong><font color="#0000FF">不好意思，商品於未出貨或未送達前不能評價！</font></strong>
		</div></div></div>
        
        <div id="up">
        <a align="center" href="sold.php" style="color:#0000FF;text-decoration:none;"><strong>回上一頁</strong></a>
        
        </div>
        
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
?>
</body>
</html>