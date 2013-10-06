<?php
	session_start();
 include("main.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>登入</title>
    <style type="text/css" >
		#date{
			position:absolute;
			left:50%;
			margin-left:-250px;
			width:500px;
			top:100px;
		}
		#form{
			position:absolute;
			top:150px;
			left:50%;
			margin-left:-200px;
		}
	</style>    <link rel="stylesheet" type="text/css" href="all.css" />
</head>
<body>

<script type="text/javascript" src="imageScaling.js"></script>
  <div id="ce2">
    <div id="date">
    <img src="素材/登入畫面.png" onload='javascript:DrawImage(this,450,455)'>
    	<div id="form">
        <form action="login_.php?" method="POST" name="formname">
            <table border="0">
            	<tr>
            		<td>登入帳號：</td>
            		<td colspan="2"><input type="text" name="account" size="25" placeholder="PhonePreloved@gmail.com"></td>
            	</tr>
            	<tr>
            		<td>登入密碼：</td>
            		<td colspan="2"><input type="password" name="password"> </td>
            	</tr>
        		<tr>
                	<td>
                    <?php if(isset($_GET['c_number'])){?>
                    	<input type="hidden" name="c_number" value="<?php echo $_GET['c_number']; ?>" />
                    <?php }?>
                    	<input type="image" src="素材/按鈕-送出.png"   onload='javascript:DrawImage(this,50,50);' onclick="document.formname.submit()" />
                        <a href="javascript:document.formname.reset()"><img src="素材/忘記密碼-取消鈕.png"   onload='javascript:DrawImage(this,50,50);'/>
                     	</a>
                    </td>
                    <td><a href="#" title="忘記密碼">忘記密碼</a></td>
                    <td><a href="register.php">註冊會員</a></td>
                </tr>
            </table>   
         </form>
        </div>
    </div>
  </div>
 </body>
</html>
