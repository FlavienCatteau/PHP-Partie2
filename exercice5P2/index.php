<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice5P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 5 partie 2</h1>
                <p class="lead text-center">Traduire ce code avec des if et des else :</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                   //Déclaration de la varible
                   $gender = 'Femme';
                   //si c'est un Homme le message 'cest un developpeur' s'affiche
                   if ($gender != 'Homme') {
                       echo 'C\'est une développeuse !!!';
                   }
                   //si c'est un Femme le message 'cest un developpeur' s'affiche
                   else {
                       echo 'C\'est un développeur !!!';
                   }
                ?>
            </p>
        </main>
    </body>
</html>
