
    <?php require 'partials/header.blade.php'?>

    <ul>
        <?php foreach ($lessons as $lesson) : ?>
            <li>
                <?= $lesson->name; ?>
            </li>
        <?php endforeach;?>
    </ul>

    <?php require 'partials/footer.blade.php'?>

