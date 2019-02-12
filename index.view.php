<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h1>Hi, <?= isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?></h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <?php if ($task->complete()) : ?>
                <strike><li><?= $task->description ?></li></strike>
            <?php else : ?>
                <li><?= $task->description ?></li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach ($dbTasks as $task) : ?>
            <?php if ($task["is_completed"]) : ?>
                <strike><li><?= $task["description"] ?></li></strike>
            <?php else : ?>
                <li><?= $task["description"] ?></li>
            <?php endif ?>
            
        <?php endforeach ?>
    </ul>
</body>
</html>