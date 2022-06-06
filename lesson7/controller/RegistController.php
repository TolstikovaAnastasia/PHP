<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

$pdo = require 'db.php';

session_start();

if (isset($_POST['registName']) && isset($_POST['registUsername']) && isset($_POST['registPassword'])) {
    ['registName' => $registName, 'registUsername' => $registUsername, 'registPassword' => $registPassword] = $_POST;

    $user = new User($registUsername);
    $user->setName($registName);

    $registUser = new UserProvider($pdo);
    $user->setId($registUser->registerUser($user, $registPassword));

    $_SESSION['username'] = $user;
    $_SESSION['user_id'] = $user->getId();
    header("Location: index.php");
    die();
}

require_once 'view/regist.php';
