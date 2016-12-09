<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
        .done {
            color: green;
        }
    </style>
</head>
<body>
<nav>
    <uld>
        <li><a href="about.view.php">About</a></li>
        <li><a href="contact.view.php">Contact</a></li>
    </uld>
</nav>

<h1>My Task</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php if($task->completed) :?>
            <li class="done"><?= $task->description; ?></li>
        <?php else: ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

</body>
</html>