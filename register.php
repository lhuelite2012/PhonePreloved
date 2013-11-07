<?php
	session_start();
	include("main.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_cache_limiter('private,must_revalidate');
?>
<head>
<style>
saveHistory{behavior:url(#default#savehistory);}
</style>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>
<style type="text/css">
#apDiv20 {
	position: absolute;
	text-align: center;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 78px;
	top: 250px;
	width: 80%;
}/*註冊步驟底圖片*/

.apDiv{
	position:absolute;
	text-align:center;
	width:650px;
	height:1095px;
	z-index:1;
	left: 156px;
	top: 100px;
	z-index:15;
}/*註冊步驟1欄位*/

#accountAjax{
	font-size:14px;
	}

</style>
<script type="text/javascript" src="jQuery/jquery.validate.js"></script>
<embed id="hipkiclient" type="application/x-hipki-client" width=0.1 height=0.1></embed>
<script>
	/*    MOICA  */
	function getHiPKIPlugin(){
		var agent = navigator.userAgent.toLowerCase();
		var browser = "Unknown browser";
		var hipkiclient;
		alert("getHiPKIPlugin:  "+agent.search ("msie"));
		if (agent.search ("msie") > -1) {
			browser = "Internet Explorer";
			try{
				hipkiclient = new ActiveXObject("CHT.HiPKIClient.1");
			}catch(e){
				alert("Create HiPKIClient ActiveX Object Error!");
				return null;
			}
			if(typeof(hipkiclient)=='object'){
				return hipkiclient;
			}
			return null;
		} else {//non IE Browsers
			if(navigator.mimeTypes &&
				navigator.mimeTypes["application/x-hipki-client"] &&
				(hipkiclient=navigator.mimeTypes["application/x-hipki-client"].enabledPlugin)!=null)
			{
				var container = document.getElementById("HiPKIClient");
				container.innerHTML="<embed id=\"hipkiclient\" type=\"application/x-hipki-client\" width=1 height=1/>";
				return document.getElementById("hipkiclient");
			}else{
				alert("Create HiPKIClient Plugin Error!");
				return null;
			}
		}
		return null;
	}
	
	function detectHiPKIPlugin(){
		var agent = navigator.userAgent.toLowerCase(); 
		var browser = "Unknown browser";
		var hipkiclient;
		//alert("detectHiPKIPlugin:  "+agent.search ("msie"));
		if (agent.search ("msie") > -1) {
			browser = "Internet Explorer";
			try{
				hipkiclient = new ActiveXObject("CHT.HiPKIClient.1");
			}catch(e){
				//alert("Create HiPKIClient ActiveX Object Error!");
				return false;
			}
			if(typeof(hipkiclient)=='object'){
				return true;
			}
			return false;
		} else {//non IE Browsers
			if(navigator.mimeTypes &&
				navigator.mimeTypes["application/x-hipki-client"] &&
				(hipkiclient=navigator.mimeTypes["application/x-hipki-client"].enabledPlugin)!=null)
			{
				return true;
			}else{
				return false;
			}
		}
		return false;
	}
	
	
		function MajorErrorReason(rcode){
		switch(rcode){
			case 0x76000001:
				return "未輸入金鑰";
			case 0x76000002:
				return "未輸入憑證";
			case 0x76000003:
				return "未輸入待簽訊息";
			case 0x76000004:
				return "未輸入密文";
			case 0x76000005:
				return "未輸入函式庫檔案路徑";
			case 0x76000006:
				return "未插入IC卡";
			case 0x76000007:
				return "未登入";
			case 0x76000008:
				return "型態錯誤";
			case 0x76000999:
				return "使用者已取消動作";
			case 0x76100001:
				return "無法載入IC卡函式庫檔案";
			case 0x76100002:
				return "結束IC卡函式庫失敗";
			case 0x76100003:
				return "無可用讀卡機";
			case 0x76100004:
				return "取得讀卡機資訊失敗";
			case 0x76100005:
				return "取得session失敗";
			case 0x76100006:
				return "IC卡登入失敗";
			case 0x76100007:
				return "IC卡登出失敗";
			case 0x76100008:
				return "IC卡取得金鑰失敗";
			case 0x76100009:
				return "IC卡取得憑證失敗";
			case 0x76200001:
				return "pfx初始失敗";
			case 0x76200006:
				return "pfx登入失敗";
			case 0x76200007:
				return "pfx登出失敗";
			case 0x76200008:
				return "不支援的CA";
			case 0x76300001:
				return "簽章初始錯誤";
			case 0x76300002:
				return "簽章型別錯誤";
			case 0x76300003:
				return "簽章內容錯誤";
			case 0x76300004:
				return "簽章執行錯誤";
			case 0x76300005:
				return "簽章憑證錯誤";
			case 0x76300006:
				return "簽章DER錯誤";
			case 0x76300007:
				return "簽章結束錯誤";
			case 0x76400001:
				return "解密DER錯誤";
			case 0x76400002:
				return "解密型態錯誤";
			case 0x76400003:
				return "解密錯誤";
			case 0x76600001:
				return "Base64編碼錯誤";
			case 0x76600002:
				return "Base64解碼錯誤";
			case 0x76700001:
				return "伺服金鑰解密錯誤";
			case 0x76700002:
				return "未登錄伺服金鑰";
			case 0x76700003:
				return "伺服金鑰加密錯誤";
			default:
				return rcode.toString(16);
		}
	}
	function MinorErrorReason(rcode){
		switch(rcode){
			case 0x06:
				return "函式失敗";
			case 0xA0:
				return "PIN碼錯誤";
			case 0xA2:
				return "PIN碼長度錯誤";
			case 0xA4:
				return "已鎖卡";
			case 0x150:
				return "記憶體緩衝不足";
			default:
				return rcode.toString(16);
		}
	}
	
	function MakeCredential(){
		//alert("Make");
		var plugin= document.getElementById("hipkiclient");
		var rcode;
		//rcode = plugin.Register("<%=application.getInitParameter("ClientKey")%>");
		rcode = plugin.Register("ua72DLOrQhlt0MKrV5uj/CWcCyrTEfA4suWk9smOUQU=");
		//console.log(plugin);
		if(rcode!=0){
			alert(MajorErrorReason(rcode)+", code="+rcode.toString(16));
			return;
		}
		plugin.withCardSN=true;
		//console.log(plugin);
		rcode = plugin.MakeCredential("<%=session.getId()%>","",document.getElementById("PIN").value);
		if(rcode!=0){
			alert(MajorErrorReason(rcode)+", code="+rcode.toString(16)+", minor error="+MinorErrorReason(plugin.lastError));
			$("#userPKI").html("認證失敗");
			$("#userPKI").css('color','#F00');
			$("#hasPKI").val("0");
			return;
		}
		document.getElementById("signedData").value = plugin.CredentialB64;
		$("#userPKI").html("認證成功");
		$("#userPKI").css('color','#00F');
		$("#hasPKI").val("1");
		
	}
	
	function HiPKIOnLoad(){
		
		if(detectHiPKIPlugin()==false){
			//No hipki detected or hipki disabled
			window.location="installPlugin.php";
		}
		
		var plugin= document.getElementById("hipkiclient");
		var expectedVersion="1.3.0.0794";
		//alert(plugin.version+" "+expectedVersion);
		if(plugin.version<expectedVersion){
			alert("Please upgrade HiPKI Client to version "+expectedVersion+" or higher");
			window.location="installPlugin.php";
		} 
		//alert(navigator.appVersion.indexOf("Win"));
	
	}
	/*    MOICA  */
	
	$(document).ready(function() {
		$('#form1').validate({
			rules:{
				account:{
					required: true,
					email: true
				},
				password:{
					required: true,
					minlength: 5
				},
				password2:{
					required: true,
					minlength: 5,
					equalTo : '#password'
				},
				name:{
					required: true
				},
				gender:{
					required: true
				},
				caddress:{
					required: true
				},
				phone:{
					required: true,
					digits : true,
					minlength: 10,
				},
				r_brand:{
					required: true
				},
				colors:{
					required: true,
					min:1
				},
				height:{
					number : true
				},
				weight:{
					number : true
				},
				bust:{
					number : true
				},
				waistline:{
					number : true
				},
				hips:{
					number : true
				},
				shoulder:{
					number : true
				},
			}
		});
		$('input:text[name=account]').bind("blur",function(){
			$.ajax( {
      		 url: 'registerAjax.php',
     		 type: 'GET',
      		 data: {
        		user_name: $('#account').val()
      		 },
     		 error: function(xhr) {
        		alert('Ajax request 發生錯誤');
      		},
      		success: function(response) {
          		$('#accountAjax').html(response);
          		$('#accountAjax').fadeIn();
     		 }
    		} );
		});
    });
			
</script>
</head>
<body onload="HiPKIOnLoad()">
<?PHP
	//地區
	$sql_cc = "select city.*,county.* from `city` join `county` on county.county_number and county.county_number = city.county_number";
	$query_cc = mysql_query($sql_cc);
	$list3_cc = mysql_fetch_array($query_cc);
?>

<div id="apDiv20"><img src="素材/註冊會員1.png" width="896" height="1202" alt="註冊會員1" />
   
    <div class="apDiv">
<form name="form1" id="form1" action="register_0.php" method="post" enctype="multipart/form-data">
<table height="1000" width="650" style="text-align:left;">
<tr>
	<td>
<u><FONT COLOR="#0000FF" SIZE="4" style="font-family:'微軟正黑體'; font-weight:bolder; font-size:24px;">自然人憑證</FONT></u>
	</td>
    <td>
    	若無自然人憑證，則可跳過此步驟
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1"></font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">自然人憑證</font>
</td>
	<td>
    <input id="PIN" name="PIN" value="" type="hidden">
	<input name="signedData" id="signedData" value="" type="hidden">
    <input name="hasPKI" id="hasPKI" value="0" type="hidden">
	<input name="button" value="認證" type="button" onclick="MakeCredential()" class="sent">
    <div id="userPKI" style="position:absolute; top:56px; left:250px;">尚未認證</div>
    </td>
</tr>
<tr>
<td>
<u><FONT COLOR="#0000FF" SIZE="4" style="font-family:'微軟正黑體'; font-weight:bolder; font-size:24px;">基本資料</FONT></u>
</td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">帳號</font>
</td>
	<td>
		<input type="text" id="account" name="account" size="30" placeholder="lhuelite2012@gmail.com" >
    	<span id="accountAjax"></span>
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">密碼</font>
	</td>
	<td>
		<input type="password" id="password" name="password" size="20" >
	</td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">再次確認密碼</font>
	</td>
	<td>
		<input type="password" id="password2" name="password2" size="20">
	</td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">姓名</font>
    </td>
    <td>
    	<input type="text" id="name" name="name" size="10">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">性別</font>
    </td>
    <td>
    	<input type="radio" id="gender" name="gender" value="男">男
        <input type="radio" id="gender" name="gender" value="女">女
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">地址</font>
	</td>	
   
<td><select id="address" name="City" onchange="changeZone(document.form1.City, document.form1.Canton)" size="1">
</select>
<select id="address" name="Canton" onchange="document.form1.City, document.form1.Canton" size="1">
</select>
<label>
<input type="text" id="caddress" name="caddress" size="30"/>
</label>
</td>
</tr>
<script language="JavaScript" type="text/javascript">
<!--

//==================== for zip code begin =========================
County = new Array("基隆市", "台北市", "新北市", "桃園縣", "新竹市", 
"新竹縣", "苗栗縣", "台中市", "彰化縣", "南投縣", "雲林縣", "嘉義市", 
"嘉義縣", "台南市", "高雄市", "屏東縣", "台東縣", "花蓮縣", "宜蘭縣");

Zone = new Array(19);

// for "基隆市"
Zone[0] = new Array("仁愛區","信義區","中正區","中山區","安樂區",
"暖暖區","七堵區");

// for "台北市"
Zone[1] = new Array("中正區","大同區","中山區","松山區","大安區",
"萬華區","信義區","士林區","北投區","內湖區","南港區",
"文山區");

// for "新北市"
Zone[2] = new Array("萬里區","金山區","板橋區","汐止區","深坑區","石碇區","瑞芳區",
"平溪區","雙溪區","貢寮區","新店區","坪林區","烏來區","永和區","中和區","土城區",
"三峽區","樹林區","鶯歌區","三重區","新莊區","泰山區","林口區","蘆洲區","五股區",
"八里區","淡水區","三芝區","石門區");

// for "桃園縣"
Zone[3] = new Array("中壢市","平鎮市","龍潭鄉","楊梅鎮","新屋鄉","觀音鄉","桃園市",
"龜山鄉","八德市","大溪鎮","復興鄉","大園鄉","蘆竹鄉");

// for "新竹市"
Zone[4] = new Array("東區","北區","香山區");

// for "新竹縣"
Zone[5] = new Array("竹北市","湖口鄉","新豐鄉","新埔鄉","關西鎮","芎林鄉","寶山鄉",
"竹東鎮","五峰鄉","橫山鄉","尖石鄉","北埔鄉","峨嵋鄉");

// for "苗栗縣"
Zone[6] = new Array("竹南鎮","頭份鎮","三灣鄉","南庄鄉","獅潭鄉","後龍鎮","通霄鎮",
"苑裡鎮","苗栗市","造橋鄉","頭屋鄉","公館鄉","大湖鄉","泰安鄉","鉰鑼鄉","三義鄉",
"西湖鄉","卓蘭鄉");

// for "臺中市"
Zone[7] = new Array("中區","東區","南區","西區","北區","北屯區",
"西屯區","南屯區","太平區","大里區","霧峰區","烏日區","豐原區","后里區","石岡區",
"東勢區","和平區","新社區","潭子區","大雅區","神岡區","大肚區","沙鹿區","龍井區",
"梧棲區","清水區","大甲區","外圃區","大安區");

// for "彰化縣"
Zone[8] = new Array("彰化市","芬園鄉","花壇鄉","秀水鄉","鹿港鎮","福興鄉","線西鄉",
"和美鎮","伸港鄉","員林鎮","社頭鄉","永靖鄉","埔心鄉","溪湖鎮","大村鄉","埔鹽鄉",
"田中鎮","北斗鎮","田尾鄉","埤頭鄉","溪州鄉","竹塘鄉","二林鎮","大城鄉","芳苑鄉",
"二水鄉");

// for "南投縣"
Zone[9] = new Array("南投市","中寮鄉","草屯鎮","國姓鄉","埔里鎮","仁愛鄉","名間鄉",
"集集鄉","水里鄉","魚池鄉","信義鄉","竹山鎮","鹿谷鄉");

// for "雲林縣"
Zone[10] = new Array("斗南鎮","大埤鄉","虎尾鎮","土庫鎮","褒忠鄉","東勢鄉","臺西鄉",
"崙背鄉","麥寮鄉","斗六市","林內鄉","古坑鄉","莿桐鄉","西螺鎮","二崙鄉","北港鎮",
"水林鄉","口湖鄉","四湖鄉","元長鄉");

// for "嘉義市"
Zone[11] = new Array("東區","北區");

// for "嘉義縣"
Zone[12] = new Array("番路鄉","梅山鄉","竹崎鄉","阿里山鄉","中埔鄉","大埔鄉",
"水上鄉","鹿草鄉","太保市","朴子市","東石鄉","六腳鄉","新港鄉","民雄鄉","大林鎮","漢口鄉",
"義竹鄉","布袋鎮");

// for "臺南市"
Zone[13] = new Array("中西區","東區","南區","北區","安平區",
"安南區","永康區","歸仁區","新化區","左鎮區","玉井區","楠西區","南化區",
"仁德區","關廟區","龍崎區","官田區","麻豆區","佳里區","西港區","七股區","將軍區",
"學甲區","北門區","新營區","後壁區","白河區","東山區","六甲區","下營區","柳營區",
"鹽水區","善化區","大內區","山上區","新市區","安定區");

// for "高雄市"
Zone[14] = new Array("新興區","前金區","苓雅區","鹽埕區","鼓山區",
"旗津區","前鎮區","三民區","楠梓區","小港區","左營區","仁武區","大社區","東沙群島",
"南沙群島","岡山區","路竹區","阿蓮區","田寮區","燕巢區","橋頭區","梓官區","彌陀區",
"永安區","湖內區","鳳山區","大寮區","林園區","鳥松區","大樹區","旗山區","美濃區",
"六龜區","內門區","杉林區","甲仙區","桃源區","那瑪夏區","茂林區","茄萣區");

// for "屏東縣"
Zone[15] = new Array("屏東市","三地門鄉","霧臺鄉","瑪家鄉","九如鄉","里港鄉","高樹鄉",
"鹽埔鄉","長治鄉","麟洛鄉","竹田鄉","內埔鄉","萬丹鄉","潮州鎮","泰武鄉","來義鄉",
"萬巒鄉","嵌頂鄉","新埤鄉","南州鄉","林邊鄉","東港鎮","琉球鄉","佳冬鄉","新園鄉",
"枋寮鄉", "枋山鄉","春日鄉","獅子鄉","車城鄉","牡丹鄉","恆春鎮","滿州鄉");

// for "台東縣"
Zone[16] = new Array("臺東市","綠島鄉","蘭嶼鄉","延平鄉","卑南鄉","鹿野鄉","關山鎮",
"海端鄉","池上鄉","東河鄉","成功鎮","長濱鄉","太麻里鄉","金峰鄉","大武鄉","達仁鄉");

// for "花蓮縣"
Zone[17] = new Array("花蓮市","新城鄉","秀林鄉","吉安鄉","壽豐鄉","鳳林鎮","光復鄉",
"豐濱鄉","瑞穗鄉","萬榮鄉","玉里鎮","卓溪鄉","富里鄉");

// for "宜蘭縣"
Zone[18] = new Array("宜蘭市","頭城鎮","礁溪鄉","壯圍鄉","員山鄉","羅東鎮","三星鄉",
"大同鄉","五結鄉","冬山鄉","蘇澳鎮","南澳鄉","釣魚台");

function initCounty(countyInput)
{
	countyInput.length = County.length;
	for (i = 0; i < County.length; i++)
	{
		countyInput.options[i].value = County[i];
		countyInput.options[i].text = County[i];
	}
	countyInput.selectedIndex = <?PHP echo $list3_cc[3]-1?> ;
}

function initZone(countyInput, zoneInput, post)
{
	changeZone(countyInput, zoneInput, post);
}

function initCounty2(countyInput, countyValue)
{
	countyInput.length = County.length;
	for (i = 0; i < County.length; i++)
	{
		countyInput.options[i].value = County[i];
		countyInput.options[i].text = County[i];

		if (countyValue == County[i])
		countyInput.selectedIndex = i;
	}
}

function initZone2(countyInput, zoneInput, post, zoneValue)
{
	selectedCountyIndex = countyInput.selectedIndex;
	
	zoneInput.length = Zone[selectedCountyIndex].length;
	for (i = 0; i < Zone[selectedCountyIndex].length; i++)
	{
		zoneInput.options[i].value = Zone[selectedCountyIndex][i];
		zoneInput.options[i].text = Zone[selectedCountyIndex][i];
	}
}

function changeZone(countyInput, zoneInput, post)
{
	selectedCountyIndex = countyInput.selectedIndex;

	zoneInput.length = Zone[selectedCountyIndex].length;
	for (i = 0; i < Zone[selectedCountyIndex].length; i++)
	{
		zoneInput.options[i].value = Zone[selectedCountyIndex][i];
		zoneInput.options[i].text = Zone[selectedCountyIndex][i];
	}
		zoneInput.selectedIndex = <?PHP echo $list3_cc[0]-1?> ;	
}

initCounty(document.form1.City)
initZone(document.form1.City, document.form1.Canton);

// -->
</script>
	
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">出生日期</font>    
	</td>
    <td>
    	<input type="date" id="birthday" name="birthday">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">電話</font>
    </td>
    <td>
    	<input type="text" id="phone" name="phone" size="15">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">FB帳號</font>    </td>
    <td>
    	<input type="text" id="fb_id" name="fb_id" size="30">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">LINE帳號</font>    </td>
    <td>
    	<input type="text" id="line_id" name="line_id" size="30">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">偏愛品牌</font>
    </td>
    <td>
<?php
include("server.php");
$query="select * from brand";
$result = mysql_query($query);
$num_result = mysql_num_rows($result);
echo "<select name='b_number' id='r_brand' size='1'>";
?><option value="0">請選擇</option><?php
for($i=0;$i<$num_result; $i++)
{
    	$row=mysql_fetch_array($result);
    	echo "<option value='" . $row['b_number'] ." '>" . $row['b_name'] . "</option>\n";
}
echo "</select>";
?>
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font color="#FF0000" size="+1">★</font>
        <font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">偏愛顏色</font>
    </td>
    <td> 
    	<input type="checkbox" id="colors[]" name="colors[]" value="1">紅系
        <input type="checkbox" id="colors[]" name="colors[]" value="2">橘系
        <input type="checkbox" id="colors[]" name="colors[]" value="3">黃系
        <input type="checkbox" id="colors[]" name="colors[]" value="4">綠系
        <input type="checkbox" id="colors[]" name="colors[]" value="5">灰系
        <input type="checkbox" id="colors[]" name="colors[]" value="6">金系
        <br>
        <input type="checkbox" id="colors[]" name="colors[]" value="7">藍系
        <input type="checkbox" id="colors[]" name="colors[]" value="8">紫系
        <input type="checkbox" id="colors[]" name="colors[]" value="9">黑系
        <input type="checkbox" id="colors[]" name="colors[]" value="10">白系
        <input type="checkbox" id="colors[]" name="colors[]" value="11">棕系
        <input type="checkbox" id="colors[]" name="colors[]" value="12">銀系
    </td>
</tr>
 
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">大頭貼</font>    </td>
    <td>
    	<input type="file" id="file" name="file" >
        <input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>
    </td>
</tr>
<td>
</td>
<tr>
	<td>
		<u><FONT COLOR="#0000FF" SIZE="4" style="font-family:'微軟正黑體'; font-weight:bolder; font-size:24px;">身材</FONT></u>
	</td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">身高</font>    </td>
    <td>
    	<input type="text" id="height" name="height" size="10" placeholder="cm(公分)">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">體重</font>    </td>
    <td>
    	<input type="text" id="weight" name="weight" size="10" placeholder="kg(公斤)">
    </td>
</tr>

<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">衣服尺寸</font>
	</td>
	<td>	
    <select name="clothes_size" id="clothes_size">
        <option value="">請選擇</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        </select>
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">三圍</font>    </td>
    <td>
    	<input type="text" id="bust" name="bust" size="5" placeholder="公分"><FONT SIZE=2>(胸圍)</FONT>
        <input type="text" id="waistline" name="waistline" size="5" placeholder="公分"><FONT SIZE=2>(腰圍)</FONT>
        <input type="text" id="hips" name="hips" size="5" placeholder="公分"><FONT SIZE=2>(臀圍)</FONT>
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">肩寬</font>    </td>
    <td>
    	<input type="text" id="shoulder" name="shoulder" size="10" placeholder="cm(公分)">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">鞋子尺寸</font>    </td>
    <td>
    	<select name="shoes_size" id="shoes_size" onchange="changeZone1(document.form1.shoes_size, document.form1.shoes_size2)" size="1" >
        </select>
        <select name="shoes_size2" id="shoes_size2" onchange="document.form1.shoes_size, document.form1.shoes_size2" size="1">
        </select>
    </td>
</tr>

<script language="JavaScript" type="text/javascript">
<!--

//==================== for zip code begin =========================
County1 = new Array("請選擇","美國(女)","美國(男)","英國","法國","日本");

Zone1 = new Array(6);

// for "請選擇"
Zone1[0] = new Array("請選擇");

// for "美國(女)"
Zone1[1] = new Array("5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13");

// for "美國(男)"
Zone1[2] = new Array("4","4.5","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13","13.5","14","14.5","15");

// for "英國"
Zone1[3] = new Array("3.5","4","4.5","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13","13.5","14","14.5");

// for "法國"
Zone1[4] = new Array("36.00","36.67","37.33","38.00","38.67","39.33","40.00","40.67","41.33","42.00","42.67","43.33","44.00","44.67","45.33","46.00","46.67","47.33","48.00","48.67","49.33","50.00","50.67");

// for "日本"
Zone1[5] = new Array("22","22.5","23","23.5","24","24.5","25","25.5","26","26.5","27","27.5","28","28.5","29","29.5","30","30.5","31","31.5","32","32.5","33");

function initCounty1(county1Input)
{
	county1Input.length = County1.length;
	for (j = 0; j < County1.length; j++)
	{
		county1Input.options[j].value = County1[j];
		county1Input.options[j].text = County1[j];
	}
	county1Input.selectedIndex = 0;
}

function initZone1(county1Input, zone1Input, post)
{
	changeZone1(county1Input, zone1Input, post);
}

function initCounty1(county1Input, county1Value)
{
	county1Input.length = County1.length;
	for (j = 0; j < County1.length; j++)
	{
		county1Input.options[j].value = County1[j];
		county1Input.options[j].text = County1[j];

		if (county1Value == County1[j])
		county1Input.selectedIndex = j;
	}
}

function initZone1(county1Input, zone1Input, post, zone1Value)
{
	selectedCounty1Index = county1Input.selectedIndex;
	
	zone1Input.length = Zone1[selectedCounty1Index].length;
	for (j = 0; j < Zone1[selectedCounty1Index].length; j++)
	{
		zone1Input.options[j].value = Zone1[selectedCounty1Index][j];
		zone1Input.options[j].text = Zone1[selectedCounty1Index][j];
	}
}

function changeZone1(county1Input, zone1Input, post)
{
	selectedCounty1Index = county1Input.selectedIndex;

	zone1Input.length = Zone1[selectedCounty1Index].length;
	for (j = 0; j < Zone1[selectedCounty1Index].length; j++)
	{
		zone1Input.options[j].value = Zone1[selectedCounty1Index][j];
		zone1Input.options[j].text = Zone1[selectedCounty1Index][j];
	}
		zone1Input.selectedIndex = 0;	
}

initCounty1(document.form1.shoes_size)
initZone1(document.form1.shoes_size, document.form1.shoes_size2);

// -->
</script>

<tr>
<td>&nbsp;

</td>
</tr>
<tr>
	<td colspan="2">
		<center><input type="submit" id="Submit" name="Submit" value="送出"></center>
    </td>
</tr>
</table>
</form>

    </div>
</div>

</div>

</body>
</html>