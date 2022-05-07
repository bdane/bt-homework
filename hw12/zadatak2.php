<?php

$s_zida = $_POST['s_zida'];
$v_zida = $_POST['v_zida'];
$s_plo = $_POST['s_plo'];
$d_plo = $_POST['d_plo'];

function povrsina($a, $b)
{
    $c = $a * $b;
    return $c;
}

if (!empty($s_zida[0]) && !empty($v_zida[0])) {
    $p_zida = povrsina($s_zida[0], $v_zida[0]);
} else {
    $p_zida = 0;
    /* echo "<p><b>Unesite dimenzije zida!</b></p>"; */
}

if (!empty($s_plo[0]) && !empty($d_plo[0])) {
    $p_plo = povrsina($s_plo[0], $d_plo[0]);
} else {
    $p_plo = 0;
    /* echo "<p><b>Unesite dimenzije plocice!</b></p>"; */
}

if ($p_zida > 0 && $p_plo > 0) {
    $kom_plo = $p_zida / $p_plo;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
    <link rel="stylesheet" href="zadatak2.css" />
</head>

<body>
    <header>
        <h1>REZULTAT</h1>
    </header>
    <main>
        <div>
            <h3>Dimenzije zida:</h3>

            <?php

            if ($p_zida > 0) {
            ?>
                <ul>
                    <li>
                        <p>Sirina zida je <?php echo $s_zida[0]; ?>cm (<?php echo $s_zida[0] / 100; ?>m).</p>
                    </li>
                    <li>
                        <p>Visina zida je <?php echo $v_zida[0]; ?>cm (<?php echo $v_zida[0] / 100; ?>m).</p>
                    </li>
                    <li>
                        <p>Povrsina zida je <?php echo $p_zida; ?>cm<sup>2</sup> (<?php echo number_format(($p_zida / 10000), 2); ?>m<sup>2</sup>).</p>
                    </li>
                </ul>
            <?php
            } else {
                echo "<p><b>Unesite dimenzije zida!</b></p><br>";
            }

            ?>
        </div>
        <div>
            <h3>Dimenzije plocice:</h3>

            <?php
            if ($p_plo > 0) {
            ?>
                <ul>
                    <li>
                        <p>Sirina plocice je <?php echo $s_plo[0]; ?>cm (<?php echo $s_plo[0] / 100; ?>m).</p>
                    </li>
                    <li>
                        <p>Duzina plocice je <?php echo $d_plo[0]; ?>cm (<?php echo $d_plo[0] / 100; ?>m).</p>
                    </li>
                    <li>
                        <p>Povrsina plocice je <?php echo $p_plo; ?>cm<sup>2</sup> (<?php echo number_format(($p_plo / 10000), 2); ?>m<sup>2</sup>).</p>
                    </li>
                </ul>
            <?php
            } else {
                echo "<p><b>Unesite dimenzije plocice!</b></p><br>";
            }
            ?>
        </div>
        <div>
            <?php

            if ($p_zida > 0 && $p_plo > 0) {
                $kom_plo = $p_zida / $p_plo;
                echo "____________________________________<br><br>";
                echo "Potrebno je <b>" . ceil($kom_plo) . " komada</b> plocica.<br>";
                echo "____________________________________<br><br>";
            }

            ?>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; 2022 Branko Radojevic - All rights reserved</p>
    </footer>

</body>

</html>