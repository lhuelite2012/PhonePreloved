<?
 function errorreport($a)
  {
     switch ($a){
   case 1:
     echo "失敗原因：大小超過php.ini內設定 upload_max_filesize"."<br>";
     break;
   case 2:
     echo "失敗原因：大小超過表單設定 MAX_FILE_SIZE"."<br>";
     break;
  case 3:
    echo "失敗原因：上傳不完整"."<br>";
    break;
  case 4:
    echo "失敗原因：沒有檔案上傳"."<br>";
    break;
  case 6:
    echo "失敗原因：暫存資料夾不存在"."<br>";
    break;
  case 7:
    echo "失敗原因：上傳檔案無法寫入"."<br>";
    break;
  case 8:
    echo "失敗原因：上傳停止"."<br>";
    break;	 
    }
  }
  ?>