<?php

$factorial = function (int $x) use (&$factorial): int {
    if ($x == 0 || $x == 1) return 1;
    return $x * $factorial($x - 1);
};

$x = 4;

echo $factorial($x);
