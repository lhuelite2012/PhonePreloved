<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$uploaddir = "./commodity/display/";
$uploadfile = $uploaddir.basename($_FILES['myfile']['name']);

echo "<pre>";
if (move_uploaded_file($_FILES['myfile']['tmp_name'], iconv("utf-8", "big5", $uploadfile))) {
    echo "Upload OK \n";
} else {
    echo "Upload failed \n";
}
print_r($_FILES);
echo "</pre>";
?>