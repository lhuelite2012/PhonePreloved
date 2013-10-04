<?php
	session_start();
	include("server.php");
	include("commodityPath.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="zh-tw"><head>
<link rel="icon" href="素材/icon.png" />
<link rel="stylesheet" href="all.css" type="text/css" />



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<script type="text/javascript" src="jQuery/jquery-latest.min.js"></script>
<script type="text/javascript" src="jquery.backgroundPosition.js">
</script>
<script src="jQuery/imageScaling.js"></script>
<title>瘋二手 Phone Preloved</title>
<style type="text/css">
	
 <!-- A{text-decoration:none} --> 
	#hmenu1 {
	position:relative;
	padding: 0 45px;
	list-style: none;
	height: 42px;
	margin-left: auto;
	z-index: 20;
	width:500px;
	overflow: hidden;
	top:77px;
	}
	#hmenu11,#hmenu22,#hmenu33{
		position:relative;
		height: 100px;
		float:left;
	}
	

#green {
	position:absolute;
	width:200px;
	z-index:21;
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
	padding: 0 1px;
	color:#FFF;
	left:18px;
	top:12px;
	z-index:50;
	display:none;
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
	#pushShow{
		position:absolute;
		width:350px;
		border: solid 2px #ddd;
		z-index: 100;
		background: #F6F7E7;
		border-radius:3px 3px 3px 3px;
		top:52px;
		left:-120px;
		padding:5px 0px 5px 0px ;
	}
	#beeper{
		position:absolute;
		background:url(../%E7%B4%A0%E6%9D%90/beeper.png);
		width:20px;
		height:12px;
		left:15px;
		top:44px;
		z-index: 101;
	}
	#push_mp{
		position:relative;
		float:left;
		padding:0px 5px 0px 10px ;
		width:85px;
		height:85px;
	}
	#push_name{
		position:relative;
	}
    #push_type{
		position:relative;
	}
    #push_view{
		position:relative;
	}
    .push_time{
		position:relative;
		height:15px;
		text-align:left;
		font-size:9px;
		padding:15px 0px 0px 0px;
	}
    #push_whoP{
		position:absolute;
		left:290px;
		width:50px;
		height:50px;
	}
    #push_who{
		position:relative;
	}
	#push_all{
		position:relative;
	}
	#push_a{
		height:110px;
		color:#000;
	}
	#push_a a{
		text-decoration:none;
	}
</style>

</head>

<body>
<script src="jQuery/imageScaling.js"></script>
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
		$push_sql = "select * from push where push_m_number = $m_number and p_check = false";
		$push_result = mysql_query($push_sql);
		$push_total = mysql_num_rows($push_result);
		if($push_total == 0)
			$push_total = "";
?>
		<div id="apDiv11">
        	<div id="push_all"></div>
        	<div id="pushbox" <?php if($push_total >0) echo "style='background:url(%E7%B4%A0%E6%9D%90/icon.png); background-repeat:no-repeat;'"?>>
            	<div id="pushTotal" <?php if($push_total >0) echo "style='display:block';";?>><?php echo $push_total; ?></div>
            </div>
           
  			<div id="apDiv15"><?php echo $_SESSION['m_name']; ?></div>
    		<div id="apDiv16"><a href="alter.php" title="我的帳號"><img src="素材/右上我的帳號.jpg" /></a></div>
    		<div id="apDiv19"><img src="<?php if($_SESSION['file'] !="" and !is_null($_SESSION['file'])) echo $_SESSION['file']; else echo "素材/右上大頭貼.jpg";?>" onload='javascript:DrawImage(this,35,35);' /></div>
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
 
<div id="hmenu1">
	<a href="display.php"><div id="hmenu11"><img src="素材/購物列2.png" /></div></a>
    <a href="added_1.php"><div id="hmenu22"><img src="素材/我要賣東西列2.png" /></div></a>
    <a href="question.php"><div id="hmenu33"><img src="素材/會員互動區列2.png" /></div></a>
</div>
	
	<br class="clear" />
    
  


</body>
</html>
<script type="text/javascript">
	$(function(){
		function test(){
			$('#pushTotal').load("push/pushView.php",{"m_number":"<?php echo $m_number;?>"},function(response) {
          		$('#pushTotal').html(response);
     		});
			if(Number($('#pushTotal').html())>0){
				$('#pushTotal').show();
				$('#pushbox').css("background","url(%E7%B4%A0%E6%9D%90/icon.png)");
				$('#pushbox').css("background-repeat","no-repeat");
			}else{
				$('#pushTotal').hide();
				$('#pushbox').css("background","url(%E7%B4%A0%E6%9D%90/icon2.png)");
				$('#pushbox').css("background-repeat","no-repeat");
			}
		}
		setInterval(test,1000);
		
		$('#hmenu1 div').hover(function(){
				// 讓 $caption 往上移動
				$(this).stop().animate({
					top: "-45px"
				}, 200);
			}, function(){
				// 讓 $caption 移回原位
				$(this).stop().animate({
					top:  "0px"
				}, 200);
		});
		
		
		//已讀取
		$("#pushbox").click(function(){
			 $('#push_all').show();
			 $(this).css("background","url(%E7%B4%A0%E6%9D%90/icon2.png)");
			 $(this).css("background-repeat","no-repeat");
			 $("#pushTotal").hide(); //消失
			 //window.location.reload();
		});
		
		
		var push_click = 1;
		$("#pushbox").click(function(){
			if(push_click == 1){
				$("#push_all").show();
				$(this).load("push/pushTrue.php",{"m_number":"<?php echo $m_number;?>"});
			 	$('#push_all').load("push/pushShow.php",{"m_number":"<?php echo $m_number;?>"});
				push_click = 0;
			}
			else{
				$("#push_all").hide();
				push_click = 1;
			}
				
		});
		$('body').click(function(evt) {
            if($(evt.target).parents("#push_all").length==0 &&
evt.target.id != "pushbox") {
				push_click = 1;
                $('#push_all').hide();
            }
        });
		
		
		
	});
</script>