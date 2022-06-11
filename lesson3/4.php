<?php

$arr = [10, 1, "apple", 7, "banana", 0, 0, 0, 0, 0];

array_splice($arr, -5, 5, array_slice($arr, 0, 5));
sort($arr);

print_r($arr);
