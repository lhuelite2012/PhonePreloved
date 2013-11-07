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
#apDiv{
	position: absolute;
	width: 866px;
	height: 423px;
	z-index: 7;
	left: 60px;
	top: 110px;
	margin: 0 auto;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="all.css" type="text/css" />
<title>無標題文件</title>
</head>

<body>
<div id="ce2">
<div id="apDiv30"><img src="素材/上架3.png"width="978" height="557" alt="上架3-1" />
 <div id="apDiv">
 <?php
 
 include("loginConfirm.php");
 include("server.php");
 $m_number = $_SESSION['m_number'];
 $c_name = $_SESSION['c_name'];
 
//更改商品↓先找出那項商品的"商品編號"
$max ="select c_number from commodity where c_name='" .$c_name. "' and m_number='" .$m_number. "' order by c_number desc";
$result = mysql_query($max);
$row = mysql_fetch_array($result);
$_SESSION['c_number'] = $row['c_number'];
//echo $_SESSION['score'];
?>
<FORM name="form1" action="added00.php" method="post" enctype="multipart/form-data">
<table width="865" height="407">
<tr>
	<td>
    	拍賣方式
    </td>
    <td>
    	自行選擇得標者
    </td>
     <td rowspan="10">
    	<input type="image" img src="素材/按鈕-下一步.png" onClick="document.formname.submit()" value="下一步">
    </td>
</tr>
<tr>
	<td>
    	購買商品地址
    </td>
    <td>
    	<input type="text" id="c_address" name="c_address" size="50">
    </td>
</tr>
<tr>
	<td>
    	時間設定
    </td>  
    <td>
        <input type="radio" id="downtime" name="downtime" value="10">10天
        <input type="radio" id="downtime" name="downtime" value="20">20天
        <input type="radio" id="downtime" name="downtime" value="30">30天

    </td>
</tr>

<tr>
	<td>
    	付款方式
    </td>
    <td>
        <input type="checkbox" id="c_payment[]" name="c_payment[]" value="匯款">匯款
         <input type="checkbox" id="c_payment[]" name="c_payment[]" value="面交">面交
    </td>
</tr>
<tr>
	<td>
    	交易方式
    </td>
    <td>
    	<input type="checkbox" id="c_mode[]" name="c_mode[]" value="郵寄">郵寄
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="7-11">7-11店到店
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="全家">全家店到店
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="面交">面交
    </td>
</tr>
<tr>
	<td>
    	面交地點
	</td>
    <td>
    	<input type="text" id="personally" name="personally"  size="40"></textarea>
    </td>
</tr>
<tr>
	<td>
    	商品描述
	</td>
    <td>
    	<textarea id="c_description" name="c_description" rows="4" cols="40"></textarea>
    </td>
</tr>
<tr>
	<td rowspan="3">
    	試穿者資料
    </td>
    <td>
    	<FONT SIZE=2>身高　</FONT><input type="text" id="c_try_height" name="c_try_height" size="5"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>體重　</FONT><input type="text" id="c_try_weight" name="c_try_weight" size="5"><FONT SIZE=2>　kg　　</FONT>
        <FONT SIZE=2>肩寬　</FONT><input type="text" id="c_try_shoulder" name="c_try_shoulder" size="5"><FONT SIZE=2>　cm　　</FONT>
    </td>
</tr>
<tr>
    <td>
    	<FONT SIZE=2>胸圍　</FONT><input type="text" id="c_try_bust" name="c_try_bust" size="5"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>腰圍　</FONT><input type="text" id="c_try_waistline" name="c_try_waistline" size="5"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>臀圍　</FONT><input type="text" id="c_try_hips" name="c_try_hips" size="5"><FONT SIZE=2>　cm　　</FONT>
    </td>

</tr>
<tr>
    <td>
    	<FONT SIZE=2>腳　</FONT>
    	<select name="c_try_foot" id="c_try_foot" onchange="changeZone1(document.form1.c_try_foot, document.form1.c_try_foot2)" size="1" >
        </select>
        <select name="c_try_foot2" id="c_try_foot2" onchange="document.form1.c_try_foot, document.form1.c_try_foot2" size="1">
        </select>
        <FONT SIZE=2>　cm　　</FONT>
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

initCounty1(document.form1.c_try_foot)
initZone1(document.form1.c_try_foot, document.form1.c_try_foot2);

// -->
</script>

<tr>
	<td>
    	商品圖片
	</td>
    <td colspan="2">
       	<p>1.<input type="file" id="c_picture[]" name="c_picture[]" >
       	  5.<input type="file" id="c_picture[]2" name="c_picture[]2" />
          <br>
       	  2.<input type="file" id="c_picture[]" name="c_picture[]" >
       	  6.<input type="file" id="c_picture[]3" name="c_picture[]3" />
<br>
       	  3.<input type="file" id="c_picture[]" name="c_picture[]" >
       	  7.<input type="file" id="c_picture[]4" name="c_picture[]4" />
<br>
       	  4.<input type="file" id="c_picture[]" name="c_picture[]" >
       	  <input type="hidden" name="mzx_file_size" value="512000" />
          <font color="#FF0000" size=1>最大不可超過5M</font><br><br>
       	</p>
    </td>
</tr>
</table>
</form>
</td>
</div>
</div>
</div>
</body>
</html>