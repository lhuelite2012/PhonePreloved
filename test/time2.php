<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style type="text/css">
	#aaa{
		float:left;
		width:300px;
		height:300px;
		background:#FFC;
		margin: 10px 10px 10px 10px;
	}
	#pad{
		color:#F00;
	}
</style>
</head>

<body>
<?
	include("server.php");
	$sql = "select * from commodity";
	$query = mysql_query($sql);
	$i=1;
?>
	<div id="aaa">
    	<div id="c_name1">商品名稱:A</div>
    	<div id="c_price1">商品價格:1280</div>
            剩餘時間 :
			<script>
            	var endDate = new Date('2013-06-18 20:59:30'); //到期時間
				var startDate = new Date();//現在時間
				var spantime = (endDate - startDate)/1000;
				function cal()
				{
					if(spantime >0)
					{
						spantime --;
						var d = Math.floor(spantime / (24 * 3600));
						var h = Math.floor((spantime % (24*360))/3600);
						var m = Math.floor((spantime % 3600)/(60));
						var s = Math.floor(spantime%60);
						str = d + "天" + h + "小時" + m +"分" + s + "秒";
						document.getElementById("pad1").innerHTML = str;
					}else{
						str = "時間已到期";
						document.getElementById("pad1").innerHTML = str;
					}
				}				
				setInterval(cal, 1000);//每秒執行一次
            </script>
            <div id="pad1"></div>
        </div>
    </div>
    <div id="aaa">
        <div id="c_name2">商品名稱:B</div>
    	<div id="c_price2">商品價格:980</div>
            剩餘時間 :
			<script>
            	var endDate2 = new Date('2013-06-22 00:00:00'); //到期時間
				var startDate2 = new Date();//現在時間
				var spantime2 = (endDate2 - startDate2)/1000;
				function cal2()
				{
					if(spantime2 >0)
					{
						spantime2 --;
						var d2 = Math.floor(spantime2 / (24 * 3600));
						var h2 = Math.floor((spantime2 % (24*360))/3600);
						var m2 = Math.floor((spantime2 % 3600)/(60));
						var s2 = Math.floor(spantime2%60);
						str2 = d2 + "天" + h2 + "小時" + m2 +"分" + s2 + "秒";
						document.getElementById("pad2").innerHTML = str2;
					}else{
						str2 = "時間已到期";
						document.getElementById("pad2").innerHTML = str2;
					}
				}				
				setInterval(cal2, 1000);//每秒執行一次
            </script>
            <div id="pad2"></div>
     </div>
</body>
</html>