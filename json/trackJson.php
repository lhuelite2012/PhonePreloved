<?php	//追蹤商品
	include("../server.php");                // 連資料庫及編碼檔案
	include("../addtime.php");
	
		$c_number = $_REQUEST['c_number'];    //追蹤的商品編號
		$m_number = $_REQUEST['m_number'];
		
		//判斷track(追蹤) 內是否已追蹤此商品
		$ct_sql = "select count(*) from track where m_number = $m_number and c_number = $c_number ";
		$ct_query = mysql_query($ct_sql);
		$ct_row = mysql_fetch_row($ct_query);
		if($ct_row[0] < 1)
		{
			//加入追蹤清單
			$t_sql = "insert into track (m_number,c_number,track_time) value ('$m_number','$c_number','$addtime')";
			$query = mysql_query($t_sql);
			$data['yy'] = "成功加入";
			echo json_encode($data);
		}
		else
		{
			$data['yy'] = "已加入過追蹤清單";
			echo json_encode($data);
		}
?>
