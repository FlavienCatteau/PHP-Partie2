<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice8P2</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 8 partie 2</h1>
                <p class="lead text-center">Traduire ce code avec des if et des else :</p>
        </header>
        </header>
        <main>
            <p class="text-center">
                <?php
                    //déclaration de ma variable
                    $isOk = TRUE;
                    //Si ma variable est en true le message 'C'est ok !!!' s'affiche
                    if ($isOk) {
                        echo 'c\'est ok !!!' ;
                    }
                    //sinon le message 'c'est pas bon' s'affiche
                    else {
                        echo  'c\'est pas bon !!!';
                    }
                ?>
            </p>
        </main>
    </body>
</html>
