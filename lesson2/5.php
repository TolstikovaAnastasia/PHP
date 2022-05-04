<?php

$count = readline("Введите количество яблок\n");

if (((($count - ($count % 10)) / 10) % 10) === 1) {
    echo 'яблок';
} else {
    switch ($count % 10) {
        case 0:
            echo 'яблок';
            break;
        case 1:
            echo 'яблоко';
            break;
        case 2:
            echo 'яблока';
            break;
        case 3:
            echo 'яблока';
            break;
        case 4:
            echo 'яблока';
            break;
        case 5:
            echo 'яблок';
            break;
        case 6:
            echo 'яблок';
            break;
        case 7:
            echo 'яблок';
            break;
        case 8:
            echo 'яблок';
            break;
        case 9:
            echo 'яблок';
            break;
    }
}
