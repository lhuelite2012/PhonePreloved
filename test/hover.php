
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="zh-tw">
<head>
<meta name="Generator" content="EditPlus">
<meta name="Author" content="男丁格爾's 脫殼玩">
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<title>滑出式說明描述</title>
<style type="text/css">
	.abgne_tip_gallery_block {
		margin: 0;
		padding: 0;
		width: 350px;
		height: 300px;
		overflow: hidden;
		position: relative;
	}
	.abgne_tip_gallery_block img {
		position: absolute;
		border: 0;
	}
	.abgne_tip_gallery_block .caption {
	position: absolute;
	top: 0px;	/* .abgne_tip_gallery_block 的高 - 想顯示 title 的高(這邊是設 55) */
	width: 291px;	/* .abgne_tip_gallery_block 的寬 - .caption 的左右 padding */
	padding: 15px 30px 20px;
	cursor: pointer;
	color: #fff;
	background: url(1px_black.png) repeat;
	left: 1px;
	height: 300px;
	opacity: 1;
	}
	.abgne_tip_gallery_block .caption h2 {
		margin: 0;
		padding: 0px 0px 15px;
	}
	.abgne_tip_gallery_block .caption h2 a {
		text-decoration: none;
		color: #fc6; 
	}
	.abgne_tip_gallery_block .caption h2 a:hover {
		text-decoration: underline;
	}
</style>
<script type="text/javascript">
	$(function(){
		// 預設標題區塊 .abgne_tip_gallery_block .caption 的 top
		var _titleHeight = 55;
		$('.abgne_tip_gallery_block').each(function(){
			// 先取得區塊的高及標題區塊等資料
			var $this = $(this), 
				_height = $this.height(), 
				 $caption = $('.caption', $this),
				_captionHeight = $caption.outerHeight(true),
				_speed = 200;
			
			// 當滑鼠移動到區塊上時
			$this.hover(function(){
				// 讓 $caption 往上移動
				$caption.stop().animate({
					top: _height - _captionHeight
				}, _speed);
			}, function(){
				// 讓 $caption 移回原位
				$caption.stop().animate({
					top: _height - _titleHeight
				}, _speed);
			});
		});
	});
</script>
</head>

<body>
	<br />

	<div class="abgne_tip_gallery_block">
		<a href="#"><img src="../commodity/003.jpg" align="" width="350px" title="" alt="" /></a> 
		<div class="caption">
			<h2><a href="#" title="價格">300</a></h2>
			<div class="desc">
				簡單的摘要描述內容，可放入任何 html 資料在此處。
			</div>
		</div>
</div>
</body>
</html>