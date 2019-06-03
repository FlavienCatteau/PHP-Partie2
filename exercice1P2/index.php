<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice1P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 1 partie 2</h1>
                <p class="lead text-center">Créer une variable age et l'initialiser avec une valeur.</p>
                <p class="lead text-center">Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
        </header>
        <main>
            <p class="text-center">
               <?php
               //Création d'une variable avec une valeur de 4
               $age = 0;
               //Affichage de la valeur
               echo $age . ' ans ';
               //Si la valeur est suppérieur a 18, le message "vous etes majeur" s'affiche
               if ( $age >= 18 ){
                   echo 'vous êtes majeur.';
               }
               //Si la valeur est inferieur a 0, le message "vous existez pas" s'affiche
               else if ($age <= 0){
                       echo 'vous existez pas !';
               }
              //Si la valeur et inferieur a 18, le message "vous etes mineur" s'affiche
               else {
                   echo 'vous etes mineur.';
               }
               ?>
            </p>
        </main>
    </body>
</html>
