<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice7P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 7 partie 2</h1>
                <p class="lead text-center">Traduire ce code avec des if et des else :</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                   //Déclaration de la varible
                   $isOk = false;
                   //Si ma variable est en false le message 'C'est pas bon !!!' s'affiche
                   if ($isOk == false) {
                       echo 'C\'est pas bon !!!';
                   }
                   //sinon le message 'c'est ok s'affiche
                   else {
                       echo 'C\'est OK !!!';
                   }
                ?>
            </p>
        </main>
    </body>
</html>
