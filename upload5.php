 <html>
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>圖檔上傳處理</title></head>
 <body><?
 include("errorreport.php");
 $uploaddir="./upload/";
 $tmpfile=$_FILES["userfile"]["tmp_name"];
 $file2=mb_convert_encoding($_FILES["userfile"]["name"],"big5","utf8");
 if (($_FILES["userfile"]["type"] == "image/gif") || ($_FILES["userfile"]["type"] == "image/jpeg"))
  {
  if (move_uploaded_file($tmpfile,$uploaddir.$file2))
    {	
   echo "上傳成功<br>";
   echo "檔案名稱：".$_FILES["userfile"]["name"]."<br>";
   echo "檔案類型：".$_FILES["userfile"]["type"]."<br>";
   echo "檔案大小：".($_FILES["userfile"]["size"] / 1024) . " Kb<br>";
    }
  else
    {
     echo "上傳失敗!<br> ";
     errorreport($_FILES["userfile"]["error"]);
    } 
  }
 else
  {
   echo $_FILES["userfile"]["type"];
   echo "不合法檔案";
  }
 ?> </body></html>