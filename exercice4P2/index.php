<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 4 partie 2</h1>
                <p class="lead text-center">L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.</p>
                <p class="lead text-center">Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
                <p class="lead text-center">Gérer tous les cas.</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                    //Création de la variable
                    $magnitude = 7;
                    //Début du switch
                    switch ($magnitude) {
                    //création d'une case pour englober l'affichage avec la valeur correspondante.
                    case 1:
                        echo "Micro-séisme impossible à ressentir.";
                        break;
                    case 2:
                        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                        break;
                    case 3:
                        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                        break;
                    case 4:
                        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                        break;
                    case 5:
                        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                        break;
                    case 6:
                        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                        break;
                     case 7:
                        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                        break;
                     case 8:
                        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                        break;
                     case 9:
                        echo "Séisme capable de tout détruire sur une très vaste zone.";
                        break;
                    //Pour initié le tableau
                    default:
                        echo "Ca n'existe pas";
                }
                ?>
            </p>
        </main>
    </body>
</html>
