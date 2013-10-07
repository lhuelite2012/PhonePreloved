<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
	#hmenu1{
		height:42px;
		overflow: hidden;
	}
	#hmenu11,#hmenu22,#hmenu33{
		position:relative;
		height: 100px;
		float:left;
	}
</style>
</head>

<body>
<div id="hmenu1">
	<a href="display.php"><div id="hmenu11"><img src="素材/購物列2.png" /></div></a>
    <a href="added_1.php"><div id="hmenu22"><img src="素材/我要賣東西列2.png" /></div></a>
    <a href="#"><div id="hmenu33"><img src="素材/會員互動區列2.png" /></div></a>
</div>
</body>
</html>
<script type="text/javascript" src="jQuery/jquery-latest.min.js"></script>
<script type="text/javascript">
	$(function(){
			$('#hmenu1 div').hover(function(){
				// 讓 $caption 往上移動
				$(this).stop().animate({
					top: "-45px"
				}, 200);
			}, function(){
				// 讓 $caption 移回原位
				$(this).stop().animate({
					top:  "0px"
				}, 200);
			});
	});
</script>