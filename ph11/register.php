<<<<<<< HEAD
<?php


if (isset($_GET['sub'])) {
    if (!empty($_GET['ime'])) {
        $ime = $_GET['ime'];
    } else {
        echo "Unesite Vase ime!<br>";
    }
    if (!empty($_GET['prez'])) {
        $prezime = $_GET['prez'];
    } else {
        echo "Unesite Vase prezime!<br>";
    }
    if (!empty($_GET['pol'])) {
        $pol = $_GET['pol'];
    } else {
        echo "Unesite Vas pol!<br>";
    }
    if (!empty($_GET['email'])) {
        $email = $_GET['email'];
    } else {
        echo "Unesite Vas email!<br>";
    }
    if (!empty($_GET['pass'])) {
        $pass = $_GET['pass'];
    } else {
        echo "Unesite lozinku!<br>";
    }
    if (!empty($_GET['re-pass'])) {
        $re_pass = $_GET['re-pass'];
    } else {
        echo "Ponovite lozinku!<br>";
    }
    if (!empty($_GET['courses'])) {
        $courses = $_GET['courses'];
    } else {
        echo "Morate odabrati bar jedan kurs!<br>";
    }
} else {
    echo "BLA BLA";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <?php
        if ($pass !== $re_pass) {
            echo "Ponovljena lozinka mora biti ista kao prethodno uneta lozinka!";
        } else {

            if ($pol[0] == "m") {
                echo "Postovani ";
            } else {
                echo "Postovana ";
            }
            echo $ime[0] . " " . $prezime[0] . ", uspesno ste se registrovali na nasem sajtu.<br>";
            echo "Vasa lozinka je: $pass[0]. <br>";
            echo "Vas username je: $email[0]. <br>";
            echo "Vasi odabrani kursevi su: ";
            foreach ($courses as $course) {
                echo $course . ", ";
            }
        }

        ?>
    </div>

</body>

=======
<?php

$ime = $_GET['ime'];
$prezime = $_GET['prez'];
$pol = $_GET['pol'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$re_pass = $_GET['re-pass'];
$courses = $_GET['courses'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <?php
        if ($pass !== $re_pass) {
            echo "Ponovljena lozinka mora biti ista kao prethodno uneta lozinka!";
        } else {

            if ($pol[0] == "m") {
                echo "Postovani ";
            } else {
                echo "Postovana ";
            }
        }
        echo "$ime $prezime, uspesno ste se registrovali na nasem sajtu.<br>";
        echo "Vasa lozinka je: $pass";
        ?>
    </div>

</body>

>>>>>>> 1f8462de8c435d329fa22d43739320aea160b12e
</html>