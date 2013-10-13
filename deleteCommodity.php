<?php
	include("server.php");
	$down = "delete from commodity where `uptime` = `downtime` and m_number = ".$_SESSION['m_number']."";
	mysql_query($down); 
?>