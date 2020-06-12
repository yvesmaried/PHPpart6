<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>

<body>
    <h1>exercice 3</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :
        index.php?startDate=2/05/2016&endDate=27/11/2016</p>

    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">test</a>
    <a href="index.php">index</a>

    <?php

        if (isset($_GET['startDate']) AND isset($_GET['endDate'])) 
        {
            echo $_GET['startDate'] . ' ' . $_GET['endDate'];
        }
        else 
        {
            echo 'date';
        }
?>

</body>

</html>