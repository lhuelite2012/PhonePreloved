<?PHP ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
c{
	font-size:18px;
	font-family:"微軟正黑體";
}
d{
	font-size:24px;
	font-family:"微軟正黑體";
	font-weight:800;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>
</head>
<body>
<?PHP //include("main.php");
include("loginConfirm.php"); 
?>
<FORM name="form1" action="report0.php" method="post">
<table>
<tr>
	<td>
		<font size="3"><d>檢舉拍賣商品：</d></font>
	</td>
    <td>
    	<?PHP
		include("server.php");
		$query="select c_name from commodity where c_number ='".$_POST['c_number']."'";
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
		echo $row['c_name'];
		$_SESSION['report_count'] = $row['report_count'];
		$_SESSION['c_number'] = $_POST['c_number'];
		?>
        <c><input type="hidden" name="c_number" value="<?PHP echo $_POST['c_number']; ?>" /></c>
    </td>
</tr>
<tr>
	<td colspan="2">
		<br />
	</td>
</tr>
<tr>
	<td colspan="2">
<c>請以守望相助的心理來檢舉商品，以共同來維護交易環境。</c><br />
	</td>
</tr>
<tr>
	<td colspan="2">
		<br />
	</td>
</tr>

<tr>
	<td colspan="2">
<font size="3"><d>注意事項：</d></font>
	</td>
</tr>

<tr>
	<td colspan="2">
		<br />
	</td>
</tr>
<tr>
	<td colspan="2"><c>
&nbsp;&nbsp;&nbsp;&nbsp;1.會員條件：評價必須<font color="#FF0000">大於1</font>者才可提出檢舉。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2.檢舉方法：選擇"檢舉項目"與填寫"檢舉意見"。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3.注意事項：經過後端管理者省裡過後若屬實，且<font color="#FF0000">遭不同帳號檢舉3次</font>以上，則取消商品<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;刊登及拍賣紀錄，若檢舉不符，商品能可繼續刊登。</c><br />
	</td>
</tr>

<tr>
	<td colspan="2">
		<br />
	</td colspan="2">
</tr>
<tr>
	<td colspan="2">
		<br />
	</td>
</tr>
<tr>
	<td colspan="2">
		<br />
	</td>
</tr>

<tr>
	<td>
		檢舉項目
	</td>
    <td>
<?PHP
include('server.php');
$query="select * from report_project";
$result = mysql_query($query);
$num_result = mysql_num_rows($result);
echo "<select name='p_number' size='1'>";
?><option value="0">請選擇</option><?PHP
for($i=0;$i<$num_result; $i++)
{
    	$row=mysql_fetch_array($result);
    	echo "<option value='" . $row['p_number'] ." '>" . $row['p_name'] . "</option>\n";
}
echo "</select>";
?>
    </td>
</tr>

<tr>
	<td>
		檢舉意見
	</td>
	<td>
		<textarea id="c_description" name="c_description" rows="10" cols="50"></textarea>
	</td>
</tr>
<tr>
	<td>
		請輸入驗證碼：<input type="text" id="test" name="test" size="11" />
    </td>
    <td>
    <img src="captcha_.php" alt="show image" id="rand-img">
	<a href="javascript:void(0)" id="reload-img">重新取得驗證碼</a><br />
	</td>
<tr>
	<td colspan="2">
    	<center><input type="submit" id="Submit1" name="Submit1" onclick="return report()" value="送出">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="	
cancel" name="
cancel" onchange="javascript:history.back(1)" value="取消"></center>

	</td>
</tr>
<?PHP
$query="select total from members where account ='".$_SESSION['account']."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$a = $row['total'];
$total = $a / 200 ;
$_SESSION['total'] = $total;
?>
</table>
</FORM>
<script type="text/javascript">
function report(){
		if( confirm ("確定要檢舉?") ) {
			document.form1.submit1.submit(); 　					//未設定連結
		}
  		else{
			location.href ='./commodity.php?c_number=<?PHP echo $_POST['c_number']?>';
		}
	}
</script>
 <script language="javascript">
(function(){
// 重新載入圖形的函數，適用於任何圖形
var reloadImg = function(dImg) {
     // 取得圖形原本的來源 url
     var sOldUrl = dImg.src;
     // 在原本的 url 後面加上亂數的參數，變成新的 url
     var sNewUrl = sOldUrl + "?rnd=" + Math.random();
    //將圖形的來源改為新的 url，就會重新載入圖形了
     dImg.src = sNewUrl;
};
 
// 取得重新載入的超連結元素
var dReloadLink = document.getElementById("reload-img");
 
// 取得驗證碼圖形元素
var dImg = document.getElementById("rand-img");
 
// 定義這個超連結的 onclick 事件
dReloadLink.onclick = function(e) {
      // 呼叫函數重新載入驗證碼圖形
      reloadImg(dImg);
      //停止事件預設的動作，也就是不要跳到超連結的網址
      if(e) e.preventDefault();
      return false;
};
})();
</script>
</body>
</html>