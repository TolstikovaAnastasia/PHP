<?php

$divFunc = function (int $arr): string {
    if ($arr & 1) return "нечетное"; //либо if ($arr % 2 == 0) return "четное";
    else return "четное"; //либо elseif ($arr % 2 != 0) return "нечетное";
};

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = array_map($divFunc, $arr);

print_r($result);

// Либо через тернарный оператор

$divFunc = function (int $arr): string {
    return $arr & 1 ? "нечетное" : "четное";
};
