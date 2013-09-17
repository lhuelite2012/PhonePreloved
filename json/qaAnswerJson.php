<?php
	include("../server.php");
	include("../addtime.php");
	$json = array();
	$q_number = $_REQUEST['q_number'];
	$qa_content = $_REQUEST['qa_content'];
	if(isset($q_number) and isset($qa_content)){
		$sql = "insert into q_answer (q_number,qa_content,qa_time) value ('$q_number','$qa_content','$addtime')";
		mysql_query($sql);
		$json['yy'] = "成功";
	}else
		$json['yy'] = "失敗";
	echo json_encode($json);
?>