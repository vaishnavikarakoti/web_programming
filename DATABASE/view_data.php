<?php
$connect=mysqli_connect("localhost","root","","students");

$my_q="SELECT * FROM `stud_detail`";

$execute_q=mysqli_query($connect,$my_q);

//TO EXECUTE ONLY ROWS IN PHP
$num=mysqli_num_rows($execute_q);


echo"<table border=1> <tr> <td>ID</td> <td>NAME</td> <td>CITY</td> <td>MOBILE</td> </tr>";
for($i=1;$i<=$num;$i++)
{
	$fetch=mysqli_fetch_row($execute_q);
	
	echo"<tr> <td>$fetch[0]</td> <td>$fetch[1]</td> <td>$fetch[2]</td> <td>$fetch[3]</td> </tr>";
}

echo"</table>";
?>