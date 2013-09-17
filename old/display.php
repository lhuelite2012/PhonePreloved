<?
	ob_start();
	include("topLogin.php");
	include("addtime.php");  //資料庫時間
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 	<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
   	<script type="text/jscript" src="imageScaling.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://www.bitstorm.org/jquery/shadow-animation/jquery.animate-shadow.js"></script>
    <script type="text/javascript" src="http://www.bitstorm.org/jquery/shadow-animation/jquery.animate-shadow-min.js"></script>
    <script type="text/javascript" src="hover.js"></script>
     <script type="text/javascript" src="move.js"></script>
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	<title>瀏覽</title>
 	</head>
	<body>
    <table>
    	<tr>
        	<td><a href="display.php">所有商品</a></td>
        </tr>
        <tr>
        	<td><a href="display.php?s_number=1">衣服</a></td>
        </tr>
        <tr>
        	<td><a href="display.php?s_number=2">褲子</a></td>
        </tr>
        <tr>
        	<td><a href="display.php?s_number=3">鞋子</a></td>
        </tr>
        <tr>
        	<td><a href="display.php?s_number=4">包包</a></td>
        </tr>
        <tr>
        	<td><a href="recommend.php">偏愛商品</a></td>
        </tr>
    </table>
	<div id="container">
 <?   
 		include("server.php");
		
		//判斷s_number 是否有值
		if(isset($_GET['s_number'])){
			$s_number = $_GET['s_number'];
			$total_sql = "select count(*) as total from commodity where s_number = $s_number";
		}else{
			$total_sql = "select count(*) as total from commodity";
		}
		
		//顯示有多少列資料
 		$result = mysql_query($total_sql);
 		$row = mysql_fetch_array($result);
 		$total = $row['total'];
		
		//每頁最大數量
		$page_size = 9; 
		
		//共需多少頁
		$page_count = ceil($total / $page_size);
		
		// 取得當前的頁數，或者顯示預設的頁數
		if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    		// 把變量的類型轉換成 int
    		$page= (int) $_GET['page'];	
		} else {
    		// 預設的頁數
    		$page = 1;
		} // end if
		
		
		// 若過當前的頁數大於頁數總數
		if ($page > $total) {
    		// 把當前頁數設定為最後一頁	
 		    $page = $total;
		} // end if	
		
		// 若果當前的頁數小於 1
		if ($page < 1) {	
    		// 把當前頁數設定為 1
    		$page = 1;
		} // end if
 		
		// 根據當前頁數計算名單的起始位置
		$offset = ($page - 1) * $page_size;
		
		//判斷s_number 是否有值
		if(isset($_GET['s_number'])){
			$s_number = $_GET['s_number'];
			$sql = "select * from commodity where s_number = $s_number and orend = 0 and orsell = 0 limit ".$offset.", $page_size";
		}else{
			$sql = "select * from commodity where orend = 0 and orsell = 0 limit ".$offset.", $page_size";
		}
   				
   				$result = mysql_query($sql);
   				$s = 1;
				$n = 1; //pad_編號
   				while($list1=mysql_fetch_array($result))
   				{ 
	
						//找尋本商品的交易方式
						$cm_sql = "select * from c_mode where c_number = ".$list1['c_number'];
						$cm_result = mysql_query($cm_sql);
						
						//找尋本商品的付款方式
						$cp_sql = "select * from c_payment where c_number = ".$list1['c_number'];
						$cp_result = mysql_query($cp_sql);
						
						//找尋本商品的品牌LOGO
						$brand_sql = "select * from brand where b_number = ".$list1['b_number'];
						$brand_result = mysql_query($brand_sql);
						
						//將下架日期存入$a陣列中 從0開始
						$a[] = $list1['downtime'];
						
						
						if($list1['downtime'] <= $addtime)
						{
							//更新商品 截止(orend)
							$down = "update commodity set orend = 1 where c_number =".$list1['c_number']; 
							$down_query = mysql_query($down); 
						}
									
?>
	  <a href="commodity.php?c_number=<? echo $list1['c_number'];?>&data=1">
      <div class='nice_choice' id="<? echo $list1['c_number'];?>">
		<div class='c_name' id='c_name'><? echo $list1['c_name']; ?></div>
		<div id='location'><? echo $list1['location']; ?></div>
        <div class="hr"></div>
		<div id='c_mp'><img src='<? echo $list1['c_mp']; ?>' onload="javascript:DrawImage(this,280,265);"/></div>
        <div class="hover">
			<div class="caption">
			    <div id="oan">
					<?
                    	echo $list1['oan']."　";
					?>
                </div>
                ------------------------------------------------
				<div id="c_description">
                	
                	尺寸：<? echo $list1['size'] ?>　<br />
                    付款方式：
					<? 
						while($cp_list1=mysql_fetch_array($cp_result))
						{ 
							echo $cp_list1['c_payment']."　";
						} 
					?>　
                    <br />
                    交易方式：
					<? 
						while($cm_list1=mysql_fetch_array($cm_result))
						{ 
							echo $cm_list1['c_mode']."　";
						} 
					?>　
                    <br />
                    剩餘時間：
    					   <div id="pad_<? echo $n;?>"></div><br /> 
                	<?
						while($brand_list1=mysql_fetch_array($brand_result))
						{ 
							echo "<img src='".$brand_list1['logo']."' onload='javascript:DrawImage(this,100,100);' align='right' />";
						} 
					?>
				</div>
          </div>
        </div>
		<div id='c_price'>$<? echo $list1['c_price']; ?></div>  
 	 </div>
     </a>

<?	
				$n++; 
   				} //while end
?>
 	<script>
		var b = new Array(<? echo count($a);?>);  //建立javascropt b陣列
	</script>
<?
	for($i=1;$i<= count($a);$i++){
?>
		<script>
			b[<? echo $i;?>]="<? echo $a[$i-1];?>";     //將$a陣列 存入 b陣列中
		</script>
<?
    }
?>
		<script>
			
			function cal(){
				var i = 1;
				while(i <= <? echo count($a); ?>){
					var startDate = new Date();
					var endDate = new Date(b[i]);
					var spantime = (endDate - startDate)/1000;
						
					if(spantime >=0){
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
			header("refresh:600");
			
			/****** 建立分頁連結 ******/	
			//若只有1頁
			if($page_count >1)
			{
			// 顯示的頁數範圍
			$range = 3;
			// 若果正在顯示第一頁，無需顯示「前一頁」連結	
			if ($page > 1) {
    			// 使用 << 連結回到第一頁	
    			echo " <a href='{$_SERVER['PHP_SELF']}?page=1'><<</a> ";
				// 前一頁的頁數
				$prevpage = $page - 1;
				// 使用 < 連結回到前一頁
				echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'><</a> ";	
			} // end if
			
			// 顯示當前分頁鄰近的分頁頁數
			for ($x = (($page - $range) - 1); $x < (($page + $range) + 1); $x++) {
				// 如果這是一個正確的頁數...
				if (($x > 0) && ($x <= $page_count)) {
					// 如果這一頁等於當前頁數...
					if ($x == $page) {
						// 不使用連結, 但用高亮度顯示
						echo " [<b>$x</b>] ";	
						// 如果這一頁不是當前頁數...
					} else {	
						// 顯示連結	
						echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
					} // end else	
				} // end if	
			} // end for
			
			// 如果不是最後一頁, 顯示跳往下一頁及最後一頁的連結	
			if ($page != $page_count) {	
				// 下一頁的頁數	
				$nextpage = $page + 1;	
				// 顯示跳往下一頁的連結	
				echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'>下一頁</a> ";
				// 顯示跳往最後一頁的連結	
				echo " <a href='{$_SERVER['PHP_SELF']}?page=$page_count'>最後一頁</a> ";
			} // end if	
			} else {
				echo " [<b>1</b>] ";	
			}
			/****** 完成建立分頁連結 ******/
		?>
	</body>
</html>
