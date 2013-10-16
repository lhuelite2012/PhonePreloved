<?php
	session_start();
	include("server.php");
	include("loginConfirm.php");
	include("main.php");
	/*
	1.判斷有沒有$_POST['c_number']
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="all.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../jQuery/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="../jQuery/aj-zip.js"></script>
<style type="text/css">
	#bg{
	position:absolute;
	background: #FFF;
	left: 60px;
	top: 195px;
	width:900px;
	height: 657px;
	border-radius: 10px 10px 10px 10px;
	}
	#buyer{
	position:relative;
	left: 8px;
	}
	#insert{
	position:relative;
	left: 171px;
	width: 500px;
	}
</style>
<title>選擇得標者</title>
</head>

<body>
<div id="ce2">
<div id="bg">
<?php
	if(isset($_POST['c_number'])){
		//echo "請在時間到期後48小時內選擇得標者，若沒點選擇以最高價格得標";
		$c_number = $_POST['c_number'];
		$c_bid = "SELECT MAX( bid.bid_price ) as bid_price ,bid.m_number, bid.bid_number, bid_time, members.account, members.total, members.buy, members.sell, members.score
FROM bid
JOIN members ON bid.m_number = members.m_number
WHERE bid.c_number =$c_number
GROUP BY bid.m_number
ORDER BY 1 DESC 
";					
		$c_bid_result = mysql_query($c_bid);
?> 	

		<form action="transaction_trueBuyer.php" method="post" name="choosebuyer"><br />

        <div id="buyer">
		<table border="1" id="bid" align="center" width="800px">
			<tr style="background:#999999; color:#FFF;"　　>
                <th>出價者</th>
                <th>評價</th>
                <th>買方總評價</th>
                <th>賣方總評價</th>
                <th>其他總評價</th>
                <th>出價價格</th>
                <th>出價時間</th>
                <th>選擇得標者</th>
            </tr>			
<?php			while($c_bid_row = mysql_fetch_array($c_bid_result)){?>
            <tr>
                <td><a href="mart.php?m_number=<?php echo $c_bid_row['m_number']; ?>"><?php echo $c_bid_row['account']; ?></a></td>
                <td><?php echo $c_bid_row['total']; ?></td>
                <td><?php echo $c_bid_row['buy']; ?></td>
                <td><?php echo $c_bid_row['sell']; ?></td>
                <td><?php echo $c_bid_row['score']; ?></td>
                <td><?php echo $c_bid_row['bid_price']; ?></td>
                <td><?php echo $c_bid_row['bid_time']; ?></td>
                <td><input type="radio" name="choose" value="<?php echo $c_bid_row['m_number'] ?>" /><input type="hidden" name="c_number" value="<?php echo $c_number;?>" />
                </td>
            </tr>
<?php
			}	
			$sql = "select * from members where m_number = $m_number";	
			$result = mysql_query($sql);
			$m_row = mysql_fetch_array($result);	
?>			
		</table>
</div><br />

<div id="insert">
        <table border="1" align="center"  width="500px">
        	<tr style="background:#999999; color:#FFF;">
            	<td colspan="2" align="center"> 聯絡資料</td>
            </tr>
        	<tr>
            	<td>姓名：</td><td><?php echo $m_row['name']; ?></td>
            </tr>
            <tr>
                <td>電話：</td><td><input type="text" name="phone" value="<?php echo $m_row['phone']; ?>" /></td>
            </tr>
            <tr>
                <td>信箱：</td><td><?php echo $m_row['account']; ?></td>
            </tr>
            <tr>
                <td>FB帳號：</td><td><input type="text" name="fb_id" value="<?php echo $m_row['fb_id']; ?>" /></td>
            </tr>
            <tr>
                <td>Line帳號：</td><td><input type="text" name="line_id" value="<?php echo $m_row['line_id']; ?>" /></td>
            </tr>
            <?php 
			$sql ="select c_mode from c_mode where c_number = $c_number and c_mode = '面交'";
			$result = mysql_query($sql);
			$total = mysql_num_rows($result);
			if($total == 1){ 
			?>
            <tr>
            	<td> 面交詳細地點：</td>
                <td><textarea name="personally"><?php echo $m_row['personally']; ?></textarea></td>
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
            <?php } ?>
            <?php 
			$sql ="select c_mode from c_mode where c_number = $c_number and c_mode = '匯款'";
			$result = mysql_query($sql);
			$total = mysql_num_rows($result);
			if($total == 1){ ?>
            <tr>
                <td>銀行帳號：</td><td><input type="text" name="rank_account" value="<?php echo $m_row['rank_account']; ?>" /></td>
            </tr>
            <?php } ?>
            <tr>
				<td><input type="submit" value="確定" /></td>
			</tr>
        </table>
</div>
    </form>
<?php
	}else{	//未從選擇賣家表單進入 則跳回首頁
?>
		<script>
			location.href = "./index.php";
		</script>
<?php 
	} 
?>
</div>
</div>
</body>
</html>