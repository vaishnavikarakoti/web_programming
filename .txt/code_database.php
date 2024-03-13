<?php
$id=$_REQUEST['id'];
$name=$_REQUEST['nm'];
$city=$_REQUEST['ct'];
$mobile=$_REQUEST['mob'];

//TO CONNECT
$connect=mysqli_connect("localhost","root","","students");
//print_r($connect);

$query="INSERT INTO `stud_detail`(`id`, `name`, `city`, `mobile`) VALUES ('$id','$name','$city','$mobile')";
// TO print
// print_r($query);

//TO EXECUTE THE QUERY
$execute_q=mysqli_query($connect,$query);

?>