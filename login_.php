<?php session_start(); ?>

<!DOCTYPE html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("server.php");

$id = $_POST["account"];
$pw = $_POST["password"];

$sql = "SELECT * FROM members where account = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_array($result);

if(!isset($id) or !isset($pw))
{
?>
	<script>
		window.alert('請登入會員');
		location.href = './login.php';
	</script>
<?php
}
if($id == "")
{
?>	
	<script>
		window.alert('請輸入帳號');
		location.href = './login.php';
	</script>
<?php	
}
if($pw == "")
{
?>	
	<script>
		window.alert('請輸入密碼');
		location.href = './login.php';
	</script>
<?php	
}
	if($row[1] == $id and $row[2]==$pw)
	{
		$_POST['c_number'];
		$_SESSION['account'] = $row[1];
        $_SESSION['m_number'] = $row[0];
		$_SESSION['m_name'] = $row[3];
		$_SESSION['total'] = $row['total'];
		if(isset($_POST['c_number']))  //如果是從商品頁面登入的話﹐就跳回此商品頁面
		{
			$c_number = $_POST['c_number'];
?>
			<script>
				window.alert('登入成功');
				location.href = "./commodity.php?c_number=<?php echo $c_number; ?>";
			</script>
<?php
        }
		else{
?>
			<script>
			window.alert('登入成功');
			location.href = "./index.php";
			</script>
<?php		}
	}
	else
	{
       ?>	
			<script>
				window.alert('帳號密碼錯誤');
				location.href = './login.php';
			</script>
		<?php	

	}
	mysql_free_result($result);   //刪除執行$result 結果
	mysql_close();						//關閉MySQL伺服器連結
?>