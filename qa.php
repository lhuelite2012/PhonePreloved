<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">

	#qa table{
		border:none;
		border-collapse:collapse;
	}
	.qa{
		background:#FFC;
	}
	#qa2{
		position:absolute;
		background:#FFC;
		width:1000px;
	}
	.q_answer{
		background:#F6F6F6;
	}
	#questions{
	position: absolute;
	width: 450px;
	height: 310px;
	left: 156px;
	margin: 20px;
	border-radius: 5px 5px 5px 5px ;
	background:#EAF7BD;
	}
	#questions2{
	position: absolute;
	width: 800px;

	margin: 20px;
	border-radius: 5px 5px 5px 5px ;
	background:#EAF7BD;
	}
	#su2{
		position:absolute;
		left:20px;
	}
	#answer{
		position:absolute;
	}
	#captcha{
	position: absolute;
	left: 180px;
	float: left;
	width: 84px;
	margin: -27px;
	}
</style>
</head>

<body>
<?php
			$sql = "select * from qa where c_number ='$c_number' order by q_time";
			$result = mysql_query($sql);
			$qa = 1;
?>			<div id="qa">
  			<table width="850px" height="100px">
<?php			while($row = mysql_fetch_array($result)){
				$m_sql = "select account from members where m_number = ".$row['m_number'];
				$m_result = mysql_query($m_sql);
				$m_row = mysql_fetch_row($m_result);
?>				<tr style="background:#FFF; height:10px;"></tr>
				<tr class="qa"><th width="100px" height="30px">問題 <?php echo $qa;?></th><td width="500px" align="left">發問人： <?php echo $m_row[0];?></td>
                	<td align="right">
                	</td>
                </tr>
				<tr class="qa"><td style="text-indent:20px;" align="left" colspan="2" rowspan="2" height="50px" ><?php echo $row[1]; ?></td><td height="50px"></td></tr>
                <tr class="qa"><td><?php echo $row['q_time']; ?></td></tr>               
<?php				//回答判斷------------------------------------------------------------------------------
				$q_sql = "select * from q_answer where q_number = ".$row['q_number'];
				$q_result = mysql_query($q_sql);	
				if($q_row = mysql_fetch_array($q_result)){
?>					<tr class="q_answer"><th width="100px" height="30px">賣家回覆</th><td width="500px"></td>
					<td></td>
					</tr>
					<tr class="q_answer"><td colspan="2" rowspan="2" height="20px" style="text-indent:20px;" align="left"><?php echo $q_row['qa_content']; ?></td><td height="20px"></td></tr>
                	<tr class="q_answer"><td ><?php echo $q_row['qa_time']; ?></td></tr> 
                    <tr style="background:#FFF; height:10px;"></tr>   
<?php				}else if($c_rows['m_number'] == $_SESSION['m_number']){?>
					<tr class="q_answer"><td colspan="3" align="left" style="text-indent:20px;" height="30px">我要回覆問題</td></tr>
					<tr>
                    <td class="q_answer" colspan="3" align="left" style="text-indent:20px;">
                    <form action="answer_insert.php" method="post" name="qa" onsubmit="return chktwo();">
                    	<input type="hidden" name="q_number" value="<?php echo $row['q_number'];?>" />
   	 					<textarea name="qa_content" placeholder="請在這裡填寫您要回答的內容！" style="width:720px"></textarea>
                    	<input type="submit" value="回答問題" />
                	</form>
					</td>
                    </tr>
<?php				}
				$qa ++;
			}?>
			</table>
<?php          if(isset($_SESSION['m_number'])){ 
				if($c_rows['m_number'] != $_SESSION['m_number']){?>
  				<div id="questions">
                	<p>發問問題?</p>
    			<form action="questions.php" method="post" name="qa" onsubmit="return chktwo();">
                    <input type="hidden" name="c_number" value="<?php echo $c_number;?>" />
   	 				<textarea placeholder="請在這裡填寫您想發問的問題！" cols="40" rows="5" name="q_content" style="margin: 0px; width: 400px; height: 200px;"></textarea>		
                    <div id="su2">
                    <input type="submit" value="發問問題" />
    				<input type="text" id="test" name="test" size="7" placeholder="輸入驗證碼" maxlength="7" /><div id="captcha"><img src="captcha_.php" alt="show image" id="rand-img"></div>
                    <div>
                </form>
            	</div>
<?php				}
			}else{?>
				<div id="questions2">
                登入後才可發問喔!
            	</div>
<?php			}?>
<br />
<br />
<br />
<br />
			</div>
</body>
</html>
<script type="text/javascript">
   function chktwo(){
	if(document.qa.q_content.value ==''){
      	alert('請填寫內容後才可發問');
      	document.qa.q_content.focus();
      	return false;
    }
	if(document.qa.test.value == '' ){
      alert('請輸入驗證碼');
      document.qa.test.focus();
      return false;
	}
   }
</script>