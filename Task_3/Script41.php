<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$intersection = array_intersect($array1, $array2);

// Output the intersection
echo "Intersection of the two arrays: ";
print_r($intersection);

?>