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

  if ($n == 0 || $n == 1)
  {
    $flag = 1;
  }
  
  for ($i = 2; $i <= $n / 2; $i++) 
  {
   if ($n % $i == 0)
   {
      $flag = 1;
      break;
    }
  }

 
  if ($flag == 0)
 {   
    echo "is a prime number : $n" ;
  }
  else
  {
  echo " is not a prime number : $n";

  return 0;
  }

?>
