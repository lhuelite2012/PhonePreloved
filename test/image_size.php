<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>


<?PHP
            if(@fopen($fileimg,"r")){ //判斷圖片是否存在
                   list($width,$height)= getimagesize($fileimg);
                                    
                   $width=$width; //取得圖片寬
                   $high=$height;//取得圖片高
                                          
                   if($width <= $high){ //直式,正方型
                        $Divisor=round($high/$sethigh,2);  //四捨五入取到小數二位
                        $width=round($width/$Divisor); //四捨五入取到整數
                        $high=$sethigh;
                   }else{  //橫式
                        $Divisor=round($width/$setwidth,2);  //四捨五入取到小數二位
                        $width=$setwidth;
                        $high=round($high/$Divisor); //四捨五入取到整數        
                          if($high > $sethigh){
                             $Divisor=round($high/$sethigh,2);
                             $width=round($width/$Divisor);
                             $high=$sethigh;
                          }            
                   }
            }else{ //圖片不存在
              $width=0;
              $high=0;
            }
?> 
</body>
</html>