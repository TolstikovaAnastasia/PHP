<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>
    <?php if ($username == null) : ?>
        <a href="?controller=security">Войти</a>
    <?php else : ?>
        <p>Рады Вас приветствовать, <?= $username ?>!</p>
        <a href="/?controller=tasks">Задачи</a></br>
        <a href="/?controller=security&action=logout">Выход</a>
    <?php endif ?>
</body>