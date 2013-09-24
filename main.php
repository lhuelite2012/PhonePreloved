<?php
	session_start();
	include("server.php");
	include("commodityPath.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="zh-tw">
<head>
<link rel="icon" href="素材/icon.png" />
<link rel="stylesheet" href="all.css" type="text/css" />



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<script type="text/javascript" src="jQuery/jquery-latest.min.js"></script>
<script type="text/javascript" src="jquery.backgroundPosition.js">
</script>

<title>瘋二手 Phone Preloved</title>
<style type="text/css">
	

	#hmenu {
	position:relative;
	padding: 0 45px;
	list-style: none;
	width: 500px; /* 630-45*2 */
	height: 100px;
	margin-left: auto;
	z-index: 20;
	left: -100px;
	top:-2px;
	}
	#hmenu li {
		float:left;
		margin: 77px 0px 0 0;
	}
	#hmenu li a {
		display:block;
		width:134px; /* 圖片的寬 */
		height: 44px; /* 圖片的高/2 */
		line-height: 31px;	/* ie suck */
		text-indent: -9999px;
	
	}
	#hmenu a.b1 {
		background:url(%E7%B4%A0%E6%9D%90/%E8%B3%BC%E7%89%A9%E5%88%972.png);
		width:105px;	


	}
	#hmenu a.b2 {
		background:url(%E7%B4%A0%E6%9D%90/%E6%88%91%E8%A6%81%E8%B3%A3%E6%9D%B1%E8%A5%BF%E5%88%972.png);
		width:152px;
		
	}	
	#hmenu a.b3 {
		background:url(%E7%B4%A0%E6%9D%90/%E6%9C%83%E5%93%A1%E4%BA%92%E5%8B%95%E5%8D%80%E5%88%972.png);
		width:152px;
	}
	

#green {
	position:absolute;
	width:200px;
	z-index:2;
	padding-top:112px;
}
#cetest{
	position:relative;
	left:50%;
	margin-left:-500px;
	width:1000px;
	
}
#pushbox{
	position:absolute;
	background:url(%E7%B4%A0%E6%9D%90/icon2.png);
	background-repeat: no-repeat;
	top:3px;
	left:8px;
	width:40px;
	height:40px;
	z-index:50;
	cursor:pointer;
}
#pushTotal{
	position:absolute;
	background-color: #f03d25;
	border: 1px solid #d83722;
	border-bottom: 1px solid #c0311e;
	border-top: 1px solid #e23923;
	-webkit-border-radius: 2px;
	-webkit-box-shadow: 0 1px 0 rgba(0, 39, 121, .77);
	display:none;
	padding: 0 1px;
	color:#FFF;
	left:18px;
	top:12px;
	z-index:50;
}
#apDiv11 {
	border-width: 2px;
	border-style: solid;
	border-color: #DFDFCE;
	position: absolute;
	width: 220px;
	height: 42px;
	z-index: 21;
	left: 800px;
	top: -5px;
	background: #F6F7E7;
	border-radius: 10px 10px 10px 10px;
}/*右上我的帳號列白底圖*/

#apDiv16 {
	position: absolute;
	width: 26px;
	height: 30px;
	z-index: 1;
	left: 148px;
	top: 9px;
}/*右上我的帳號列設定鈕*/

#apDiv19 {
	position: absolute;
	width: 30px;
	height: 26px;
	z-index: 2;
	left: 48px;
	top: 4px;
}/*右上我的帳號列登入者大頭貼*/

#apDiv15 {
	position: absolute;
	width: 57px;
	height: 30px;
	z-index: 15;
	left: 85px;
	top: 10px;
}/*右上我的帳號列登入者名稱*/

#logout{
	position: absolute;
	z-index: 15px;
	left: 181px;
	top: 10px;
}

#noLogin{
	position:absolute;
	width:180px;
	height:42px;
	z-index:1;
	left: 840px;
	top: -5px;
}

#noLogin a{
	 text-decoration:none;
}

#toplogin{
	position:absolute;
	z-index: 15;
	left: 141px;
	top: 10px;
}
#registrationTop{
	position: absolute;
	z-index: 15;
	left: 100px;
	top: 10px;
}

</style>

</head>

<body>

<div id="ce2">

<a href="index.php">
	<div id="logo">
		<img src="素材/NEW ! LOGO.png" width="265" height="100" alt="logo" />
	</div>
</a>
	<div id="green"><img src="素材/綠色分隔線2.png" width="940" height="9" alt="綠線"></div>
<?php
	if(isset($_SESSION['m_number']))
	{
		$m_number = $_SESSION['m_number'];
		$push_sql = "select count(*) from push where push_m_number = $m_number and p_check = false";
		$push_result = mysql_query($push_sql);
		$push_total = mysql_fetch_row($push_result);
		if($push_total[0] == 0)
			$push_total[0] = "";
		$push_view = "select  p.p_type,p.p_time,p.c_number,p.bid_number,b.bid_price,b.m_number,c.c_name,c.c_mp,m.name from push p join bid  b join commodity c join members m on b.m_number = m.m_number and p.bid_number = b.bid_number and p.c_number = c.c_number where p.push_m_number = $m_number ";
		$push_view_result = mysql_query($push_view);

		//include("./push/pushShow.php");
?>
		<div id="apDiv11">
        	<div id="pushbox">
            	<div id="pushTotal">
					<?php if($push_total[0]<20) echo $push_total[0]; else echo "<font size='-4'>".$push_total[0]."</font>";?>
                    <script type="text/javascript">
						var push_total = <?php echo $push_total[0];?>
                    </script>
                </div>
            </div>
  			<div id="apDiv15"><?php echo $_SESSION['m_name']; ?></div>
    		<div id="apDiv16"><a href="member.php" title="我的帳號"><img src="素材/右上我的帳號.jpg" /></a></div>
    		<div id="apDiv19"><img src="素材/右上大頭貼.jpg" /></div>
            <div id="logout"><a href="logout.php">登出</a></div>
		</div>
<?php
	}else{
?>
  	<div id="noLogin">
    		<div id="registrationTop"><a href="register.php">註冊</a></div>
            <div id="toplogin"><a href="login.php">登入</a></div>
	</div>
<?php
	}
?>
 
<ul id="hmenu">
		<li><a href="display.php" class="b1">購物</a></li>
		<li><a href="added_1.php" class="b2">我要賣東西</a></li>
		<li><a href="#" class="b3">會員互動區</a></li>
		
</ul>
	
	<br class="clear" />
    
  


</body>
</html>
<script type="text/javascript">
	$(function(){
		// 幫 #hmenu li a 加上 hover 事件
		$("#hmenu li a").hover(function(){
			// 滑鼠移進選項時..
			// 把背景圖片的位置往上移動
			var _this = $(this),
				_height = _this.height() * -1+3;
			_this.stop().animate({
				backgroundPosition: "0px " + _height + "px"
			}, 200);
		}, function(){
			// 滑鼠移出選項時..
			// 把背景圖片的位置移回原位
			$(this).stop().animate({
				backgroundPosition: "0px 0px"
			}, 200);
		});
		
		if(push_total > 0){
			$("#pushbox").css("background","url(%E7%B4%A0%E6%9D%90/icon.png)");
			$("#pushbox").css("background-repeat","no-repeat");
			$("#pushTotal").css("display","block");
		}
		
		//已讀取
		$("#pushbox").click(function(){
			 $(this).load("push/pushTrue.php",{"m_number":"<?php echo $m_number;?>"});
			 $(this).css("background","url(%E7%B4%A0%E6%9D%90/icon2.png)");
			 $(this).css("background-repeat","no-repeat");
			 $("#pushTotal").hide(); //消失
		});
		
	});
</script>