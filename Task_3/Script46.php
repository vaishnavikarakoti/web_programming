<?php

// Define the length of the array
$length = 5;

// Define the value
$value = 'Hello...';

// Fill the array with the specified value
$filledArray = array_fill(0, $length, $value);

echo "Filled Array: ";
print_r($filledArray);

?>