<?php require('partials/header.php') ?>

<header><h1>My Task</h1></header>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php if($task->completed) :?>
            <li class="done"><?= $task->description; ?></li>
        <?php else: ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>


<?php require('partials/footer.php') ?>
