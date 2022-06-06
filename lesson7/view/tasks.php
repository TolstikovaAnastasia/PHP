<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>
    <a href="/?controller=security&action=logout">Выйти</a>
    <a href="/">Главная</a>

    <form action="/?controller=tasks&action=addNewTask" method="post">
        <input type="text" name="task" placeholder="Введите задачу">
        <input type="submit" value="Добавить">
    </form>

    <?php foreach ($tasks as $task) : ?>
        <div>
            <?= $task->getDescription() ?> <a href="/?controller=taska&action=taskIsDone&id=<?= $task->getId() ?>">[Done]</a>
        </div>
    <?php endforeach; ?>

</body>