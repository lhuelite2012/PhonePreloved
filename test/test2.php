<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>用 JavaScript 實現網頁圖片等比例縮放 - 圖片, 調整大小, 縮放, 等比例, </title>
</head>
<body>
<script language="JavaScript" type="text/javascript">
<!--
function DrawImage(ImgD,FitWidth,FitHeight){
	var image=new Image();
	image.src=ImgD.src;
	if(image.width>0 && image.height>0){
		if(image.width/image.height>= FitWidth/FitHeight){
			if(image.width>FitWidth){
				ImgD.width=FitWidth;
				ImgD.height=(image.height*FitWidth)/image.width;
			}else{
				ImgD.width=image.width;
				ImgD.height=image.height;
			}
		} else{
			if(image.height>FitHeight){
				ImgD.height=FitHeight;
				ImgD.width=(image.width*FitHeight)/image.height;
			}else{
				ImgD.width=image.width;
				ImgD.height=image.height;
			}
		}
	}
}
//-->
</script>

原大圖片：<br />
<img src="../commodity/002.jpg" alt="這是原大" />
縮放後的圖片：<br />
<img src="../commodity/002.jpg" alt="自動縮放後的效果" onload="javascript:DrawImage(this,300,350);" />

原大圖片：<br />
<img src="../commodity/003.jpg" alt="這是原大" /><br />
縮放後的圖片：<br />
<img src="../commodity/003.jpg" alt="自動縮放後的效果" onload="javascript:DrawImage(this,300,350);" />
</body>
</html>