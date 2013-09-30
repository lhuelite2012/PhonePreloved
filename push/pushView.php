<?php
	header("Cache-Control:no-cache");
	include("../server.php");
	$m_number = $_POST['m_number'];
	$push_sql = "select * from push where push_m_number = $m_number and p_check = false";
	$push_result = mysql_query($push_sql);
	$push_total = mysql_num_rows($push_result);
	if($push_total == 0)
		echo $push_total = "";
	else
		echo $push_total;
?>