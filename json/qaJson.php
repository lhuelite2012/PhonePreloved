<?php
	include("../server.php");

	$c_number = $_REQUEST['c_number'];
	$sql = "select * from qa where c_number ='$c_number' order by q_time";
	$result = mysql_query($sql);
	$qa = 1;
	while($row = mysql_fetch_array($result)){
		$json = array();
		$m_sql = "select account from members where m_number = ".$row['m_number'];
		$m_result = mysql_query($m_sql);
		$m_row = mysql_fetch_row($m_result);
		$json['asker'] = $m_row[0]; //發問者
		$json['q_content'] = $row['q_content']; //發問內容
		$json['q_time'] = $row['q_time']; //發問時間
		$json['q_number'] = $row['q_number']; //回答編號
			$q_sql = "select * from q_answer where q_number = ".$row['q_number'];
			$q_result = mysql_query($q_sql);	
			if($q_row = mysql_fetch_array($q_result)){ //有回答
				$json['answer'] = "yes";
				$json['qa_content'] = $q_row['qa_content'];
				$json['qa_time'] = $q_row['qa_time'];
			}else{
				$json['answer'] = "no";
			}
		$data['qa'][]=$json;
	}
	echo json_encode($data);
?>