<html>
<body>
<form method="get">
Enter Name:<input type="textarea" name="en"/>
<br>
Enter Course:<input type="textarea" name="ec"/>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
#Concatenate two strings and display the combined result.
$name=$_REQUEST['en'];
$course=$_REQUEST['ec'];

$intro=$name. "<br>" .$course;

echo "$intro";
?>