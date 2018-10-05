<?php require 'partials/header.blade.php' ?>

<v-card>
    <v-toolbar color="cyan" dark>

        <v-toolbar-title>Tasques</v-toolbar-title>

        <v-spacer></v-spacer>

    </v-toolbar>

    <v-list two-line>
        <v-subheader>
            Tasques
        </v-subheader>

        <v-divider></v-divider>

        <?php foreach ($tasks as $task) : ?>

        <v-list-tile>

            <v-list-tile-avatar>
                <img src="https://placeimg.com/100/100/any">
            </v-list-tile-avatar>

            <v-list-tile-content>
                <v-list-tile-title>
                    <?= $task->name; ?>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <?php endforeach;?>

        <form method="POST" action="/tasks">
            <input name="name" type="text" placeholder="Nova tasca">
            <button type="submit">Afegir</button>
        </form>

    </v-list>

</v-card>

<?php require 'partials/footer.blade.php' ?>
