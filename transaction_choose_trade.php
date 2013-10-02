<?php
	ob_start();
	session_start();
	include("main.php");
	include("server.php");
	include("loginConfirm.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	#bg{
	position: absolute;
	background: #FFF;
	left: 115px;
	top: 195px;
	width: 654px;
	height: 388px;
	border-radius: 10px 10px 10px 10px;
	}
	#submit{
	position: absolute;
	left: 180px;
	top: 114px;
	}
	#title{
	position: absolute;
	font-size: 25px;
	color: #F30;
	left: 238px;
	top: 28px;
	}
</style>
<title>選擇付款方式</title>
</head>

<body>
	<div id="ce2">
	  <div id="bg">
<?php
	if(isset($_POST['c_payment'])){  //有交易方式
	  $c_number = $_POST['c_number'];
	  $c_payment = $_POST['c_payment'];
	  if($c_payment =='匯款'){
?>		<div id="title">
			請選擇交易方式
		</div>
		<div id="submit">
<?php			$sql = "select * from c_mode where c_number = $c_number";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result)){
?>				<form action="transaction_trade.php" method="post">
					<input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
                    <input type="hidden" name="c_payment" value="<?php echo $c_payment; ?>" />
					<input type="hidden" name="c_mode" value="<?php echo $row['c_mode']; ?>" />
                    <br /><input type="submit" value="<?php echo $row['c_mode']; ?>" />
				</form>
<?php			}//while end	
?>		</div>		
<?php	  }else if($c_payment =='面交'){
		$sql = "select  members.personally from members join commodity on  members.m_number = commodity.m_number where commodity.c_number = $c_number";
		$result = mysql_query($sql);
		$row = mysql_fetch_row($result);
?>		<div id="title">
			請填寫面交地點
		</div>
		<div id="submit">
        
        <table align="center" border="1">
        	<tr>
            	<th>賣家面交資訊</th>
            </tr>
        	<tr>
            	<td>	
<?php					echo $row[0];
?>				</td>
			</tr>
        </table><br />
<?php		$sql = "select name,phone,personally from members where m_number = ".$_SESSION['m_number'];
		$result = mysql_query($sql);
		$row = mysql_fetch_row($result);
?>		<form action="transaction_update.php" method="post">
			<input type="hidden" name="c_number" value="<?php echo $c_number;?>" />
            <input type="hidden" name="c_payment" value="<?php echo $c_payment;?>" />
            <input type="hidden" name="c_mode" value="面交" />
        <table align="center" >
        	<tr>
            	<td>姓名：　</td><td><?php echo $row[0];?></td>
            </tr>
            <tr>
            	<td>電話：　</td><td><input type="text" name="phone" value="<?php echo $row[1];?>" /></td>
            </tr>
            <tr>
            	<td>可面交日期：　</td><td><input type="date" name="date" /></td>
            </tr>
           	<tr>
            	<td>可面交時間：　</td>
                <td>
                	<select name="time">
                    	<option value="全天 ( 08:00 ~ 22:00 )" <?php if($row[5]=='全天 ( 08:00 ~ 22:00 )') echo "selected" ?>>　全天 ( 08:00 ~ 22:00 )</option>
                    	<option value="早上 ( 08:00 ~ 12:00 )" <?php if($row[5]=='早上 ( 08:00 ~ 12:00 )') echo "selected" ?>>　早上 ( 08:00 ~ 12:00 )</option>
                        <option value="下午 ( 12:00 ~ 18:00 )" <?php if($row[5]=='下午 ( 12:00 ~ 18:00 )') echo "selected" ?>>　下午 ( 12:00 ~ 18:00 )</option>
                        <option value="晚上 ( 18:00 ~ 22:00 )" <?php if($row[5]=='晚上 ( 18:00 ~ 22:00 )') echo "selected" ?>>　晚上 ( 18:00 ~ 22:00 )</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>詳細面交地點：　</td><td><textarea name="per_place"><?php echo $row[2]; ?></textarea></td>
            </tr>
            <tr>
            	<td></td><td><input type="submit" value="確定" /></td>
            </tr>
         </table>
         </form>
        </div>
<?php	
	
	  }//fi
	}else{
		header("location:index.php");
	}//fi 
?>
		</div>
    </div>
</body>
</html>
