<html>
<body>
<form method="get">
A:<input type="text" name="val1"/>
<br>
B:<input type="text" name="val2" />
<br>
C:<input type="text" name="val3" />
<br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
#Find the largest of three numbers entered by the user.
$a=$_REQUEST['val1'];
$b=$_REQUEST['val2'];
$c=$_REQUEST['val3'];

if ($a>$b && $a>$c)
{ 
 echo"A is largest";
}
else if ($b>$a && $b>$c)
{ 
  echo"B is largest";
}
 else
{ 
 echo"C is largest";
}
?>