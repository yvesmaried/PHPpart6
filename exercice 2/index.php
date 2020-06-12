<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2</title>
</head>

<body>
    <h1>exercice 2</h1>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon
        le signaler : index.php?lastname=Nemare&firstname=Jean</p>

        <a href="index.php?lastname=Nemare&firstname=Jean">test</a>
    <?php

        if (isset($_GET['age'])) 
        {
            echo 'vous avez' . $_GET['age'] . ' '. '!';
        }
        else 
        {
            echo 'Il faut renseigner un age !';
        }
?>

</body>

</html>