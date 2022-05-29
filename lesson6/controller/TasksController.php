<?php
include_once 'model/User.php';
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';

session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: index.php");
    die();
}

$pageHeader = "Список задач";

$taskProvider = new TaskProvider();
$taskProvider->addTask(new Task('Почитать книгу'));
$taskProvider->addTask(new Task('Сделать уборку'));
$taskProvider->addTask(new Task('Погулять в парке'));

$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";
