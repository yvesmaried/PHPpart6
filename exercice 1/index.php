<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 1</title>
</head>

<body>
    <h1>exercice 1</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :
        index.php?lastname=Nemare&firstname=Jean</p>

    <a href="index.php?lastname=Nemare&firstname=Jean">test</a>
    <?php

        if (isset($_GET['firstname']) AND isset($_GET['lastname'])) 
        {
            echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
        }
        else 
        {
            echo 'Il faut renseigner un nom et un prénom !';
        }
?>
</body>

</html>