<?php

// Define an associative array
$associativeArray = [
    'name' => 'vk',
    'age' => 12,
    'city' => 'Rajkot'
];

// Flip the keys and values of the associative array
$flippedArray = array_flip($associativeArray);

echo "Flipped array: ";
print_r($flippedArray);

?>