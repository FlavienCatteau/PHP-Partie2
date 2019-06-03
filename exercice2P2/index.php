<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice2P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 2 partie 2</h1>
                <p class="lead text-center">Créer une variable isEasy de type booléan et l'initialiser avec une valeur.</p>
                <p class="lead text-center">Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</p>
                <p class="lead text-center">Bonus : L'écrire de deux manières différentes.</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                //création de la variable de type booléen
                $IsEasy = true;
                //Si c'est true il affiche c'est facile
                if ($IsEasy == TRUE) {
                    echo ' C\'est facile !!';
                //si c'est false il affiche c'est difficile
                } elseif ($IsEasy == FALSE) {
                    echo 'C\'est difficile !!!';
                }
                ?>
                <?php
                $IsEasy = false;
                //Si c'est true il affiche c'est facile
                if ($IsEasy) {
                    echo "c'est facile !!";
                //si c'est false il affiche c'est difficile
                } else {
                    echo "c'est difficile !!!";
                }
                ?>
            </p>
        </main>
    </body>
</html>
