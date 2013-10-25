<? include("phpFunction.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?
	$gender = "女";
	$format = "FR";
	$value = 44.67;
	echo "目前狀態<br>";
	echo "性別:".$gender."<br>";
	echo "格式:".$format."<br>";
	echo "尺寸:".$value."<br>";
	echo "換算成JP:".$size = changeSize($gender,$format,$value);
?>
</body>
</html>