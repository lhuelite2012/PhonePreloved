<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?
	include("server.php");
	$sql = "select * from commodity";
	$query = mysql_query($sql);
	while($result = mysql_fetch_array($query))  //將商品下架日期存入$a陣列
	{
		$a[] = $result['downtime'];
	}
	?>
    <script>
		var b = new Array(<? echo count($a);?>);  //建立javascropt b陣列
	</script>
<?
	for($i=0;$i<count($a);$i++){
?>
		<script>
			b[<? echo $i;?>]="<? echo $a[$i];?>";     //將$a陣列 存入 b陣列中
		</script>
<?
    }
?>
		<script>
			
			function cal(){
				var i = 0;
				while(i < <? echo count($a); ?>){
					var startDate = new Date();
					var endDate = new Date(b[i]);
					var spantime = (endDate - startDate)/1000;
						
					if(spantime >0){
						spantime --;
						var d = Math.floor(spantime / (24 * 3600));
						var h = Math.floor((spantime % (24*360))/3600);
						var m = Math.floor((spantime % 3600)/(60));
						var s = Math.floor(spantime%60);
						str = d + "天" + h + "小時" + m +"分" + s + "秒";
						document.getElementById("pad_"+i).innerHTML = str;
					}
					else
					{
						str = "時間已到期";
						document.getElementById("pad_"+i).innerHTML = str;
					}
					i++;
				}
				
			}
			window.onload = function(){
				setInterval(cal, 1000);
			}
		</script>
        <?
			for($t=0 ; $t<8 ;$t++)
				echo "<div id='pad_".$t."'></div>";
		?>
</body>
</html>