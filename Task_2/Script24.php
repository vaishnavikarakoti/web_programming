<html>
<body>
   <form method="post">
       Number:<input type="number" name="number">
              <input type="submit" name="submit" > 
 </form>
 </body>
</html>
<?php
$n=$_REQUEST['number'];


$square=$n*$n;

echo "The square root of $n is : $square";

?>
