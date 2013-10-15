<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="zh-tw">
<head>
<title>左右水平廣告輪播</title>
<style type="text/css">
	#abgneBlock {
		width: 940px;
		height: 400px;
		position:relative;
		overflow: hidden;
		border: 1px solid #ccc;
		top:100px;
	}
	#abgneBlock ul.list {
		padding: 0;
		margin: 0;
		list-style: none;
		position: absolute;
		width: 9999px;
		height: 100%;
	}
	#abgneBlock ul.list li {
		float: left;
		width: 940px;
		height: 100%;
	}
	#abgneBlock .list img{
		width: 100%;
		height: 100%;
		border: 0;
	}
	#abgneBlock ul.playerControl {
		margin: 0;
		padding: 0;
		list-style: none;
		position: absolute;
		bottom: 5px;
		right: 5px;
		height: 14px;
	}
	#abgneBlock ul.playerControl li {
		float: left;
		width: 10px;
		height: 10px;
		cursor: pointer;
		margin: 0px 2px;
		background: url(images/cir_ctrl.png) no-repeat -10px 0;
	}
	#abgneBlock ul.playerControl li.current { 
		background-position: 0 0;
	}
</style>
<script type="text/javascript" src="jQuery/jquery-1.5.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		// 先取得必要的元素並用 jQuery 包裝
		// 再來取得 $block 的高度及設定動畫時間
		var $block = $('#abgneBlock'),
			$slides = $('ul.list', $block),
			_width = $block.width(),
			$li = $('li', $slides),
			_animateSpeed = 600, 
			// 加入計時器, 輪播時間及控制開關
			timer, _showSpeed = 3000, _stop = false;

		// 產生 li 選項
		var _str = '';
		for(var i=0, j=$li.length;i<j;i++){
			// 每一個 li 都有自己的 className = playerControl_號碼
			_str += '<li class="playerControl_' + (i+1) + '"></li>';
		}

		// 產生 ul 並把 li 選項加到其中
		var $playerControl = $('<ul class="playerControl"></ul>').html(_str).appendTo($slides.parent()).css('left', function(){
			// 把 .playerControl 移到置中的位置
			return (_width - $(this).width() -10);
		});
		
		// 幫 li 加上 click 事件
		var $playerControlLi = $playerControl.find('li').click(function(){
			var $this = $(this);
			$this.addClass('current').siblings('.current').removeClass('current');

			clearTimeout(timer);
			// 移動位置到相對應的號碼
			$slides.stop().animate({
				left: _width * $this.index() * -1
			}, _animateSpeed, function(){
				// 當廣告移動到正確位置後, 依判斷來啟動計時器
				if(!_stop) timer = setTimeout(move, _showSpeed);
			});

			return false;
		}).eq(0).click().end();

		// 如果滑鼠移入 $block 時
		$block.hover(function(){
			// 關閉開關及計時器
			_stop = true;
			clearTimeout(timer);
		}, function(){
			// 如果滑鼠移出 $block 時
			// 開啟開關及計時器
			_stop = false;
			timer = setTimeout(move, _showSpeed);
		});
		
		// 計時器使用
		function move(){
			var _index = $('.current').index();
			$playerControlLi.eq((_index + 1) % $playerControlLi.length).click();
		}
	});
</script>
</head>

<body>
	<div id="abgneBlock">
		<ul class="list">
			<li><img src="images/new balance 1500XU 豹紋 超限量.png"></li>
            <li><img src="images/Levis長袖 純棉 無帽衛衣 男款 灰色.png"></li>
			<li><img src="images/Nike Lunar Force 1 City Pack 男 藍白5.jpg.png"></li>
			<li><img src="images/256438 BMJ1N 4077男性皮夾.png"></li>
			<li><img src="images/323190 A7M0G 1000側背手拿包.png"></li>
		</ul>
	</div>
</body>
</html>