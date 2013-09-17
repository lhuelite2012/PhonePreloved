<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery1.2.6.js"></script>
<script type="text/jscript" src="imageScaling.js"></script>
<script type="text/javascript" src="hover.js"></script>
   	<script type="text/jscript" src="imageScaling.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://www.bitstorm.org/jquery/shadow-animation/jquery.animate-shadow.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>追蹤清單</title>
</head>

<body>
<div id="t_container">
	<?php
		include("loginConfirm.php");  //判斷是否登入
		include("server.php");
		include("topLogin.php");
		$m_number = $_SESSION['m_number'] ;
		$track_sql = "select * from track where m_number = $m_number";
		$track_query = mysql_query($track_sql);
		while($track_row = mysql_fetch_array($track_query))
		{
			//商品資訊
			$c_sql = "select * from commodity where c_number =".$track_row['c_number']; 
			$c_query = mysql_query($c_sql);
			$c_row = mysql_fetch_array($c_query);
			
			//出價最高
			$bid_hi_sql = "select max(bid_price) from bid where c_number =".$track_row['c_number']; 
			$bid_hi_query = mysql_query($bid_hi_sql);
			$bid_hi_rows = mysql_fetch_row($bid_hi_query);
			
			//出價次數
			$bid_sql = "select count(*) from bid where c_number =".$track_row['c_number']; 
			$bid_query = mysql_query($bid_sql);
			$bid_rows = mysql_fetch_row($bid_query);
	?>
    		<a href="commodity.php?c_number=<?php echo $track_row['c_number']; ?>">
    		<div class="track">
   			  <div id="t_mp"><img src="<?php echo $c_row['c_mp']; ?>" onload="javascript:DrawImage(this,230,180);" /></div>
           	  <div id="t_name"><b><?php echo $c_row['c_name']; ?></b></div>
            	<div id="t_bid_hi"><b>目前出價：　<?php echo $bid_hi_rows[0]; ?></b></div>
            	<div id="t_bid"><b>出價次數：　<?php echo $bid_rows[0]; ?></b></div>
            	<div id="t_downtime"><b>剩餘時間：　</b></div>   
            </div>
            </a>
    <?php
		}
	?>
</div>
</body>
</html>