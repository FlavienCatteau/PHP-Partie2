<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice6P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 6 partie 2</h1>
                <p class="lead text-center">Traduire ce code avec des if et des else :</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                   //Déclaration de la varible
                   $age = '27';
                   //si c'est supèrieur ou egal "tu es majeur" s'affiche
                   if ($age >= '18') {
                       echo 'Tu es majeur.';
                   }
                   //si c'est inferieur "tu es mineur" s'affiche
                   else {
                       echo 'Tu es mineur.';
                   }
                ?>
            </p>
        </main>
    </body>
</html>
