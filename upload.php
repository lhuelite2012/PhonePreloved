 <html><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>檔案上傳處理</title></head>
 <body><?PHP
  $uploaddir="./www/movie/";
  $tmpfile=$_FILES["c_movie"]["tmp_name"];
  $file2=$_FILES["c_movie"]["name"];
  if(move_uploaded_file($tmpfile,$uploaddir.$file2))
   {
    echo "上傳成功<br>";
    echo "檔案名稱：".$_FILES["c_movie"]["name"]."<br>";
    echo "檔案類型：".$_FILES["c_movie"]["type"]."<br>";
    echo "檔案大小：".$_FILES["c_movie"]["size"]."<br>";
   }
  else
   {
    echo "上傳失敗!<br> ";
    echo "檔案名稱：".$_FILES["c_movie"]["name"]."<br>";
    echo "檔案類型：".$_FILES["c_movie"]["type"]."<br>";
    echo "檔案大小：".$_FILES["c_movie"]["size"]."<br>";
    echo "失敗原因：". $_FILES['c_movie']['error']."<br>";
   }
 ?></body></html>

