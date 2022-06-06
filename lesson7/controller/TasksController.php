<?php

include_once 'model/User.php';
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';

$pdo = require 'db.php';

session_start();

$username = null;

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: index.php");
    die();
}

$taskProvider = new TaskProvider($pdo);

if (isset($_GET['action']) && $_GET['action'] === 'addNewTask') {
    $taskProvider->addTask(new Task($_POST['task']));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'taskIsDone') {
    $id = $_GET['id'];
    $taskProvider->taskDone($id);
    header("Location: /?controller=tasks");
    die();
}

/*if (isset($_POST['description'])) {
    ['description' => $description] = $_POST;
    $taskProvider = new TaskProvider($pdo);
    $description = $taskProvider->addTask($user, $description);
    if ($description === null) {
        $error = 'Ваш список задач пуст';
    } else {
        $_SESSION['description'] = $description;
        header("Location: index.php");
        die();
    }
}*/

$pageHeader = "Список задач";

//$tasks = $taskProvider->getUndoneList($user, $isDone);

$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";
