<?php //已瀏覽
	include("../server.php");
	$m_number = $_REQUEST['m_number'];
	$sql = "update push set p_check = 1 where push_m_number = $m_number";
	$result = mysql_query($sql);
?>