<?PHP
ob_start();
session_start();
?>
<?PHP
include("main.php");
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改個人資料</title>
<style type="text/css">
#PKI
{
	position:absolute;
	left: 162px;
	top: 88px;
	width: 250px;
	height: 50px;
}
#people
{
	position:absolute;
	left: 495px;
	top: 65px;
	width: 250px;
	height: 50px;
}
</style>
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
		$("#userPKI").html("認證成功!");
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
</script>
<script type="text/javascript" src="jQuery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$('#commentForm').validate({
			rules:{
				address:{
					required: true
				},
				phone:{
					required: true,
					digits : true,
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
    });		
</script>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body onload="HiPKIOnLoad()">
<?PHP		
	$u = $_SESSION["m_number"]; 
	
	//查詢會員帳號
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
	
	//查詢偏愛品牌
	$sql_b = "select * from p_brand where m_number = '$u'";
	$query_b = mysql_query($sql_b);
	$list3_b = mysql_fetch_array($query_b);
	
	//查詢偏愛顏色
	$sql_c = "select * from p_color where m_number = '$u'";
	$query_c = mysql_query($sql_c);
	
	//地區
	$sql_cc = "select city.*,county.* from `members` join `city` join `county` on members.city = city.city_number and members.county = county.county_number and county.county_number = city.county_number where members.m_number = '$u'";
	$query_cc = mysql_query($sql_cc);
	$list3_cc = mysql_fetch_array($query_cc);
?>
<div id="apDiv44"><img src="素材/購物下左邊商品欄.png" width="141" height="98" />
	<div id="apDiv50"><a href="altercode.php"><img src="素材/個人資料-變更密碼白.png" width="141" height="49" /></div>
    <div id="apDiv51"><a href="alter.php"><img src="素材/個人資料-帳號資料綠.png" width="141" height="49" /></a></div>
</div>
<div id="apDiv13"><img src="素材/我的帳號下-白底.png" width="751" height="965" alt="我的帳號下白底" />
<div align="center" id="apDiv46">
<form action="alter_.php" method="post" name="commentForm" id="commentForm" enctype="multipart/form-data">
	<table>
		<tr>
        	<th colspan="3"><font size="5" color="#FF0000">修改個人資料</font></th>
		</tr>
        <tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong><font size="4" color="#0000FF">認證資料</font></strong></td>
            <td><strong><font size="4" color="#FF0000"></font>此處為自然人憑證認證，若沒有可跳過此步驟</strong></td>
            <td></td>
        </tr>
		<tr>
			<td></td>
		</tr>
        <tr>
        	<td></td>
            <td><strong>自然認證：</strong></td>
            <td>
            <?PHP
				//查詢會員的自然人憑證為0或1
				$sql_PKI = "select people from members where m_number = '$u'";
				$query_PKI = mysql_query($sql_PKI);
				$list3_PKI = mysql_fetch_array($query_PKI);
				
				if($list3_PKI[0] == "0")
				{
			?>
                    <input id="PIN" name="PIN" value="" type="hidden">
                    <input name="signedData" id="signedData" value="" type="hidden">
                    <input name="hasPKI" id="hasPKI" value="0" type="hidden">
                    <strong>
                    <div id="userPKI" style="position:absolute;float:left; left:215px; top:91px; color:#000;">尚未認證</div>
                    </strong>
                    <input name="button" value="驗證" type="button" onclick="MakeCredential()" class="sent">              
            <?PHP
				}
				
				if($list3_PKI[0] == "1")
				{
			?>
                    <div id="PKI"><strong><font color="#0000FF">恭喜您，您已經成功認證是自然人</font></strong></div>
                    <div id="people"><img src="素材/自然人.png" width="80" height="41"></div>
            <?PHP
				}
			?>
            </td>
		</tr>
		<tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
		<tr>
        	<td></td>
			<td><strong><font size="4" color="#0000FF">基本資料</font></strong></td>
            <td><strong><font size="4" color="#FF0000">★</font>為必填</strong></td>
            <td></td>
		</tr>
        <tr>
			<td></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>電子郵件：</strong></td>
			<td><strong><?PHP echo $list3[1];?></strong></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">★</font></strong></td>
			<td><strong>姓名：</strong></td>
			<td><input type="text" size="20" value="<?PHP echo $list3[3]?>" disabled="disabled"></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>大頭照：</strong></td>
            <td>
            <strong><font size="1" color="#0000FF">(若有照片，則顯示網頁右上方)</font></strong>
            <input type="file" name="file" id="file">
            <div id=photo><?PHP //echo '<img src="'.$list3[6].'" onload="javascript:DrawImage(this,80,80);"/>'?></div>
            </td>
		</tr>
        <tr>
        	<td><strong><font color="#FF0000">★</font></strong></td>
			<td><strong>性別：</strong></td>
			<td><strong>
			<?PHP if($list3[4] == "男") { echo "男性 ";?><img src="素材/男性.png" height="15"><?PHP } ?>
			<?PHP if($list3[4] == "女") { echo "女性 ";?><img src="素材/女性.png" height="15"><?PHP } ?>
            </strong></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">★</font></strong></td>
			<td><strong>地址：</strong></td>
			<td>
            <select name="county" id="county" onchange="changeZone(document.commentForm.county, document.commentForm.city)" size="1" value="<?PHP echo $list3[9]?>"></select>
            <select name="city" id="city" onchange="document.commentForm.county, document.commentForm.city" size="1" value="<?PHP echo $list3[10]?>"></select>
            <input type="text" name="address" id="address" maxlength="15" size="25" value=<?PHP echo $list3[8]?>></td>
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
	countyInput.selectedIndex = <?PHP echo $list3_cc[3]-1?>;
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

	zoneInput.selectedIndex = <?PHP echo $list3_cc[0]-1?>;

	if(countyInput.selectedIndex != <?PHP echo $list3_cc[3]-1?>)
	{
		zoneInput.selectedIndex = 0 ;
	}	
}

initCounty(document.commentForm.county)
initZone(document.commentForm.county, document.commentForm.city);

// -->
</script>

   		<tr>
        	<td></td>
			<td><strong>生日：</strong></td>
			<td><input type="date" size="20" name="birthday" id="birthday" value="<?PHP echo $list3[5]?>"></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">★</font></strong></td>
			<td><strong>電話：</strong></td>
			<td><input type="text" size="20" name="phone" id="phone" class="required" minlength="8" maxlength="10" value="<?PHP echo $list3[7]?>"></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">★</font></strong></td>
			<td><strong>偏愛品牌：</strong></td>
			<td>
           
			<select name="b_number" id="b_number">
            <?PHP 
				$p_brand = $list3_b[1];
				$brand_all = "select * from brand";
				$brand_result = mysql_query($brand_all);
				while($brand = mysql_fetch_array($brand_result))
				{
			?>
					<option value="<?PHP echo $brand['b_number'];?>"<?PHP if($list3_b[1] == $brand['b_number']) echo "selected";?>><?PHP echo $brand['b_name'];?></option>
			<?PHP
				}
			?>
    		</select>
            </td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">★</font></strong></td>
			<td><strong>偏愛色系：</strong></td>
			<td><strong>
			<?PHP while ($list3_c = mysql_fetch_array($query_c)) $c[] = $list3_c[2];?>
			<input type="checkbox" name="colors_number[]" id="colors_number[]" value="1" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "1") echo "checked";}?>>紅系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="2" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "2") echo "checked";}?>>橘系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="3" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "3") echo "checked";}?>>黃系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="4" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "4") echo "checked";}?>>綠系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="5" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "5") echo "checked";}?>>灰系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="6"  <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "6") echo "checked";}?>>金系
		    </strong></td>
		</tr>
		<tr>
			<td></td>
            <td></td>
			<td><strong>
			<input type="checkbox" name="colors_number[]" id="colors_number[]" value="7" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "7") echo "checked";}?>>藍系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="8" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "8") echo "checked";}?>>紫系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="9" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "9") echo "checked";}?>>黑系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="10" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "10") echo "checked";}?>>白系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="11" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "11") echo "checked";}?>>棕系
    		<input type="checkbox" name="colors_number[]" id="colors_number[]" value="12" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "12") echo "checked";}?>>銀系
            </strong></td>
		</tr>
        <tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
		<tr>
        	<td></td>
			<td><strong><font size="4" color="#0000FF">身材資料</font></strong></td>
		</tr>
        <tr>
			<td></td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>身高：</strong></td>
			<td>
			<input type="text" size="5" name="height" id="height" value="<?PHP echo $list3[11]?>">
    		<strong>cm (公分)</strong>
			</td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>體重：</strong></td>
			<td>
			<input type="text" size="5" name="weight" id="weight" value="<?PHP echo $list3[12]?>">
    		<strong>kg (公斤)</strong>
			</td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>衣服尺寸：</strong></td>
			<td>
         	<select name="clothes_size" id="clothes_size">
            <option value="" <?PHP if($list3[17] == "") echo "selected";?>>請選擇</option>
            <option value="S" <?PHP if($list3[17] == "S") echo "selected";?>>S</option>
            <option value="M" <?PHP if($list3[17] == "M") echo "selected";?>>M</option>
            <option value="L" <?PHP if($list3[17] == "L") echo "selected";?>>L</option>
            <option value="XL" <?PHP if($list3[17] == "XL") echo "selected";?>>XL</option>
            </select>
			</td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>三圍：</strong></td>
			<td>
			<input type="text" size="5" name="bust" id="bust" value="<?PHP echo $list3[14]?>">
			<strong><font size="2">(胸圍)</font> 公分 </strong>
			<input type="text" size="5" name="waistline" id="waistline" value="<?PHP echo $list3[15]?>"><strong><font size="2">(腰圍)</font> 公分 </strong>
            <input type="text" size="5" name="hips" id="hips" value="<?PHP echo $list3[16]?>"><strong><font size="2">(臀圍)</font> 公分</strong>
			</td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>肩寬：</strong></td>
			<td>
			<input type="text" size="5" name="shoulder" id="shoulder" value="<?PHP echo $list3[13]?>">
			<strong>cm (公分)</strong>
			</td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>鞋子尺寸：</strong></td>
			<td>
            <select name="shoes_size" id="shoes_size" onchange="changeZone1(document.commentForm.shoes_size, document.commentForm.shoes_size2)" size="1" >
            <option value="" <?PHP if($list3[18] == "" or $list3[18] == "0" or $list3[18] == "請選擇") echo "selected";?>>請選擇</option>
            <option value="美國(女)" <?PHP if($list3[18] == "美國(女)") echo "selected";?>>美國(女)</option>
            <option value="美國(男)" <?PHP if($list3[18] == "美國(男)") echo "selected";?>>美國(男)</option>
            <option value="英國" <?PHP if($list3[18] == "英國") echo "selected";?>>英國</option>
            <option value="法國" <?PHP if($list3[18] == "法國") echo "selected";?>>法國</option>
            <option value="日本" <?PHP if($list3[18] == "日本") echo "selected";?>>日本</option>    
            </select>
            
            <select name="shoes_size2" id="shoes_size2" onchange="document.commentForm.shoes_size, document.commentForm.shoes_size2" size="1">
            <?PHP
				$No = array("請選擇");
				$US_W = array("請選擇","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13"); 
				$US_M = array("請選擇","4","4.5","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13","13.5","14","14.5","15");
				$France = array("請選擇","3.5","4","4.5","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13","13.5","14","14.5");
				$Britain = array("請選擇","36.00","36.67","37.33","38.00","38.67","39.33","40.00","40.67","41.33","42.00","42.67","43.33","44.00","44.67","45.33","46.00","46.67","47.33","48.00","48.67","49.33","50.00","50.67");
				$Japan = array("請選擇","22","22.5","23","23.5","24","24.5","25","25.5","26","26.5","27","27.5","28","28.5","29","29.5","30","30.5","31","31.5","32","32.5","33");
				
				$shoes_size = $list3[18];
				
				if($shoes_size == "請選擇")
					$test = $No;
				else if($shoes_size == "美國(女)")
					$test = $US_W;
				else if($shoes_size == "美國(男)")
					$test = $US_M;
				else if($shoes_size == "英國")
					$test = $France;
				else if($shoes_size == "法國")
					$test = $Britain;
				else if($shoes_size == "日本")
					$test = $Japan;
					
				$shoes_all = "select shoes_size,shoes_size2 from members";
				$shoes_result = mysql_query($shoes_all);
				$shoes = mysql_fetch_array($shoes_result);
				
				for($a=0;$a<=count($test);$a++)
				{
			?>
					<option value="<?PHP echo $test[$a];?>"<?PHP if($test[$a] == $shoes[1]) echo "selected";?>><?PHP echo $test[$a];?></option>
			<?PHP
				}
			?>
    		</select>

            <strong> cm (公分)
            <font size="1" color="#0000FF"> (若沒有下拉選單，請按F5重新整理)</font>
            </strong>
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
Zone1[1] = new Array("請選擇","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13");

// for "美國(男)"
Zone1[2] = new Array("請選擇","4","4.5","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13","13.5","14","14.5","15");

// for "英國"
Zone1[3] = new Array("請選擇","3.5","4","4.5","5","5.5","6","6.5","7","7.5","8","8.5","9","9.5","10","10.5","11","11.5","12","12.5","13","13.5","14","14.5");

// for "法國"
Zone1[4] = new Array("請選擇","36.00","36.67","37.33","38.00","38.67","39.33","40.00","40.67","41.33","42.00","42.67","43.33","44.00","44.67","45.33","46.00","46.67","47.33","48.00","48.67","49.33","50.00","50.67");

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
	county1Input.selectedIndex = <?PHP echo $list3[18]?>;
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
	
	if(county1Input.selectedIndex == <?PHP echo $list3[18]?>)
	{
		zone1Input.selectedIndex = <?PHP echo $list3[19]?>;
	}
	if(county1Input.selectedIndex != <?PHP echo $list3[18]?>)
	{
		zone1Input.selectedIndex = 0;
	}	
}

initCounty1(document.commentForm.shoes_size)
initZone1(document.commentForm.shoes_size, document.commentForm.shoes_size2);

// -->
</script>
        
        <tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
   		<tr>
        	<td></td>
			<td><strong><font size="4" color="#0000FF">其他資料</font></strong></td>
		</tr>
        <tr>
			<td></td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>FB帳號：</strong></td>
			<td><input type="text" size="25" name="fb_id" id="fb_id" value="<?PHP echo $list3[20]?>"></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>Line帳號：</strong></td>
			<td><input type="text" size="25" name="line_id" id="line_id" value="<?PHP echo $list3[21]?>"></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>銀行帳號：</strong></td>
			<td><input type="text" size="25" disabled="disabled" value="<?PHP echo $list3[22]?>"><strong><font size="1" color="#0000FF"> (如有變動，則在選擇得標者時更改)</font></strong></td>
		</tr>
        <tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
		<tr>
		  <td align="center" colspan="3">
            <input type="hidden" name="m_number" id="m_number" value="<?PHP echo $list3[0];?>">
			<div id="apDiv45"><input type="image" img src="素材/按鈕-送出.png" id="altercode" width="65" height="30" onclick="document.form.submit()">
            <a href="javascript:document.form.reset();"><img src="素材/忘記密碼-取消鈕.png" width="65" height="30"></a></div>
          </td>
		</tr>
	</table>
</form>
</div>
</div>
</body>
</html>