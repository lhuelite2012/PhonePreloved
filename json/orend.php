<?php
	include("../server.php");
	$m_number = $_REQUEST['m_number'];
	$sql = "select * from commodity where orend = 1 and orbidder like null and m_number = $m_number";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		$json['c_number'] = $row['c_number'];
		$data['commodity'][] = $json;
	}
	echo json_encode($data);
?>