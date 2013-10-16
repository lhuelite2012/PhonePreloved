<?PHP
session_start();
?>
<?PHP
include("main.php");
include("server.php");
include("loginConfirm.php");
include("myaccount.php");
include("commodityPath.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="all.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品問與答</title>
<style type="text/css">
table
{
	border-color:#000000;border-style:solid;border-radius:10px;
}
</style>
<script type="text/jscript" src="jQuery/imageScaling.js"></script>
</head>
<body>
<?PHP	
	//查詢會員帳號
	$u = $_SESSION["m_number"];  
	$sql = "select * from members where m_number = '$u'";
	$query = mysql_query($sql);
	$list3 = mysql_fetch_array($query);
	
	//查詢使用者問過的商品問題
	$m_number = $list3[0];
	$sql_q = "select * from qa where m_number = '$m_number'";
	$query_q = mysql_query($sql_q);
	
	//查詢使用者問過的商品問題筆數
	$row = mysql_num_rows($query_q);
?>
<div id="apDiv56"><img src="素材/我的帳號下-白底.png" width="751" height="1102" alt="我的帳號下白底" />
    <div align="center" id="apDiv68">

    <font size="5" color="#FF0000"><strong>商品問與答</strong></font>
    <p></p>
    
<?PHP
    while($list3_q = mysql_fetch_row($query_q))
	{
		
		$c_number = $list3_q[4];
		
		//查詢問題商品名稱
		$sql_c = "select * from commodity where c_number = '$c_number'";
		$query_c = mysql_query($sql_c);
		$list3_c = mysql_fetch_array($query_c);
		
		$q_number = $list3_q[0];	
		
		//查詢問題商品名稱
		$sql_q_ = "select * from q_answer where q_number = '$q_number'";
		$query_q_ = mysql_query($sql_q_);
		$list3_q_ = mysql_fetch_array($query_q_);	
?>
<form action="" method="post" name="form">
	<table align="center" width="500">
		<tr><td></td></tr>
    	<tr>
        	<td rowspan="6">　</td>
        	<td align="center" rowspan="6"><a href="commodity.php?c_number=<?PHP echo $list3_c[0]; ?>"><?PHP echo '<img src="'.$displayPathWeb.''.$list3_c[10].'" onload="javascript:DrawImage(this,120,120);"/>'?></a></td>
            <td rowspan="6">　</td>
			<th><label><font size="4" color="#880015"><strong><?PHP echo $list3_c[1]?></strong></font></label></th>
		</tr>
        <tr>
			<td><label><font size="3" color="#8080C5"><strong>發問時間：<?PHP echo $list3_q[2]?></strong></font></label></td>
		</tr>
		<tr>
            <td><label><font size="3" color="#8080C5"><strong>發問內容：<?PHP echo $list3_q[1]?></strong></font></label></td>
		</tr>
        <tr>
            <td><label><font size="3" color="#8080C5"><strong>回覆狀態：<?PHP if($list3_q[0] == $list3_q_[1]) echo 已經回覆摟;
			if($list3_q[0] != $list3_q_[1]) echo 目前未回覆?></strong></font></label></td>
		</tr>
        <tr>
            <td><label><font size="3" color="#8080C5"><strong>回覆時間：<?PHP if($list3_q[0] == $list3_q_[1]) echo $list3_q_[3];
			if($list3_q[0] != $list3_q_[1]) echo 未回覆則無回覆時間?></strong></font></label></td>
		</tr>
        <tr>
            <td><label><font size="3" color="#8080C5"><strong>回覆內容：<?PHP if($list3_q[0] == $list3_q_[1]) echo $list3_q_[2];
			if($list3_q[0] != $list3_q_[1]) echo 未回覆則無回覆內容?></strong></font></label></td>
		</tr>
        <tr><td></td></tr>
	</table>
    <br/>
<?PHP
	}
	
	if($row==0)
	{
		echo "很抱歉，您尚未發問過任何問題。";
	}
?>
</form>
</div>
</div>
</body>
</html>