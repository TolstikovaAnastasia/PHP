<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function take_arr(array &$arr): array
{
    return [
        'maxValue' => max($arr),
        'minValue' => min($arr),
        'averValue' => array_sum($arr) / count($arr)
    ];
}

print_r(take_arr($arr));
