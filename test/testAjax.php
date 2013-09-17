<?
	header("Cache-Control:no-cache");
	include("server.php");
	$sql = "select * from members";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	echo $row[2];
?>