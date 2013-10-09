<?PHP
session_start();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="all.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="./css/素材/icon.png" />
<title>瘋二手 Phone Preloved</title>
<style>
#ap {
	display:inline-block;
	position:absolute;
	width:250px;
	height:555px;
	z-index:6;
	left: 12px;
	top: 165px;
	margin: 0 auto;
}/*上架1 圖片*/

#apDiv{
	display:inline-block;
	position:absolute;
	width:849px;
	height:423px;
	z-index:7;
	left: 77px;
	top: 130px;
	margin: 0 auto;
}
</style>

</head>


<body >
<?PHP include("main.php");
include("loginConfirm.php"); 
 $_SESSION['added'] = "0";
?>
<div id=ce2>
<div id="ap"><img src="素材/上架1.png" width="978" height="557" alt="上架1" />
  <div id="apDiv">
     <FORM name="form1" action="added_2.php" method="post">
<table width="818" height="370">
<tr> 
<td width="100" height="337" align="left">
<select id="c_gender" name="c_gender" size="7" onChange="redirect(this.options.selectedIndex)" style="font-size:36px; background:#FFFFFF; color:#000000; font-family:'微軟正黑體'; width:150px; height:300px">
	<option value="男" selected="selected">男  </option>
	<option value="中性">中性 </option>
	<option value="女">女  </option>
</select>
</td>
<td width="80"></td>
<td width="100"><select id="s_name" name="s_name" size="7" onChange="redirect1(this.options.selectedIndex)" style="font-size:36px; background:#FFFFFF; color:#000000; font-family:'微軟正黑體'; width:150px; height:300px">
  <option value="上衣"  selected="selected">上衣  </option>
	<option value="褲子" >褲子　　</option>
	<option value="包包" >包包　　</option>
    <option value="鞋子" >鞋子　　</option>
</select>
</td>
<td width="80"></td>
<td width="100">
<select id="s_fsort" name="s_fsort" size="7" onChange="redirect2(this.options.selectedIndex)" style="font-size:36px; background:#FFFFFF; color:#000000; font-family:'微軟正黑體'; width:150px; height:300px">
	<option value="長袖"  selected="selected">長袖  </option>
	<option value="短袖" >短袖　　</option>
	<option value="背心" >背心　　</option>
</select>
</td>
<script>

var groups=document.form1.c_gender.options.length
var group=new Array(groups)
for (i=0; i<groups; i++)
group[i]=new Array()

group[0][0]=new Option("上衣");
group[0][1]=new Option("褲子");
group[0][2]=new Option("包包");
group[0][3]=new Option("鞋子");

group[1][0]=new Option("上衣");
group[1][1]=new Option("褲子");
group[1][2]=new Option("包包");
group[1][3]=new Option("鞋子");

group[2][0]=new Option("上衣");
group[2][1]=new Option("褲子");
group[2][2]=new Option("洋裝"); 
group[2][3]=new Option("包包");
group[2][4]=new Option("鞋子");  

var temp=document.form1.s_name


function redirect(x){
for (m=temp.options.length-1;m>0;m--)
temp.options[m]=null
for (i=0;i<group[x].length;i++){
temp.options[i]=new Option(group[x][i].text,group[x][i].value)
}
temp.options[0].selected=true
redirect1(0)
}



var secondGroups=document.form1.s_name.options.length
var secondGroup=new Array(groups)
for (i=0; i<groups; i++)  {
secondGroup[i]=new Array(group[i].length)
for (j=0; j<group[i].length; j++)  {
secondGroup[i][j]=new Array()  }}

secondGroup[0][0][0]=new Option("長袖");
secondGroup[0][0][1]=new Option("短袖");
secondGroup[0][0][2]=new Option("背心");
secondGroup[0][1][0]=new Option("長褲");
secondGroup[0][1][1]=new Option("短褲");
secondGroup[0][2][0]=new Option("手拿包");
secondGroup[0][2][1]=new Option("斜背包");
secondGroup[0][2][2]=new Option("後背包");
secondGroup[0][3][0]=new Option("籃球鞋");
secondGroup[0][3][1]=new Option("跑步鞋");
secondGroup[0][3][2]=new Option("休閒鞋");

secondGroup[1][0][0]=new Option("長袖");
secondGroup[1][0][1]=new Option("短袖");
secondGroup[1][0][2]=new Option("背心");
secondGroup[1][1][0]=new Option("長褲");
secondGroup[1][1][1]=new Option("短褲");
secondGroup[1][2][0]=new Option("手拿包");
secondGroup[1][2][1]=new Option("斜背包");
secondGroup[1][2][2]=new Option("後背包");
secondGroup[1][3][0]=new Option("籃球鞋");
secondGroup[1][3][1]=new Option("跑步鞋");
secondGroup[1][3][2]=new Option("休閒鞋");

secondGroup[2][0][0]=new Option("長袖");
secondGroup[2][0][1]=new Option("短袖");
secondGroup[2][0][2]=new Option("背心");
secondGroup[2][1][0]=new Option("長褲");
secondGroup[2][1][1]=new Option("短褲");
secondGroup[2][2][0]=new Option("長洋裝");
secondGroup[2][2][1]=new Option("短洋裝");
secondGroup[2][3][0]=new Option("手拿包");
secondGroup[2][3][1]=new Option("斜背包");
secondGroup[2][3][2]=new Option("後背包");
secondGroup[2][4][0]=new Option("籃球鞋");
secondGroup[2][4][1]=new Option("跑步鞋");
secondGroup[2][4][2]=new Option("休閒鞋");
secondGroup[2][4][3]=new Option("高跟鞋");
secondGroup[2][4][4]=new Option("平底鞋");

var temp1=document.form1.s_fsort
function redirect1(y){
for (m=temp1.options.length-1;m>0;m--)
temp1.options[m]=null
for (i=0;i<secondGroup[document.form1.c_gender.options.selectedIndex][y].length;i++){
temp1.options[i]=new Option(secondGroup[document.form1.c_gender.options.selectedIndex][y][i].text,secondGroup[document.form1.c_gender.options.selectedIndex][y][i].value)
}
temp1.options[0].selected=true
}

</script>


<td style="text-align:right">
<input type="image" img src="素材/按鈕-下一步.png" width="80" height="180"  onclick="document.formname.submit()" />
</td>
</tr>
</table>
     </FORM>

  </div>
  
   
</div>
</div>
</body>
</html>
<?php include("deleteCommodity.php");?>