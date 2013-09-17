<?php	
	$json = array();
	$account = $_REQUEST['account'];
	$password = $_REQUEST['password'];
	include("../server.php");
	$sql ="select account,password,name,m_number from members where account = '$account' and password ='$password'";
	$sql2 = mysql_query($sql);
	if($list3 = mysql_fetch_array($sql2))
	{
		$json["yy"] = 1;
		$json["account"] =$list3['account'];
		$json["password"] = $list3['password'];
		$json["name"]=$list3["name"];
		$json["m_number"] = $list3["m_number"];
	}
	else
	{
		$json["yy"] = 0 ;
	}
	echo json_encode($json);
?>
