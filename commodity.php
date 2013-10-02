<?php
	ob_start();
	session_start();
	include("main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="all.css" type="text/css" />
<style type="text/css">
	#date{
	position:relative;
	left: 63px;
	top: 180px;
	width:900px;
	background:#FFF;
	border-radius: 5px 5px 5px 5px;
	}
	#c_name{
	position: relative;
	font-weight:900;
	font-size:20px;
	width: 400px;
	height: 50px;
	left: 0px;
	top: 0px;
	margin:0px 40px;
	line-height:50px;
	}
	#c_mp{
	position: absolute;
	left: 0px;
	top: 50px;
	width: 400px;
	height: 350px;
	text-align:center;
	}
	#c_product{
	position: absolute;
	width: 900px;
	height: 500px;
	left: -42px;
	top: -130px;
	}
	#function{
	position: absolute;
	left: 392px;
	top: 41px;
	height: 100px;
	background: #FFFCBF;
	border-radius: 5px 5px 5px 5px;
	}
	#c_table{
	position: absolute;
	left: 400px;
	top: 150px;
	width: 500px;
	height: 350px;
	}
	#seller{
	position: absolute;
	left: 6px;
	top: 400px;
	width: 394px;
	height: 100px;
	}
	#c_table td{
		width:120px;
	}
	#c_table1{
	position: absolute;
	width: 210px;
	height: 291px;
	top: 58px;
	}
	#c_table2{
	position: absolute;
	width: 290px;
	height: 290px;
	left: 210px;
	top: 58px;
	}
	ul li{
	list-style:none;
	height:30px;
	
	} 
	ul li span{
		width:100px;
		height:20px;
		font-weight:bold;
		margin-left:-40px;
		margin-right:30px;
	}
	#c_mode{
	position: absolute;
	left: 109px;
	}
	#c_payment{
	position: absolute;
	left: 109px;
	}
	#report{
	position: absolute;
	left: 432px;
	top: 294px;
	}
	#bid_hier{
	position: absolute;
	left: 204px;
	top: -55px;
	}
	#deductScores{
	position: absolute;
	left: 356px;
	top: 21px;
	}
	#report{
		position:absolute;
	}
	#bid{
	position: absolute;
	left: 204px;
	top: -57px;
	width: 244px;
	}
	#track{
	position: absolute;
	left: 80px;
	top: 16px;
	height: 33px;
	}
	#modify{
	position: absolute;
	left: 205px;
	top: 27px;
	}
	#b2{
	float: left;
	position: relative;
	left: 0px;
	top: 4px;
	}
	#maturity{
	position: absolute;
	left: 86px;
	top: 23px;
	}
	#fstyle1{
	position: absolute;
	left: 24px;
	color: #000;
	font-weight: 900;
	top: 17px;
	}
	#fstyle2{
	position: absolute;
	left: 158px;
	color: #000;
	font-weight: 900;
	top: 17px;
	}
	#fstyle3{
	position: absolute;
	left: 276px;
	color: #000;
	font-weight: 900;
	top: 17px;
	}
	#fstyle4{
	position: absolute;
	left: 418px;
	color: #000;
	font-weight: 900;
	top: 17px;
	}
	#hr3{
	position: absolute;
	width: 870px;
	height: 10px;
	background: #99cc33;
	left: 0px;
	top: 48px;
	}
	#qa{
	position: absolute;
	left: 50px;
	font-size:18px;
	}
	#date2{
	top: 460px;
	position: absolute;
	text-align: center;
	width: 900px;
	left: -60px;
	}
	#date3{
	position: absolute;
	top: 398px;
	font-size: 14px;
	left: -22px;
	}
	
</style>
<title>商品展示</title>

<script type="text/jscript" src="imageScaling.js"></script>
</head>
<body >
<?php

//若沒有c_number 則跳回display.php 以免出現錯誤訊息
if(!isset($_GET['c_number']))
{
	header("Location:display.php");		
	exit();
}
	include("server.php");                // 連資料庫及編碼檔案
	include("commodityPath.php");
	include("addtime.php");
	$m_number = $_SESSION['m_number'];
	
	//include("topLogin.php");
	$c_number =  $_GET['c_number'];	// 商品編號
	$_SESSION['c_number'] = $c_number;
	
	//商品
	$c_sql = "select * from commodity where c_number = '$c_number'";
	$c_query = mysql_query($c_sql);
	if(!$c_rows = mysql_fetch_array($c_query)){
	?>
			<script>
				location.href = "./display.php";
			</script>
	<?php
		exit();
	}
	//商品圖片
	$c_p_sql = "select * from  c_picture where c_number = '$c_number'";
	$c_p_query = mysql_query($c_p_sql);
	
	
	//品牌
	$b_sql = "select * from brand where b_number = (select b_number from commodity where c_number = '$c_number')";
	$b_query = mysql_query($b_sql);
	$b_rows = mysql_fetch_array($b_query);
	
	//出價次數
	$bid_sql = "select count(*) from bid where c_number = '$c_number'";
	$bid_query = mysql_query($bid_sql);
	$bid_rows = mysql_fetch_row($bid_query);
	
	//出價最高者
	$bid_hier_sql = "select max(bid_price), bid.m_number,account from bid join members on bid.m_number = members.m_number where bid.c_number =$c_number group by c_number";
	$bid_hier_query = mysql_query($bid_hier_sql);
	$bid_hier_rows = mysql_fetch_row($bid_hier_query);
	
	//交易方式
	$c_mode_sql = "select c_mode from c_mode where c_number = '$c_number'";
	$c_mode_query = mysql_query($c_mode_sql);
	
	//付款方式
	$c_payment_sql = "select c_payment from c_payment where c_number = '$c_number'";
	$c_payment_query = mysql_query($c_payment_sql);
	
	//賣家 會員編號
	$acc1 = "select m_number from commodity where c_number = '$c_number'";
	$acc1_query = mysql_query($acc1);
	$acc1_rows = mysql_fetch_array($acc1_query);
	
	//賣家 會員帳號
	$acc_sql = "select account from members where m_number = ".$acc1_rows['m_number'];
	$acc_query = mysql_query($acc_sql);
	$acc_rows = mysql_fetch_array($acc_query);
	
	//全部商品
	$allc_sql = "select count(*) from commodity where m_number =".$acc1_rows["m_number"];
	$allc_query = mysql_query($allc_sql);
	$allc_rows = mysql_fetch_row($allc_query);
	
	//發問總數
	$qa_sql = "select count(c_number) from qa where c_number ='$c_number'";
	$qa_query = mysql_query($qa_sql);
	$qa_rows = mysql_fetch_row($qa_query);
	
	//交易紀錄
	$tran_sql = "SELECT transaction. * , members.account, members.name
FROM  `transaction` 
JOIN members ON transaction.m_number = members.m_number
WHERE transaction.c_number = $c_number";
	$tran_query = mysql_query($tran_sql);
	$tran_true = mysql_num_rows($tran_query);
	$tran_rows = mysql_fetch_array($tran_query);
	
	//父分類編號
	$sort_sql = "select s_fsort from sort where s_number = ".$c_rows['s_number'];
	$sort_query = mysql_query($sort_sql);
	$sort_row = mysql_fetch_row($sort_query);
	$s_fsort = $sort_row[0];
	
	
		//嵌入加入時間
	include("addtime.php");
	//若已登入會員﹐則新增瀏覽紀錄
	if(isset($_SESSION['m_number']))
	{	//判斷是否為自己賣的商品
		if($_SESSION['m_number'] != $c_rows['m_number']){
			//判斷與前一次加入瀏覽紀錄時間是否超過3分鐘
			$maxTime_sql = "select max(v_time) from view where m_number = '$m_number' and c_number = '$c_number'"; //最新瀏覽紀錄時間
			$maxTime_query = mysql_query($maxTime_sql);
			$maxTime_rows = mysql_fetch_row($maxTime_query);
			if(strtotime($addtime)-strtotime($maxTime_rows[0])>180) //大於3分鐘(180秒)
			{
				$m_number = $_SESSION['m_number'];
				$view_sql = "insert into view (m_number,c_number,v_time) value ('$m_number','$c_number','$addtime')";
				$view_result = mysql_query($view_sql);
			}
		}
	}
?>

<div id="ce2">
<div id="date">
	<div id="c_product">
		<div id="c_name">
    		<?php echo $c_rows["c_name"]; ?> 
   		</div>
    	<div id="c_mp">
    		<img src="<?php echo $picturePathWeb.$c_rows["c_mp"]; ?>" onload="javascript:DrawImage(this,390,340);" />
   		</div>
   	  <div id="seller">
    	<table height="81px">
        	<tr>
            	<td rowspan="3"><img src="素材/紙膠-賣家資訊.png" onload="javascript:DrawImage(this,100,100);" /> </td>	
        		<td height="27px">賣　　家︰</td><td style="font-size:12px;"><?php echo $acc_rows["account"]; ?></td>
        	</tr>
        	<tr>
            	<td height="27px">全部商品︰</td><td><?php echo $allc_rows[0]; ?><a href="mart.php?c_number=<?php echo $c_number;?>" >賣場首頁</a></td><td></td>
        	</tr>
        	<tr>
            	<td height="27px">評　　價︰</td><td><?php echo $acc_rows["score"]; ?><a href="#" >查詢評價</a></td>
            	<td><a href="#">更多賣家資訊</a></td>
        	</tr>
    	</table>
	  </div>
        <div id="function">
       	  <table width="500px" height="80px" align="center" >
        		<tr>
                	<td style="width:100px;" height="40px"><strong style="font-size:22px">最高出價：</strong></td><td style="width:80px;"><strong style="font-size:22px">$<?php echo $_SESSION['bid_hi'] = $c_rows["hi_bid_price"];  ?></strong></td>
                	<td style="width:85px; color:#F00; font-weight:bold;">倒數時間：</td>
                    <td>  
					<script>
                		var endDate = new Date('<?php echo $c_rows["downtime"];?>');
               		</script>
              		<script type="text/javascript" src="spantime.js"></script>
            		<div id="pad" style="color:#F00; font-weight:bold;"></div>
                    </td>
				</tr>
            	<tr>
                	<td style="width:120px;" height="40px">起標價：</td><td style="width:80px;">$<?php echo $c_rows["c_price"];?></td>
                    
			</tr>
          </table>
        </div>
      <div id="c_table">
      <img src="<?php echo $b_rows["logo"] ?>" onload='javascript:DrawImage(this,60,60);' id="brand_logo"/>
          <div id="c_table1">
             <ul style="font-size:15px;">
        		<li><span>品 　　牌：</span><?php echo $b_rows["b_name"];?></li>
<?php if($s_fsort ==1){ //衣服?>
            	<li><span>尺　　寸：</span><?php echo $c_rows["size"]; ?></li>
                <li><span>長　　度：</span><?php echo $c_rows["c_height"]."　公分"; ?></li>
                <li><span>肩　　寬：</span><?php echo $c_rows["c_shoulder"]."　公分"; ?></li>
                <li><span>胸　　寬：</span><?php echo $c_rows["c_bust"]."　公分"; ?></li>
                <li><span>腰　　寬：</span><?php echo $c_rows["c_waistline"]."　公分"; ?></li>	
<?php }?>
<?php if($s_fsort ==2){ //褲子?>
            	<li><span>尺　　寸：</span><?php echo $c_rows["size"]; ?></li>
                <li><span>長　　度：</span><?php echo $c_rows["c_height"]."　公分"; ?></li>
                <li><span>腰　　寬：</span><?php echo $c_rows["c_waistline"]."　公分"; ?></li>
                <li><span>臀　　寬：</span><?php echo $c_rows["c_hips"]."　公分"; ?></li>	
<?php }?>
<?php if($s_fsort ==3){ //包包?>
            	<li><span>長　　度：</span><?php echo $c_rows["c_height"]."　公分"; ?></li>
                <li><span>肩　　寬：</span><?php echo $c_rows["c_shoulder"]."　公分"; ?></li>
<?php }?>
<?php if($s_fsort ==4){ //鞋子?>
            	<li><span>尺　　寸：</span><?php echo $c_rows["size"]." (".$c_rows['s_size'].")";?></li>
<?php }?>
<?php if($s_fsort ==5){ //洋裝?>
            	<li><span>尺　　寸：</span><?php echo $c_rows["size"]; ?></li>
                <li><span>長　　度：</span><?php echo $c_rows["c_height"]."　公分"; ?></li>
                <li><span>肩　　寬：</span><?php echo $c_rows["c_shoulder"]."　公分"; ?></li>
                <li><span>胸　　寬：</span><?php echo $c_rows["c_bust"]."　公分"; ?></li>
                <li><span>腰　　寬：</span><?php echo $c_rows["c_waistline"]."　公分"; ?></li>	
<?php }?>
            	<li><span>商品材質：</span><?php echo $c_rows["material"]; ?></li>
                <li><span>商品顏色：</span><?php 
					$sql = "select colors_name,colors_code from colors where colors_number = ".$c_rows['colors_number'];
					$result = mysql_query($sql);
					$row = mysql_fetch_row($result);
					echo $row[0];
				?><div style=" border-color:#CCC; border:solid; border-width:1px; position: absolute; border-radius: 5px 5px 5px 5px; width: 20px; height: 20px; background:<?php echo $row[1]; ?>;left: 180px; margin:-20px;"></div></li>
                <li><span>商品新舊：</span><?php echo $c_rows["oan"]; ?></li>
                <li><span>出價次數：</span><?php echo $bid_rows[0];?></li>
             </ul>
        </div>
        <div id="c_table2">
			 <ul style="list-style-position:outside;font-size:15px;">
        		<li><span>開始時間：</span><?php echo $c_rows["uptime"];?></li>
            	<li><span>結束時間：</span><?php echo $c_rows["downtime"];?></li>
            	<li><span>所在地區：</span><?php echo $c_rows["location"]; ?></li>
                <li><span style="float:left;">付款方式：</span>
                	<div id="c_payment">
					<?php while($c_payment_rows = mysql_fetch_array($c_payment_query)){
						echo $c_payment_rows[0]."<br>"; 
				   	   }
					?>
                	</div>
                </li><br />
                <li><span style="float:left;">交易方式：</span>
                	<div id="c_mode">
					<?php while($c_mode_rows = mysql_fetch_array($c_mode_query)){
						echo $c_mode_rows[0]."<br>"; 
				   	   }
					?>
                    </div>
                </li>
          </ul>
       </div> 
<?php	//時間 雙方 得標 判斷
if($c_rows['downtime'] < $addtime){ //判斷商品到期 (現在時間小於下架日期)
	if($c_rows['m_number'] != $m_number and isset($m_number) and $c_rows['orbidder']!= $m_number){ //買家//////////////////////////////////?>
    	<div id="maturity">商品已結束競標</div>
<?php	}
	if($c_rows['m_number'] == $m_number and isset($m_number)){ //賣家//////////////////////////////////
    	$sql = "select * from bid where c_number = $c_number";
		$result = mysql_query($sql);
		$true_bid = mysql_num_rows($result);
		if($true_bid  > 0 and !isset($c_rows['orbidder'])){
?>			<div id="maturity">
			<form action="transaction_chooseBuyer.php" method="post">
               <input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
               <input type="submit" value="選擇得標者" />
            </form>
            </div>
<?php 		}else{ ?>
		<div id="maturity"><a href="unsold.php">前往拍賣清單</a></div>
<?php		}
	}
	if(isset($m_number)){
	//是否出價過
	$bid_once_sql = "select * from bid where m_number = $m_number and c_number = $c_number";
	$bid_once_query = mysql_query($bid_once_sql);
	$bid_once_total = mysql_num_rows($bid_once_query);
	if($bid_once_total > 1){ //出價者//////////////////////////////////?>
    	<div id="maturity">等待賣家選擇得標者</div>
<?php	}
	}
	if($c_rows['orbidder'] == $m_number and isset($m_number)){ //得標者//////////////////////////////////?>
    	<div id="maturity">
    	<form action="transaction_choose.php" method="git">
           <input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
           <input type="submit" value="選擇交易方式" />
        </form>
        </div>
<?php	}	
}else{	//商品未到期
	if($c_rows['m_number'] != $m_number){ //買家//////////////////////////////////?>
		<div id="track"><a href="track.php"><img src="素材/按鈕-追蹤.png" title="加入追蹤清單" onload='javascript:DrawImage(this,55,55);' /></a></div>
        <div id="bid">
		  <div id="b2" style="font-weight:bold;">出價金額：</div>
        	<form action="bid.php" method="post" name="send" onsubmit="<?php if(isset($m_number)) echo " return chk();"; else echo "return report1()"; ?>">
            	<input type="text" name="bid" size="10px" />
                <input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
                <div style="position: absolute; left: 183px; top: 0px;">
                	<input type="image" src="素材/按鈕-送出.png"   onload='javascript:DrawImage(this,50,50);' onclick="document.formname.submit()" />
                </div>
        	</form>  
    	</div>
        <div id="report">
     		<form action="report.php" method="post" name="report">
        		<input type="hidden" name="c_number" value="<?php echo $c_number;?>"  />
        		<input type="submit" onclick="<?php if(isset($m_number)) echo "return report2()"; else echo "return report1()"; ?>" value="檢舉" <?php if($c_rows['downtime'] < $addtime){ echo "disabled='disabled'"; }?> />		
   		  </form>   
    	</div>       
<?php	}
	if($c_rows['m_number'] == $m_number){ //賣家//////////////////////////////////?>
		<div id="deductScores">
          <form action="deductScores.php" name="deductS" method="post">
          <input type="hidden" name="deduct" value="<?php if($total == 0) echo 1; else echo 2;?>" />
          <input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
          <input type="button" onclick="return downtime()"value="下架商品" />	
          </form>
        </div>
        <div id="modify">
        	<a href=""><img src="" />修改商品</a>
        </div>
		<div id="bid_hier">
        	目前最高者：<?php echo $bid_hier_rows[2]; ?>
        </div>
<?php
        $sql = "select * from bid where c_number = $c_number";
		$result = mysql_query($sql);
		$true_bid = mysql_num_rows($result);
		if($true_bid  > 0){
?>			<div id="maturity">
			<form action="transaction_chooseBuyer.php" method="post">
               <input type="hidden" name="c_number" value="<?php echo $c_number; ?>" />
               <input type="submit" value="選擇得標者" />
            </form>
            </div>
<?php		}
	}
}?>
    </div>
    </div>
<div id="date3">
    <table id="table2">
	<tr>
    	<td><?php if($_GET['data']==1){ ?>
        	<a href="commodity.php?c_number=<?php echo $c_number; ?>&data=1"><img src="素材/紙膠 綠.png" width="108" height="53" id="Image10" /><div id="fstyle1">商品資訊</div></a>
        <?php }else{?>
        	<a href="commodity.php?c_number=<?php echo $c_number; ?>&data=1" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','素材/紙膠 綠.png',1)"><img src="素材/紙膠 藍.png" width="108" height="53" id="Image10" /><div id="fstyle1">商品資訊</div></a>	
		<?php } ?></td>
        <td></td><td></td><td></td><td></td><td></td>
        <td>
        <?php if($_GET['data']==2){ ?>
        	<a href="commodity.php?c_number=<?php echo $c_number; ?>&data=2"><img src="素材/紙膠 綠.png" width="108" height="53" id="Image11" /><div id="fstyle2">購買憑證</div></a>
        <?php }else{?>
        <a href="commodity.php?c_number=<?php echo $c_number; ?>&data=2" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','素材/紙膠 綠.png',1)"><img src="素材/紙膠 藍.png" width="108" height="53" id="Image11" /><div id="fstyle2">購買憑證</div></a>
        
        <?php } ?></td><td></td><td></td><td></td><td></td><td></td>
        
        <td>
        <?php if($_GET['data']==3){ ?>
        	<a href="commodity.php?c_number=<?php echo $c_number; ?>&data=3"><img src="素材/紙膠 綠.png" width="108" height="53" id="Image12" /><div id="fstyle3">出價紀錄(<?php echo $bid_rows[0]; ?>)</div></a>
        <?php }else{?>
        <a href="commodity.php?c_number=<?php echo $c_number; ?>&data=3" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','素材/紙膠 綠.png',1)"><img src="素材/紙膠 藍.png" width="108" height="53" id="Image12" /><div id="fstyle3">出價紀錄(<?php echo $bid_rows[0]; ?>)</div></a>
        <?php } ?></td><td></td><td></td><td></td><td></td><td></td>
        
        
        <td>
        <?php if($_GET['data']==4){ ?>
        	<a href="commodity.php?c_number=<?php echo $c_number; ?>&data=4"><img src="素材/紙膠 綠.png" width="108" height="53" id="Image13" /><div id="fstyle4">問與答(<?php echo $qa_rows[0]; ?>)</div></a>
        <?php }else{?>
        <a href="commodity.php?c_number=<?php echo $c_number; ?>&data=4" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','素材/紙膠 綠.png',1)"><img src="素材/紙膠 藍.png" width="108" height="53" id="Image13" /><div id="fstyle4">問與答(<?php echo $qa_rows[0]; ?>)</div></a><?php } ?></td>
    </tr>
</table><div id="hr3"></div>
    </div>

<div id="date2">
    <?php
//------------連結判斷-------------//
	switch($_GET['data'])
	{ 
		case 1: 	//若data=1 則顯示 商品圖片
			while($c_p_rows = mysql_fetch_array($c_p_query)){
?>
	  <div align="center"><img src="<?php echo $picturePathWeb.$c_p_rows["c_picture"]; ?>" /></div><br/>
<?php
			}
			if(isset($c_rows["c_movie"]) and $c_rows["c_movie"]!=""){
?>
			<div align="center">
				<embed src="<?php echo $moviePathWeb.$c_rows["c_movie"]; ?>" autostart="false" loop="0"   width="600" height="400"></embed>
			</div>
<?php			}
		break;
		case 2:		//若data=2 則顯示 商品購買憑證
			if(isset($c_rows["pop"]) and $c_rows["pop"]!=""){
?>			
				<div align="center"><?php echo "購買日期:".$c_rows['c_date']; ?></div>
				<div align="center"><img src="<?php echo $popPathWeb.$c_rows["pop"]; ?>" /></div><br/>
<?php			}else
				echo "未有紀錄";
		break;
		case 3:		//若data=3 則顯示 商品出價紀錄
			//出價紀錄
			$c_bid = "SELECT bid.*,members.account,members.total FROM bid join members on bid.m_number = members.m_number WHERE bid.c_number = $c_number order by  2 desc";	$c_bid_result = mysql_query($c_bid);
			$c_bid_total = mysql_num_rows($c_bid_result);
			
?> 			<div align="center"><table border="1" width="800px" align="center">
			<?php if($c_bid_total>0){ ?>
				<tr>
                	<th width="250px">出價者</th>
                    <th width="50px">評價</th>
                    <th width="250px">出價價格</th>
                    <th width="250px">出價時間</th>
                </tr>			
<?php			while($c_bid_row = mysql_fetch_array($c_bid_result)){?>
            	<tr>
                	<td width="250px"><?php echo $c_bid_row['account']; ?></td>
                	<td width="50px"><?php echo $c_bid_row['total']; ?></td>
                    <td width="250px"><?php echo $c_bid_row['bid_price']; ?></td>
                    <td width="250px"><?php echo $c_bid_row['bid_time']; ?></td>
                </tr>
<?php 			}
			}else echo "<tr><td> 沒有任何出價紀錄 </td></tr>";?>
			</table></div>
<?php
		break;
		case 4:		//若data=4 則顯示 商品問與答
			include("qa.php");
		break;
	}
?><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	</div>
<?php
include("related_commodity.php");
?>
</div>

</div>
</body>
</html>
<script type="text/javascript">
	var bid_hi = <?php echo $c_rows["hi_bid_price"]; ?> ;
	var c_price = <?php echo $c_rows["c_price"];?>;
	var total = <?php echo $_SESSION["total"]/200;?> ;
	function chk(){
    if(document.send.bid.value==''){
      alert('請填入出價金額');
      document.send.bid.focus();
      return false;
    }
    if(document.send.bid.value<= bid_hi ){
      alert('請高於目前最高金額');
      document.send.bid.focus();
      return false;
    }
	 if(document.send.bid.value <= c_price ){
      alert('請高於起標金額');
      document.send.bid.focus();
      return false;
    }
	
  	}
	function downtime(){
		if( confirm ("確定要下架商品?") ) {
			document.deductS.submit();
		}
  		else{
			return false;
		}
	}
	function report1(){
		if( confirm ("請先登入會員") ) {
			location.href = './login.php?c_number=<?php echo $c_number;?>';
			return false;
		}
  		else{
			return false;
		}
	}
	function report2(){
		if(total < 1){
			alert('很抱歉!評價必須大於或等於1才能提出檢舉。');
			return false;
		}
	}
</script>