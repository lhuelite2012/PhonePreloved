<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
#hmenu {
	position:relative;
	padding: 0 45px;
	list-style: none;
	width: 500px; /* 630-45*2 */
	height: 100px;
	margin-left: auto;
	z-index: 20;
	left: -100px;
	top:-37px;
	}
	#hmenu li {
		float:left;
		margin: 77px 0px 0 0;
	}
	#hmenu li a {
		display:block;
		width:134px; /* 圖片的寬 */
		height: 44px; /* 圖片的高/2 */
		line-height: 31px;	/* ie suck */
		text-indent: -9999px;
	
	}
	#hmenu a.b1 {
		background:url(%E7%B4%A0%E6%9D%90/%E8%B3%BC%E7%89%A9%E5%88%972.png);
		width:105px;	


	}
	#hmenu a.b2 {
		background:url(%E7%B4%A0%E6%9D%90/%E6%88%91%E8%A6%81%E8%B3%A3%E6%9D%B1%E8%A5%BF%E5%88%972.png);
		width:152px;
		
	}	
	#hmenu a.b3 {
		background:url(%E7%B4%A0%E6%9D%90/%E6%9C%83%E5%93%A1%E4%BA%92%E5%8B%95%E5%8D%80%E5%88%972.png);
		width:152px;
	}
	
</style>
</head>

<body>
<ul id="hmenu">
		<li><a href="display.php" class="b1">購物</a></li>
		<li><a href="added_1.php" class="b2">我要賣東西</a></li>
		<li><a href="#" class="b3">會員互動區</a></li>
		
</ul>
</body>
</html>

<script type="text/javascript">
	$(function(){
		// 幫 #hmenu li a 加上 hover 事件
		$("#hmenu li a").hover(function(){
			// 滑鼠移進選項時..
			// 把背景圖片的位置往上移動
			var _this = $(this),
				_height = _this.height() * -1+3;
			_this.stop().animate({
				backgroundPosition: "0px " + _height + "px"
			}, 200);
		}, function(){
			// 滑鼠移出選項時..
			// 把背景圖片的位置移回原位
			$(this).stop().animate({
				backgroundPosition: "0px 0px"
			}, 200);
		});
		
		var push_total = <?php echo $push_total[0];?>
		
		if(push_total > 0){
			$("#pushbox").css("background","url(%E7%B4%A0%E6%9D%90/icon.png)");
			$("#pushbox").css("background-repeat","no-repeat");
			$("#pushTotal").css("display","block");
		}
		
		//已讀取
		$("#pushbox").click(function(){
			 $(this).load("push/pushTrue.php",{"m_number":"<?php echo $m_number;?>"});
			 $(this).css("background","url(%E7%B4%A0%E6%9D%90/icon2.png)");
			 $(this).css("background-repeat","no-repeat");
			 $("#pushTotal").hide(); //消失
		});
	});
</script>