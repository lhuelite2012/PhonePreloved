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
<title>選擇付款及交易方式</title>
<style type="text/css">
#background3
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:742px;
	left:161px;
	top: 217px;
}
#background4
{
	position:absolute;
	width:751px;
	height:790px;
	z-index:8;
	left: 0px;
	top: 40px;
}
#choose1
{
	position:absolute;
	width:751px;
	height:50px;
	top: 42px;
}
#choose2
{
	position:absolute;
	width:751px;
	height:50px;
	top: 126px;
}
</style>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("#commentForm").validate(); //表單名稱
});
</script>
</head>
<body>
<div id="background3">
<div align="center" id="background4">
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
		
		if($row['tr_mode'] == '' || $row['tr_payment'] == '')
		{
		
		if($true > 0) //若transaction內有交易資料
		{

			$sql = "select * from c_payment where c_number = '$c_number'";
			$result = mysql_query($sql);

?>
			<font size="5" color="#FF0000"><strong>選擇付款方式</strong></font>
			<p></p>
            
			<div id="choose1">
			<table align="center">
			<tr>  
<?PHP
			while($row = mysql_fetch_array($result))
			{
?>
				<form action="" method="post">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
				<input type="hidden" name="c_payment" value="<?PHP echo $row['c_payment'];?>">
                <input type="submit" value="<?PHP echo $row['c_payment']; ?>">
				</form>
<?PHP 			
			}	
?>
			</tr>
			</table>
			</div>
<?PHP					
			if($_POST['c_payment'] != '')
	  		{
					
				if($_POST['c_payment'] == '匯款')
	  			{
					
					$sql = "select * from c_mode where c_number = '$c_number'";
					$result = mysql_query($sql);
		
?>
					<br/><br/>
                    <font size="5" color="#FF0000"><strong>選擇交易方式</strong></font>
					<p></p>
                    
					<div id="choose2">
                    <table align="center">
                    <tr>                    
<?PHP
					while($row = mysql_fetch_array($result))
					{
?>					
						<form action="" method="post">
						<input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
						<input type="hidden" name="c_payment" value="<?PHP echo $c_payment;?>">
						<input type="hidden" name="c_mode" value="<?PHP echo $row['c_mode'];?>">
						<input type="submit" value="<?PHP echo $row['c_mode'];?>">
						</form>
<?PHP
					}
?>
					</tr>
                    </table>
                    </div>      
<?PHP
					$c_number = $_POST['c_number'];
					$c_mode = $_POST['c_mode'];
					$c_payment = $_POST['c_payment'];
				
					if($c_mode != '')
					{
?>
						<br/><br/>
						<strong>
                        您選擇的付款方式為：<font size="3" color="#0000FF">匯款</font>
                        </strong>
                        <p></p>
                        <strong>
                        <font size="3" color="#0000FF"><?PHP echo $c_mode;?></font>的方式進行交易
                        </strong>
                    	<br/><br/>                   
<?PHP
						if($c_mode == '全家店到店')
						{
							
							$sql = "select name,phone from members where m_number = '$m_number'";
							$result = mysql_query($sql);
							$row = mysql_fetch_array($result);
?>
							<strong>
                            <form action="transaction_trade.php" method="post" name="commentForm" id="commentForm">
                            <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                            <input type="hidden" name="c_payment" value="<?PHP echo $c_payment;?>">
                            <input type="hidden" name="c_mode" value="全家店到店">
                            <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
								<tr>
                                	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">匯款人資訊</font></td>
                                </tr>
                                <tr>
                                	<td height="30" align="center">匯款人姓名：</td>
                                    <td><label><?PHP echo $row[0];?></label></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款後五碼：</td>
                                    <td><input type="text" name="buy_remit" class="required" minlength="5" maxlength="5"></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款總金額：</td>
                                    <td><input type="text" name="buy_remitmoney" class="required"></td>
                                </tr>
								<tr>
                                	<td height="30" align="center">匯款的日期：</td>
                                    <td><input type="date" name="buy_remitdate" class="required"></td>
                                </tr>
                            	<tr>
                                	<td colspan="2" height="30" align="center"><font color="#FF0000">注意：需要先匯款才能填單</font></td>
                                </tr>
								<tr>
                                	<td colspan="2" height="55" align="center"><font color="#00CCCC">▲匯款後五碼可以填寫金融卡後五碼<br/>或是郵局局號或是無摺匯款您的姓名</font></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" height="30">
                                    <input type="submit" value="確定送出">
                                    <input type="reset" value="重新填寫">
                                    </td>
                                </tr>
                            </table>
                            
							<p></p>   
                            <a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回已得標頁面</strong></a>
							
                            </form>
                            </strong>
<?PHP
						}
						
						if($c_mode == '7-11店到店')
						{
							
							$sql = "select name,phone from members where m_number = '$m_number'";
							$result = mysql_query($sql);
							$row = mysql_fetch_array($result);
?>
							<strong>
                            <form action="transaction_trade.php" method="post" name="commentForm" id="commentForm">
                            <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                            <input type="hidden" name="c_payment" value="<?PHP echo $c_payment;?>">
                            <input type="hidden" name="c_mode" value="7-11店到店">
                            <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                            	<tr>
                                	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">匯款人資訊</font></td>
                                </tr>
                                <tr>
                                	<td height="30" align="center">匯款人姓名：</td>
                                    <td><label><?PHP echo $row[0];?></label></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款後五碼：</td>
                                    <td><input type="text" name="buy_remit" class="required" minlength="5" maxlength="5"></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款總金額：</td>
                                    <td><input type="text" name="buy_remitmoney" class="required"></td>
                                </tr>
								<tr>
                                	<td height="30" align="center">匯款的日期：</td>
                                    <td><input type="date" name="buy_remitdate" class="required"></td>
                                </tr>
                            	<tr>
                                	<td colspan="2" height="30" align="center"><font color="#FF0000">注意：需要先匯款才能填單</font></td>
                                </tr>
								<tr>
                                	<td colspan="2" height="55" align="center"><font color="#00CCCC">▲匯款後五碼可以填寫金融卡後五碼<br/>或是郵局局號或是無摺匯款您的姓名</font></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" height="30">
                                    <input type="submit" value="確定送出">
                                    <input type="reset" value="重新填寫">
                                    </td>
                                </tr>
                            </table>
                           
							<p></p>   
                            <a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回已得標頁面</strong></a>
							
                            </form>
                            </strong>
<?PHP
						}
						
						if($c_mode == '面交')
						{
							
							$sql = "select name,phone from members where m_number = '$m_number'";
							$result = mysql_query($sql);
							$row = mysql_fetch_array($result);
?>
							<strong>
                            <form action="transaction_trade.php" method="post" name="commentForm" id="commentForm">
                            <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                            <input type="hidden" name="c_payment" value="<?PHP echo $c_payment;?>">
                            <input type="hidden" name="c_mode" value="面交">
                            <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                            	<tr>
                                	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">匯款人資訊</font></td>
                                </tr>
                                <tr>
                                	<td height="30" align="center">匯款人姓名：</td>
                                    <td><label><?PHP echo $row[0];?></label></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款後五碼：</td>
                                    <td><input type="text" name="buy_remit" class="required" minlength="5" maxlength="5"></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款總金額：</td>
                                    <td><input type="text" name="buy_remitmoney" class="required"></td>
                                </tr>
								<tr>
                                	<td height="30" align="center">匯款的日期：</td>
                                    <td><input type="date" name="buy_remitdate" class="required"></td>
                                </tr>
                            	<tr>
                                	<td colspan="2" height="30" align="center"><font color="#FF0000">注意：需要先匯款才能填單</font></td>
                                </tr>
								<tr>
                                	<td colspan="2" height="55" align="center"><font color="#00CCCC">▲匯款後五碼可以填寫金融卡後五碼<br/>或是郵局局號或是無摺匯款您的姓名</font></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" height="30">
                                    <input type="submit" value="確定送出">
                                    <input type="reset" value="重新填寫">
                                    </td>
                                </tr>
                            </table>
                            
							<p></p>   
                            <a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回已得標頁面</strong></a>
        					
                            </form>
                            </strong>
<?PHP
						}
						
						if($c_mode == '郵寄')
						{
							
							$sql = "select name,phone from members where m_number = '$m_number'";
							$result = mysql_query($sql);
							$row = mysql_fetch_array($result);
?>
							<strong>
                            <form action="transaction_trade.php" method="post" name="commentForm" id="commentForm">
                            <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                            <input type="hidden" name="c_payment" value="<?PHP echo $c_payment;?>">
                            <input type="hidden" name="c_mode" value="郵寄">
                            <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                            	<tr>
                                	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">匯款人資訊</font></td>
                                </tr>
                                <tr>
                                	<td height="30" align="center">匯款人姓名：</td>
                                    <td><label><?PHP echo $row[0];?></label></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款後五碼：</td>
                                    <td><input type="text" name="buy_remit" class="required" minlength="5" maxlength="5"></td>
                                </tr>
                            	<tr>
                                	<td height="30" align="center">匯款總金額：</td>
                                    <td><input type="text" name="buy_remitmoney" class="required"></td>
                                </tr>
								<tr>
                                	<td height="30" align="center">匯款的日期：</td>
                                    <td><input type="date" name="buy_remitdate" class="required"></td>
                                </tr>
                            	<tr>
                                	<td colspan="2" height="30" align="center"><font color="#FF0000">注意：需要先匯款才能填單</font></td>
                                </tr>
								<tr>
                                	<td colspan="2" height="55" align="center"><font color="#00CCCC">▲匯款後五碼可以填寫金融卡後五碼<br/>或是郵局局號或是無摺匯款您的姓名</font></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" height="30">
                                    <input type="submit" value="確定送出">
                                    <input type="reset" value="重新填寫">
                                    </td>
                                </tr>
                            </table>
                          
							<p></p>   
                            <a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回已得標頁面</strong></a>
                            
                            </form>
                            </strong>
<?PHP
						}
					}
				}
						
				else if($_POST['c_payment'] == '面交')
				{
		
					$sql = "select transaction.personally, transaction.per_time,members.name,members.phone from members join commodity join  transaction on   transaction.m_number = commodity.orbidder and transaction.c_number = commodity.c_number and commodity.m_number = members.m_number where commodity.c_number = '$c_number'";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);				
?>
					<br/><br/>
                    <strong>
                    您選擇的付款方式為：<font size="3" color="#0000FF">面交</font>
                    </strong>
                    <br/><br/>
<?PHP
					$sql_ = "select name,phone from members where m_number = '$m_number'";
					$result_ = mysql_query($sql_);
					$row_ = mysql_fetch_array($result_);
?>			                        
                    <strong>
                    <form action="transaction_update.php" method="post" name="commentForm" id="commentForm">
					<input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
					<input type="hidden" name="c_payment" value="<?PHP echo $c_payment;?>">
					<input type="hidden" name="c_mode" value="面交">
					<table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
						<tr>
							<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">賣家面交資訊</font></td>
                        </tr>
                        <tr>
                        	<td height="30" align="center">賣家真實姓名：</td>
                            <td><?PHP echo $row[2]; ?></td>
                        </tr>	
                        <tr>
                        	<td height="30" align="center">賣家連絡電話：</td>
                            <td><?PHP echo $row[3]; ?></td>
                        </tr>
                        <tr>
                        	<td height="30" align="center">賣家面交地點：</td>
                            <td><?PHP echo $row[0]; ?></td>
                        </tr>
                        <tr>
                        	<td height="30" align="center">賣家面交時段：</td>
                            <td><?PHP echo $row[1]; ?></td>
                        </tr>	
						<tr>
							<th colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></th>
						</tr>
                            <td height="30" align="center">買家真實姓名：</td>
                            <td><?PHP echo $row_[0];?></td>
                        </tr>
                        <tr>
                            <td height="30" align="center">買家聯絡電話：</td>
                            <td><input type="text" name="phone" class="required" minlength="8" maxlength="10" value="<?PHP echo $row_[1];?>"></td>
                        </tr>
                        <tr>
                            <td height="30" align="center">買家面交日期：</td>
                            <td><input type="date" name="buy_paydate" class="required"></td>
                        </tr>
                        <tr>
                            <td height="30" align="center">買家面交時段：</td>
                            <td> 
                            <?PHP 
								if($row[1] == "全天 ( 08:00 ~ 22:00 )")
								{
									
							?>                          
                            <select name="buy_paytime" class="required">
                            <option value="">請選擇面交時段</option>
                            <option value="全天 ( 08:00 ~ 22:00 )">全天 ( 08:00 ~ 22:00 )</option>
                            <option value="早上 ( 08:00 ~ 12:00 )">早上 ( 08:00 ~ 12:00 )</option>
                            <option value="下午 ( 12:00 ~ 18:00 )">下午 ( 12:00 ~ 18:00 )</option>
                            <option value="晚上 ( 18:00 ~ 22:00 )">晚上 ( 18:00 ~ 22:00 )</option>
                            </select>
                            <?PHP
								}
								else
								{
							?>
									<select name="buy_paytime" class="required">
                                    <option value="<?PHP echo $row[1];?>"><?PHP echo $row[1];?></option>
									</select>
							<?PHP
								}
							?> 
                            </td>
                        </tr>
                        <tr>
                            <td height="60" align="center">詳細面交地點：</td>
                            <td>
                            <textarea name="buy_pay" rows="3" cols="18" class="required"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td height="60" align="center">備註注意事項：</td>
                            <td>
                            <textarea name="remark" rows="3" cols="18"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="70" align="center"><font color="#FF0000">注意：此面交是與賣家在指定的<br/>時間地點進行金額與商品的交易<br/>若更改到電話將會修改個人資料</font></td>
                        </tr>
						<tr>
							<td colspan="2" height="30" align="center"><font color="#00CCCC">▲請依據您所填寫的時間地點與賣家進行面交</font></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="30" align="center">我同意<input type="checkbox" name="yes" value="" class="required"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" height="30">
                            <input type="submit" value="確定送出">
                            <input type="reset" value="重新填寫">
                            </td>
                        </tr>
                    </table>
                   
                    <p></p>   
                    <a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回已得標頁面</strong></a>
                    
					</form>
                    </strong>
<?PHP	
				}
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
            header("location:transaction_order.php?c_number=$c_number");
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