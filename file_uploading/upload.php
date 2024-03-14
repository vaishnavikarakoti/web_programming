<?php
$file=$_FILES['file_upload'];
print_r($file);

$dir="myfolder/";

$target=$dir.basename($_FILES['file_upload']['name']);
//echo $target;

$move= move_uploaded_file($_FILES['file_upload']['tmp_name'],$target);

?>
