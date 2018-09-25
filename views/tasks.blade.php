<?php require 'partials/header.blade.php'?>

<h1>Tasks</h1>
<p>Les meves tasques pendents són:</p>
<hr>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed == true): ?>
        <strike>
            <?php endif; ?>
            <?= $task->name; ?>
            <?php if ($task->completed == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>


<?php require 'partials/footer.blade.php'?>