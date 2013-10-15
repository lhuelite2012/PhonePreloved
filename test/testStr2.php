<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
	echo $str = "aaaaaaaaaaaaaaaaa測測測測測測";
	echo $ste = "aaaaaaaaa";
	echo "<br />";
	echo mb_strlen($str,'utf8');
	echo "<br />";
	
		if((mb_strlen($str,'utf8')<10))
			echo $str."3";
		else{
			if(strlen($str)>16 and strlen($str)<21)
				echo mb_substr($str,0,7,'utf8').' '.((mb_strlen($str,'utf8')>10) ? "2 ..." : "");
			else if(strlen($str)>30)
					echo mb_substr($str,0,7,'utf8').' '.((mb_strlen($str,'utf8')>10) ? "1 ..." : "");
				 else
				 	echo mb_substr($str,0,14,'utf8').' '.((mb_strlen($str,'utf8')>10) ? "4 ..." : "");
		}
	
		
	//echo ((mb_strlen($str,'utf8')>10) ? mb_substr($str,0,10,'utf8') : $str);
?>
</body>
</html>