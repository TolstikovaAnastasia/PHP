<?php

include "Task.php";
include "User.php";
include "Comment.php";
include "TaskService.php";

$user1 = new User("Ольга", "olga885VV@mail.ru", "женский", 31);
$user2 = new User("Костя", "darkwater458@mail.ru", "мужской", 27);

$task1 = new Task($user1);
$task1->setDescription("Пойти на прогулку");
$task1->setPriority(3);

$task2 = new Task($user2);
$task2->setDescription("Сделать ДЗ");
$task2->setPriority(1);

TaskService::addComment($user1, $task1, "Не забыть купить цветы");
TaskService::addComment($user2, $task2, "Не пропустить сроки");

print_r($task2);
