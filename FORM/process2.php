<?php
$name=$_REQUEST['nm'];
$address=$_REQUEST['adr'];
$contact=$_REQUEST['cn'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
//$hobbies=$_REQUEST['hobbies'];
//$eat=$_REQUEST['eat'];

echo"My name is $name"."<br>";
echo"My address is $address"."<br>";
echo"My contact number is $contact"."<br>";
echo"My age is $age"."<br>";

//hobbies
if(isset($_REQUEST['read']))
{
	echo$_REQUEST['read'];
}
if(isset($_REQUEST['crick']))
{
	echo$_REQUEST['crick'];
}
if(isset($_REQUEST['ch']))
{
	echo$_REQUEST['ch'];
}
if(isset($_REQUEST['out']))
{
	echo$_REQUEST['out'];
}
//Eat
if(isset($_REQUEST['eat']))
{
	foreach($_REQUEST['eat'] as $i)
	{
		echo "<br>".$i;
	}
	
}
?>