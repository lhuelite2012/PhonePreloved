<?php
include("server.php");
$c_number = $_REQUEST['c_number'];
$sql = "select hi_bid_price from commodity where c_number = $c_number";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
echo $row[0];
?>