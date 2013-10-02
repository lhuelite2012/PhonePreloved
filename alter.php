<?PHP
session_start();
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
	#photo
	{
	position:absolute;
	left: 440px;
	top: 126px;
	width: 90px;
	height: 50px;
	}
</style>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("#commentForm").validate(); //表單名稱
});
</script>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body>
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
<div id="apDiv13"><img src="素材/我的帳號下-白底.png" width="700" height="500" alt="我的帳號下白底" />
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
			<td><strong><font size="4" color="#0000FF">基本資料</font></strong></td>
            <td><strong><font size="4" color="#FF0000">*</font>為必填，若填其他非必填項目，即可加分</strong></td>
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
        	<td><strong><font color="#FF0000">*</font></strong></td>
			<td><strong>姓名：</strong></td>
			<td><input type="text" size="20" name="name" id="name" class="required" minlength="2" value=<?PHP echo $list3[3]?>></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>大頭照：</strong></td>
            <td>
            <input type="file" name="file" id="file">
            <div id=photo><?PHP echo '<img src="'.$list3[6].'" onload="javascript:DrawImage(this,80,80);"/>'?></div></td>
            </td>
		</tr>
        <tr>
        	<td><strong><font color="#FF0000">*</font></strong></td>
			<td><strong>性別：</strong></td>
			<td><strong>
			<input type="radio" name="gender" id="gender" value="男" <?PHP if($list3[4] == "男") echo "checked";?>>男
			<input type="radio" name="gender" id="gender" value="女" <?PHP if($list3[4] == "女") echo "checked";?>>女
            </strong></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">*</font></strong></td>
			<td><strong>地址：</strong></td>
			<td>
            <select name="county" id="county" onchange="changeZone(document.commentForm.county, document.commentForm.city)" size="1" value="<?PHP echo $list3[9] ?>"></select>
            <select name="city" id="city" onchange="document.commentForm.county, document.commentForm.city" size="1" value="<?PHP echo $list3[10] ?>"></select>
            <input type="text" name="address" id="address" class="required" maxlength="15" size="25" value=<?PHP echo $list3[8]?>></td>
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
	countyInput.selectedIndex = <?PHP echo $list3_cc[3]-1 ?>;
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

	zoneInput.selectedIndex = <?PHP echo $list3_cc[0]-1 ?>;

	if(countyInput.selectedIndex != <?PHP echo $list3_cc[3]-1 ?>)
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
			<td><input type="date" size="20" name="birthday" id="birthday" value=<?PHP echo $list3[5]?>></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">*</font></strong></td>
			<td><strong>電話：</strong></td>
			<td><input type="text" size="20" name="phone" id="phone" class="required" minlength="8" maxlength="10" value=<?PHP echo $list3[7]?>></td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">*</font></strong></td>
			<td><strong>偏愛品牌：</strong></td>
			<td>
			<select name="b_number" id="b_number" class="required">
    		<option value="1" <?PHP if($list3_b[1] == "1") echo "selected";?>>Nike</option>
    		<option value="2" <?PHP if($list3_b[1] == "2") echo "selected";?>>Balenciaga</option>
   			<option value="3" <?PHP if($list3_b[1] == "3") echo "selected";?>>BURBERRY</option>
   			<option value="4" <?PHP if($list3_b[1] == "4") echo "selected";?>>CHANEL</option>
    		<option value="5" <?PHP if($list3_b[1] == "5") echo "selected";?>>COACH</option>
    		<option value="6" <?PHP if($list3_b[1] == "6") echo "selected";?>>Dior</option>
    		<option value="7" <?PHP if($list3_b[1] == "7") echo "selected";?>>Fendi</option>
    		<option value="8" <?PHP if($list3_b[1] == "8") echo "selected";?>>GUCCI</option>
    		<option value="9" <?PHP if($list3_b[1] == "9") echo "selected";?>>LACOSTE</option>
    		<option value="10" <?PHP if($list3_b[1] == "10") echo "selected";?>>HERMES</option>
    		<option value="11" <?PHP if($list3_b[1] == "11") echo "selected";?>>LV</option>
    		<option value="12" <?PHP if($list3_b[1] == "12") echo "selected";?>>PRADA</option>
    		<option value="13" <?PHP if($list3_b[1] == "13") echo "selected";?>>YSL </option>
    		</select>
            </td>
		</tr>
		<tr>
        	<td><strong><font color="#FF0000">*</font></strong></td>
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
			<td><strong><font size="4" color="#0000FF">身材</font></strong></td>
		</tr>
        <tr>
			<td></td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>身高：</strong></td>
			<td>
			<input type="text" size="5" name="height" id="height" value=<?PHP echo $list3[11]?>>
    		<strong>cm(公分)</strong>
			</td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>體重：</strong></td>
			<td>
			<input type="text" size="5" name="weight" id="weight" value=<?PHP echo $list3[12]?>>
    		<strong>kg(公斤)</strong>
			</td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>衣服尺寸：</strong></td>
			<td>
         	<select name="clothes_size" id="clothes_size">
            <option value="" <?PHP if($list3[17] == "") echo "selected";?>>請選擇</option>
            <option value="XS" <?PHP if($list3[17] == "XS") echo "selected";?>>XS</option>
            <option value="S" <?PHP if($list3[17] == "S") echo "selected";?>>S</option>
            <option value="M" <?PHP if($list3[17] == "M") echo "selected";?>>M</option>
            <option value="L" <?PHP if($list3[17] == "L") echo "selected";?>>L</option>
            <option value="XL" <?PHP if($list3[17] == "XL") echo "selected";?>>XL</option>
            <option value="XXL" <?PHP if($list3[17] == "XXL") echo "selected";?>>XXL</option>
            </select>
			</td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>三圍：</strong></td>
			<td>
			<input type="text" size="5" name="bust" id="bust" value=<?PHP echo $list3[14]?>>
			<strong><font size="2">(胸圍)</font> 吋 </strong>
			<input type="text" size="5" name="waistline" id="waistline" value=<?PHP echo $list3[15]?>><strong><font size="2">(腰圍)</font> 吋 </strong>
            <input type="text" size="5" name="hips" id="hips" value=<?PHP echo $list3[16]?>><strong><font size="2">(臀圍)</font> 吋</strong>
			</td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>肩寬：</strong></td>
			<td>
			<input type="text" size="5" name="shoulder" id="shoulder" value=<?PHP echo $list3[13]?>>
			<strong>cm(公分)</strong>
			</td>
		</tr>
		<tr>
        	<td></td>
			<td><strong>鞋子尺寸：</strong></td>
			<td>
            <select name="shoes_size" id="shoes_size">
            <option value="" <?PHP if($list3[18] == "") echo "selected";?>>請選擇</option>
            <option value="台灣" <?PHP if($list3[18] == "台灣") echo "selected";?>>台灣</option>
            <option value="美國" <?PHP if($list3[18] == "美國") echo "selected";?>>美國</option>
            <option value="日本" <?PHP if($list3[18] == "日本") echo "selected";?>>日本</option>
            <option value="歐洲" <?PHP if($list3[18] == "歐洲") echo "selected";?>>歐洲</option>
            </select>
            
			<input type="text" size="5" name="shoes_size2" id="shoes_size2" class="number" value=<?PHP echo $list3[19]?>><strong>cm(公分)</strong>
			</td>
		</tr>
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
			<td><input type="text" size="25" name="fb_id" id="fb_id" value=<?PHP echo $list3[20]?>></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>Line帳號：</strong></td>
			<td><input type="text" size="25" name="line_id" id="line_id" value=<?PHP echo $list3[21]?>></td>
		</tr>
        <tr>
        	<td></td>
			<td><strong>銀行帳號：</strong></td>
			<td><input type="text" size="25" name="rank_account" id="rank_account" value=<?PHP echo $list3[22]?>></td>
		</tr>
        <tr>
			<td colspan="3"><hr size="1" /></td>
		</tr>
		<tr>
		  <td align="center" colspan="3">
            <input type="hidden" name="m_number" id="m_number" value="<?PHP echo $list3[0];?>">
            <div id="apDiv45"><input type="image" img src="素材/按鈕-送出.png" id="alter" width="65" height="30" onclick="document.commentForm.submit()">
            <a href="javascript:document.commentForm.reset();"><img src="素材/忘記密碼-取消鈕.png" width="65" height="30"></a></div>
          </td>
		</tr>
	</table>
</form>
</div>
</div>
</body>
</html>