<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<? 
$str = "5555555555555555555555555555555555555";
echo ((mb_strlen($str,'utf8')>10) ? mb_substr($str,0,10,'utf8') : $str).' '.((mb_strlen($str,'utf8')>10) ? " ..." : "");?>
</body>
</html>