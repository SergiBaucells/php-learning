<?php require 'partials/header.blade.php'?>

<ul>
    <?php foreach ($people as $person) : ?>
    <li>
        Nom: <?= $person->nom; ?><br>
        DNI: <?= $person->dni;?><br>
        Data Naixement: <?= $person->dataNaix;?>
    </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php'?>

