<?PHP
 function errorreport($a)
  {
     switch ($a){
   case 1:
     "失敗原因：大小超過php.ini內設定 upload_max_filesize";
     break;
   case 2:
     "失敗原因：大小超過表單設定 MAX_FILE_SIZE";
     break;
  case 3:
    "失敗原因：上傳不完整"."<br>";
    break;
  case 4:
    "失敗原因：沒有檔案上傳";
    break;
  case 6:
    "失敗原因：暫存資料夾不存在";
    break;
  case 7:
    "失敗原因：上傳檔案無法寫入";
    break;
  case 8:
    "失敗原因：上傳停止"."<br>";
    break;	 
    }
  }
  ?>