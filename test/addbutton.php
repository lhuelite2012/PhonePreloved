<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<script type="text/javascript" src="../jquery1.2.6.js">
</script>
<script>
$(document).ready(function(){
  $("#add_button").click
  (
    function()
    {
      $("#add_file_button").append('<input type="file" name="f[]">&nbsp;檔案名稱：<input type="text" name="file_show_name[]" value="" size="32" maxlength="64"><br />');      
    }
  );
  $("a[id='del_file[]']").click(function(){
      if (confirm('確定刪除檔案')) {
        return true;
      }
      return false;
  });    
});
</script>
<body>
  <form name="fileuploadexample2" method="POST" enctype="multipart/form-data" action="">
     <input type="button" id="add_button" name="add_button" value="增加附加檔案">
  <div id="add_file_button">
  </div>
    <input type="file" name="f[]">&nbsp;檔案名稱：<input type="text" name="file_show_name[]" value="" size="32" maxlength="64"><br />
   <input type="submit" name="submit" value="Submit" />
  </form>
 </body>
</html>
