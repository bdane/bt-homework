<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw10</title>
</head>

<body>
    <?php
    // 1. zadatak

    $x = 200;
    $y = 80;
    echo "Zbir $x i $y je " . ($x + $y) . ".<br/>";
    echo "Razlika $x i $y je " . ($x - $y) . ".<br/>";
    echo "Proizvod $x i $y je " . ($x * $y) . ".<br/>";
    echo "Kolicnik $x i $y je " . ($x / $y) . ".<br/>";
    ?>
    <hr>
    <?php
    // 2. zadatak

    $index = mt_rand(0, 6);
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak", "Subota", "Nedelja"];
    echo "Danas je " . $dani[$index] . "!";
    ?>
    <hr>
    <?php
    // 3. zadatak

    $a = 3;
    $b = 6;
    $c = 1;
    $d = $a + $b + $c;
    echo "Zbir brojeva $a, $b i $c je $d.";
    ?>
    <hr>
    <?php
    // BONUS zadatak zbog kasnjenja
    // (niz slucajnih brojeva bez ponavljanja)

    echo "Loto brojevi:<br>";
    $lotoNo = array();
    for ($i = 0; $i < 7; $i++) {
        $lotoNo[$i] = mt_rand(1, 39);
        if ($i > 0) {
            for ($j = $i; $j > 0; $j--) {
                if ($lotoNo[$i] == $lotoNo[$j - 1]) {
                    $i--;
                }
            }
        }
    }
    sort($lotoNo);
    for ($i = 0; $i < 7; $i++) {
        echo $lotoNo[$i] . " | ";
    }
    // Meni ce biti dovoljno i 10% :D
    ?>
</body>

</html>