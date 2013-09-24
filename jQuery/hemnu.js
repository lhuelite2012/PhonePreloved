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