<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5</title>
</head>

<body>
    <h1>exercice 5</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :
        index.php?week=12</p>

        <a href="index.php?week=12">test</a>
        <?php

            if (isset($_GET['week'])) 
            {
                echo $_GET['week'];
            }
            else 
            {
                echo 'semaine';
            }
        ?>

</body>

</html>