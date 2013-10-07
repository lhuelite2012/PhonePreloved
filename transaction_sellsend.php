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
<title>買家寄件資訊</title>
<style type="text/css">
#background12
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:502px;
	left:161px;
	top: 217px;
}
#background13
{
	position:absolute;
	width:751px;
	height:550px;
	z-index:8;
	left: 0px;
	top: 40px;
}
#background14
{
	position: absolute;
	background: #FFF;
	width:494px;
	height:156px;
	left:117px;
	top: 46px;
}
#background18
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:302px;
	left:161px;
	top: 217px;
}
#background19
{
	position:absolute;
	width:751px;
	height:350px;
	z-index:8;
	left: 0px;
	top: 40px;
}
#s1 {
	position:absolute;
	width:40px;
	height:40px;
	z-index:1;
	left: 47px;
	top: 20px;
}
#ss1 {
	position:absolute;
	width:370px;
	height:20px;
	z-index:1;
	left: 55px;
	top: 12px;
}
#t {
	position:absolute;
	width:370px;
	height:115px;
	z-index:1;
	left: 20px;
	top: 55px;
}
#up {
	position:absolute;
	width:751px;
	height:20px;
	z-index:1;
	top: 225px;
}
</style>
</head>
<body>
<?PHP
	$m_number = $_SESSION["m_number"];		
	$c_number = $_GET['c_number'];
	  
	$sql = "select transaction.*,members.name,members.phone,members.address,commodity.m_number from transaction join members join commodity on transaction.c_number = '$c_number' and commodity.m_number = '$m_number' and commodity.orbidder = transaction.m_number and commodity.c_number = '$c_number' where members.m_number = transaction.m_number";	
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if($_SESSION['m_number'] == $row[29])
	{
		
	if($row['check_YN'] == '1')
	{
?>
		<div id="background12">
		<div align="center" id="background13">
        
        <font size="5" color="#FF0000"><strong>買家寄件資訊</strong></font>
		<p></p>
<?PHP
		if($row['tr_payment'] == '匯款')
		{
			
			if($row['tr_mode'] == '全家店到店')
			{
?>
				<strong>
                <form action="transaction_sellsend_update.php" method="post">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                	<tr>
                		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
            		</tr>
            		<tr>
                        <td height="30" align="center">付款方式：</td>
                        <td><?PHP echo $row['tr_payment'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">交易方式：</td>
                        <td><?PHP echo $row['tr_mode'];?></td>
                    </tr>
            <?PHP
				if($row['sendTimeButton'] != '')
				{	
			?>
					<tr>
                        <td height="30" align="center">寄出時間：</td>
                        <td><?PHP echo $row['sendTimeButton'];?></td>
					</tr>
            <?PHP
				}
			?>
                    <tr>
                    	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
                    </tr>
                    <tr>
                    	<td height="30" align="center">收件人姓名：</td>
                        <td><?PHP echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">收件人電話：</td>
                        <td><?PHP echo $row['phone'];?></td>
                    </tr>
					<tr>
                        <td height="30" align="center">店門市名稱：</td>
                        <td><?PHP echo $row['storename'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">店門市店號：</td>
                        <td><?PHP echo $row['storenumber'];?></td>
					</tr>
				<?PHP
                    if($row['remark'] != "")
                    {
                ?>
                    <tr>
                        <td height="30" align="center">備註的事項：</td>
                        <td><?PHP echo $row['remark'];?></td>
                    </tr>
        		<?PHP
                    }
					
					if($row['sendTimeButton'] == '')
					{
				?>
                    <tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" value="確定寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#0000FF">▲確認過之後，即可按下確定寄出鍵</font></td>
					</tr>
                <?PHP
					}
					else
					{
                ?>
                	<tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" disabled="disabled" value="已經寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#FF0000">▲寄出了之後，可以給予買家商品評價</font></td>
					</tr>
                <?PHP
					}
                ?>
                </table>
                </form>
                </strong>
<?PHP
			}
			
			if($row['tr_mode'] == '7-11店到店')
			{
?>
				<strong>
                <form action="transaction_sellsend_update.php" method="post">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                	<tr>
                		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
            		</tr>
            		<tr>
                        <td height="30" align="center">付款方式：</td>
                        <td><?PHP echo $row['tr_payment'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">交易方式：</td>
                        <td><?PHP echo $row['tr_mode'];?></td>
                    </tr>
            <?PHP
				if($row['sendTimeButton'] != '')
				{	
			?>
					<tr>
                        <td height="30" align="center">寄出時間：</td>
                        <td><?PHP echo $row['sendTimeButton'];?></td>
					</tr>
            <?PHP
				}
			?>
                    <tr>
                    	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
                    </tr>
                    <tr>
                    	<td height="30" align="center">收件人姓名：</td>
                        <td><?PHP echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">收件人電話：</td>
                        <td><?PHP echo $row['phone'];?></td>
                    </tr>
					<tr>
                        <td height="30" align="center">店門市名稱：</td>
                        <td><?PHP echo $row['storename'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">店門市店號：</td>
                        <td><?PHP echo $row['storenumber'];?></td>
					</tr>
				<?PHP
                    if($row['remark'] != "")
                    {
                ?>
                    <tr>
                        <td height="30" align="center">備註的事項：</td>
                        <td><?PHP echo $row['remark'];?></td>
                    </tr>
        		<?PHP
                    }
					
					if($row['sendTimeButton'] == '')
					{
				?>
                    <tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" value="確定寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#0000FF">▲確認過之後，即可按下確定寄出鍵</font></td>
					</tr>
                <?PHP
					}
					else
					{
                ?>
                	<tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" disabled="disabled" value="已經寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#FF0000">▲寄出了之後，請等待買家給予評價</font></td>
					</tr>
                <?PHP
					}
                ?>
                </table>
                </form>
                </strong>
<?PHP
			}
			
			if($row['tr_mode'] == '郵寄')
			{
				
				$sql_cc = "select city.*,county.* from members join city join county join transaction on members.city = city.city_number and members.county = county.county_number and county.county_number = city.county_number where transaction.m_number = members.m_number";
				$query_cc = mysql_query($sql_cc);
				$list3_cc = mysql_fetch_array($query_cc);
					
				$sql_cca = "select members.county,members.city,members.address from members join transaction on transaction.c_number = '$c_number' where members.m_number = transaction.m_number";
				$result_cca = mysql_query($sql_cca);
				$row_cca = mysql_fetch_array($result_cca);
?>
				<strong>
                <form action="transaction_sellsend_update.php" method="post" name="commentForm" id="commentForm">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                	<tr>
                		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
            		</tr>
            		<tr>
                        <td height="30" align="center">付款方式：</td>
                        <td><?PHP echo $row['tr_payment'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">交易方式：</td>
                        <td><?PHP echo $row['tr_mode'];?></td>
                    </tr>
            <?PHP
				if($row['sendTimeButton'] != '')
				{	
			?>
					<tr>
                        <td height="30" align="center">寄出時間：</td>
                        <td><?PHP echo $row['sendTimeButton'];?></td>
					</tr>
            <?PHP
				}
			?>
                    <tr>
                    	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
                    </tr>
                    <tr>
                    	<td height="30" align="center">收件人姓名：</td>
                        <td><?PHP echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">收件人電話：</td>
                        <td><?PHP echo $row['phone'];?></td>
                    </tr>
					<tr>
						<td height="55" align="center">收件人地址：</td>
						<td>
						<select name="county" id="county" onchange="changeZone(document.commentForm.county, document.commentForm.city)" size="1" disabled="disabled" value="<?PHP echo $row_cca[0];?>"></select>
						<select name="city" id="city" onchange="document.commentForm.county, document.commentForm.city" size="1" disabled="disabled" value="<?PHP echo $row_cca[1];?>"></select>
						<br/><input type="text" name="address" id="address" class="required" maxlength="15" size="20" disabled="disabled" value=<?PHP echo $row_cca[2];?>></td>
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
Zone[16] = new Array("台東市","綠島鄉","蘭嶼鄉","延平鄉","卑南鄉","鹿野鄉","關山鎮",
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
                        <td height="30" align="center">收件人取貨：</td>
                        <td><?PHP echo $row['sendtime'];?></td>
                    </tr>
				<?PHP
                    if($row['remark'] != "")
                    {
                ?>
                    <tr>
                        <td height="30" align="center">備註的事項：</td>
                        <td><?PHP echo $row['remark'];?></td>
                    </tr>
        		<?PHP
                    }
					
					if($row['sendTimeButton'] == '')
					{
				?>
                    <tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" value="確定寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#0000FF">▲確認過之後，即可按下確定寄出鍵</font></td>
					</tr>
                <?PHP
					}
					else
					{
                ?>
                	<tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" disabled="disabled" value="已經寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#FF0000">▲寄出了之後，請等待買家給予評價</font></td>
					</tr>
                <?PHP
					}
                ?>
                </table>
                </form>
                </strong>
<?PHP
			}
			
			if($row['tr_mode'] == '面交')
			{
?>
				<strong>
                <form action="transaction_sellsend_update.php" method="post">
                <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
                <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
                	<tr>
                		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
            		</tr>
            		<tr>
                        <td height="30" align="center">付款方式：</td>
                        <td><?PHP echo $row['tr_payment'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">交易方式：</td>
                        <td><?PHP echo $row['tr_mode'];?></td>
                    </tr>
            <?PHP
				if($row['sendTimeButton'] != '')
				{	
			?>
					<tr>
                        <td height="30" align="center">寄出時間：</td>
                        <td><?PHP echo $row['sendTimeButton'];?></td>
					</tr>
            <?PHP
				}
			?>
                    <tr>
                    	<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></td>
                    </tr>
                    <tr>
                    	<td height="30" align="center">買家真實姓名：</td>
                        <td><?PHP echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">買家聯絡電話：</td>
                        <td><?PHP echo $row['phone'];?></td>
                    </tr>
					<tr>
                        <td height="30" align="center">買家面交日期：</td>
                        <td><?PHP echo $row['buy_paydate'];?></td>
                    </tr>
                    <tr>
                        <td height="30" align="center">買家面交時段：</td>
                        <td><?PHP echo $row['buy_paytime'];?></td>
					</tr>
                    <tr>
                        <td height="30" align="center">詳細面交地點：</td>
                        <td><?PHP echo $row['buy_pay'];?></td>
                    </tr>
				<?PHP
                    if($row['remark'] != "")
                    {
                ?>
                    <tr>
                        <td height="30" align="center">備註注意事項：</td>
                        <td><?PHP echo $row['remark'];?></td>
                    </tr>
        		<?PHP
                    }
					
					if($row['sendTimeButton'] == '')
					{
				?>
                    <tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" value="確定寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#0000FF">▲確認過之後，即可按下確定寄出鍵</font></td>
					</tr>
                <?PHP
					}
					else
					{
                ?>
                	<tr>
                    	<td colspan="2" height="30" align="center">
                        <input type="submit" name="send" disabled="disabled" value="已經寄出">
                        </td>
                    </tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#FF0000">▲寄出了之後，請等待買家給予評價</font></td>
					</tr>
                    <tr>
						<td colspan="2" height="30" align="center"><font color="#00CCCC">▲面交於指定時間地點交易，謝謝！</font></td>
					</tr>
                <?PHP
					}
                ?>
                </table>
                </form>
                </strong>
<?PHP
			}
		}

		if($row['tr_payment'] == '面交')
		{
?>
			<strong>
            <form action="transaction_sellsend_update.php" method="post">
            <input type="hidden" name="c_number" value="<?PHP echo $c_number;?>">
            <table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
				<tr>
					<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
            	</tr>
            	<tr>
                    <td height="30" align="center">付款方式：</td>
                    <td><?PHP echo $row['tr_payment'];?></td>
                </tr>
                <tr>
                    <td height="30" align="center">交易方式：</td>
                    <td><?PHP echo $row['tr_mode'];?></td>
                </tr>
        <?PHP
			if($row['sendTimeButton'] != '')
			{	
		?>
				<tr>
                    <td height="30" align="center">寄出時間：</td>
                    <td><?PHP echo $row['sendTimeButton'];?></td>
				</tr>
        <?PHP
			}
		?>
                <tr>
                    <td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></td>
                </tr>
                <tr>
                    <td height="30" align="center">買家真實姓名：</td>
                    <td><?PHP echo $row['name'];?></td>
                </tr>
                <tr>
                    <td height="30" align="center">買家聯絡電話：</td>
                    <td><?PHP echo $row['phone'];?></td>
                </tr>
				<tr>
                    <td height="30" align="center">買家面交日期：</td>
                    <td><?PHP echo $row['buy_paydate'];?></td>
                </tr>
                <tr>
                    <td height="30" align="center">買家面交時段：</td>
                    <td><?PHP echo $row['buy_paytime'];?></td>
				</tr>
                <tr>
                    <td height="30" align="center">詳細面交地點：</td>
                    <td><?PHP echo $row['buy_pay'];?></td>
                </tr>
		<?PHP
            if($row['remark'] != "")
            {
        ?>
                <tr>
                    <td height="30" align="center">備註注意事項：</td>
                    <td><?PHP echo $row['remark'];?></td>
                </tr>
        <?PHP
            }
					
			if($row['sendTimeButton'] == '')
			{
		?>
                <tr>
                 	<td colspan="2" height="30" align="center">
					<input type="submit" name="send" value="確定寄出">
					</td>
				</tr>
				<tr>
					<td colspan="2" height="30" align="center"><font color="#0000FF">▲確認過之後，即可按下確定寄出鍵</font></td>
				</tr>
		<?PHP
			}
			else
			{
		?>
				<tr>
					<td colspan="2" height="30" align="center">
					<input type="submit" name="send" disabled="disabled" value="已經寄出">
					</td>
				</tr>
				<tr>
					<td colspan="2" height="30" align="center"><font color="#FF0000">▲寄出了之後，請等待買家給予評價</font></td>
				</tr>
				<tr>
					<td colspan="2" height="30" align="center"><font color="#00CCCC">▲面交於指定時間地點交易，謝謝！</font></td>
				</tr>
		<?PHP
			}
		?>
				</table>
                </form>
                </strong>
<?PHP
		}
?>   
        <p></p>   
		<a align="center" href="sold.php" style="color:#0000FF;text-decoration:none;"><strong>回上一頁</strong></a>
        
        </div>
        </div>
<?PHP
	}
	else if($row['check_YN'] != '1')
	{
?>
		<div id="background18">
		<div align="center" id="background19">
        
        <font size="5" color="#FF0000"><strong>買家寄件資訊</strong></font>
		<p></p>
        
        <div align="center" id="background14" style="border-color:#000000;border-style:solid;border-radius:10px;">
        <div id="s1">
        <img src="素材/驚嘆號.png" width="40" height="40">
        <div id="ss1">
        <strong><font color="#000000">不好意思，無法顯示買家寄件資訊，可能原因有：</font></strong>
        <p></p>
		</div>
        <div id="t">
		<strong><font color="#FF0000">1、買家可能付款填單有問題，造成無法顯示</font></strong>
        <p></p>
        <strong><font color="#FF0000">2、賣家可能對帳查款有問題，造成無法顯示</font></strong>
        <p></p>
        </div></div></div>
        
        <div id="up">
        <a align="center" href="sold.php" style="color:#0000FF;text-decoration:none;"><strong>回上一頁</strong></a>
        </div>
      
        </div>
        </div>
<?PHP
	}
	}
	else
	{
?>
		<script>
			location.href = './index.php';
		</script>
<?PHP
	}
?>
</body>
</html>