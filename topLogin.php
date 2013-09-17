<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="all.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./素材/icon.png"> 
<title>瘋二手 PhonePreloved</title>

</head>
<body>
<?php

	if(isset($_SESSION['m_number']))
	{
?>
		<div id="apDiv11"><img src="素材/右上白底1.png" width="137" height="38" alt="c1" />
  			<div id="apDiv15"><?php echo $_SESSION['name']; ?></div>
    		<div id="apDiv16"><a href="logout.php">登出</a></div>
    		<div id="apDiv19"><a href="member.php"><img src="素材/右上我的帳號.jpg"</a></div>
		</div>
<?php
	}
?>
	 <div id="containerTop">
		<div id="logo">
            <a href="index.php">
				<img src="素材/NEW ! LOGO.png" width="265" height="100" alt="logo" />
            </a>
        </div>
		<div id="black">
        	<img src="素材/黑.png" width="493" height="44" alt="black" />
    		<div id="apDiv7"><a href="display.php">購物</a></div>
    		<div id="apDiv8"><a href="http://10.59.1.66/css/added_1.php">我要賣東西</a></div>
    		<div id="apDiv9">會員互動區</div>
    		<div id="apDiv18"></div>  
		</div>
		<div id="line">
        	<img src="素材/綠色分隔線.png" width="941" height="14" alt="line" />
        </div>
     </div>
</body>
</html>