<?php
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}
//setcookie('click', 'clickedButton', time() + 120, '/');
//var_dump($_SESSION);

$click = false;

if (array_key_exists('msg_readed', $_POST)) {
    $click = true;
}

/* function cookieMsg()
{
    return true;
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/theme/css/bootstrap.css">
    <link rel="stylesheet" href="../public/theme/css/custom.css">

    <title>hw23</title>
</head>

<body>

    <header class="border-bottom border-dark">
        <div class="container">
            <div class="row my-3">
                <div class="border border-dark border-2 rounded col-2">
                    <a class="text-center text-decoration-none text-dark" href="#">
                        <h1>BRANKO</h1>
                    </a>
                </div>
                <nav class="col text-end">
                    <a class="text-center text-decoration-none text-dark btn fs-4" href="#">HOME</a>
                    <a class="text-center text-decoration-none text-dark btn fs-4" href="#">PRODUCTS</a>
                    <a class="text-center text-decoration-none text-dark btn fs-4" href="#">ABOUT US</a>
                    <a class="text-center text-decoration-none text-dark btn fs-4" href="#">CONTACT US</a>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="masthead" style="background-image: url('../public/theme/img/DSC_0526.jpg');">
                <div class="color-overlay d-flex justify-content-center align-items-center">
                    <h1 id="dbr">DOBRODOSLI!</h1>
                </div>
            </div>
            <div class="d-flex justify-content-around text-center py-5">
                <div>
                    <div class="card" style="width: 18rem;">
                        <img src="../public/theme/img/DSC_0474.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CIPELE 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark">More details</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <img src="../public/theme/img/DSC_0495.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CIPELE 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    ?>
    <div class="sticky-bottom bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h5>OBAVESTENJE O KOLACICIMA</h5>
                    <p>Ovaj sajt koristi kolacice. Klikni na OK ako se slazes.</p>
                </div>
                <div class="col-1">
                    <form action="index.php" method="post">
                        <input class="btn btn-outline-dark py-3 px-5" type="submit" name="msg_readed" value="OK">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    ?>
    <footer class="text-center border-top border-dark pt-3">
        <p>Copyright &copy; <?php echo date("Y"); ?> Branko Radojevic - All right reserved</p>
    </footer>
    <script src="../public/theme/js/bootstrap.js"></script>

</body>

</html>