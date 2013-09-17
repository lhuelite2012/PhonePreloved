<?php
	session_start();
	include("main.php");
	include("server.php");
	include("loginConfirm.php");
	include("addtime.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>確認交易動作</title>
<style type="text/css">
	#remit{
	position: absolute;
	left: 294px;
	top: 289px;
	border-radius: 10px 10px 10px 10px;
	background: #FFF;
	width: 371px;
	height: 300px;
	}

</style>
</head>

<body>
<?php
	if(isset($_POST['payment'])){ //點已付款
		$payment = $_POST['payment'];
		$c_number = $_POST['c_number'];
		$m_number = $_SESSION['m_number'];
		$sql ="select members.*,transaction.* from members join transaction on members.m_number = transaction.m_number where members.m_number = $m_number and transaction.c_number = $c_number";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
?>
<div id="ce2">
	<div id="remit">
<br />
<br />

	<form action="transaction_remittance_ok.php" method="post">
    <table align="center">
     <tr>
       <td>請填入匯款明細</td>
     </tr>
     <tr>
       <td>匯款人姓名：</td>
       <td><?php echo $row['name']; ?></td>
       <input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
       <input type="hidden" name="payment" value="<?php echo $payment;?>" />
     </tr>
     <tr>
       <td>匯款帳號：</td>
       <td><input type="text" name="remit_account" value="<?php echo $row['rank_account'];?>" size="20" maxlength="20" /></td>
     </tr>
<?php				if($row['tr_mode'] =='郵寄'){
?>            	<tr>
                	<td>收貨地址</td><td><input type="text" name="send" value="<?php echo $row['county'].$row['city'].$row['address'];?>"/></td>
                </tr>
                <tr>
                	<td>收貨日期</td><td><input type="date" name="senddate" value="<?php echo $row['per_date']; ?>" /></td>
                </tr>
                <tr>
                	<td>收貨時段</td>
                    <td>
                    	<select name="sendtime">
                    	<option value="全天 ( 08:00 ~ 22:00 )" <?php if($row['sendtime']=='全天 ( 08:00 ~ 22:00 )') echo "selected" ?>>　全天 ( 08:00 ~ 22:00 )</option>
                    	<option value="早上 ( 08:00 ~ 12:00 )" <?php if($row['sendtime']=='早上 ( 08:00 ~ 12:00 )') echo "selected" ?>>　早上 ( 08:00 ~ 12:00 )</option>
                        <option value="下午 ( 12:00 ~ 18:00 )" <?php if($row['sendtime']=='下午 ( 12:00 ~ 18:00 )') echo "selected" ?>>　下午 ( 12:00 ~ 18:00 )</option>
                        <option value="晚上 ( 18:00 ~ 22:00 )" <?php if($row['sendtime']=='晚上 ( 18:00 ~ 22:00 )') echo "selected" ?>>　晚上 ( 18:00 ~ 22:00 )</option>
                    	</select>
                    </td>
                </tr>
<?php              }
				if($row['tr_mode'] =='全家店到店' or $row['tr_mode'] =='統一7-11店到店'){
?>        		<tr>
                	<td>門市名稱</td><td><input type="text" name="storename" value="<?php echo $row['storename'];?>" /></td>
                </tr>
<?php              }
				if($row['tr_mode'] =='面交'){
?>				<tr>
            		<td>可面交日期：　</td><td><input type="date" name="date" /></td>
            	</tr>
           		<tr>
            		<td>可面交時間：　</td>
                	<td>
                	<select name="time">
                    	<option value="全天 ( 08:00 ~ 22:00 )" <?php if($row['per_time']=='全天 ( 08:00 ~ 22:00 )') echo "selected" ?>>　全天 ( 08:00 ~ 22:00 )</option>
                    	<option value="早上 ( 08:00 ~ 12:00 )" <?php if($row['per_time']=='早上 ( 08:00 ~ 12:00 )') echo "selected" ?>>　早上 ( 08:00 ~ 12:00 )</option>
                        <option value="下午 ( 12:00 ~ 18:00 )" <?php if($row['per_time']=='下午 ( 12:00 ~ 18:00 )') echo "selected" ?>>　下午 ( 12:00 ~ 18:00 )</option>
                        <option value="晚上 ( 18:00 ~ 22:00 )" <?php if($row['per_time']=='晚上 ( 18:00 ~ 22:00 )') echo "selected" ?>>　晚上 ( 18:00 ~ 22:00 )</option>
                    </select>
                	</td>
            	</tr>
            	<tr>
            		<td>詳細面交地點：　</td><td><textarea name="per_place"><?php echo $row['address']; ?></textarea></td>
            	</tr>
<?php                }
?>				
     <tr><td><input type="submit" value="確定" /></td></tr>
    </table>
	</form>	
	</div>
</div>
<?php           
	}else{
?>
<script>
			location.href = './index.php';
		</script>
<?php
	}
?>
</body>
</html>