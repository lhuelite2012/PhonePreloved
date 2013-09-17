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

	while($result = mysql_fetch_array($query))
	{
?>
		<div id="aaa">
        	<div id="c_name<?php echo $i;?>">商品名稱:<? echo $result['c_name']; ?></div>
            <div id="c_price<?php echo $i;?>">商品價格:<? echo $result['c_price']; ?></div>
            剩餘時間 :
            <? $a[]= $result["downtime"];?>
			<script>
            	var endDate = new Date('<? echo $result["downtime"];?>'); //到期時間
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
						document.getElementById("pad<?php echo $i;?>").innerHTML = str;
					}else{
						str = "時間已到期";
						document.getElementById("pad<?php echo $i;?>").innerHTML = str;
					}
				}				
				setInterval(cal, 1000);//每秒執行一次
            </script>
            <div id="pad<?php echo $i;?>"></div>
        </div>
<?php
		$i+=1;
	}
?>
</body>
</html>