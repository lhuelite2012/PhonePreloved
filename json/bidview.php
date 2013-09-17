<?php include("../server.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出價紀錄</title>
</head>

<body>
<?php
		$c_number = $_REQUEST['c_number'];
		$c_bid = "SELECT bid.*,members.account,members.total FROM bid join members on bid.m_number = members.m_number WHERE bid.c_number = $c_number order by  2 desc";	
		$c_bid_result = mysql_query($c_bid);
		$c_bid_total = mysql_num_rows($c_bid_result);
			
?> 		<div align="center">
			<table border="1" id="bid">
			<?php if($c_bid_total>0){ ?>
				<tr>
                	<th width="200px">出價者</th>
                    <th>評價</th>
                    <th>出價價格</th>
                    <th>出價時間</th>
                </tr>			
<?php			while($c_bid_row = mysql_fetch_array($c_bid_result)){?>
            	<tr>
                	<td><?php echo $c_bid_row['account']; ?></td>
                	<td><?php echo $c_bid_row['total']; ?></td>
                    <td><?php echo $c_bid_row['bid_price']; ?></td>
                    <td><?php echo $c_bid_row['bid_time']; ?></td>
                </tr>
<?php 			}
			}else echo "<tr><td> 沒有任何出價紀錄 </td></tr>";?>
			</table>
        </div>

</body>
</html>