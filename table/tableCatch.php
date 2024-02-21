<?php
$myval1=$_REQUEST['val1'];
$myval2=$_REQUEST['val2'];
echo "<table>";

for($i=$myval1;$i<=$myval2;$i++)
{

   for($j=1;$j<=10;$j++)
   {
      $tab=$i*$j;
	  echo "<tr>
	  <td>$i</td>
      <td>*</td>
	  <td>$j</td>
	  <td>=</td>
	  <td>$tab</td>
	  </tr>";
   }
}
echo"TABLE";
?>