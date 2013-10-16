<?PHP ob_start();?>
<?PHP session_start(); ?>
<?PHP //include("main.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP  
$m_number = $_SESSION['m_number']; 
$c_number = $_GET['c'];
?>
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<style type="text/css">
#pic{
	position: absolute;
	width: 900px;
	height: 500px;
	left: 45px;
	top: 230px;
	
}
</style>
<title>瘋二手 Phone Preloved</title>
</head>

<body>
<?PHP
include("main.php");
include("loginConfirm.php");//判斷是否會員登入
include("server.php");//連資料庫
include("resize.php");
include("commodityPath.php");
include("addtime.php");
include("commodityPath.php");//上傳圖片路徑

$sql = "select * from commodity where c_number = '$c_number'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);//所有commodity商品資訊
$c_name = $row['c_name'];

$bid_sql = "select count(*) from bid where c_number = '$c_number'";
$bid_query = mysql_query($bid_sql);
$bid_rows = mysql_fetch_array($bid_query);//出價次數
$bid_bout = $bid_rows[0]; 

$sort_sql = "select * from sort where s_number = ".$row['s_number'];
$sort_query = mysql_query($sort_sql);
$sort_row = mysql_fetch_array($sort_query);//父分類編號
$s_fsort = $sort_row['s_fsort'];

$query="select * from colors";
$result2 = mysql_query($query);
$colors = mysql_num_rows($result2);//色系
if($bid_bout > 0){
	?><script>window.alert('已經有出價紀錄，因此無法修改商品資訊');
	window.history.back();
	</script>
    <?PHP
	die();
}


?>
<div id="pic">
<form action="alter_added0.php?c=<?PHP echo $c_number;?>" method="post" name="alter" onsubmit="return chktwo();" enctype="multipart/form-data">
<table width="700" height="80px" align="center" bordercolor="#000000" bgcolor="#F2F2F2">
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3" >
    	商品標題
    </td>
    <td width="588" colspan="2">
    	<input type="text" id="c_name" name="c_name" size="50" maxlength="30" value="<?PHP echo $row['c_name']; ?>"><FONT color="#FF0000" SIZE=1>限30個中文字內</FONT>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品所在地
    </td>
    <td colspan="2">
    	<select name="location"  id="location">
	        <option value="" <?PHP if($row['location'] == "請選擇") echo "selected";?>>請選擇</option>
	        <option value="基隆市" <?PHP if($row['location'] == "基隆市") echo "selected";?>>基隆市</option>
	        <option value="臺北市" <?PHP if($row['location'] == "臺北市") echo "selected";?>>臺北市</option>
	        <option value="新北市" <?PHP if($row['location'] == "新北市") echo "selected";?>>新北市</option>
	        <option value="桃園縣" <?PHP if($row['location'] == "桃園縣") echo "selected";?>>桃園縣</option>
            <option value="新竹市" <?PHP if($row['location'] == "新竹市") echo "selected";?>>新竹市</option>
	        <option value="新竹縣" <?PHP if($row['location'] == "新竹縣") echo "selected";?>>新竹縣</option>
	        <option value="苗栗縣" <?PHP if($row['location'] == "苗栗縣") echo "selected";?>>苗栗縣</option>
	        <option value="臺中市" <?PHP if($row['location'] == "臺中市") echo "selected";?>>臺中市</option>
	        <option value="臺中縣" <?PHP if($row['location'] == "臺中縣") echo "selected";?>>臺中縣</option>
	        <option value="彰化縣" <?PHP if($row['location'] == "彰化縣") echo "selected";?>>彰化縣</option>
	        <option value="南投縣" <?PHP if($row['location'] == "南投縣") echo "selected";?>>南投縣</option>
	        <option value="雲林縣" <?PHP if($row['location'] == "雲林縣") echo "selected";?>>雲林縣</option>
	        <option value="嘉義市" <?PHP if($row['location'] == "嘉義市") echo "selected";?>>嘉義市</option>
	        <option value="嘉義縣" <?PHP if($row['location'] == "嘉義縣") echo "selected";?>>嘉義縣</option>
	        <option value="臺南市" <?PHP if($row['location'] == "臺南市") echo "selected";?>>臺南市</option>
	        <option value="臺南縣" <?PHP if($row['location'] == "臺南縣") echo "selected";?>>臺南縣</option>
	        <option value="高雄市" <?PHP if($row['location'] == "高雄市") echo "selected";?>>高雄市</option>
	        <option value="高雄縣" <?PHP if($row['location'] == "高雄縣") echo "selected";?>>高雄縣</option>
	        <option value="屏東縣" <?PHP if($row['location'] == "屏東縣") echo "selected";?>>屏東縣</option>
	        <option value="臺東縣" <?PHP if($row['location'] == "臺東縣") echo "selected";?>>臺東縣</option>
	        <option value="花蓮縣" <?PHP if($row['location'] == "花蓮縣") echo "selected";?>>花蓮縣</option>
	        <option value="宜蘭縣" <?PHP if($row['location'] == "宜蘭縣") echo "selected";?>>宜蘭縣</option>
	            </select>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品新舊
    </td>
    <td colspan="2">
    	<select name="oan"  id="oan" >
	        <option value="" <?PHP if($row['oan'] == "請選擇") echo "selected";?>>請選擇</option>
	        <option value="全新" <?PHP if($row['oan'] == "全新") echo "selected";?>>全新</option>
	        <option value="九成新" <?PHP if($row['oan'] == "九成新") echo "selected";?>>九成新</option>
	        <option value="八成新" <?PHP if($row['oan'] == "八成新") echo "selected";?>>八成新</option>
	        <option value="七成新" <?PHP if($row['oan'] == "七成新") echo "selected";?>>七成新</option>
            <option value="六成新" <?PHP if($row['oan'] == "六成新") echo "selected";?>>六成新</option>
	        <option value="五成新" <?PHP if($row['oan'] == "五成新") echo "selected";?>>五成新</option>
	        <option value="四成新" <?PHP if($row['oan'] == "四成新") echo "selected";?>>四成新</option>
	        <option value="三成新" <?PHP if($row['oan'] == "三成新") echo "selected";?>>三成新</option>
	        <option value="二成新" <?PHP if($row['oan'] == "二成新") echo "selected";?>>二成新</option>
	        <option value="一成新" <?PHP if($row['oan'] == "一成新") echo "selected";?>>一成新</option>
	            </select>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品主要圖片
    </td>
    <td>
    	<input type="file" id="c_mp" name="c_mp">
        <input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>
    </td>
    <td>
		<?PHP echo '<img src="'.$picturePathWeb.$row['c_mp'].'" onload="javascript:DrawImage(this,80,80);" width="90" height="110"/>'?>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品影片
    </td>
    <td>
    	<input type="file" id="c_movie" name="c_movie" size=12 >
		<input type="hidden" name="mzx_file_size" value="10240000"><FONT color="#FF0000" SIZE=1>最大不可超過100M</FONT>
    </td>
    <td>
		<?PHP if(isset($row["c_movie"]) and $row["c_movie"]!=""){ ?>
    	<embed src="<?php echo $moviePathWeb.$row["c_movie"];?>" autostart="false" loop="0"   width="600" height="400"></embed><?PHP }?>
    </td>
</tr>
<tr style="width:100px;">
	<td width="100" bgcolor="#BEFFC3">
    	商品規格
    </td>
    <td colspan="2">
<?php if($s_fsort ==1){ //衣服?>
            	<li><span>尺　　寸：</span><input type="text" id="size" name="size" size="5" value="<?php echo $row["size"]; ?>" placeholder="公分"></li>
                <li><span>長　　度：</span><input type="text" id="c_height" name="c_height" size="5" value="<?php echo $row["c_height"]; ?>" placeholder="公分"></li>
                <li><span>肩　　寬：</span><input type="text" id="c_shoulder" name="c_shoulder" size="5" value="<?php echo $row["c_shoulder"]; ?>" placeholder="公分"></li>
                <li><span>胸　　寬：</span><input type="text" id="c_bust" name="c_bust" size="5" value="<?php echo $row["c_bust"]; ?>" placeholder="公分"></li>
                <li><span>腰　　寬：</span><input type="text" id="c_waistline" name="c_waistline" size="5" value="<?php echo $row["c_waistline"]; ?>" placeholder="公分"></li>	
<?php }?>

<?php if($s_fsort ==2){ //褲子?>
            	<li><span>尺　　寸：</span><input type="text" id="size" name="size" size="5" value="<?php echo $row["size"]; ?>" ></li>
                <li><span>長　　度：</span><input type="text" id="c_height" name="c_height" size="5" value="<?php echo $row["c_height"]; ?>" placeholder="公分"></li>
                <li><span>腰　　寬：</span><input type="text" id="c_waistline" name="c_waistline" size="5" value="<?php echo $row["c_waistline"]; ?>" placeholder="公分"></li>
                <li><span>臀　　寬：</span><input type="text" id="c_hips" name="c_hips" size="5" value="<?php echo $row["c_hips"]; ?>" placeholder="公分"></li>	
<?php }?>

<?php if($s_fsort ==3){ //包包?>
            	<li><span>長　　度：</span><input type="text" id="c_height" name="c_height" size="5" value="<?php echo $row["c_height"]; ?>" placeholder="公分"></li>
                <li><span>肩　　寬：</span><input type="text" id="c_shoulder" name="c_shoulder" size="5" value="<?php echo $row["c_shoulder"]; ?>" placeholder="公分"></li>
<?php }?>

<?php if($s_fsort ==4){ //鞋子?>
            	<li><span>尺　　寸：</span><select id="s_size" name="s_size">
        <option value=""><?php echo $row["s_size"]; ?></option>
        <option value="US">美國</option>
        <option value="UK">英國</option>
        <option value="FR">法國</option>
        <option value="JP">日本</option>
        </select>
    	<FONT SIZE=2> 尺寸 </FONT><input type="text" id="size" name="size" size="3" value="<?PHP echo $row['size'];?>">
</li>
<?php }?>

<?php if($s_fsort ==5){ //洋裝?>
            	<li><span>尺　　寸：</span><input type="text" id="size" name="size" size="5" value="<?php echo $row["size"]; ?>"></li>
                <li><span>長　　度：</span><input type="text" id="c_height" name="c_height" size="5" value="<?php echo $row["c_height"]; ?>" placeholder="公分"></li>
                <li><span>肩　　寬：</span><input type="text" id="c_shoulder" name="c_shoulder" size="5" value="<?php echo $row["c_shoulder"]; ?>" placeholder="公分"></li>
                <li><span>胸　　寬：</span><input type="text" id="c_bust" name="c_bust" size="5" value="<?php echo $row["c_bust"]; ?>" placeholder="公分"></li>
                <li><span>腰　　寬：</span><input type="text" id="c_waistline" name="c_waistline" size="5" value="<?php echo $row["c_waistline"]; ?>" placeholder="公分"></li>	
<?php }?>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品色系
    </td>
    <td colspan="2">
<select name="colors_number" id="colors_number">
<option value="" <?PHP if($row['colors_number'] == "") echo "selected";?>>請選擇</option>
<option value="1" <?PHP if($row['colors_number'] == "1") echo "selected";?>>紅色系</option>
<option value="2" <?PHP if($row['colors_number'] == "2") echo "selected";?>>橘色系</option>
<option value="3" <?PHP if($row['colors_number'] == "3") echo "selected";?>>黃色系</option>
<option value="4" <?PHP if($row['colors_number'] == "4") echo "selected";?>>綠色系</option>
<option value="5" <?PHP if($row['colors_number'] == "5") echo "selected";?>>灰色系</option>
<option value="6" <?PHP if($row['colors_number'] == "6") echo "selected";?>>金色系</option>
<option value="7" <?PHP if($row['colors_number'] == "7") echo "selected";?>>藍色系</option>
<option value="8" <?PHP if($row['colors_number'] == "8") echo "selected";?>>紫色系</option>
<option value="9" <?PHP if($row['colors_number'] == "9") echo "selected";?>>黑色系</option>
<option value="10" <?PHP if($row['colors_number'] == "10") echo "selected";?>>白色系</option>
<option value="11" <?PHP if($row['colors_number'] == "11") echo "selected";?>>棕色系</option>
<option value="12" <?PHP if($row['colors_number'] == "12") echo "selected";?>>銀色系</option>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品材質
    </td>
    <td colspan="2">
    	<input type="text" id="material" name="material" size="15" value="<?PHP echo $row['material']; ?>">
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品價格
    </td>
    <td colspan="2">
    	<input type="text" id="c_price" name="c_price" size="11" value="<?PHP echo $row['c_price']; ?>">
    </td>
</tr>
<!--<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	評價限制
    </td>
    <td>
    	<input type="text" id="lowest_record" name="lowest_record" size="10" value="<?PHP $row['lowest_record']; ?>"><FONT SIZE=2>以上  </FONT><FONT color="#FF0000" SIZE=2>才可對商品出價</FONT>
    </td>
</tr>-->
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	購買憑證
    </td>
    <td>
    	<?PHP //echo $row['pop']; ?>
    	<input type="file" id="pop" name="pop">
        <input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>
    </td>
    <td>
    	<?PHP echo '<img src="'.$popPathWeb.$row['pop'].'" onload="javascript:DrawImage(this,80,80);" width="90" height="110"/>'?>

    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	購買日期
    </td>
    <td colspan="2">
    	<input type="date" id="c_date" name="c_date" value="<?PHP echo $row['c_date']; ?>">
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	購買商品地址
    </td>
    <td colspan="2">
    	<input type="text" id="c_address" name="c_address" size="50" maxlength="40" value="<?PHP echo $row['c_address']; ?>">
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品描述
	</td>
    <td colspan="2">
    	<textarea id="c_description" name="c_description" rows="4" cols="40"><?PHP echo $row['c_description']; ?></textarea>
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	付款方式
    </td>
    <td colspan="2">
        <input type="checkbox" id="c_payment[]" name="c_payment[]" value="匯款" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "1") echo "checked";}?>>匯款
        <input type="checkbox" id="c_payment[]" name="c_payment[]" value="面交" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "2") echo "checked";}?>>面交
    </td>
</tr>
<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	交易方式
    </td>
    <td colspan="2">
    	<input type="checkbox" id="c_mode[]" name="c_mode[]" value="郵寄" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "1") echo "checked";}?>>郵寄
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="7-11" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "2") echo "checked";}?>>7-11店到店
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="全家" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "3") echo "checked";}?>>全家店到店
        <input type="checkbox" id="c_mode[]" name="c_mode[]" value="面交" <?PHP for($i=0;$i<count($c);$i++){ if($c[$i] == "4") echo "checked";}?>>面交
    </td>
</tr>

<tr height="40px">
	<td rowspan="3" width="100" bgcolor="#BEFFC3">
    	試穿者資料
    </td>
    <td colspan="2">
    	<FONT SIZE=2>身高　</FONT><input type="text" id="c_try_height" name="c_try_height" size="5" value="<?PHP echo $row['c_try_height']; ?>"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>體重　</FONT><input type="text" id="c_try_weight" name="c_try_weight" size="5" value="<?PHP echo $row['c_try_weight']; ?>"><FONT SIZE=2>　kg　　</FONT>
        <FONT SIZE=2>肩寬　</FONT><input type="text" id="c_try_shoulder" name="c_try_shoulder" size="5" value="<?PHP echo $row['c_try_shoulder']; ?>"><FONT SIZE=2>　cm　　</FONT>
    </td>
</tr>
<tr height="40px">
    <td colspan="2">
    	<FONT SIZE=2>胸圍　</FONT><input type="text" id="c_try_bust" name="c_try_bust" size="5" value="<?PHP echo $row['c_try_bust']; ?>"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>腰圍　</FONT><input type="text" id="c_try_waistline" name="c_try_waistline" size="5" value="<?PHP echo $row['c_try_waistline']; ?>"><FONT SIZE=2>　cm　　</FONT>
    	<FONT SIZE=2>臀圍　</FONT><input type="text" id="c_try_hips" name="c_try_hips" size="5" value="<?PHP echo $row['c_try_hips']; ?>"><FONT SIZE=2>　cm　　</FONT>
    </td>

</tr>
<tr height="40px">
    <td colspan="2">
    	<FONT SIZE=2>腳　</FONT>
    	<select id="c_try_foot" name="c_try_foot">
        <option value="" <?PHP if($row['c_try_foot'] == "") echo "selected";?>>請選擇</option>
        <option value="台灣" <?PHP if($row['c_try_foot'] == "台灣") echo "selected";?>>台灣</option>
        <option value="美國" <?PHP if($row['c_try_foot'] == "美國") echo "selected";?>>美國</option>
        <option value="日本" <?PHP if($row['c_try_foot'] == "日本") echo "selected";?>>日本</option>
        <option value="歐洲" <?PHP if($row['c_try_foot'] == "歐洲") echo "selected";?>>歐洲</option>
        </select>
    	<FONT SIZE=2> 尺寸 </FONT><input type="text" id="c_try_foot2" name="c_try_foot2" size="3" value="<?PHP echo $row['c_try_foot2']; ?>">
    </td>

</tr>

<tr height="40px">
	<td width="100" bgcolor="#BEFFC3">
    	商品圖片
	</td>
    <td>
  <?PHP 
$query1 = "select * from c_picture where c_number = '$c_number' order by 2";
$result3 = mysql_query($query1);
//$pictures = mysql_fetch_array($result3);//商品圖片
//$all = substr($pictures['c_picture'],0,1);//找圖片名(c_picture)稱開頭
//$allp = mysql_data_seek($pictures, $num-1);
?>
		<br>&nbsp;</br>
        <li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
        <li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
		<li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
        <li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
		<li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
        <li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
       	<li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
		<li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
        <li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
		<li><input type="file" id="c_picture[]" name="c_picture[]" ></li>
        <br>&nbsp;</br>
		<input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>
        </td>
        <td>
        <?PHP while($pictures = mysql_fetch_array($result3)){?>
        <img src="<?php echo $picturePathWeb.$pictures['c_picture']; ?>" width="90" height="110"/><br>&nbsp;</br><?PHP }?>
        </td>
</tr>
<tr>
	<td colspan="3" align="center" style="border-top:double #000000">
    <input type="button" name="alter" onclick="return revise()" value="送出" />
    </td>
</tr>
</table>
</div>
<script>
	function revise(){
		if( confirm ("確定商品修改完成?") ) {
			document.alter.submit();
		}
  		else{
			return false;
		}
	}
</script>
</body>
</html>