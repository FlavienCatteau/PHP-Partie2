<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice3P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 3 partie 2</h1>
                <p class="lead text-center">Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
                <p class="lead text-center">Homme & Femme</p>
                <p class="lead text-center">En fonction de l'âge et du genre afficher la phrase correspondante :</p>
                <ol>
                    <li>Vous êtes un homme et vous êtes majeur</li>
                    <li>Vous êtes un homme et vous êtes mineur</li>
                    <li>Vous êtes une femme et vous êtes majeur</li>
                    <li>Vous êtes une femme et vous êtes mineur</li>
                </ol>
                <p>Gérer tous les cas.</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                    //création des deux variables age et genre
                    $age = 27;
                    $genre = 'Homme';
                    //Si l'age est supperieur que 18 et que le genre et Homme 'vous etes un homme et majeur' s'affiche
                    if ($age >= 18 && $genre == 'Homme') {
                        echo 'Vous êtes un homme et majeur.';
                    }
                    //Si l'age est inferieur de 18 et que le genre et Homme 'vous etes un homme et mineur' s'affiche
                    elseif ($age < 18 && $genre == 'Homme') {
                        echo 'Vous êtes un homme et mineur.';
                    }
                    //Si l'age est supperieur de 18 et que le genre et Femme 'vous etes un Femme et majeur' s'affiche
                    elseif ($age >= 18 && $genre == 'Femme') {
                        echo 'Vous êtes une femme et majeur.';
                    }
                    //Si l'age est inferieur de 18 et que le genre et Femme 'vous etes un Femme et mineur' s'affiche
                    elseif ($age < 18 && $genre == 'Femme') {
                        echo 'Vous êtes une femme et majeur.';
                    }
                ?>
            </p>
        </main>
    </body>
</html>
