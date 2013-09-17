<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include("server.php");
$id	=	$_POST['account']	;
$pw	=	$_POST['password']	;
$name	=	$_POST['name']	;
$gender	=	$_POST['gender']	;
$birthday	=	$_POST['birthday']	;
$phone	=	$_POST['phone']	;
$daitoutie	=	$_POST['file']	;    //資料庫 沒有這個欄位
$height	=	$_POST['height']	;
$clothes_size	=	$_POST['clothes_size']	;
$bust	=	$_POST['bust']	;
$waistline	=	$_POST['waistline']	;
$hips	=	$_POST['hips']	;
$shoulder	=	$_POST['shoulder']	;
$shoes_size	=	$_POST['shoes_size']	;
$b_number = $_POST['b_number'];
$shoes_size2 = $_POST['shoes_size2'];

//加入時間
$time_sql = "SELECT NOW()";
$time_query = mysql_query($time_sql);
$time_row = mysql_fetch_row($time_query);
$addtime = $time_row[0];

$sql_query="INSERT into members (account,password,name,gender,birthday,phone,height,clothes_size,bust,waistline,hips,shoulder,shoes_size,shoes_size2,m_addtime) values ('$id','$pw','$name','$gender','$birthday','$phone','$height','$clothes_size','$bust','$waistline','$hips','$shoulder','$shoes_size','$shoes_size2','$addtime')";

if($query = mysql_query($sql_query))  //新增完後 找出他們會員編號
{
	$sql2="select m_number from members where account='$id'";
	$query2= mysql_query($sql2);
	$rows = mysql_fetch_array($query2); 
	$_SESSION['m_number'] = $rows['m_number'];

	//新增至本會員的偏愛品牌內
	$sql_query2="INSERT into p_brand (m_number,b_number) 
	VALUES ('".$rows["m_number"]."','".$_POST['b_number']."')";
	$insert = mysql_query($sql_query2);

	foreach($_POST["colors"] as $value)
	{
		$sql_query3="INSERT into p_color (m_number,colors_number) VALUES ('".$rows["m_number"]."','$value')";//把colors被選取項目存在value字串裡
		mysql_query("set names utf8");
		mysql_query($sql_query3);
		
	}
	?>
    	<script>
			window.alert('註冊成功');
			location.href = './member.php';
		</script>
    <?php
}
?>

</body>
</html>