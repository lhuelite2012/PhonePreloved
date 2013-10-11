<?php
	ob_start();
	include("main.php");
	include("addtime.php");  //資料庫時間
	include("commodityPath.php");
	include("sort.php");//排序
	include("phpFunction.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
	<script src="jQuery/jquery-1.5.2.min.js"></script>
    <script src="jQuery/hover.js"></script>
    <script src="jQuery/move.js"></script>
<style type="text/css">
	/*
	以下為display.php的樣式
*/
	
	a{
		 text-decoration:none;
	} 

	#container {
	position: absolute;
	left: 660px;
	margin-left: -500px; /* 760 除以 -2 */
	width: 920px;
	font-family: Arial, Helvetica, sans-serif, 微軟正黑體;
	top: 250px;
	}
	#containerTop{
		position:absolute;
		left: 550px;
		margin-left: -450px; /* 760 除以 -2 */
	}
 	#page{
		position:absolute;
		top:1250px;
		font-size:18px;
		
	 }
	 #location{
		 background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFF), color-stop(1, #666));
		 
	position:absolute;
	text-align:right;
	left: 180px;
	top: 0px;
	width: 68px;
	height: 31px;
	text-align:center;
	color:#000;
	font-size:18px;
	font-weight:bold;
	line-height:31px;
	}
	#ttt{
	position:absolute;
	text-align:right;
	left: 155px;
	top: 4px;
	text-align:center;
	color:#FFFFFF;
	font-size:18px;
	font-weight:bold;
	line-height:31px;
	}
	#c_name{
	font-size:18px;
	text-align:left;
	line-height:45px;
	color:#000000;
	margin: 0px 0px 0px 10px;
	position:absolute;
	float: left;
	width:211px;
	left: 0px;
	top: 0px;
	height: 45px;
	border-radius: 10px 0px 0px 0px;
	z-index:15;
	}
	.hr{
		left:10px;
		position:absolute;
		width:240px;
		height:3px;
		top:40px;
		background-color:#008000;
		border-radius: 10px 10px 10px 10px;
	}
 	#c_mp{
	position: absolute;
	width: 260px;
	left: 0px;
	top: 47px;
	height: 225px;
 	}
 	#hi_bid_price{
		color:#FFF;
		background:#CF0A0A;
		font-size:25px;
		text-align:left;
		line-height:40px;
		text-align:center;
		border-radius: 10px 10px 10px 10px;
	position:absolute;
	float:left;
	left: 0px;
	top: 225px;
	width: 98px;
	height: 40px;
	z-index:10;
 	}
	#c_price{
		font-size:10px;
		text-align:left;
		line-height:20px;
		text-align:center;
		color:#FFFFFF;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #35541D), color-stop(1, #4B7D32));
	position:absolute;
	float:left;
	left: 0px;
	top: 260px;
	width: 50px;
	height: 20px;
	z-index:10;
 	}
 	.caption {
	background:#FF9900;
	position:absolute;
	width:300px;
	height:40px;
	top: 270px;
	}
	#oan{
		text-align:right;
		padding: 10px ;
		font-size:15px;
		position:relative;
	}
	#c_description{
		text-align:left;
		padding: 0px 10px 100px;
	}
	.nice_choice {
		
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #EBEBEB));
		width: 260px;   /*寬260*/
		height: 290px;	/*高290*/
		float: left;	/*水平排列*/
		margin: 20px 0px 10px 10px;
		position: relative;
		text-align: center;
		border-radius: 10px 10px 10px 10px;
/*font-family: Arial, Helvetica, sans-serif, 微軟正黑體;
border-radius: 5px;
border: #dedede 1px solid;
box-shadow: 1px 1px 4px #DDDDDD;
background: #fbfbfb;
background: -moz-linear-gradient(top, #fbfbfb 0%, #fbfbfb 69%, #ededed 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(69%,#fbfbfb), color-stop(100%,#ededed));
background: -webkit-linear-gradient(top, #fbfbfb 0%,#fbfbfb 69%,#ededed 100%);
background: -o-linear-gradient(top, #fbfbfb 0%,#fbfbfb 69%,#ededed 100%);
background: -ms-linear-gradient(top, #fbfbfb 0%,#fbfbfb 69%,#ededed 100%);
background: linear-gradient(to bottom, #fbfbfb 0%,#fbfbfb 69%,#ededed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#ededed',GradientType=0 );
	*/}
	.hover {
	position: absolute;
	margin: 0;

	padding: 0;
	width: 260px;
	height: 290px;
	overflow: hidden;
	border-radius: 10px 10px 10px 10px;
	}
	.hover .caption {
	position: relative;
	top: 250px;	/* .abgne_tip_gallery_block 的高 - 想顯示 title 的高(這邊是設 55) */
	width: 260px;	/* .abgne_tip_gallery_block 的寬 - .caption 的左右 padding */
	cursor: pointer;
	color: #fff;
	background: url(素材/1px_black.png) repeat;
	height: 250px;
	}
	#apDiv1 {
	position: absolute;
	width: 145px;
	height: 115px;
	z-index: 6;
	top: 150px;
	left: -8px;
	}/*apdiv1 購物下左邊商品欄圖*/
	#apDiv4 {
	position: absolute;
	width: 129px;
	height: 44px;
	z-index: 1;
	left: 4px;
	top: 8px;
}/*apdiv4 購物下左邊所有商品*/
#apDiv5 {
	position: absolute;
	width: 131px;
	height: 42px;
	z-index: 2;
	left: 4px;
	top: 63px;
	}/*apdiv5 購物下左邊偏愛商品*/
	

#apDiv10 {
	position:absolute;
	width:69px;
	height:32px;
	z-index:2;
	left: 31px;
	top: 205px;
}/*購物下進階搜尋鈕*/
#o_price{
	position:absolute;
	margin: 20px;
	font-size:13px;
	left:-10px;
}

</style>
	
 
     <script src="jQuery/imageScaling.js"></script>
     
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	<title>瀏覽</title>
 	<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
    </script>
</head>
<body onload="MM_preloadImages('素材/偏愛商品欄-綠.png','素材/所有商品欄-綠.png','素材/分類鈕-衣服灰.png','素材/分類鈕-褲子灰.png','素材/分類鈕-包包灰.png','素材/分類鈕-鞋子灰.png')">
<div id="ce2">
<?php include("keysearch.php");?>
<div id="apDiv1">
  <div id="apDiv4"><a href="display.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','素材/所有商品欄-綠.png',1)"><img src="素材/所有商品欄-黃.png" name="Image4" id="Image4"/></a>
  </div>
    <div id="apDiv5"><a href="recommend.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','素材/偏愛商品欄-綠.png',1)"><img src="素材/偏愛商品欄-綠.png" name="Image5" width="146" height="55" id="Image5" /></a>
    </div>
  </div>
</div>


<?php include("mode.php"); ?>



<div id="container">

 <?php   
 include("sizeConverted.php");


		
	$total_sql = "select sum(recommend.r_score),commodity.*,sort.s_fsort,brand.b_name from commodity join sort join brand join recommend on commodity.s_number = sort.s_number and commodity.b_number = brand.b_number and commodity.c_number = recommend.c_number where  recommend.m_number =$m_number and commodity.m_number != $m_number and orend = 0 and orsell = 0  $c_gender $s_fsort $s_number $clothes_size $shoes_size2 $brand_start $price_range $location $sea group by c_number";

		
		//進入commodity.php離開後登入 跳至index.php
		$_SESSION['c_number']="no";
		
		//顯示有多少列資料
 		$result = mysql_query($total_sql);
 		$total = mysql_num_rows($result);
		?>	<div style="position:absolute; left:635px; top:-10px; text-align:right; width:200px;" >總共搜尋到 <?php echo $total;?> 筆商品</div>
		<?php
		//每頁最大數量
		$page_size = 12; 
		
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
		if(!isset($sort)){$sort = "1 desc";}
		
		$sql = "select sum(recommend.r_score),commodity.*,sort.s_fsort,brand.b_name from commodity join sort join brand join recommend on commodity.s_number = sort.s_number and commodity.b_number = brand.b_number and commodity.c_number = recommend.c_number where  recommend.m_number =$m_number and commodity.m_number != $m_number and orend = 0 and orsell = 0  $c_gender $s_fsort $s_number $clothes_size $shoes_size2 $brand_start $price_range $location $sea group by c_number order by ".$sort." limit ".$offset.", $page_size";
		
		$resul = mysql_query($sql);
   				$s = 1;
				$n = 1; //pad_編號
   				while($list1=mysql_fetch_array($resul))
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
//~~~~~下架~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~						
						if($list1['report_count'] >= 3){
							//更新商品 截止(orend)
							$down = "update commodity set orend = 1,downtime = '$addtime' where c_number =".$list1['c_number']; 
							$down_query = mysql_query($down);
						}
						
						if($list1['downtime'] <= $addtime)
						{
							//更新商品 截止(orend)
							$down = "update commodity set orend = 1 where c_number =".$list1['c_number']; 
							$down_query = mysql_query($down); 
							
						}
//~~~~~下架~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~						
?>	
	
	  <a href="commodity.php?c_number=<?php echo $list1['c_number'];?>&data=1">
      <div class='nice_choice' id="<?php echo $list1['c_number'];?>">
		<div class='c_name' id='c_name' title="<?php echo $list1['c_name'];?>" ><?php $str = $list1['c_name']; 
		if((mb_strlen($str,'utf8')<10))
			echo $str;
		else{
			if(strlen($str)>16 and strlen($str)<21)
				echo mb_substr($str,0,7,'utf8').' '.((mb_strlen($str,'utf8')>10) ? " ..." : "");
			else if(strlen($str)>30)
					echo mb_substr($str,0,7,'utf8').' '.((mb_strlen($str,'utf8')>10) ? " ..." : "");
				 else
				 	echo mb_substr($str,0,14,'utf8').' '.((mb_strlen($str,'utf8')>10) ? " ..." : "");
		}
		?></div>
		<div id="ttt"><img src="
	<?php 	if($list1['c_gender'] == "女") 
				echo "素材/女性.png"; 
			else if($list1['c_gender'] == "男") 
				echo "素材/男性.png"; 
			else 
				echo "素材/中性.png";?>
        " onload="javascript:DrawImage(this,23,23);" /></div><div id='location'><?php echo $list1['location']; ?>		</div>
        <div class="hr"></div>
		<div id='c_mp'><img src='<?php echo $displayPathWeb.$list1['c_mp']; ?>'/></div>
        <div class="hover">
			<div class="caption">
            	<div id="o_price">起標價：<?php echo $list1['c_price']; //原價?></div>
			    <div id="oan">
    				<div id="pad_<?php echo $n;?>"></div><br /> 
                </div>
                ------------------------------------------------
				<div id="c_description">
                	
                	尺寸：<?php echo $list1['size'] ?>　<br />
                    付款方式：
					<?php 
						while($cp_list1=mysql_fetch_array($cp_result))
						{ 
							echo $cp_list1['c_payment']."　";
						} 
					?>　
                    <br />
                    交易方式：
					<?php 
						while($cm_list1=mysql_fetch_array($cm_result))
						{ 
							echo $cm_list1['c_mode']."　";
						} 
					?>　
                    <br />
                    <?php
                    	echo $list1['oan']."　";
					?>
                	<?php
						while($brand_list1=mysql_fetch_array($brand_result))
						{ 
							echo "<img src='".$brand_list1['logo']."' onload='javascript:DrawImage(this,70,70);' align='right' />";
						} 
					?>
				</div>
          </div>
        </div>
		<div id='hi_bid_price' <?php if(strlen($list1['hi_bid_price'])>4){?> style="font-size:21px"<?php }?> ><?php echo "$".$list1['hi_bid_price']; ?></div>
          
 	 </div>
     </a>

<?php	
				$n++; 
   				} //while end
?>
 	<script>
		var b = new Array(<?php echo count($a);?>);  //建立javascropt b陣列
	</script>
<?php
	for($i=1;$i<= count($a);$i++){
?>
		<script>
			b[<?php echo $i;?>]="<?php echo $a[$i-1];?>";     //將$a陣列 存入 b陣列中
		</script>
<?php
    }
?>


		<script>
			
			function cal(){
				var i = 1;
				while(i <= <?php echo count($a); ?>){
					var startDate = new Date();
					var endDate = new Date(b[i]);
					var spantime = (endDate - startDate)/1000;
						
					if(spantime >=0){
						spantime --;
						var d = Math.floor(spantime / (24 * 3600));
						var h = Math.floor((spantime % (24*3600))/3600);
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
        <?php
			header("refresh:600");
			
			include("page.php");
		?>
</div>

</body>
</html>