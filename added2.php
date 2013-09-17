<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#A{font-size:18px;}
</style>
</head>

<body>
 <?php
//include("loginConfirm.php");
include("server.php");
?>
<table>
<tr>
<td width="20" height="40" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="微軟正黑體" size="+6" id="A">A</font>
  </strong></td>
	<td>
   	<?php
	$test = $_POST['c_gender'];
	$test2 = $_POST['s_name'];
	$test3 = $_POST['s_fsort'];
	$sql_query2="SELECT * FROM sort WHERE s_name = '".$test3."'";
	$query2 = mysql_query($sql_query2);
	$s_number = mysql_fetch_array($query2);
	//echo "ffff".$s_number['s_number'];
	//echo "ddd".$test;
	//echo "eee".$test2;
	//echo "rrr".$test3;
	
	//A
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'A%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
	</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;"><strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">J</span></font>
  </strong></td>
	<td>
   <?php
	
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'J%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
    </td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">S</span></font>
  </strong></td>
<td>
   	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'S%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">B</span>
  </font>
  </strong></td>
	<td>
   	<?php
	
	//B
	
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'B%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
    </td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">K</span></font>
  </strong></td>
<td>   
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'K%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	}
	?>
 </td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">T</span></font>
  </strong></td>
<td>
   	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'T%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">C</span>
  </font>
  </strong></td>
<td>
   <?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'C%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">L</span></font>
  </strong></td>
<td>
 	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'L%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">U</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'U%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<tr>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">D</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'D%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">M</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'M%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">V</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'V%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">E</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'E%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">N</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'N%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">W</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'W%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">F</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'F%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">O</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'O%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">X</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'X%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">G</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'G%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">P</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'P%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">Y</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'Y%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">H</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'H%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">Q</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'Q%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">Z</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'Z%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
</tr>
<tr>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">I</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'I%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>
</td>
<td width="20" style="background:#09F; border-color:#FFF; border-width:3px; border-style:solid; vertical-align:middle; text-align:center;">
  <strong><font color="#FFFFFF" face="新細明體" size="+6" id="A"><span style="background-color:#09F">R</span></font>
  </strong></td>
<td>
	<?php
	 
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'R%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."</font></a>  "; 
	echo 　;
	echo "<a href='added3.php?id=".$rows3[0]."'><img src=".$rows3['2']." width=38px /></a>";
	echo 　;
	}
	?>

</td>
<td colspan="2">
<input name="ad" type="button" value="其他" onClick="location='連結網址'"/>
</td>
<td></td>
<tr>

</tr>
</tr>  

</tr>
</table>
</form>
	
</body>
</html>
