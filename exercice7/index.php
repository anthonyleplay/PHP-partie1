<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>
    <h1>Exercice 7</h1>

    <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  <br>
Afficher : <i>Bonjour</i> + <b>lastname</b> + <b>firstname</b> + <i>, tu as</i> + <b>age</b> + <i>ans</i>.</p>


    <?php

$lastname = "Le Play";
$firstname = "Anthony";
$age = 33;

echo "<i>Bonjour</i> <b>$lastname</b> <b>$firstname</b><i>, tu as</i> <b>$age</b> <i>ans</i>";

?>

</body>

</html>