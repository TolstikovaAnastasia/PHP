<?php

$arr1 = [5, 11, 15, 7, 2, 54, 78, 99, 33, 67];

$arr2 = [84, 28, 13, 95, 6, 17, 1, 44, 59, 81];

$arr = array();

foreach ($arr1 as $key => $value) {
    $arr[$key] = $value * $arr2[$key];
}

print_r($arr);
