<?php
	header("Cache-Control:no-cache");
	include("server.php");
	
	
	$account = $_GET['user_name'];
	if(validateMail($account)){
	$sq1l = "select * from members where account = '$account'";
	$result2 = mysql_query($sq1l);
	$true = mysql_num_rows($result2);
	if($true == 0)
		echo "<font color='#3399FF'>可使用此信箱</font>";
	else
		echo "<font color='#FF0000'>此信箱已註冊過</font>";
	}
	
	
	function validateMail($mail) { 
  		if($mail !== "") { 
  			if(ereg("^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$", $mail)) { 
    			return true; 
    		}else{ 
      			return false; 
    		}
  		}else{ 
   			 return false; 
  			} 
		}
	
?>