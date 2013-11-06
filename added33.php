<?PHP
session_start();
include("main.php");
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
	height:561px;
	z-index:6;
	left: 12px;
	top: 165px;
	margin: 0 auto;
}/*上架3-1 圖片*/

#apDiv{
	position:absolute;
	width:866px;
	height:423px;
	z-index:7;
	left: 60px;
	top: 110px;
	margin: 0 auto;
}
</style>
<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>




</head>


<body >

<div id=ce2>
 <div id="ap"><img src="素材/上架3.png" width="978" height="557" alt="上架3-1" />
   <div id="apDiv">
<FORM name="form1" action="added_0.php?id=<?PHP echo $_GET['id'];?>&gender=<?PHP echo $_GET['gender'];?>&s_number=<?PHP echo $_GET['s_number'];?>" method="post" enctype="multipart/form-data" >
<?PHP
include("loginConfirm.php"); 
include("server.php");
$_SESSION['Specification'] = "3";
if($_SESSION['added'] == "1")
{
	?><script>window.alert('商品已存入無法修改');
	window.location="added_4.php"; 
	</script>
    <?PHP
	die();

}
if($_SESSION['added'] == "2")
{
	?><script>window.alert('商品已存入無法修改');
	</script>
    <?PHP
	die();

}

?>
<table width="865" height="407">
<tr>
	<td>
		商品標題
	</td>
	<td>
		<input type="text" id="c_name" name="c_name" size="50" maxlength="30"><FONT color="#FF0000" SIZE=1>限30個中文字內</FONT>
	</td>
    <td rowspan="9" style="text-align:right">
    	<input type="image" img src="素材/按鈕-下一步.png" width="80" height="180" onClick="document.formname.submit()" value="下一步">
        </td>
</tr>
<tr>
	<td>
		商品所在地
	</td>
	<td>
		<select name="location"  id="location" onChange="Buildkey(this.selectedIndex);">
	        <option>請選擇</option>
	        <option value="基隆市" >基隆市</option>
	        <option value="臺北市" >臺北市</option>
	        <option value="新北市" >新北市</option>
	        <option value="桃園縣" >桃園縣</option>
            <option value="新竹市" >新竹市</option>
	        <option value="新竹縣" >新竹縣</option>
	        <option value="苗栗縣" >苗栗縣</option>
	        <option value="臺中市" >臺中市</option>
	        <option value="臺中縣" >臺中縣</option>
	        <option value="彰化縣" >彰化縣</option>
	        <option value="南投縣" >南投縣</option>
	        <option value="雲林縣" >雲林縣</option>
	        <option value="嘉義市" >嘉義市</option>
	        <option value="嘉義縣" >嘉義縣</option>
	        <option value="臺南市" >臺南市</option>
	        <option value="臺南縣" >臺南縣</option>
	        <option value="高雄市" >高雄市</option>
	        <option value="高雄縣" >高雄縣</option>
	        <option value="屏東縣" >屏東縣</option>
	        <option value="臺東縣" >臺東縣</option>
	        <option value="花蓮縣" >花蓮縣</option>
	        <option value="宜蘭縣" >宜蘭縣</option>
	            </select>
	</td>
</tr>
<tr>
	<td>
		商品新舊
	</td>
    <td>
    	<select name="oan"  id="oan" >
	        <option>請選擇</option>
	        <option value="全新" >全新</option>
	        <option value="九成新" >九成新</option>
	        <option value="八成新" >八成新</option>
	        <option value="七成新" >七成新</option>
            <option value="六成新" >六成新</option>
	        <option value="五成新" >五成新</option>
	        <option value="四成新" >四成新</option>
	        <option value="三成新" >三成新</option>
	        <option value="二成新" >二成新</option>
	        <option value="一成新" >一成新</option>
	            </select>
    </td>
</tr>
<tr>
	<td>
    	商品主要圖片
    </td>
    <td>
    	<input type="file" id="c_mp" name="c_mp" >
        <input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>
    </td>
</tr>
<tr>
	<td>
    	商品影片
	</td>
    <td>
        <input type="file" id="c_movie" name="c_movie" size=12>
		<input type="hidden" name="mzx_file_size" value="10240000"><FONT color="#FF0000" SIZE=1>最大不可超過100M</FONT>
	
    </td>
</tr>
<tr>
	<td>
    	商品規格
    </td>
    <td>
    	<FONT SIZE=2> 尺寸 </FONT><input type="text" id="size" name="size" size="3">
    	<FONT SIZE=2>　　　全長 </FONT><input type="text" id="c_height" name="c_height" size="5"><FONT SIZE=2> cm　　　</FONT>
    </td>
</tr>

<tr>
	<td>
    	商品色系
    </td>
    <td> 
    	<?PHP
include('server.php');
$query="select * from colors";
$result = mysql_query($query);
$num_result = mysql_num_rows($result);
echo "<select name='colors_number' size='1'>";
for($i=0;$i<$num_result; $i++)
{
    	$row=mysql_fetch_array($result);
    	echo "<option value='" . $row['colors_number'] ." '>" . $row['colors_name'] . "</option>\n";
}
echo "</select>";
?>
    </td>
</tr>
<tr>
	<td>
    	商品材質
    </td>
    <td>
    	<input type="text" id="material" name="material" size="15">
    </td>
</tr>


<tr>
	<td>
    	商品價格
    </td>
    <td>
    	<input type="text" id="c_price" name="c_price" size="11">
    </td>
</tr>
<!--<tr>
	<td>
    	評價限制
    </td>
    <td>
    	<input type="text" id="lowest_record" name="lowest_record" size="10"><FONT SIZE=2>以上  </FONT><FONT color="#FF0000" SIZE=2>才可對商品出價</FONT>
    </td>
</tr>-->
<tr>
	<td>
    	購買憑證
    </td>
    <td>
    	<input type="file" id="pop" name="pop" value="上傳">
        <input type="hidden" name="mzx_file_size" value="512000"><FONT color="#FF0000" SIZE=1>最大不可超過5M</FONT>

    </td>
</tr>
<tr>
	<td>
    	購買日期
    </td>
    <td>
    	<input type="date" id="c_date" name="c_date">
    </td>
</tr>
    
</table>
</form>
   </div>
 </div>
</div>


</body>
</html>