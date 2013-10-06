<?php 	//買家  選擇交易 付款方式
	include("../server.php");
	$c_number = $_REQUEST['c_number']; //商品編號
	$buyers = $_REQUEST['buyers'];	//買家
	$json = array();
	
	$sql="select * from transaction where c_number = $c_number";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$json['t_schedule'] = $row['t_schedule'];
	
	//交易方式
	$sql = "select * from c_mode where c_number = $c_number";
	$result = mysql_query($sql);
	$a=1;
	while($row = mysql_fetch_row($result)){
		$json['c_mode'.$a]=$row[1];
		$a++;
	}
	
	//付款方式
	$sql = "select * from c_payment where c_number = $c_number";
	$result = mysql_query($sql);
	$a=1;
	while($row = mysql_fetch_row($result)){
		$json['c_payment'.$a]=$row[1];
		$a++;
	}
	$sql = "select county_name,city_name,address  from city join county join  members on members.county = county.county_number and members.city = city.city_number and city.county_number = county.county_number where members.m_number =$buyers";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	$address =$row[0].$row[1].$row[2];
	
	
	
	$sql = "select m.name,m.phone,t.personally,t.per_time from members m join transaction t join commodity c on m.m_number = c.m_number and  t.c_number = c.c_number where c.c_number = $c_number";
	$resul = mysql_query($sql);
	$row = mysql_fetch_array($resul);
	$json['s_name'] = $row['name'];
	$json['s_phone'] = $row['phone'];
	$json['s_personally'] = $row['personally'];
	$json['s_per_time'] = $row['per_time'];
	$sql = "select name,phone from members where m_number = $buyers";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	$json['b_name'] = $row[0];
	$json['b_phone'] = $row[1];
	$json['b_address'] =  $address;
	
	echo json_encode($json);
?>