<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP
session_cache_limiter('private,must_revalidate');
?>
<head>
<style>
saveHistory{behavior:url(#default#savehistory);}
#ap {
	position:absolute;
	width:250px;
	height:587px;
	z-index:6;
	left: 12px;
	top: 160px;
	margin: 0 auto;
}/*上架3-2 圖片*/
#apDiv{
	position:absolute;
	width:866px;
	height:423px;
	z-index:7;
	left: 60px;
	top: 110px;
	margin: 0 auto;
}/*上架欄位*/
</style>
<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>



</head>


<body >
<?PHP include("main.php"); ?>
<div id=ce2>
<div id="ap"><img src="素材/上架3.png" width="978" height="587" alt="上架3-2" />
  <div id="apDiv">
 <?PHP
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

if($_SESSION['added'] == "2") //如果資料已存資料庫(added=2)無法回上一頁修改資料
{
	?><script>window.alert('商品已存入無法修改');
	</script>
    <?PHP
	die();

}

?>
<FORM name="form1" action="added_00.php" method="post" enctype="multipart/form-data">
<table width="867">
<tr height="29">
	<td width="102">
    	拍賣方式
    </td>
    <td colspan="2">
    	價高者得標
    </td>
     <td width="141" rowspan="15" style="text-align:right">
    	<input type="image" img src="素材/按鈕-下一步.png" width="80" height="180" onClick="document.formname.submit()" value="下一步">
    </td>
</tr>
<tr height="29">
	<td>
    	購買商品地址
    </td>
    <td colspan="2">
    	<input type="text" id="c_address" name="c_address" size="50" maxlength="40">
    </td>
</tr>
<tr height="29">
	<td>
    	時間設定
    </td>  
    <td colspan="2">
        <input type="radio" id="downtime" name="downtime" value="10">10天
        <input type="radio" id="downtime" name="downtime" value="20">20天
        <input type="radio" id="downtime" name="downtime" value="30">30天

    </td>
</tr>

<tr height="29">
	<td>
    	付款方式
    </td>
    <td colspan="2">
        <input type="checkbox" id="c_payment[]" name="c_payment[]" value="郵局">匯款
        <input type="checkbox" id="c_payment[]" name="c_payment[]" value="面交">面交
    </td>
</tr>
<tr height="29">
	<td>
    	交易方式
    </td>
    <td colspan="2">
    	<input type="checkbox" id="c_mode[]" name="c_mode[]" value="郵寄">郵寄
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="7-11">7-11店到店
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="全家">全家店到店
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="面交">面交
    </td>
</tr>
<tr height="29">
	<td>
    	商品描述
	</td>
    <td colspan="2">
    	<textarea id="c_description" name="c_description" rows="4" cols="40"></textarea>
    </td>
</tr>
<tr height="29">
	<td rowspan="3">
    	試穿者資料
    </td>
    <td colspan="2">
    	<FONT SIZE=2>身高　</FONT><input type="text" id="c_try_height" name="c_try_height" size="5"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>體重　</FONT><input type="text" id="c_try_weight" name="c_try_weight" size="5"><FONT SIZE=2>　kg　　</FONT>
        <FONT SIZE=2>肩寬　</FONT><input type="text" id="c_try_shoulder" name="c_try_shoulder" size="5"><FONT SIZE=2>　cm　　</FONT>
    </td>
</tr>
<tr height="29">
    <td colspan="2">
    	<FONT SIZE=2>胸圍　</FONT><input type="text" id="c_try_bust" name="c_try_bust" size="5"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>腰圍　</FONT><input type="text" id="c_try_waistline" name="c_try_waistline" size="5"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>臀圍　</FONT><input type="text" id="c_try_hips" name="c_try_hips" size="5"><FONT SIZE=2>　cm　　</FONT>
    </td>

</tr>
<tr height="29">
    <td colspan="2">
    	<FONT SIZE=2>腳　</FONT>
    	<select id="c_try_foot" name="c_try_foot">
        <option value="">請選擇</option>
        <option value="台灣">台灣</option>
        <option value="美國">美國</option>
        <option value="日本">日本</option>
        <option value="歐洲">歐洲</option>
        </select>
    	<FONT SIZE=2> 尺寸 </FONT><input type="text" id="c_try_foot2" name="c_try_foot2" size="3">
    </td>

</tr>

<tr height="29">
	<td rowspan="5">
    	商品圖片
	</td>
    <td width="296">
        1.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
	</td>
        <td>
        5.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
        </td>
</tr>
    	<tr height="29">
        <td>
       	2.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
        </td><td>
        6.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
        </td>
        </tr>
    	<tr height="29">
        <td>
		3.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
        </td><td>
        7.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
        </td>
        </tr>  
    	<tr height="29">
        <td>
        4.<input type="file" id="c_picture[]" name="c_picture[]" ><br>
        </td>
        <td>
		<input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>
        </td>
        </tr>
</table>
</form>   
  </div>
</div>
</div>

</body>
</html>