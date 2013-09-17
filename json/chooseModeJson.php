<?php
	include("../server.php");
	include("../addtime.php");
	$json = array();
	$c_number = 1; //$_REQUEST['c_number'];
	
	//付款方式
	$sql = "select c_payment from c_payment where c_number = $c_number";
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result)){
		$data['c_payment'][]=$row[0];
	}
	
	//面交方式
	$sql = "select c_mode from c_mode where c_number = $c_number";
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result)){
		$data['c_mode'][]=$row[0];
	}
	
	echo json_encode($data);
?>