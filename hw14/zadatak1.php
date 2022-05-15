<?php
$dan = $mesec = $godina = "";
$danErr = $mesecErr = $godinaErr = "";

if (!empty($_POST['dan'])) {
    if (is_numeric($_POST['dan']) && ($_POST['dan'] > 0 && $_POST['dan'] <= 31)) {
        $dan = $_POST['dan'];
    } else {
        $dan = "";
        $danErr = "Dan u mesecu mora biti broj veci od 0 i manji od 32!";
    }
} else {
    $dan = "";
    $danErr = "Morate da unesete dan u mesecu!";
}

if (!empty($_POST['godina'])) {
    $godina = $_POST['godina'];
} else {
    $godina = "";
    $godinaErr = "Morate uneti godinu!";
}

if (!empty($_POST['mesec'])) {
    if (is_numeric($_POST['mesec']) && ($_POST['mesec'] > 0 && $_POST['mesec'] <= 12)) {
        $mesec = $_POST['mesec'];
        if ($mesec == 4 || $mesec == 6 || $mesec == 9 || $mesec == 11) {
            if ($dan > 30) {
                $mesec = "";
                $mesecErr = "Ovaj mesec ima 30 dana!";
            }
        } else if ($mesec == 2) {
            if (prestupnaGodina($godina)) {
                if ($dan > 29) {
                    $mesec = "";
                    $mesecErr = "Februar moze imati 29 dana jer je godina prestupna!";
                }
            } else {
                if ($dan > 28) {
                    $mesec = "";
                    $mesecErr = "Februar moze imati 28 dana!";
                }
            }
        }
    } else {
        $mesec = "";
        $mesecErr = "Mesec mora biti broj veci od 0 i manji od 13!";
    }
} else {
    $mesec = "";
    $mesecErr = "Morate uneti mesec!";
}





function brojCifara($a)
{
    if (is_numeric($a)) {
        $b = count(str_split($a));
    } else {
        $b = 0;
    }
    return $b;
}

/* function februar()
{
    if (prestupnaGodina($godina)) {
        $x = 29;
    } else {
        $x = 28;
    }
    return $x;
} */

function prestupnaGodina($godina) // Vraca true ako je godina prestupna
{
    if ($godina % 4 == 0) {
        if ($godina % 100 == 0) {
            if ($godina % 400 == 0) {
                $a = true;
            } else {
                $a = false;
            }
        } else {
            $a = true;
        }
    } else {
        $a = false;
    }
    return $a;
}

?>

<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datum</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="dan">Dan u mesecu: </label>
        <input type="text" id="dan" name="dan">
        <span class="error"><?php echo $danErr ?></span><br>
        <label for="dan">Mesec: </label>
        <input type="text" id="mesec" name="mesec">
        <span class="error"><?php echo $mesecErr ?></span><br>
        <label for="dan">Godina: </label>
        <input type="text" id="godina" name="godina">
        <span class="error"><?php echo $godinaErr ?></span><br>
        <button type="submit">OK</button>
        <button type="reset">RESET</button>
    </form>

    <?php
    // Prvi nacin sve "peske"

    if ($dan != "" && $mesec != "" && $godina != "") {
        echo "<hr><h3>Moze ovako</h3>";
        echo "Datum je<p>" . $dan . "." . $mesec . "." . $godina . ".</p>";
        if (prestupnaGodina($godina)) {
            echo "Godina je prestupna.";
        } else {
            echo "Godina nije prestupna.";
        }
    }
    ?>
    <hr>
    <?php
    // Drugi nacin gotova funkcija checkdate()


    if (!empty($_POST['mesec']) && !empty($_POST['dan']) && !empty($_POST['godina'])) {
        if (checkdate($_POST['mesec'], $_POST['dan'], $_POST['godina'])) {
            echo "<h3>A moze i ovako</h3>";
            echo "Datum je<p>" . $dan . "." . $mesec . "." . $godina . ".</p>";
        } else {
            echo "Datum nije dobar!";
        }
    } else {
        $_POST['mesec'] = $_POST['dan'] = $_POST['godina'] = "";
        echo "Unesite dan, mesec i godinu!";
    }
    ?>
</body>

</html>