<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasques</title>
</head>
<body>

    <!--NO HTML5
    <ul>
        <li><a href="/tasks.php">Tasques</a></li>
        <li><a href="/people.php">Persones</a></li>
        <li><a href="/lessons.php">Lliçons</a></li>
        <li><a href="/contact.php">Contacte</a></li>
        <li><a href="/about.php">Sobre nosaltres</a></li>
    </ul>-->

    <!--HTML5 SEMÀNTICA-->
    <nav>
        <ul>
            <li><a href="/tasks">Tasques</a></li>
            <li><a href="/people">Persones</a></li>
            <li><a href="/lessons">Lliçons</a></li>
            <li><a href="/contact">Contacte</a></li>
            <li><a href="/about">Sobre nosaltres</a></li>
        </ul>
    </nav>

    <h1>Tasks</h1>
    <p>Les meves tasques pendents són:</p>
    <hr>

    <!-- Forma antiga
    <ul>
        //<?php
        //foreach ($tasks as $task){
            //echo "<li>$task</li>";
        //}
        //?>
    </ul>
    -->

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

</body>
</html>