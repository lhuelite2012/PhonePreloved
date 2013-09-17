<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>推薦 recommend</title>
</head>

<body>
<?php
	include("server.php");
	include("loginConfirm.php");
	
	$m_number = $_SESSION['m_number'];
	
	//判斷 推薦(recommend)內 是否有 此會員的商品瀏覽次數(r_type=1)
	//有則刪除此會員之推薦(recommend)內的商品瀏覽次數(r_type=1)資料
	$re_sql = "select * from recommend where r_type = 1 and m_number = $m_number";
	$re_query = mysql_query($re_sql);
	$re_row = mysql_fetch_row($re_query);
	if(isset($re_row))
	{
		$delete_sql = "delete from recommend where r_type = 1 and m_number = $m_number";
		mysql_query($delete_sql);
	}
	
	//列出此會員對商品的點閱率 前5名  編號:1
	$s_sql = "SELECT view.c_number, commodity.m_number, COUNT( * )  'total'
FROM VIEW JOIN commodity ON view.c_number = commodity.c_number
WHERE view.m_number =5
GROUP BY view.c_number
ORDER BY 3 desc , view.v_time desc
LIMIT 5";
	$s_query = mysql_query($s_sql);
	
	//新增 此會員瀏覽商品次數 前5名 至 推薦(recommend)內 (r_type = 1)
	$r_score = 5;
	while($s_row = mysql_fetch_array($s_query))
	{
			$c_number = $s_row['c_number'];
			$total = $s_row['total'];
			
			echo "你最常接觸的賣家:";
			
			$insert_sql="insert into recommend (r_type,m_number,c_number,r_score) value (1,$m_number,$c_number,$r_score)";
			mysql_query($insert_sql);
			$r_score --;
	}	
	
	
?>
</body>
</html>