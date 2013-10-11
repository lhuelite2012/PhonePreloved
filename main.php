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
	margin: auto;
	z-index: 20;
	left:253px;
	overflow: hidden;
	top:147px;
	
	}
	#hmenu11,#hmenu22,#hmenu33{
		position:relative;
		height: 100px;
		float:left;
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

#logo1 {
	position:absolute;
	width:1495px;
	height:112px;
	z-index:10;
	background-image:url(%E7%B4%A0%E6%9D%90/%E7%99%BD.png);
	background-repeat:repeat-x;
	top: 45px;
	left: -356px;
	
}
#shoppings {
	position:absolute;
	width:162px;
	height:48px;
	z-index:22;
	left: 249px;
	top: 157px;
}
#sell {
	position:absolute;
	width:151px;
	height:49px;
	z-index:23;
	left: 412px;
	top: 157px;
}
#interactive {
	position:absolute;
	width:164px;
	height:45px;
	z-index:10;
	left: 573px;
	top: 157px;
}
#periphery {
	position:relative;
	width:200px;
	height:115px;
	z-index:25;
}
#pushShow{
		position:absolute;
		width:350px;
		border: solid 2px #ddd;
		background: #F6F7E7;
		border-radius:3px 3px 3px 3px;
		top:52px;
		left:-120px;
		padding:5px 0px 5px 0px ;
		z-index:30;
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
<script src="jQuery/imageScaling.js"></script>
<body onLoad="MM_preloadImages('素材/購物列2 綠.png','素材/我要賣東西列2  綠.png','素材/會員互動區列2 綠.png','素材/我要賣東西列2  綠.#$#')">

<div id="ce2">
<div id="periphery">
<div id="logo1">
  <a href="index.php"><div id="logo">
		<img src="素材/NEW ! LOGO.png" width="265" height="100" alt="logo" />
</div></a></div>
	
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
    		<div id="apDiv19"><img src="<?php if($_SESSION['filepr'] !="" and !is_null($_SESSION['filepicture'])) echo $_SESSION['filepicture']; else echo "素材/右上大頭貼.jpg";?>" onload='javascript:DrawImage(this,35,35);' /></div>
            <div id="logout"><a href="logout.php">登出</a></div>
		</div>
<?php
	}else{
?>
  	<div id="noLogin">
    		<div id="registrationTop"><a href="register_0">註冊</a></div>
            <div id="toplogin"><a href="login.php">登入</a></div>
	</div>
<?php
	}
?>

  
<div id="shoppings"><a href="display.php">
<a href="display.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('購物','','素材/購物列2 綠.png',1)"><img src="素材/購物列2 白.png" name="購物" width="166" height="43" border="0"></a></div>

<div id="sell"><a href="added_1.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('我要賣東西','','素材/我要賣東西列2  綠.#$#',1)"><img src="素材/我要賣東西列2  白.png" name="我要賣東西" width="163" height="43" border="0"></a></div>

<div id="interactive"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('會員互動區','','素材/會員互動區列2 綠.png',1)"><img src="素材/會員互動區列2 白.png" name="會員互動區" width="163" height="43" border="0"></a></div></div>


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
