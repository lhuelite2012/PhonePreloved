<?PHP
	session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="zh-tw">
<head>

<link rel="stylesheet" href="all.css" type="text/css" />

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

</head>

<body onLoad="checkx()" onLoad="MM_preloadImages('素材/我的帳號-個人資料藍.png','素材/我的帳號-拍賣紀錄藍.png','素材/我的帳號-評價紀錄藍.png','素材/我的帳號-追蹤清單藍.png','素材/我的帳號-商品問與答藍.png')">
 
<div id="apDiv38"><img src="素材/我的帳號綠列.png" alt="我的帳號綠色列" width="590" height="42" />
	<div id="apDiv39"><a href="alter.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','素材/我的帳號-個人資料藍.png',1)"><img src="素材/我的帳號-個人資料白.png" name="Image8" width="87" height="30" border="0"></a></div>
	<div id="apDiv40"><a href="mysale.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','素材/我的帳號-拍賣紀錄藍.png',1)"><img src="素材/我的帳號-拍賣紀錄白.png" name="Image9" width="87" height="30" border="0"></a></div>
	<div id="apDiv41"><a href="myrule.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','素材/我的帳號-評價紀錄藍.png',1)"><img src="素材/我的帳號-評價紀錄白.png" name="Image10" width="87" height="30" border="0"></a></div>
	<div id="apDiv42"><a href="list.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','素材/我的帳號-追蹤清單藍.png',1)"><img src="素材/我的帳號-追蹤清單白.png" name="Image11" width="87" height="30" border="0"></a></div>
	<div id="apDiv43"><a href="ans.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','素材/我的帳號-商品問與答藍.png',1)"><img src="素材/我的帳號-商品問與答白.png" name="Image12" width="110" height="30" border="0"></a></div>
</div>
</body>
</html>