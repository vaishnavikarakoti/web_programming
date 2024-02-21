<html>
<body>
   <form method="post">
       Write text here:<textarea  name="sentence"></textarea>
       
 
     <input type="submit" name="submit" > 
 </form>
 </body>
</html>
<?php

$text=$_REQUEST['sentence'];

    $str = strtolower($text);
  
    $len = strlen($text);
	 $coV = 0;
    $coC = 0;
	
    for ($i = 0; $i < $len; $i++)
		{
        if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {
            $coV += 1;
        } else if ($str[$i] >= 'a' && $str[$i] <= 'z') {
            $coC += 1;
        } else {
        }
    }
    echo "Number of Vowels is $coV \n";
    echo "Number of Consonants is $coC ";

?>
