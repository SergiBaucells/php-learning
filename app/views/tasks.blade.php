<?php require 'partials/header.blade.php' ?>

<v-card>
    <v-toolbar color="cyan" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Tasques</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
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

    </v-list>
</v-card>

<?php require 'partials/footer.blade.php' ?>
