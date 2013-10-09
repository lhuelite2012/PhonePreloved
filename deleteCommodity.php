<?php
	include("server.php");
	$down = "delete from commodity where `uptime` = `downtime`";
	mysql_query($down); 
?>