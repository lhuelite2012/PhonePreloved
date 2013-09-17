<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>追蹤商品</title>
</head>

<body>
<?php
	include("server.php");                // 連資料庫及編碼檔案
	if(isset($_SESSION['m_number']))
	{
		$c_number = $_SESSION['c_number'];    //追蹤的商品編號
		$m_number = $_SESSION['m_number'];
		
		//判斷track(追蹤) 內是否已追蹤此商品
		$ct_sql = "select count(*) from track where m_number = $m_number and c_number = $c_number ";
		$ct_query = mysql_query($ct_sql);
		$ct_row = mysql_fetch_row($ct_query);
		if($ct_row[0] < 1)
		{
			//加入時間
			$time_sql = "SELECT NOW()";
			$time_query = mysql_query($time_sql);
			$time_row = mysql_fetch_row($time_query);
			$addtime = $time_row[0];
			//加入追蹤清單
			$t_sql = "insert into track (m_number,c_number,track_time) value ('$m_number','$c_number','$addtime')";
			$query = mysql_query($t_sql);
?>
			<script>
				window.alert('成功加入追蹤清單');
				window.history.back();
			</script>
<?php
		}
		else
		{
?>
			<script>
				window.alert('已加入追蹤清單');
				window.history.back();
			</script>
<?php
		}
	}
	else
	{
		include("loginConfirm.php");  //跳到登入網頁
	}
?>
</body>
</html>