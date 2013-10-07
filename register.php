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
</head>
<body >
<script type="text/javascript" src="jQuery/jquery.validate.js"></script>
<script>
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
				shoes_size2:{
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



<div id="apDiv20"><img src="素材/註冊會員1.png" width="896" height="1202" alt="註冊會員1" />
   
    <div class="apDiv">
<form name="form1" id="form1" action="register_0.php" method="post" enctype="multipart/form-data">
<table height="1000" width="650" style="text-align:left;">
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
County = new Array("臺北市", "基隆市", "新北市", "宜蘭縣", "新竹市", 
"新竹縣", "桃園縣", "苗栗縣", "臺中市", "臺中縣", "彰化縣",
"南投縣", "嘉義市", "嘉義縣", "雲林縣", "臺南市", "臺南縣",
"高雄市", "高雄縣", "屏東縣", "臺東縣", "花蓮縣");

Zone = new Array(22);
// for "臺北市"
Zone[0] = new Array("中正區","大同區","中山區","松山區","大安區",
"萬華區","信義區","士林區","北投區","內湖區","南港區",
"文山區(木柵)","文山區(景美)");
// for "基隆市"
Zone[1] = new Array("仁愛區","信義區","中正區","中山區","安樂區",
"暖暖區","七堵區");
// for "新北市"
Zone[2] = new Array("萬里區","金山區","板橋區","汐止區","深坑區","石碇區","瑞芳區",
"平溪區","雙溪區","貢寮區","新店區","坪林區","烏來區","永和區","中和區","土城區",
"三峽區","樹林區","鶯歌區","三重區","新莊區","泰山區","林口區","蘆洲區","五股區",
"八里區","淡水區","三芝區","石門區");
// for "宜蘭縣"
Zone[3] = new Array("宜蘭市","頭城鎮","礁溪鄉","壯圍鄉","員山鄉","羅東鎮","三星鄉",
"大同鄉","五結鄉","冬山鄉","蘇澳鎮","南澳鄉");
// for "新竹市"
Zone[4] = new Array("新竹市");
// for "新竹縣"
Zone[5] = new Array("竹北市","湖口鄉","新豐鄉","新埔鄉","關西鎮","芎林鄉","寶山鄉",
"竹東鎮","五峰鄉","橫山鄉","尖石鄉","北埔鄉","峨嵋鄉");
// for "桃園縣"
Zone[6] = new Array("中壢市","平鎮","龍潭鄉","楊梅鎮","新屋鄉","觀音鄉","桃園市",
"龜山鄉","八德市","大溪鎮","復興鄉","大園鄉","蘆竹鄉");
// for "苗栗縣"
Zone[7] = new Array("竹南鎮","頭份鎮","三灣鄉","南庄鄉","獅潭鄉","後龍鎮","通霄鎮",
"苑裡鎮","苗栗市","造橋鄉","頭屋鄉","公館鄉","大湖鄉","泰安鄉","鉰鑼鄉","三義鄉",
"西湖鄉","卓蘭鄉");
// for "臺中市"
Zone[8] = new Array("中區","東區","南區","西區","北區","北屯區",
"西屯區","南屯區");
// for "臺中縣"
Zone[9] = new Array("太平市","大里市","霧峰鄉","烏日鄉","豐原市","后里鄉","石岡鄉",
"東勢鎮","和平鄉","新社鄉","潭子鄉","大雅鄉","神岡鄉","大肚鄉","沙鹿鎮","龍井鄉",
"梧棲鎮","清水鎮","大甲鎮","外圃鄉","大安鄉");
// for "彰化縣"
Zone[10] = new Array("彰化市","芬園鄉","花壇鄉","秀水鄉","鹿港鎮","福興鄉","線西鄉",
"和美鎮","伸港鄉","員林鎮","社頭鄉","永靖鄉","埔心鄉","溪湖鎮","大村鄉","埔鹽鄉",
"田中鎮","北斗鎮","田尾鄉","埤頭鄉","溪州鄉","竹塘鄉","二林鎮","大城鄉","芳苑鄉",
"二水鄉");
// for "南投縣"
Zone[11] = new Array("南投市","中寮鄉","草屯鎮","國姓鄉","埔里鎮","仁愛鄉","名間鄉",
"集集鄉","水里鄉","魚池鄉","信義鄉","竹山鎮","鹿谷鄉");
// for "嘉義市"
Zone[12] = new Array("嘉義市");
// for "嘉義縣"
Zone[13] = new Array("番路鄉","梅山鄉","竹崎鄉","阿里山鄉","中埔鄉","大埔鄉",
"水上鄉","鹿草鄉","太保市","朴子市","東石鄉","六腳鄉","新港鄉","民雄鄉","大林鎮","漢口鄉",
"義竹鄉","布袋鎮");
// for "雲林縣"
Zone[14] = new Array("斗南鎮","大埤鄉","虎尾鎮","土庫鎮","褒忠鄉","東勢鄉","臺西鄉",
"崙背鄉","麥寮鄉","斗六市","林內鄉","古坑鄉","莿桐鄉","西螺鎮","二崙鄉","北港鎮",
"水林鄉","口湖鄉","四湖鄉","元長鄉");
// for "臺南市"
Zone[15] = new Array("中區","東區","南區","西區","北區","安平區",
"安南區");
// for "臺南縣"
Zone[16] = new Array("永康市","歸仁鄉","新化鎮","左鎮鄉","玉井鄉","楠西鄉","南化鄉",
"仁德鄉","關廟鄉","龍崎鄉","官田鄉","麻豆鎮","佳里鎮","西港鄉","七股鄉","將軍鄉",
"學甲鎮","北門鄉","新營市","後壁鄉","白河鎮","東山鄉","六甲鄉","下營鄉","柳營鄉",
"鹽水鎮","善化鎮","大內鄉","山上鄉","新市鄉","安定鄉");
// for "高雄市"
Zone[17] = new Array("新興區","前金區","苓雅區","鹽埕區","鼓山區",
"旗津區","前鎮區","三民區","楠梓區","小港區","左營區");
// for "高雄縣"
Zone[18] = new Array("仁武鄉","大社鄉","岡山鎮","路竹鄉","阿蓮鄉","田寮鄉","燕巢鄉",
"橋頭鄉","梓官鄉","彌陀鄉","永安鄉","湖內鄉","鳳山市","大寮鄉","林園鄉","鳥松鄉",
"大樹鄉","旗山鎮","美濃鎮","六龜鄉","內門鄉","杉林鄉","甲仙鄉","桃源鄉","三民鄉",
"茂林鄉","茄萣鄉");
// for "屏東縣"
Zone[20] = new Array("屏東市","三地門鄉","霧臺鄉","瑪家鄉","九如鄉","里港鄉","高樹鄉",
"鹽埔鄉","長治鄉","麟洛鄉","竹田鄉","內埔鄉","萬丹鄉","潮州鎮","泰武鄉","來義鄉",
"萬巒鄉","嵌頂鄉","新埤鄉","南州鄉","林邊鄉","東港鎮","琉球鄉","佳冬鄉","新園鄉",
"枋寮鄉", "枋山鄉","春日鄉","獅子鄉","車城鄉","牡丹鄉","恆春鎮","滿州鄉");
// for "臺東縣"
Zone[21] = new Array("臺東市","綠島鄉","蘭嶼鄉","延平鄉","卑南鄉","鹿野鄉","關山鎮",
"海端鄉","池上鄉","東河鄉","成功鎮","長濱鄉","太麻里鄉","金峰鄉","大武鄉","達仁鄉");
// for "花蓮縣"
Zone[22] = new Array("花蓮市","新城鄉","秀林鄉","吉安鄉","壽豐鄉","鳳林鎮","光復鄉",
"豐濱鄉","瑞穗鄉","萬榮鄉","玉里鎮","卓溪鄉","富里鄉");


function initCounty(countyInput){
countyInput.length = County.length;
for (i = 0; i < County.length; i++) {
countyInput.options[i].value = County[i];
countyInput.options[i].text = County[i];
}
countyInput.selectedIndex = 0;
}

function initZone(countyInput, zoneInput, post){
changeZone(countyInput, zoneInput, post);
}

function initCounty2(countyInput, countyValue){

countyInput.length = County.length;
for (i = 0; i < County.length; i++) {
countyInput.options[i].value = County[i];
countyInput.options[i].text = County[i];

if (countyValue == County[i])
countyInput.selectedIndex = i;
}
}

function initZone2(countyInput, zoneInput, post, zoneValue){

selectedCountyIndex = countyInput.selectedIndex;

zoneInput.length = Zone[selectedCountyIndex].length;
for (i = 0; i < Zone[selectedCountyIndex].length; i++) {
zoneInput.options[i].value = Zone[selectedCountyIndex][i];
zoneInput.options[i].text = Zone[selectedCountyIndex][i];

}

}

function changeZone(countyInput, zoneInput, post) {
selectedCountyIndex = countyInput.selectedIndex;

zoneInput.length = Zone[selectedCountyIndex].length;
for (i = 0; i < Zone[selectedCountyIndex].length; i++) {
zoneInput.options[i].value = Zone[selectedCountyIndex][i];
zoneInput.options[i].text = Zone[selectedCountyIndex][i];
}
zoneInput.selectedIndex = 0;	

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
    	<input type="text" id="fb_id" name="fb_id" size="50">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">LINE帳號</font>    </td>
    <td>
    	<input type="text" id="line_id" name="line_id" size="50">
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
    	<input type="text" id="height" name="height" size="11" placeholder="cm(公分)">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">體重</font>    </td>
    <td>
    	<input type="text" id="weight" name="weight" size="11" placeholder="kg(公斤)">
    </td>
</tr>

<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">衣服尺寸</font>
	</td>
	<td>	
    <select name="clothes_size" id="clothes_size">
        <option value="">請選擇</option>
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        </select>
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">三圍</font>    </td>
    <td>
    	<input type="text" id="bust" name="bust" size="7" placeholder="吋"><FONT SIZE=2>（胸圍）</FONT>
        <input type="text" id="waistline" name="waistline" size="7" placeholder="吋"><FONT SIZE=2>（腰圍）</FONT>
        <input type="text" id="hips" name="hips" size="7" placeholder="吋"><FONT SIZE=2>（臀圍）</FONT>
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">肩寬</font>    </td>
    <td>
    	<input type="text" id="shoulder" name="shoulder" size="11" placeholder="cm(公分)">
    </td>
</tr>
<tr>
	<td style="text-align:right;">
		<font style="font-family:'微軟正黑體'; font-weight:bolder; font-size:20px;">鞋子尺寸</font>    </td>
    <td>
    	<select id="shoes_size" name="shoes_size">
        <option value="">請選擇</option>
        <option value="台灣">台灣</option>
        <option value="美國">美國</option>
        <option value="日本">日本</option>
        <option value="歐洲">歐洲</option>
        </select>
    	<input type="text" id="shoes_size2" name="shoes_size2" size="11" placeholder="請輸入尺寸">
    </td>
</tr>
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