<?php

$arr = [];

while (1) {
    $i = rand(1, 200);
    if (!in_array($i, $arr)) {
        $arr[] = $i;
    }
    if (count($arr) == 100) {
        break;
    }
}

print_r($arr);
