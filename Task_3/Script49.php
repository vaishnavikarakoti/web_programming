<?php

// Define your array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Specify the size of each chunk
$chunkSize = 3;

// Split the array into chunks using array_chunk
$chunks = array_chunk($array, $chunkSize);

// Output the result
echo "Original Array:\n";
print_r($array);

echo "\nChunks of size $chunkSize:\n";
print_r($chunks);

?>