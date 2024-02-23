<?php
function myFunction($value)
{
    // Modify the value here
    return $value * 2;
}

// Define your array
$array = [1, 2, 3, 4, 5];

// Apply the custom function to all elements of the array using array_map
$result = array_map('myFunction', $array);

// Output the result
print_r($result);

?>