<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>

<body>
    <h1>exercice 4</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :
        index.php?language=PHP&server=LAMP</p>

    <a href="index.php?language=PHP&server=LAMP">test</a>

    <?php

        if (isset($_GET['language']) AND isset($_GET['server'])) 
        {
            echo $_GET['language'] . ' ' . $_GET['server'];
        }
        else 
        {
            echo 'clic';
        }
    ?>

</body>

</html>