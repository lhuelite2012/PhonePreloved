<?
	include("../server.php");
	$m_number = 1;
		$push_sql = "select * from push where m_number = $m_number and p_check = 0";
		$push_result = mysql_query($push_sql);
		$push_total = mysql_num_rows($push_result);
	echo $push_total;
?>