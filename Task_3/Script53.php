<?php

$originalArray = array
(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value1",
    "key4" => "value3",
    "key5" => "value2",
);

// Remove duplicate values using array_unique()
$uniqueArray = array_unique($originalArray);

print_r($uniqueArray);

?>