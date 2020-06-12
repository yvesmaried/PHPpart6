<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
</head>

<body>
    <h1>exercice 6</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :
        index.php?building=12&room=101</p>

        <a href="index.php?building=12&room=101">test</a>
    <?php

        if (isset($_GET['building']) && isset($_GET['room'])) 
        {
            echo $_GET['building']. $_GET['room'];
        }
        else 
        {
            echo 'reload';
        }
?>

</body>

</html>