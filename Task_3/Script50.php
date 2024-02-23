<?php
// Define an array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Define a condition function
function isEven($number) {
    return $number % 2 == 0;
}

// Filter the array based on the condition
$evenNumbers = array_filter($numbers, 'isEven');

// Output the filtered array
print_r($evenNumbers);
?>