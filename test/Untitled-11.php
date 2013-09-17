<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" language="javascript">
google.load("jquery", "1.4.3");
</script>
<script src="http://jquery.offput.ca/js/jquery.timers.js" type="text/javascript"></script> 
<style type="text/css">
	.day{
		float:left;
	}
	.hour{
		float:left;
	}
	.min{
		float:left;
	}
	.sec{
		float:left;
	}
</style>
</head>

<body>
<?
	include("server.php");
	$sql = "select * from commodity";
	$query = mysql_query($sql);
	while($row = mysql_fetch_array($query))
	{
?>
<script type="text/javascript">
var startDate = new Date();
var endDate = new Date('<? echo $row['downtime']; ?>');
var spantime = (endDate - startDate)/1000;
  
 $(document).ready(function () {
        $(this).everyTime('1s', function(i) {
             spantime --;
             var d = Math.floor(spantime / (24 * 3600));
             var h = Math.floor((spantime % (24*3600))/3600);
             var m = Math.floor((spantime % 3600)/(60));
             var s = Math.floor(spantime%60);
 
             if(spantime>0){
				$(".day").text(d+"天");
                $(".hour").text(h+"時");
                $(".min").text(m+"分");
                $(".sec").text(s+"秒");
             }else{ // 避免倒數變成負的
			 	$(".day").text(0);
                $(".hour").text(0);
                $(".min").text(0);
                $(".sec").text(0);
             }
         });
   });
</script>
<p><? echo $row['c_name']; ?></p>
<div class="day"></div>
<div class="hour"></div>
<div class="min"></div>
<div class="sec"></div>
<?
}
?>
</body>
</html>