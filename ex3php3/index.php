<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="script.css">
    <title>Ex php partie3</title>
</head>
<body>
    <div class="container text-center">

        <h1 class="jumbotron">Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieure ou égale à 10 :</h1>

            <ul>
                <li>multiplier la première variable avec la deuxième
                </li>
                <li>afficher le résultat
                </li>
                <li>décrémenter la première variable
                </li>
            </ul>


            <?php
            $first=100;
            $second=rand(1,100);

            echo "<p>La deuxième variable vaut $second</p>";
            while ($first >=10) {
                $multiplication= $first*$second;
                echo "<p>Le résultat $multiplication</p>";
                $first --;
            }

            ?>

        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    </html>
