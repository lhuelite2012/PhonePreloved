<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../jquery1.2.6.js"></script>
<title>無標題文件</title>
</head>
<style type="text/css">
	#sortmenu{
		position:relative;
		width:150px;
		height:400px;
		background:#F6F6E6;
		border-radius:5px 5px 5px 5px;
		border-style:solid;
		border-width:1px;
		border-color:#CCC;
	}
	#kind{
		margin:10px 12px ;
		position:relative;
		width:120px;
		height:50px;
		background:#FFF;
		border-radius:5px 5px 5px 5px;
		border-style:solid;
		border-width:1px;
		border-color:#CCC;
	}
	#kind2{
		margin:10px 12px ;
		position:relative;
		width:120px;
		height:50px;
		background:#FFF;
		border-radius:5px 5px 5px 5px;
		border-style:solid;
		border-width:1px;
		border-color:#CCC;
	}
</style>
<body>
	<div id="sortmenu">
    	<div id="kind">
        	分類
        </div>
        <div id="kind2">
        	分類
        </div>
    </div>
</body>
</html>
<script>
	$().ready(function() {
        $("#kind").click(function(){
			$(this).load("testAjax.php");
		});
		$("#kind").bind(function(){
			$(this).css("background",'#FFF');
		});
        $("#kind2").click(function(){
			$(this).css("background",'#999');
		});
    });
</script>