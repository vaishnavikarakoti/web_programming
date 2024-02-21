<?php
date_default_timezone_set("asia/kolkata");

$a=date('d-m-Y');
$b=date('h');
$c=date('i');
$d=date('s');

echo $a;

echo "<br>";

echo"<html>
<style>
body{color:white;}
#d
{
	background-color:maroon;
	color:red;
}
</style>
<body>
<table bgcolor='black' border='1' cellspacing='2' cellspacing='2'>

<tr>
<td><div id='d'>$b</div></td>
<td><div id='d'>$c</td>
<td><div id='d'>$d</td>
</tr>
<tr>

<tr>
<td>hours</td>
<td>mins</td>
<td>seconds</td>
</tr>
<tr>

</table>
</font>
</body>
</html>"
?>