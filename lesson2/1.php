<?php

$question = readline("В каком году появился интернет?\n");

$answer1 = 1955;
$answer2 = 1969;
$answer3 = 1971;

if ($question == $answer1 || $question == $answer3) {
    die("Ответ неверный\n");
} elseif ($question == $answer2) {
    die("Поздравляю, ответ верный!\n");
} else {
    $question = readline("В каком году появился интернет?\n");
}
