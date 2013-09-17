<?
ob_start();
session_start();
?>
<?
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
#background7
{
	position: absolute;
	background: #FFF;
	width:751px;
	height:872px;
	left:161px;
	top: 217px;
}
#background8
{
	position:absolute;
	width:751px;
	height:920px;
	z-index:8;
	left: 0px;
	top: 40px;
}
</style>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("#commentForm").validate(); //表單名稱
});
</script>
</head>
<body>
<div id="background7">
<div align="center" id="background8">
<?	
	$m_number = $_SESSION["m_number"]; 
	$c_number = $_GET['c_number'];
	  
	$sql = "select * from transaction where c_number = '$c_number'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$sql_ = "select name,phone from members where m_number = '$m_number'";
	$result_ = mysql_query($sql_);
	$row_ = mysql_fetch_array($result_);
	
	if($_SESSION['m_number'] == $row['m_number'])
	{
	
	if($row['tr_mode'] != '' || $row['tr_payment'] != '')
	{
		
	if($row['t_schedule'] == '已付款' or $row['t_schedule'] == '已寄出' or $row['t_schedule'] == "選擇評價" or $row['t_schedule'] == "交易完成")
	{
?>
	<title>訂單查詢</title>

	<font size="5" color="#FF0000"><strong>訂單查詢</strong></font>
	<p></p>

<strong>
<form action="transaction_change_update.php" method="post" name="commentForm" id="commentForm">
<table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
	<tr>
		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
	</tr>
	<tr>
		<td height="30" align="center">付款方式：</td>
		<td><? echo $row['tr_payment'];?></td>
	</tr>
	<tr>
		<td height="30" align="center">交易方式：</td>
		<td><? echo $row['tr_mode'];?></td>
	</tr>
	<tr>
		<td height="30" align="center">填寫時間：</td>
		<td><? echo $row['payTimeButton'];?></td>
	</tr>
	<?		
		if($row['tr_payment'] == '匯款')
		{
	?>
            <tr>
                <td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">匯款人資訊</font></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款人姓名：</td>
                <td><? echo $row_[0];?></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款後五碼：</td>
                <td><input type="text" disabled="disabled" value="<? echo $row['buy_remit'];?>"></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款總金額：</td>
                <td><input type="text" disabled="disabled" value="<? echo $row['buy_remitmoney'];?>"></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款的日期：</td>
                <td><input type="text" disabled="disabled" value="<? echo $row['buy_remitdate'];?>"></td>
            </tr>
    <?
		if($row['tr_mode'] == '全家店到店')
		{
	?>
            <tr>
                <td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
            </tr>
            <tr>
				<td height="30" align="center">收件人姓名：</td>
				<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人電話：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">店門市名稱：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row['storename'];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">店門市店號：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row['storenumber'];?>"></td>
			</tr>
            <?
				if($row['remark'] != "")
				{
            ?>
                    <tr>
                        <td height="60" align="center">備註的事項：</td>
                        <td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['remark'];?></textarea></td>
                    </tr>
	<?
				}
		}
		
		if($row['tr_mode'] == '7-11店到店')
		{
	?>
            <tr>
				<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
          	</tr>
            <tr>
				<td height="30" align="center">收件人姓名：</td>
        		<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人電話：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
                <td height="30" align="center">店門市名稱：</td>
                <td><input type="text" disabled="disabled" value="<? echo $row['storename'];?>"></td>
             </tr>
             <tr>
                <td height="30" align="center">店門市店號：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row['storenumber'];?>"></td>
			</tr>
            <?
				if($row['remark'] != "")
				{
            ?>
			<tr>
				<td height="60" align="center">備註的事項：</td>
				<td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['remark'];?></textarea></td>
			</tr>
	<?
				}
		}
		
		if($row['tr_mode'] == '郵寄')
		{
				
			$sql_cc = "select city.*,county.* from `members` join `city` join `county` on members.city = city.city_number and members.county = county.county_number and county.county_number = city.county_number where members.m_number = '$m_number'";
			$query_cc = mysql_query($sql_cc);
			$list3_cc = mysql_fetch_array($query_cc);
				
			$sql_cca = "select county,city,address from members where m_number = '$m_number'";
			$result_cca = mysql_query($sql_cca);
			$row_cca = mysql_fetch_array($result_cca);
	?>
			<tr>
				<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人姓名：</td>
				<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人電話：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
				<td height="55" align="center">收件人地址：</td>
				<td>
				<select name="county" id="county" onchange="changeZone(document.commentForm.county, document.commentForm.city)" size="1" disabled="disabled" value="<? echo $row_cca[0];?>"></select>
                <select name="city" id="city" onchange="document.commentForm.county, document.commentForm.city" size="1" disabled="disabled" value="<? echo $row_cca[1];?>"></select>
                <br/><input type="text" name="address" id="address" class="required" maxlength="15" size="20" disabled="disabled" value=<? echo $row_cca[2];?>></td>
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
	countyInput.selectedIndex = <? echo $list3_cc[3]-1 ?>;
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

	zoneInput.selectedIndex = <? echo $list3_cc[0]-1 ?>;

	if(countyInput.selectedIndex != <? echo $list3_cc[3]-1 ?>)
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
                <td><input type="text" disabled="disabled" value="<? echo $row['sendtime'];?>"></td>
            </tr>
            <?	
				if($row['remark'] != "")
				{
            ?>
			<tr>
				<td height="60" align="center">備註的事項：</td>
				<td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['remark'];?></textarea></td>
			</tr>
	<?
				}
		}
		
		if($row['tr_mode'] == '面交')
		{
	?>
			<tr>
				<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></td>
			</tr>
				<td height="30" align="center">買家真實姓名：</td>
				<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">買家聯絡電話：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">買家面交日期：</td>
				<td><input type="date" disabled="disabled" value="<? echo $row['buy_paydate'];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">買家面交時段：</td>
				<td><input type="text" disabled="disabled" value="<? echo $row['buy_paytime'];?>"></td>
			</tr>
			<tr>
				<td height="60" align="center">詳細面交地點：</td>
				<td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['buy_pay'];?></textarea></td>
			</tr>
            <?
				if($row['remark'] != "")
				{
            ?>
			<tr>
				<td height="60" align="center">備註注意事項：</td>
				<td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['remark'];?></textarea></td>
			</tr>
<?
				}
		} 		
    }
		
	if($row['tr_payment'] == '面交')
	{
?>
    	<tr>
			<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></td>
		</tr>
			<td height="30" align="center">買家真實姓名：</td>
			<td><? echo $row_[0];?></td>
		</tr>
		<tr>
			<td height="30" align="center">買家聯絡電話：</td>
			<td><input type="text" disabled="disabled" value="<? echo $row_[1];?>"></td>
		</tr>
        <tr>
            <td height="30" align="center">買家面交日期：</td>
            <td><input type="date" disabled="disabled" value="<? echo $row['buy_paydate'];?>"></td>
        </tr>
        <tr>
        	<td height="30" align="center">買家面交時段：</td>
            <td><input type="text" disabled="disabled" value="<? echo $row['buy_paytime'];?>"></td>
        </tr>
		<tr>
			<td height="60" align="center">詳細面交地點：</td>
			<td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['buy_pay'];?></textarea></td>
        </tr>
        <?
			if($row['remark'] != "")
			{
        ?>
		<tr>
			<td height="60" align="center">備註注意事項：</td>
   			<td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['remark'];?></textarea></td>
		</tr>
    <?
			}
		}
	?>   
	<tr>
		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">對 帳 資 訊</font></td>
	</tr>
	<tr>
		<td height="30" align="center">對帳狀態：</td>
		<td>
		<?
			if($row['check_YN'] == '0')
			{
				echo '尚未對帳';
			}
			if($row['check_YN'] == '1')
			{
				echo '對帳成功';
			}
			if($row['check_YN'] == '2')
			{
				echo '對帳失敗';
		?>
                <input type="hidden" name="c_number" value="<? echo $c_number;?>">
                <?
                	if($row['changealter'] == '')
					{
				?>
                			<input type="submit" name="changealter" id="changealter" value="提出修改"></td>
                        <tr>
							<td colspan="2" height="30" align="center"><font color="#FF0000">▲更改請點選提出修改，須等待賣家同意</font></td>
						</tr>
                <?	
					}
					
					if($row['changealter'] == '1')
					{
                ?>
							<input type="submit" name="changealter" id="changealter" disabled="disabled" value="提出修改"></td>
                        <tr>
							<td colspan="2" height="30" align="center"><font color="#FF0000">▲已經點選了提出修改，請等待賣家同意</font></td>
						</tr>
        <?
					}
			}
		?>
        </td>
	</tr>
	<?
    	if($row['check_YN'] == '1' or $row['check_YN'] == '2')
		{
	?>
            <tr>
                <td height="30" align="center">對帳時間：</td>
                <td><? echo $row['check_time'];?></td>
            </tr>
            <tr>
                <td height="60" align="center">對帳備註：</td>
                <td><textarea rows="3" cols="18" disabled="disabled"><? echo $row['check_ans'];?></textarea></td>
            </tr>
	<?
		}
	?>
	<tr>
		<td colspan="2"height="55" align="center"><font color="#00CCCC">▲對帳有任何問題，請主動與賣家聯絡，<br/>或是在商品資訊頁面問與答詢問，謝謝！</font></td>
	</tr> 
</table>
</form>
</strong>

    <p></p>   
	<a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回上一頁</strong></a>

<?
	}
	
	else if($row['t_schedule'] == '選擇交易方式')
	{
?>
	<title>更改訂單</title>
		
	<font size="5" color="#FF0000"><strong>更改訂單</strong></font>
	<p></p>

<strong>
<form action="transaction_order_update.php" method="post" name="commentForm" id="commentForm">
<input type="hidden" name="c_number" value="<? echo $c_number;?>">
<table align="center" border="1" width="360" style="table-layout:fixed;border-collapse:collapse;" cellspacing="3" bordercolor="#cococo">
	<tr>
		<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">訂單明細表</font></td>
	</tr>
	<tr>
		<td height="30" align="center">付款方式：</td>
		<td><? echo $row['tr_payment'];?></td>
	</tr>
	<tr>
		<td height="30" align="center">交易方式：</td>
		<td><? echo $row['tr_mode'];?></td>
	</tr>
	<?		
		if($row['tr_payment'] == '匯款')
		{
	?>
            <tr>
                <td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">匯款人資訊</font></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款人姓名：</td>
                <td><? echo $row_[0];?></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款後五碼：</td>
                <td><input type="text" name="buy_remit" class="required" minlength="5" maxlength="5" value="<? echo $row['buy_remit'];?>"></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款總金額：</td>
                <td><input type="text" name="buy_remitmoney" class="required" value="<? echo $row['buy_remitmoney'];?>"></td>
            </tr>
            <tr>
                <td height="30" align="center">匯款的日期：</td>
                <td><input type="date" name="buy_remitdate" class="required" value="<? echo $row['buy_remitdate'];?>"></td>
            </tr>
    <?
		if($row['tr_mode'] == '全家店到店')
		{
	?>
            <tr>
                <td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
            </tr>
            <tr>
				<td height="30" align="center">收件人姓名：</td>
				<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人電話：</td>
				<td><input type="text" name="phone" class="required" minlength="8" maxlength="10" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">店門市名稱：</td>
				<td><input type="text" name="storename" class="required" value="<? echo $row['storename'];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">店門市店號：</td>
				<td><input type="text" name="storenumber" class="required" value="<? echo $row['storenumber'];?>"></td>
			</tr>
			<tr>
				<td height="60" align="center">備註的事項：</td>
  				<td><textarea name="remark" rows="3" cols="18"><? echo $row['remark'];?></textarea></td>
			</tr>
            <tr>
				<td colspan="2" height="30" align="center">
				<a align="center" href="http://www.family.com.tw/marketing/inquiry.aspx" target="_blank" style="color:#0000FF;text-decoration:none;"><strong>需查詢門市資訊請點我</strong></a></td>
			</tr>
	<?
		}
		
		if($row['tr_mode'] == '7-11店到店')
		{
	?>
            <tr>
				<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
          	</tr>
            <tr>
				<td height="30" align="center">收件人姓名：</td>
        		<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人電話：</td>
				<td><input type="text" name="phone" class="required" minlength="8" maxlength="10" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
                <td height="30" align="center">店門市名稱：</td>
                <td><input type="text" name="storename" class="required" value="<? echo $row['storename'];?>"></td>
             </tr>
             <tr>
                <td height="30" align="center">店門市店號：</td>
				<td><input type="text" name="storenumber" class="required" value="<? echo $row['storenumber'];?>"></td>
			</tr>
			<tr>
				<td height="60" align="center">備註的事項：</td>
				<td><textarea name="remark" rows="3" cols="18"><? echo $row['remark'];?></textarea></td>
			</tr>
            <tr>
				<td colspan="2" height="30" align="center">
				<a align="center" href="http://www.7-11.com.tw/search.asp" target="_blank" style="color:#0000FF;text-decoration:none;"><strong>需查詢門市資訊請點我</strong></a></td>
			</tr>
	<?
		}
		
		if($row['tr_mode'] == '郵寄')
		{
				
			$sql_cc = "select city.*,county.* from `members` join `city` join `county` on members.city = city.city_number and members.county = county.county_number and county.county_number = city.county_number where members.m_number = '$m_number'";
			$query_cc = mysql_query($sql_cc);
			$list3_cc = mysql_fetch_array($query_cc);
				
			$sql_cca = "select county,city,address from members where m_number = '$m_number'";
			$result_cca = mysql_query($sql_cca);
			$row_cca = mysql_fetch_array($result_cca);
	?>
			<tr>
				<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">收件人資訊</font></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人姓名：</td>
				<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">收件人電話：</td>
				<td><input type="text" name="phone" class="required" minlength="8" maxlength="10" value="<? echo $row_[1];?>"></td>
			</tr>
			<tr>
				<td height="55" align="center">收件人地址：</td>
				<td>
				<select name="county" id="county" onchange="changeZone(document.commentForm.county, document.commentForm.city)" size="1" value="<? echo $row_cca[0];?>"></select>
                <select name="city" id="city" onchange="document.commentForm.county, document.commentForm.city" size="1" value="<? echo $row_cca[1];?>"></select>
                <br/><input type="text" name="address" id="address" class="required" maxlength="15" size="20" value=<? echo $row_cca[2];?>></td>
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
	countyInput.selectedIndex = <? echo $list3_cc[3]-1 ?>;
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

	zoneInput.selectedIndex = <? echo $list3_cc[0]-1 ?>;

	if(countyInput.selectedIndex != <? echo $list3_cc[3]-1 ?>)
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
                <td>          
                <select name="sendtime" class="required">
                <option value="全天 ( 08:00 ~ 22:00 )" <? if($row['sendtime'] == "全天 ( 08:00 ~ 22:00 )") echo "selected";?>>全天 ( 08:00 ~ 22:00 )</option>
                <option value="早上 ( 08:00 ~ 12:00 )" <? if($row['sendtime'] == "早上 ( 08:00 ~ 12:00 )") echo "selected";?>>早上 ( 08:00 ~ 12:00 )</option>
                <option value="下午 ( 12:00 ~ 18:00 )" <? if($row['sendtime'] == "下午 ( 12:00 ~ 18:00 )") echo "selected";?>>下午 ( 12:00 ~ 18:00 ))</option>
                <option value="晚上 ( 18:00 ~ 22:00 )" <? if($row['sendtime'] == "晚上 ( 18:00 ~ 22:00 )") echo "selected";?>>晚上 ( 18:00 ~ 22:00 ))</option>
                </select>
                </td>
            </tr>
			<tr>
				<td height="60" align="center">備註的事項：</td>
				<td><textarea name="remark" rows="3" cols="18" ><? echo $row['remark'];?></textarea></td>
			</tr>
	<?
		}
		
		if($row['tr_mode'] == '面交')
		{
	?>
			<tr>
				<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></td>
			</tr>
				<td height="30" align="center">買家真實姓名：</td>
				<td><? echo $row_[0];?></td>
			</tr>
			<tr>
				<td height="30" align="center">買家聯絡電話：</td>
				<td><input type="text" name="phone" value="<? echo $row_[1];?>" class="required" size="20"></td>
			</tr>
			<tr>
				<td height="30" align="center">買家面交日期：</td>
				<td><input type="date" name="buy_paydate" class="required" value="<? echo $row['buy_paydate'];?>"></td>
			</tr>
			<tr>
				<td height="30" align="center">買家面交時段：</td>
				<td>                            
				<? 
                    if($row['per_time'] == "全天 ( 08:00 ~ 22:00 )")
                    {
                ?>                          
                        <select name="buy_paytime" class="required">
                        <option value="全天 ( 08:00 ~ 22:00 )" <? if($row['buy_paytime'] == "全天 ( 08:00 ~ 22:00 )") echo "selected";?>>全天 ( 08:00 ~ 22:00 )</option>
                        <option value="早上 ( 08:00 ~ 12:00 )" <? if($row['buy_paytime'] == "早上 ( 08:00 ~ 12:00 )") echo "selected";?>>早上 ( 08:00 ~ 12:00 )</option>
                        <option value="下午 ( 12:00 ~ 18:00 )" <? if($row['buy_paytime'] == "下午 ( 12:00 ~ 18:00 )") echo "selected";?>>下午 ( 12:00 ~ 18:00 ))</option>
                        <option value="晚上 ( 18:00 ~ 22:00 )" <? if($row['buy_paytime'] == "晚上 ( 18:00 ~ 22:00 )") echo "selected";?>>晚上 ( 18:00 ~ 22:00 ))</option>
                        </select>
				<?
                    }
                    else
                    {
                ?>
						<select name="buy_paytime" class="required">
						<option value="<? echo $row['buy_paytime'];?>"><? echo $row['buy_paytime'];?></option>
						</select>
				<?
					}
				?> 
                </td>
			</tr>
			<tr>
				<td height="60" align="center">詳細面交地點：</td>
				<td><textarea name="buy_pay" rows="3" cols="18" class="required"><? echo $row['buy_pay'];?></textarea></td>
			</tr>
			<tr>
				<td height="60" align="center">備註注意事項：</td>
				<td><textarea name="remark" rows="3" cols="18"><? echo $row['remark'];?></textarea></td>
			</tr>
<?
		} 		
    }
		
	if($row['tr_payment'] == '面交')
	{
?>
    	<tr>
			<td colspan="2" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">買家面交資訊</font></td>
		</tr>
			<td height="30" align="center">買家真實姓名：</td>
			<td><? echo $row_[0];?></td>
		</tr>
		<tr>
			<td height="30" align="center">買家聯絡電話：</td>
			<td><input type="text" name="phone" value="<? echo $row_[1];?>" class="required" size="20"></td>
		</tr>
        <tr>
            <td height="30" align="center">買家面交日期：</td>
           <td><input type="date" name="buy_paydate" class="required" value="<? echo $row['buy_paydate'];?>"></td>
        </tr>
        <tr>
			<td height="30" align="center">買家面交時段：</td>
			<td>                            
			<? 
                if($row['per_time'] == "全天 ( 08:00 ~ 22:00 )")
                {
            ?>                          
                    <select name="buy_paytime" class="required">
                    <option value="全天 ( 08:00 ~ 22:00 )" <? if($row['buy_paytime'] == "全天 ( 08:00 ~ 22:00 )") echo "selected";?>>全天 ( 08:00 ~ 22:00 )</option>
                    <option value="早上 ( 08:00 ~ 12:00 )" <? if($row['buy_paytime'] == "早上 ( 08:00 ~ 12:00 )") echo "selected";?>>早上 ( 08:00 ~ 12:00 )</option>
                    <option value="下午 ( 12:00 ~ 18:00 )" <? if($row['buy_paytime'] == "下午 ( 12:00 ~ 18:00 )") echo "selected";?>>下午 ( 12:00 ~ 18:00 ))</option>
                    <option value="晚上 ( 18:00 ~ 22:00 )" <? if($row['buy_paytime'] == "晚上 ( 18:00 ~ 22:00 )") echo "selected";?>>晚上 ( 18:00 ~ 22:00 ))</option>
                    </select>
			<?
                }
                else
                {
            ?>
					<select name="buy_paytime" class="required">
					<option value="<? echo $row['buy_paytime'];?>"><? echo $row['buy_paytime'];?></option>
					</select>
			<?
				}
			?> 
            </td>
		</tr>
		<tr>
			<td height="60" align="center">詳細面交地點：</td>
			<td><textarea name="buy_pay" rows="3" cols="18" class="required"><? echo $row['buy_pay'];?></textarea></td>
        </tr>
		<tr>
			<td height="60" align="center">備註注意事項：</td>
   			<td><textarea name="remark" rows="3" cols="18"><? echo $row['remark'];?></textarea></td>
		</tr>
    <?
		}
	?>   
	<tr>
		<td colspan="2"height="55" align="center"><font color="#00CCCC">▲請仔細檢查資料輸入是否正確，<br/>有任何問題請與賣家聯絡，謝謝！</font></td>
	</tr> 
    <tr>
		<td colspan="2" height="30" align="center">我同意<input type="checkbox" name="yes" value="" class="required"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" height="30">
        <input type="submit" value="確定送出">
		<input type="reset" value="重新填寫">
        </td>
	</tr>
</table>
</form>
</strong>

    <p></p>   
	<a align="center" href="won.php" style="color:#0000FF;text-decoration:none;"><strong>回上一頁</strong></a>
    
<?
	}
	}	
	else
	{
?>
		<script>
			location.href = './index.php';
		</script>
<?
	}
	}
	else
	{
?>
		<script>
			location.href = './index.php';
		</script>
<?
	}
?>
</div>
</div>
</body>
</html>