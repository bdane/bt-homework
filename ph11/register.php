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

</html>