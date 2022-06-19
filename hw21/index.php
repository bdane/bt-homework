<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('colors.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>SQL WORKSHOP</h2>
    <?php
    /* PRVI DEO ZADATKA */

    $sql1 = "SELECT * FROM colors WHERE status=1 ORDER BY created_at;";
    $sql2 = "SELECT * FROM colors ORDER BY RAND() LIMIT 5;";
    $sql3 = "INSERT INTO colors (name, hex_value, status, created_at, updated_at) VALUES ('SteelBlue', '#4682b4', '1', '2022-06-02 23:45:12', '2022-06-02 23:47:22');";
    $sql4 = "UPDATE colors SET status=1 WHERE status=0;";
    $sql5 = "DELETE FROM `colors` WHERE id=5;";
    $sql6 = "DELETE FROM colors ORDER BY updated_at LIMIT 1;";

    /* DRUGI DEO ZADATKA */

    $colorObject = new Colors();
    $colorObject->tableColors($sql1);

    //var_dump($colorObject);
    ?>
</body>

</html>