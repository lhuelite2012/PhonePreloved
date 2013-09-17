<?php
	include("../server.php");
	$json = array();
	$sql = "select * from sort";
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result)){
	  if(!isset($row[2])){
		$json['s_number'] = $row[0];
		$json['s_name'] = $row[1];
		if($row[0]<5)
			$data['s_fsort1'][] = $json;
		$data['s_fsort2'][] = $json;
	  }else{
		switch($row[2]){  
	  		case 1:
				$json['s_number'] = $row[0];
				$json['s_name'] = $row[1];
				$json['s_fsort'] = $row[2];
				$data['s_number1'][] = $json;
			break;
			case 2:
				$json['s_number'] = $row[0];
				$json['s_name'] = $row[1];
				$json['s_fsort'] = $row[2];
				$data['s_number2'][] = $json;
			break;
			case 3:
				$json['s_number'] = $row[0];
				$json['s_name'] = $row[1];
				$json['s_fsort'] = $row[2];
				$data['s_number3'][] = $json;
			break;
			case 4:
				$json['s_number'] = $row[0];
				$json['s_name'] = $row[1];
				$json['s_fsort'] = $row[2];
				$data['s_number4'][] = $json;
			break;
			case 5:
				$json['s_number'] = $row[0];
				$json['s_name'] = $row[1];
				$json['s_fsort'] = $row[2];
				$data['s_number5'][] = $json;
			break;
		}
	  }
	}
	echo json_encode($data);
?>