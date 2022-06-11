<?php

$quantity = readline("Сколько задач у вас запланировано на день?\n");
$list = "";
$i = 1;
$sum = 0;

do {
    $case = readline("Какая задача запланирована?\n");
    $list = $list . "- " . $case;
    $time = readline("Сколько примерно времени эта задача займет (в часах)?\n");
    $i++;
    $list = $list . " " . $time . "\n";
    $sum += $time;
} while ($i <= $quantity);

echo "У вас на сегодня запланировано:\n" . $list;
echo "\nЭто займет $sum часа/часов";
