<html>
<body>
<form method="get">
Enter Value:<input type="text" name="ev"/>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
#Check whether a given number is even or odd and displays the
result.
$a=$_REQUEST['ev'];
if ($a%2==0)
{
   echo"Value is even";
}
else
{
   echo"Value is odd";
}  
?>