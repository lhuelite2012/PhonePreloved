
<?
	$json = array();
	include("server.php");
	$sql = "select * from commodity";
	$query = mysql_query($sql);
	while($row = mysql_fetch_array($query))
	{
		$json["c_number"] = $row['c_number'];
		$json["c_name"] = $row['c_name'];
		$json["c_mp"] = $row['c_mp'];
		$data["commodity"][] = $json;
	}
	echo json_encode($data);
?>
