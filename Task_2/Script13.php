<html>
<body>
<form method="get">
Enter Celsius:<input type="text" name="cel"/>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
#convert temperature from Celsius to Fahrenheit using the formula (C × 9/5) + 32.
$celsius=$_REQUEST['cel'];
$far=(($celsius*9)/5)+32;
echo"Tempreature in Fahrenheit ->".$far;
?>
