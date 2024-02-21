<?php
#Calculates] the sum of all numbers from 1 to 100 and displays the result.
$n=100;
$i=1;
$sum=0;

while($i<=$n)
{
  $sum += $i;
  $i++;
}
echo"Sum is :".$sum;
?>