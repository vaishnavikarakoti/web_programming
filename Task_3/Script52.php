<?php

$array1 = array
(
    "key1" => "value1",
    "key2" => "value2",
);
$array2 = array
(
    "key3" => "value3",
    "key4" => "value4",
);

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);

?>