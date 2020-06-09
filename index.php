<?php

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 6 exercice 1</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&amp;firstname=Jean">Clique ici !</a>
        <?php 
            if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
                echo '<p>' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' est bien présent !</p>';
            }

        ?>

    </body>
</html>