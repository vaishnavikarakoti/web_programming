<?php

// Define your custom callback function
function sum($carry, $item) {
    // Add the current item to the carry (accumulator)
    return $carry + $item;
}

// Define your array
$array = [1, 2, 3, 4, 5];

// Apply the custom callback function to all elements of the array using array_reduce
$result = array_reduce($array, 'sum', 0);

// Output the result
echo "The sum of the array elements is: $result";

?>