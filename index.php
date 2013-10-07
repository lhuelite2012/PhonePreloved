<?php
include("main.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/jscript" src="imageScaling.js"></script>
<link rel="stylesheet" type="text/css" href="all.css" />
   	<!-- <script type="text/jscript" src="imageScaling.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://www.bitstorm.org/jquery/shadow-animation/jquery.animate-shadow.js"></script>
    <script type="text/javascript" src="http://www.bitstorm.org/jquery/shadow-animation/jquery.animate-shadow-min.js"></script>
    <script type="text/javascript" src="hover.js"></script>
     <script type="text/javascript" src="move.js"></script> -->
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	#newView{
	position: relative;
	z-index: 10;
	left: 31px;
	top: 120px;
	}
	#newVi{
	position:absolute;
	width: 652px;
	height: 175px;
	left: 14px;
	top: 31px;
	}
	
	.newCommodity{
	position:relative;
	float: left;
	left: 5px;
	width: 175px;
	height: 160px;
	}
	#focusVi{
	position: absolute;
	width: 652px;
	height: 175px;
	left: 14px;
	top: 258px;
	}
	#hiVi{
	position: absolute;
	width: 652px;
	height: 175px;
	left: 14px;
	top: 475px;
	}
	
	a{
		 text-decoration:none;
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
	background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #8CE4FF), color-stop(1, #00A3EF));
	position:absolute;
	text-align:right;
	left: 140px;
	top: 0px;
	width: 50px;
	height: 20px;
	text-align:center;
	color:#FFFFFF;
	font-size:15px;
	font-weight:bold;
	line-height:20px;
	}
	#c_name{
	font-size:16px;
	text-align:left;
	line-height:30px;
	font-weight:bold;
	color:#000;
	margin: 0px 0px 0px 10px;
	position:absolute;
	float: left;
	width:150px;
	left: 0px;
	top: 0px;
	height: 45px;
	border-radius: 10px 0px 0px 0px;
	z-index:15;
	}
	.hr{
		left:10px;
		position:absolute;
		width:180px;
		height:1px;
		top:25px;
		background-color:#008000;
		border-radius: 10px 10px 10px 10px;
	}
 	#c_mp{
	position: absolute;
	width: 190px;
	left: 0px;
	top: 30px;
	height: 125px;
 	}
 	#hi_bid_price{
		font-size:15px;
		text-align:left;
		line-height:30px;
		text-align:center;
		color:#FFFFFF;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #35541D), color-stop(1, #4B7D32));
	position:absolute;
	float:left;
	left: 0px;
	top: 120px;
	width: 50px;
	height: 30px;
	z-index:10;
 	}
	#c_price{
		font-size:13px;
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
	#c_description{
		text-align:left;
		padding: 0px 10px 100px;
	}
	.nice_choice {
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(1, #EBEBEB));
		width: 200px;   /*寬260*/
		height: 170px;	/*高290*/
		float: left;	/*水平排列*/
		margin: 20px 5px 0px 10px;
		position: relative;
		text-align: center;
		border-radius: 10px 10px 10px 10px;
	}
	#more{
	position: absolute;
	left: 494px;
	top: 169px;
	}
	#login {
	position: absolute;
	width: 180px;
	height: 150px;
	z-index: 20;
	left: 727px;
	top: 520px;
	background-color: #F8F8EC;
	border-radius:5px 5px 5px 5px;
}
</style>
<title>瘋二手 PhonePreloved</title>
</head>

<body>
<div id="ce2">
<?php if(!isset($_SESSION['m_number'])){?>
<div id="login">
        <form action="login_.php" method="POST">
            <table width="97%" align="center" >
         
            <tr>  
            <td width="40%">帳號：<br></td></tr>
              
            
            <tr><td><input type="text" size="20" name="account" ></td></tr>
          
            
            <td>密碼：</td>
            </tr>
            <tr><td><input type="password" size="20" name="password"> </td></tr>
           
         <th colspan="2" align="center" bgcolor="#F8F8EC" > 
            <input type="image" img src="../素材/登入鈕.png"
             width="55" height="32" onClick="document.formname.submit()" value="下一步"></th>
           
           </table>
    </form> 
</div>
<?php } 
include("0033_2.php");?>
<div id="newView">
	<img src="素材/商品展示底2.png" />
    <div id = "newVi">
    <?php 
		$sql = "select * from commodity where orbidder is null and orend = 0 and orsell = 0 order by uptime desc limit 3 "; 
		$result = mysql_query($sql);
		while($list1 = mysql_fetch_array($result)){
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
	?>
    		 <a href="commodity.php?c_number=<?php echo $list1['c_number'];?>&data=1">
				<div class='nice_choice' id="<?php echo $list1['c_number'];?>">
				  <div class='c_name' id='c_name'><?php $str = $list1['c_name']; 
		echo ((mb_strlen($str,'utf8')>13) ? mb_substr($str,0,13,'utf8') : $str).' '.((mb_strlen($str,'utf8')>13) ? " ..." : "");?></div>
				  <div id='location'><?php echo $list1['location']; ?></div>
        			<div class="hr"></div>
					<div id='c_mp'><img src='<?php echo $displayPathWeb.$list1['c_mp']; ?>' onload='javascript:DrawImage(this,190,135)'/></div> 
                	<div id="pad_<?php echo $n;?>"></div>
				  <div id='hi_bid_price'>$<?php echo $list1['hi_bid_price']; ?></div>
 	 			</div>
     		</a>
	<?php
		}
	?>
 	</div>
  <div id = "focusVi">
    <?php 
		$sql = "SELECT view.c_number,COUNT( * )  'total',commodity.*
FROM VIEW JOIN commodity ON view.c_number = commodity.c_number
GROUP BY view.c_number
ORDER BY 2 desc , view.v_time desc limit 3"; 
		$result = mysql_query($sql);
		while($list1 = mysql_fetch_array($result)){
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
	?>
    		 <a href="commodity.php?c_number=<?php echo $list1['c_number'];?>&data=1">
				<div class='nice_choice' id="<?php echo $list1['c_number'];?>">
				  <div class='c_name' id='c_name'><?php $str = $list1['c_name']; 
		echo ((mb_strlen($str,'utf8')>13) ? mb_substr($str,0,13,'utf8') : $str).' '.((mb_strlen($str,'utf8')>13) ? " ..." : "");?></div>
				  <div id='location'><?php echo $list1['location']; ?></div>
        			<div class="hr"></div>
					<div id='c_mp'><img src='<?php echo $displayPathWeb.$list1['c_mp']; ?>' onload='javascript:DrawImage(this,190,135)'/></div> 
                	<div id="pad_<?php echo $n;?>"></div>
				  <div id='hi_bid_price'>$<?php echo $list1['hi_bid_price']; ?></div>
 	 			</div>
     		</a>
	<?php
		}
	?>
  </div>
    <div id = "hiVi">
    <?php 
		$sql = "select * from commodity where orbidder is null and orend = 0 and orsell = 0 order by downtime limit 3 "; 
		$result = mysql_query($sql);
		while($list1 = mysql_fetch_array($result)){
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
	?>
    		 <a href="commodity.php?c_number=<?php echo $list1['c_number'];?>&data=1">
				<div class='nice_choice' id="<?php echo $list1['c_number'];?>">
				  <div class='c_name' id='c_name'><?php $str = $list1['c_name']; 
		echo ((mb_strlen($str,'utf8')>13) ? mb_substr($str,0,13,'utf8') : $str).' '.((mb_strlen($str,'utf8')>13) ? " ..." : "");?></div>
				  <div id='location'><?php echo $list1['location']; ?></div>
        			<div class="hr"></div>
					<div id='c_mp'><img src='<?php echo $displayPathWeb.$list1['c_mp']; ?>' onload='javascript:DrawImage(this,190,135)'/></div> 
                	<div id="pad_<?php echo $n;?>"></div>
				  <div id='hi_bid_price'>$<?php echo $list1['hi_bid_price']; ?></div>
 	 			</div>
     		</a>
	<?php
		}
	?>
 	</div>
</div>
</body>
</html>