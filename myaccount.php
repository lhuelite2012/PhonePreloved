<?
	session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="zh-tw">
<head>

<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="jquery.backgroundPosition.js">
</script>

<link rel="shortcut icon" href="./素材/icon.png"> 

<script type="text/javascript">
	$(function(){
		// 幫 #hmenu li a 加上 hover 事件
		$("#hmenu li a").hover(function(){
			// 滑鼠移進選項時..
			// 把背景圖片的位置往上移動
			var _this = $(this),
				_height = _this.height() * -1;
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
	});
</script>

<script language="javascript">
function checkx()
{
	var password1 = document.getElementById("password1").value; //宣告變數password1
	var password2 = document.getElementById("password2").value; //宣告變數password2
	
	if(password1 != "" && password2 != "") //判斷兩者皆不為空值
	{
				
		if(password1.length >= 5　&& password1 == password2) //判斷是否大於5個字元以及是否輸入相同
		{	
			
			document.getElementById("not").innerHTML = '';
			document.getElementById("altercode").disabled = false;
		}
		else
		{
			document.getElementById("altercode").disabled = true;
			document.getElementById("not").innerHTML = "密碼輸入或是長度有錯誤！";
		}
	}
	else
	{
		document.getElementById("altercode").disabled = true;
		document.getElementById("not").innerHTML = "兩者密碼欄位不可為空白！";		
	}
}
</script>

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

<style type="text/css">

#hmenu
{
	padding: 0 45px;
	list-style: none;
	width: 550px; /* 630-45*2 */
	height: 130px;
	margin-left:auto;
}
#hmenu li
{
	float:left;
	margin: 77px 0px 0 0;
}
#hmenu li a
{
	display:block;
	width:134px; /* 圖片的寬 */
	height: 44px; /* 圖片的高/2 */
	line-height: 31px;	/* ie suck */
	text-indent: -9999px;
}
#hmenu a.b1
{
	background:url(%E7%B4%A0%E6%9D%90/%E8%B3%BC%E7%89%A9%E5%88%972.png);
	width:105px;	
}
#hmenu a.b2
{
	background:url(%E7%B4%A0%E6%9D%90/%E6%88%91%E8%A6%81%E8%B3%A3%E6%9D%B1%E8%A5%BF%E5%88%972.png);
	width:152px;
}	
#hmenu a.b3
{
	background:url(%E7%B4%A0%E6%9D%90/%E6%9C%83%E5%93%A1%E4%BA%92%E5%8B%95%E5%8D%80%E5%88%972.png);
	width:152px;
}
#green
{
	position:absolute;
	width:200px;
	z-index:2;
	padding-top:112px;
}
#apDiv11 {
	border-width:2px; 
	border-style:solid;
	border-color:#DFDFCE;
	position:absolute;
	width:180px;
	height:42px;
	z-index:1;
	left: 840px;
	top: -5px;
	background:#F6F7E7;
	border-radius: 10px 10px 10px 10px;
}/*右上我的帳號列白底圖*/
</style>

</head>

<body onLoad="checkx()" onLoad="MM_preloadImages('素材/我的帳號-個人資料藍.png','素材/我的帳號-拍賣紀錄藍.png','素材/我的帳號-評價紀錄藍.png','素材/我的帳號-追蹤清單藍.png','素材/我的帳號-商品問與答藍.png')">

<div id=ce2>

<a href="index.php">
	<div id="logo">
		<img src="素材/NEW ! LOGO.png" width="265" height="100" alt="logo" />
	</div>
</a>

<div id="green"><img src="素材/綠色分隔線2.png" width="970" height="9" alt="綠線"></div>

<?
	if(isset($_SESSION['m_number']))
	{
?>
		<div id="apDiv11">
  			<div id="apDiv15"><?php echo $_SESSION['m_name']; ?></div>
    		<div id="apDiv16"><a href="member.php" title="我的帳號"><img src="素材/右上我的帳號.jpg" /></a></div>
    		<div id="apDiv19"><img src="素材/右上大頭貼.jpg" /></div>
            <div id="logout"><a href="logout.php">登出</a></div>
		</div>
<?
	}
	else
	{
?>
		<div id="noLogin">
    		<div id="registrationTop"><a href="register.php">註冊</a></div>
            <div id="logout"><a href="login.php">登入</a></div>
		</div>
<?
	}
?>
	<ul id="hmenu">
		<li><a href="display.php" class="b1">購物</a></li>
		<li><a href="added_1.php" class="b2">我要賣東西</a></li>
		<li><a href="#" class="b3">會員互動區</a></li>
		
	</ul>
	
	<br class="clear" />
 
<div id="apDiv38"><img src="素材/我的帳號綠列.png" alt="我的帳號綠色列" width="590" height="42" />
	<div id="apDiv39"><a href="alter.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','素材/我的帳號-個人資料藍.png',1)"><img src="素材/我的帳號-個人資料白.png" name="Image8" width="87" height="30" border="0"></a></div>
	<div id="apDiv40"><a href="mysale.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','素材/我的帳號-拍賣紀錄藍.png',1)"><img src="素材/我的帳號-拍賣紀錄白.png" name="Image9" width="87" height="30" border="0"></a></div>
	<div id="apDiv41"><a href="myrule.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','素材/我的帳號-評價紀錄藍.png',1)"><img src="素材/我的帳號-評價紀錄白.png" name="Image10" width="87" height="30" border="0"></a></div>
	<div id="apDiv42"><a href="list.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','素材/我的帳號-追蹤清單藍.png',1)"><img src="素材/我的帳號-追蹤清單白.png" name="Image11" width="87" height="30" border="0"></a></div>
	<div id="apDiv43"><a href="ans.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','素材/我的帳號-商品問與答藍.png',1)"><img src="素材/我的帳號-商品問與答白.png" name="Image12" width="110" height="30" border="0"></a></div>
</div>
</body>
</html>