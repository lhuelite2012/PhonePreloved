<?php
	include("../server.php");
	include("../addtime.php");
	$json = array();
	$c_number = $_REQUEST['c_number'];
	$q_content = $_REQUEST['q_content'];
	$m_number = $_REQUEST['m_number'];
	if(isset($c_number) and isset($q_content) and isset($m_number)){
		$sql = "insert into qa (q_content,q_time,m_number,c_number) value ('$q_content','$addtime','$m_number','$c_number')";
		mysql_query($sql);
		$json['yy'] = "成功";
	}else{
		$json['yy'] = "失敗";
	}
	echo json_encode($json);
?>