<?php
	include("../server.php");
	
	$char = $_REQUEST['char'];
	$json = array();
	$sql = "select * from brand where b_name like '$char%'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result)){
		$json['b_number'] = $row[0];
		$json['b_name'] = $row[1];
		$json['logo'] = $row[2];
		$data["brand"][] = $json;
	}
	echo json_encode($data);
	
	
?>