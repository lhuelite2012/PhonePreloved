<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
echo date();
$btime="2013-06-17 18:41:25"; 
$atime="2013-06-17 18:51:25"; 
echo (strtotime($atime) - strtotime($btime)); //計算相差幾秒 

echo "<br>";
echo (strtotime($atime) - strtotime($btime))/3600; //計算相差幾小時 
?>

</body>
</html>