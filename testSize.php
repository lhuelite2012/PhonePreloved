<? include("phpFunction.php");
	include("server.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<? /*
	$gender = "女";
	$format = "FR";
	$value = 44.67;
	echo "目前狀態<br>";
	echo "性別:".$gender."<br>";
	echo "格式:".$format."<br>";
	echo "尺寸:".$value."<br>";
	echo "換算成JP:".$size = changeSize($gender,$format,$value);*/
	$r_type = 12;
	$r_score = 6;
	//$what = "c_number";
	//delete_recommend($r_type,12);
	$m_number = 10;
	//會員的 身高 體重 三圍
	//$s_sql = "SELECT shoes_size,shoes_size2 from members where m_number = 10";
	//echo try_shoes_recommend($s_sql,$r_type,$r_score,12,$what);
	$size_mode[0] = 11;
	$size_range = array($size_mode[0]-0.5,$size_mode[0]+0.5,$size_mode[1]-0.5,$size_mode[1]+0.5,$size_mode[2]-0.5,$size_mode[2]+0.5,$size_mode[3]-0.67,$size_mode[3]+0.67,$size_mode[4]-0.5,$size_mode[4]+0.5);
	echo $size_range[0]."  ",$size_range[1];
	echo $sql = "select c_number from commodity where  (s_size='美國(女)' and size between ".$size_range[0]." and ".$size_range[1].")";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result)){
			$c_number = $row['c_number'];
			$insert_sql="insert into recommend (r_type,m_number,c_number,r_score) value ($r_type,$m_number,$c_number,$r_score)";	
			mysql_query($insert_sql);
		}
?>
</body>
</html>