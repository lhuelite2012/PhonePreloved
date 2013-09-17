$(function(){
		$('.hover').each(function(){
			var $this = $(this), 
				 $caption = $('.caption', $this);
			// 當滑鼠移動到區塊上時
			$this.hover(function(){
				// 讓 $caption 往上移動
				$caption.stop().animate({
					top:  45
				}, 200);
			}, function(){
				// 讓 $caption 移回原位
				$caption.stop().animate({
					top:  250
				}, 200);
			});
		});
});