<html>
<body>
<form method="get">
LENGTH:<input type="text" name="len"/>
<br>
WIDTH:<input type="text" name="wid" />
<br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
#Calculate the area of a rectangle given its length and width.
$length=$_REQUEST['len'];
$width=$_REQUEST['wid'];
$rectangle=$length*$width;
echo "The area of rectangle: ".$rectangle;
?>