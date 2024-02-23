<?php

$multidimensionalArray = array(
    array(
        "id" => 1,
        "name" => "John",
        "age" => 25
    ),
    array(
        "id" => 2,
        "name" => "Jane",
        "age" => 30
		),
    array(
        "id" => 3,
        "name" => "Bob",
        "age" => 22
    ),
);

$names = array_column($multidimensionalArray, 'name');

print_r($names);

?>