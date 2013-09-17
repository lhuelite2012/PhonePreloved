<?
ob_start();
session_start();
?>
<?
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>賣家給予買家評價</title>
<style type="text/css">
#background20
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:402px;
	left:161px;
	top: 217px;
}
#background21
{
	position:absolute;
	width:751px;
	height:450px;
	z-index:8;
	left: 0px;
	top: 40px;
}
</style>
</head>
<body>
<? 
	$m_number = $_SESSION["m_number"];		
	$c_number = $_GET['c_number'];
	
	$sql = "select transaction.t_schedule,transaction.m_number,commodity.m_number from transaction join members join commodity on transaction.c_number = '$c_number' and commodity.m_number = '$m_number' and commodity.orbidder = transaction.m_number where members.m_number = transaction.m_number";	
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if($_SESSION['m_number'] == $row[2])
	{
		
	if($row[0] == "選擇評價")
	{
?>
		<div id="background20">
		<div align="center" id="background21">
        
        <font size="5" color="#FF0000"><strong>賣家給予買家評價</strong></font>
		<p></p>
        
        <form>
        <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
        	<tr>
            	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">給予評價</font></td>
            </tr>
            <tr>
            	<td>
                </td>
            </tr>
        </table>
        </form>
        
        </div>
        </div>
<?
	}
	else
	{
?>
		不好意思
<?
	}
	}
	else
	{
?>
		<script>
			location.href = './index.php';
		</script>
<?
	}
?>
</body>
</html>