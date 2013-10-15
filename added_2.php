<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
#A{font-size:18px;}
</style>
<head>

<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>
<style type="text/css">
/*====================================*/
/* 整體設置*/ 
.navigation {
	margin:0; 
	padding:0;
	width:860px;
	height:61px;
	list-style-type:none; 
	font:25px "微軟正黑體"; 
	}
	 
.navigation li {
	float:left; 
    padding:0; 
	margin:0 30px 0 30PX; 
	_margin:0 2px 0 2PX; 
	width:60px;
	}
 
/* 設置選單區塊*/
.navigation li dl { 
	width:60px;/*ie6*/
    margin:0; 
	padding:0px;
	/*background-color:#fff;
	border:solid 2px #666; */
	}
 
.navigation li dt a , .navigation li dd a{ display:block;}

/* 設置主選單dt */
.navigation li dt {
	margin:0;
	padding:5px 5px 5px 5px;
	text-align:center;
	background-color:#333;
	font-size: 22px;
	font-weight:bolder;
	font-family:"Boradway";
	height:22px;
	overflow:hidden;
	}
 
.navigation li dt a ,.navigation  li dt a:visited {

    color:#FFF;
    text-decoration:none;
	}
 
/* 設置子選單dd */
.navigation li dd { 
	margin:0; 
    padding:1;
	border-left-style:solid;
	border-left-color:#333;
	/*border:2px solid #000;*/
	width:60; 
	list-style:none;
	color:#000000;
	background-color:#333;

	}
 /*子選單背景大小*/
.navigation li dd.last {
	position:absolute;
	width:180px;
	z-index:10;
	}	
 /*子選項字and圖*/
.navigation li dd a, .navigation  li dd a:visited {
	color:#FFFFFF;
	font-family:"Boradway";
    text-decoration:none; 
    }
 
 
/*隱藏子選單*/
.navigation li dd { display:none;}
 
 
/* 滑鼠滑入顯示子選單 */
.navigation li:hover dd, .navigation li a:hover dd { display:block;}
 
/*ie6 hack*/
.navigation li:hover,.navigation li a:hover { border:0;}
.navigation table {
	width:180px;
	/*border-style:solid;*/
	text-align:left;
	}
/*=========================*/
.navigation2 {
	position:absolute;
	z-index:9;/*圖片重疊數字越小再越下方*/
	margin:0;
	padding:0;
	width:860px;
	height:61px;
	list-style-type:none;
	font:25px "微軟正黑體";
	top: 100px;
	}
	 
.navigation2 li {
	float:left; 
    padding:0; 
	margin:0 30px 0 30PX; 
	_margin:0 2px 0 2PX; 
	width:60px;
	}
 
/* 設置選單區塊*/
.navigation2 li dl { 
	width:60px;/*ie6*/
    margin:0; 
	padding:0px;
	/*background-color:#fff;
	border:solid 2px #666; */
	}
 
.navigation2 li dt a , .navigation2 li dd a{ display:block;}

/* 設置主選單dt */
.navigation2 li dt {
	margin:0;
	padding:5px 5px 5px 5px;
	text-align:center;
	background-color:#333;
	font-size: 22px;
	font-weight:bolder;
	font-family:"Boradway";
	height:22px;
	overflow:hidden;
	}
 
.navigation2 li dt a ,.navigation2  li dt a:visited {

    color:#FFF;
    text-decoration:none;
	}
 
/* 設置子選單dd */
.navigation2 li dd { 
	margin:0; 
    padding:1;
	border-left-style:solid;
	border-left-color:#333;
	/*border:2px solid #000;*/
	width:60; 
	list-style:none;
	color:#000000;
	background-color:#333;
	}
 /*子選單背景大小*/
.navigation2 li dd.last {
	position:absolute;
	z-index:9;
	width:180px;

	}	
 /*子選項字and圖*/
.navigation2 li dd a, .navigation2  li dd a:visited {
	color:#FFFFFF;
	font-family:"Boradway";
    text-decoration:none; 
    }
 
 
/*隱藏子選單*/
.navigation2 li dd { display:none;}
 
 
/* 滑鼠滑入顯示子選單 */
.navigation2 li:hover dd, .navigation2 li a:hover dd { display:block;}
 
/*ie6 hack*/
.navigation2 li:hover,.navigation2 li a:hover { border:0;}
.navigation2 table {
	width:180px;
	/*border-style:solid;*/
	text-align:left;
	}
	
/*=========================*/
.navigation3 {
	position:absolute;
	z-index:8;/*圖片重疊數字越小再越下方*/
	margin:0;
	padding:0;
	width:860px;
	height:61px;
	list-style-type:none;
	font:25px "微軟正黑體";
	top: 202px;
	}
	 
.navigation3 li {
	float:left; 
    padding:0; 
	margin:0 30px 0 30PX; 
	_margin:0 2px 0 2PX; 
	width:60px;
	}
 
/* 設置選單區塊*/
.navigation3 li dl { 
	width:60px;/*ie6*/
    margin:0; 
	padding:0px;
	/*background-color:#fff;
	border:solid 2px #666; */
	}
 
.navigation3 li dt a , .navigation3 li dd a{ display:block;}

/* 設置主選單dt */
.navigation3 li dt {
	margin:0;
	padding:5px 5px 5px 5px;
	text-align:center;
	background-color:#333;
	font-size: 22px;
	font-weight:bolder;
	font-family:"Boradway";
	height:22px;
	overflow:hidden;
	}
 
.navigation3 li dt a ,.navigation3  li dt a:visited {

    color:#FFF;
    text-decoration:none;
	}
 
/* 設置子選單dd */
.navigation3 li dd { 
	margin:0; 
    padding:1;
	border-left-style:solid;
	border-left-color:#333;
	/*border:2px solid #000;*/
	width:60; 
	list-style:none;
	color:#000000;
	background-color:#333;
	}
 /*子選單背景大小*/
.navigation3 li dd.last {
	position:absolute;
	z-index:8;
	width:180px;

	}	
 /*子選項字and圖*/
.navigation3 li dd a, .navigation3  li dd a:visited {
	color:#FFFFFF;
	font-family:"Boradway";
    text-decoration:none; 
    }
 
 
/*隱藏子選單*/
.navigation3 li dd { display:none;}
 
 
/* 滑鼠滑入顯示子選單 */
.navigation3 li:hover dd, .navigation3 li a:hover dd { display:block;}
 
/*ie6 hack*/
.navigation3 li:hover,.navigation3 li a:hover { border:0;}
.navigation3 table {
	width:180px;
	/*border-style:solid;*/
	text-align:left;
	}
	
/*=========================*/
.navigation4 {
	position:absolute;
	z-index:7;/*圖片重疊數字越小再越下方*/
	margin:0;
	padding:0;
	width:860px;
	height:61px;
	list-style-type:none;
	font:25px "微軟正黑體";
	top: 304px;
	}
	 
.navigation4 li {
	float:left; 
    padding:0; 
	margin:0 30px 0 30PX; 
	_margin:0 2px 0 2PX; 
	width:60px;
	}
 
/* 設置選單區塊*/
.navigation4 li dl { 
	width:60px;/*ie6*/
    margin:0; 
	padding:0px;
	/*background-color:#fff;
	border:solid 2px #666; */
	}
 
.navigation4 li dt a , .navigation4 li dd a{ display:block;}

/* 設置主選單dt */
.navigation4 li dt {
	margin:0;
	padding:5px 5px 5px 5px;
	text-align:center;
	background-color:#333;
	font-size: 22px;
	font-weight:bolder;
	font-family:"Boradway";
	height:22px;
	overflow:hidden;
	}
 
.navigation4 li dt a ,.navigation4  li dt a:visited {

    color:#FFF;
    text-decoration:none;
	}
 
/* 設置子選單dd */
.navigation4 li dd { 
	margin:0; 
    padding:1;
	border-left-style:solid;
	border-left-color:#333;
	/*border:2px solid #000;*/
	width:60; 
	list-style:none;
	color:#000000;
	background-color:#333;
	}
 /*子選單背景大小*/
.navigation4 li dd.last {
	position:absolute;
	z-index:7;
	width:180px;

	}	
 /*子選項字and圖*/
.navigation4 li dd a, .navigation4  li dd a:visited {
	color:#FFFFFF;
	font-family:"Boradway";
    text-decoration:none; 
    }
 
 
/*隱藏子選單*/
.navigation4 li dd { display:none;}
 
 
/* 滑鼠滑入顯示子選單 */
.navigation4 li:hover dd, .navigation4 li a:hover dd { display:block;}
 
/*ie6 hack*/
.navigation4 li:hover,.navigation4 li a:hover { border:0;}
.navigation4 table {
	width:180px;
	/*border-style:solid;*/
	text-align:left;
	}

#ap {
	position:absolute;
	width:250px;
	height:561px;
	z-index:6;
	left: 12px;
	top: 165px;
	margin: 0 auto;
}/*上架2 圖片*/

#apDiv{
	position:absolute;
	width:866px;
	height:423px;
	z-index:7;
	left: 60px;
	top: 130px;
	margin: 0 auto;
}/*上架欄位*/

</style>


</head>


<body >
<?PHP include("main.php");
include("server.php");
include("loginConfirm.php");
if($_SESSION['added'] == "2")
{
	?><script>window.alert('商品已存入無法修改');
	</script>
    <?PHP
	die();

}
 ?>
<div id=ce2>
<div id="ap"><img src="素材/上架2.png" width="978" height="557" alt="上架2" />
    <div id="apDiv">
<FORM name="form1"  method="post">

<ul class="navigation">

    <li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">A</a></dt>
			<dd class="last">
			<?PHP
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
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li>
   
    <li>
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">B</a></dt>
			<dd class="last">			
			<?PHP
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
	
	//B
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'B%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
</dd>			
		</dl>
     </li>
     <!--[if lte IE 6]></td></tr></table></a><![endif]-->
    
     <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">C</a></dt>
			<dd class="last">			<?PHP
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
	
	//C
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'C%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
         <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">D</a></dt>
			<dd class="last">			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'D%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">E</a></dt>
			<dd class="last">
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'E%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 

	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">F</a></dt>
			<dd class="last">
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'F%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 
    	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">G</a></dt>
			<dd class="last">
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'G%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 

</ul>

<ul class="navigation2">

    <li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">H</a></dt>
			<dd class="last">
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'H%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li>
   
    <li>
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">I</a></dt>
			<dd class="last">			
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'I%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
</dd>			
		</dl>
    </li>
     <!--[if lte IE 6]></td></tr></table></a><![endif]-->
    
     <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">J</a></dt>
			<dd class="last">						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'J%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>

</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
         <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">K</a></dt>
			<dd class="last">						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'K%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>

</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">L</a></dt>
			<dd class="last">
	<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'L%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 

	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">M</a></dt>

			<dd class="last">
						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'M%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 
    
    	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">N</a></dt>
			<dd class="last">
						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'N%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 
</ul>

<ul class="navigation3">

    <li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">O</a></dt>
			<dd class="last">
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'O%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li>
   
    <li>
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">P</a></dt>
			<dd class="last">			
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'P%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
</dd>			
		</dl>
     </li>
     <!--[if lte IE 6]></td></tr></table></a><![endif]-->
    
     <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">Q</a></dt>
			<dd class="last">						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'Q%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>

</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
         <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">R</a></dt>
			<dd class="last">						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'R%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>

</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">S</a></dt>
			<dd class="last">
	<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'S%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 

	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">T</a></dt>
			<dd class="last">
						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'T%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 
    
    	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">U</a></dt>
			<dd class="last">
						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'U%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 
</ul>

<ul class="navigation4">

    <li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">V</a></dt>
			<dd class="last">
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'V%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li>
   
    <li>
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">W</a></dt>
			<dd class="last">			
			<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'W%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
</dd>			
		</dl>
    </li>
     <!--[if lte IE 6]></td></tr></table></a><![endif]-->
    
     <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">X</a></dt>
			<dd class="last">						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'X%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>

</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
         <li>
     <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
        <dl>
			<dt><a href="#">Y</a></dt>
			<dd class="last">						<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'Y%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>

</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->     			
    </li>
	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">Z</a></dt>
			<dd class="last">
	<?PHP
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
	$sql_query3 = "SELECT * FROM brand WHERE b_name Like 'Z%'";
	$query3 = mysql_query($sql_query3);
	while($rows3 = mysql_fetch_row($query3)){
	echo 　;
	echo "<a href='";
	if($test2 == "褲子") echo "added32.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "上衣") echo "added3.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "洋裝") echo "added33.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test3 == "皮夾") echo "added36.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "包包") echo "added34.php?gender=$test&s_number=".$s_number['s_number'];
	else if($test2 == "鞋子") echo "added35.php?gender=$test&s_number=".$s_number['s_number'];				
	echo "&id=".$rows3[0]."'><font size=3>".$rows3[1]."　"."<img src=".$rows3['2']." width=38px ></font></a> ";
	echo 　;
	}
	?>
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 

	<li>  
    <!--[if lte IE 6]><a href="#"><table><tr><td><![endif]-->  
    	<dl>
			<dt><a href="#">其他</a></dt>
			<dd class="last">
	</dd>
		</dl>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->    
    </li> 
    
</ul>

</FORM>

    </div>
</div>
</div>

</body>
</html>