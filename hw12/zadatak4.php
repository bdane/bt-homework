<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 4</title>
    <style>
        body {
            margin: 0;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgb(71, 94, 87);
            color: #eee;
            text-align: center;
            padding: 5px;
            margin-top: 0;
        }

        main {
            padding: 20px;
            margin: 90px auto;
        }

        p {
            font-size: 18px;
        }

        footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            background-color: rgb(71, 94, 87);
            color: #eee;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>ZADATAK 4</h1>
    </header>
    <main>
        <p>Drvo je visoko 100cm i raste 1cm na dan.</p>
        <p>Puz se penje na drvo 3cm na dan.</p>
        <p>Koliko dana je potrebno da se puz popne na vrh drveta?</p>
        <br>
        <?php

        $drvo = 101;
        $puz = 3;
        $dan = 1;
        while ($puz <= $drvo) {
            echo "Dan $dan: Puz je presao " . $puz . "cm, visina drveta je " . $drvo . "cm.<br>";
            $drvo++;
            $puz += 3;
            $dan++;
        }

        echo "<br><p>Puz se popeo na drvo za " . ($dan - 1) . " dana.</p>"

        ?>
    </main>
    <footer>
        <p>Copyright &copy; 2022 Branko Radojevic - All rights reserved</p>
    </footer>
</body>

</html>