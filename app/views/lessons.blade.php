<?php require 'partials/header.blade.php'?>

<v-card>
    <v-toolbar color="cyan" dark>

        <v-toolbar-title>Lliçons</v-toolbar-title>

        <v-spacer></v-spacer>

    </v-toolbar>

    <v-list two-line>
        <v-subheader>
            Lliçons
        </v-subheader>

        <v-divider></v-divider>

        <?php foreach ($lessons as $lesson) : ?>

        <v-list-tile>

            <v-list-tile-avatar>
                <img src="https://placeimg.com/100/100/any">
            </v-list-tile-avatar>

            <v-list-tile-content>
                <v-list-tile-title>
                    <?= $lesson->name; ?>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <?php endforeach;?>

    </v-list>
</v-card>

<?php require 'partials/footer.blade.php'?>

