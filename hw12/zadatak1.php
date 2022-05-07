<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak 1</title>
    <link rel="stylesheet" href="zadatak1.css">
</head>

<body>
    <header>
        <h1>REZULTAT</h1>
    </header>
    <main>

        <?php
        /* print_r($_GET['tezina']); */
        $tezina = $_GET['tezina'];
        if (!empty($tezina[0])) {
            echo "<p>Teski ste <b>" . $tezina[0] . "</b>kg.</p>";
        } else {
            $tezina[0] = 0;
            echo "<p><b>Unesite Vasu tezinu!</b></p>";
        }

        $zanimanje = $_GET['zanimanje'];
        if ($zanimanje[0] != "NULL") {
            if ($zanimanje[0] == "Sportista") {
                $faak = 300;
            } elseif ($zanimanje[0] == "Policajac" || $zanimanje[0] == "Vojnik") {
                $faak = 200;
            } else {
                $faak = 300;
            }
            echo "<p>Vase zanimanje je <b>" . $zanimanje[0] . "</b>.</p>";
        } else {
            $faak = 0;
            echo "<p><b>Odaberite Vase zanimanje!</b></p>";
        }

        /* print_r($_GET['godine']); */
        $godine = $_GET['godine'];
        if (!empty($godine[0])) {
            if ($godine[0] <= 3) {
                $fast = 1.9;
            }
            if ($godine[0] >= 4 && $godine[0] <= 10) {
                $fast = 1.5;
            }
            if ($godine[0] >= 11 && $godine[0] <= 18) {
                $fast = 1.2;
            }
            if ($godine[0] >= 19 && $godine[0] <= 26) {
                $fast = 1;
            }
            if (($godine[0] >= 27 && $godine[0] <= 30) || ($godine[0] >= 50 && $godine[0] <= 60)) {
                $fast = 0.8;
            }
            if (($godine[0] >= 31 && $godine[0] <= 35) || ($godine[0] >= 45 && $godine[0] <= 49)) {
                $fast = 0.7;
            }
            if (($godine[0] >= 36 && $godine[0] <= 44) || ($godine[0] > 60)) {
                $fast = 0.6;
            }
            echo "<p>Imate <b>" . $godine[0] . "</b> godina.</p>";
        } else {
            $fast = 0;
            echo "<p><b>Unesite Vase godine starosti (mladosti :))!</b></p>";
        }
        echo "<hr><br>";

        /* echo "Tezina = $tezina[0]<br>faak = $faak<br>fast = $fast<br>"; */

        if ($tezina[0] != 0 && $faak != 0 && $fast != 0) {
            $max_kalorija = $tezina[0] * $faak * $fast;
            echo "Maksimalan broj kalorija koje smete da unesete tokom dana je <b>" . $max_kalorija . "</b>.<br>";
        } else {
            echo "<p><b>Morate uneti sve parametre!</b></p>";
        }

        ?>

    </main>
    <footer>
        <p>Copyright &copy; 2022 Branko Radojevic - All rights reserved</p>
    </footer>
</body>

</html>