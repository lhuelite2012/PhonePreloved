
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 	<head>
    <link rel="stylesheet" type="text/css" href="../style.css" />
   	<script type="text/jscript" src="../imageScaling.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../hover.js"></script>
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	<title>瀏覽</title>
 	</head>
	<body>
	<div id="container">
 <?   
 		include("../server.php");  
		
 		if( isset($_GET['page']) )
  			$page = intval( $_GET['page'] );
		else{$page = 1;}
 			$page_size = 9;
 		$sql = "select count(*) as total from commodity";
 		$result = mysql_query($sql);
 		$row = mysql_fetch_array($result);
 		$total = $row['total'];
 		if(isset($total))
  		{
   			if( $total < $page_size )
     			$page_count = 1;  
   			if( $total % $page_size ) 
    			$page_count = (int)($total / $page_size) + 1; 
   			else
    			$page_count = $total / $page_size; 
 		}
		else
  			$page_count = 0;
 			$page_number = '';
 			if( $page == 1 )
  				$page_number .= '[第一頁][上一頁] ';
 			else
  			{
   				$page_number.='[<a href='.$_SERVER['PHP_SELF'].'?page=1>第一頁</a>]';
   				$page_number.='[<a href='.$_SERVER['PHP_SELF'].'?page='.($page-1).'>'."上一頁</a>]";
  			}
 			if(($page == $page_count) || ($page_count == 0))
 				$page_number .= '[下一頁][尾頁]';
 			else
  			{
   				$page_number.='[<a href='.$_SERVER['PHP_SELF'].'?page='.($page+1).'>'."下一頁</a>]";
   				$page_number.='[<a href='.$_SERVER['PHP_SELF'].'?page='.$page_count.'>'."尾頁</a>]";
  			}
 			if(isset($total))
  			{
   				$sql = "select * from commodity  limit ". ($page-1)*$page_size .", $page_size";
   				$result = mysql_query($sql);
   				$s = 1;
   				while($list1=mysql_fetch_array($result))
   				{ 
?>

	  <div class='nice_choice' id="<? echo $list1['c_number'];?>">
		<div id='c_name'><a href="../commodity.php?c_number= <? echo $list1['c_number'];?>"><? echo $list1['c_name']; ?></a></div>
		<div id='location'><? echo $list1['location']; ?></div>
		<div id='c_mp'><img src='<? echo $list1['../c_mp']; ?>' onload="javascript:DrawImage(this,200,200);"/></div>
        <div class="hover">
			<div class="caption">
			    <div id="oan">
					<?
                    	echo $list1['oan']."　";
					?>
                </div>
                ------------------------------------------------
				<div id="c_description">
                	
                	尺寸：　<br />
                    付款方式：　<br />
                    交易方式：　<br />
                    材質：棉質　<br />
                    下架時：  <br />
                	<? /*
						//找出所有拍賣方式及交易方式
						$cm_sql = "select * from c_mode where c_number=".$list1['c_number'];
						$cm_result = mysql_query($cm_sql);
						while($cm_list1=mysql_fetch_array($cm_result))
						{ 
							echo $cm_list1['c_mode']."　";
						} */
					?>
                    <img src="../brand/Balenciaga-Logo.jpg" onload="javascript:DrawImage(this,100,100);" align="right" />
				</div>
             </div>
        </div>
		<div id='c_price'><? echo $list1['c_price']; ?></div>  
 	 </div>

<?
   				}
?>
					<div id="page">
<?
   					echo $page_number;
?>
					</div>
<?
  				}
?></div>
	</body>
</html>
