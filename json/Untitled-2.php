<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script src="../jquery1.2.6.js" type="application/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
	$(function(){
		$('.nice_choice').hover(
			function(){
				$(this).animate({boxShadow: '0 0 10px #6B8E23'},"slow");
			}
			,
			function(){
				$(this).animate({boxShadow: '0 0 0px'},"slow");
			}
		);
	});
</script>
<style type="text/css">
	.nice_choice {
		background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #EBEBEB));
		width: 260px;   /*寬260*/
		height: 290px;	/*高290*/
		float: left;	/*水平排列*/
		margin: 20px 0px 10px 10px;
		position: relative;
		text-align: center;
		border-radius: 10px 10px 10px 10px;
	}
</style>
<title>無標題文件</title>
</head>
<div class='nice_choice'>
123
</div>
<body>
</body>
</html>