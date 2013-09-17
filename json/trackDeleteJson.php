<?php	//刪除追蹤商品
	include("../server.php");
	$json = array();
	$m_number = $_REQUEST['m_number'];
	$c_number = $_REQUEST['c_number'];
	if($m_number=="" or $c_number==""){
		$json['yy'] = "1";
		echo json_encode($json);
		die();
	}
	$sql = "delete from track where m_number = $m_number and c_number = $c_number";
	mysql_query($sql);
	$json['yy'] = "2";
	echo json_encode($json);
?>