<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="script.css">
    <title>Ex4 php partie3</title>
</head>
<body>
    <div class="container text-center">

        <h1 class="jumbotron">Créer une variable et l'initialiser à 1.
            Tant que cette variable n'atteint pas 10, il faut :</h1>
            <ul>
                <li>l'afficher</li>
                <li>l'incrementer de la moitié de sa valeur</li>
            </ul>

            <?php
            //la variable x vaut 1 , si x est inférieur à 10 alors x vaut la valeur de x+($x/2)
                 for ($x = 1; $x <= 10; $x=$x+($x/2)) {
                   echo "<p>Le nombre est égale à $x</p>";
                 }
               ?>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    </html>
