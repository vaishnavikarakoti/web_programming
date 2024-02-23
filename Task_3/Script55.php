<?php

$myArray = array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3",
    "key4" => "value4",
);

// Retrieve the first key using array_key_first()
$firstKey = array_key_first($myArray);

// Retrieve the last key using array_key_last()
$lastKey = array_key_last($myArray);

echo "First Key: $firstKey\n";
echo "Last Key: $lastKey\n";

?>