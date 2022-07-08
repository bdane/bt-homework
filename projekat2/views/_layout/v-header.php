<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/images/sunglasses.png">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css" />
    <link rel="stylesheet" href="./public/theme/css/custom.css" />
    <title><?php if (isset($headerTitle)) {
                echo $headerTitle . " - WebDev";
            } else {
                echo "WebDev";
            }  ?></title>
</head>

<body>
    <!-- HEADER START -->
    <div>
        <header class="bg-light border-bottom">
            <div class="container py-4">
                <div class="row">
                    <div class="col-3">
                        <a class="navbar-brand" href="./index-page.php">
                            <img src="./public/theme/img/logo1.png" alt="logo" height="50" />
                        </a>
                    </div>
                    <div class="col-6 text-center">
                        <nav>
                            <a class="px-2 text-decoration-none text-dark fs-5 active" href="./index-page.php">HOME</a>
                            <a class="px-2 text-decoration-none text-dark fs-5 active" href="./all-products-page.php">SHOP</a>
                            <a class="px-2 text-decoration-none text-dark fs-5 active" href="./about-page.php">ABOUT ME</a>
                            <a class="px-2 text-decoration-none text-dark fs-5 active" href="./contact-us-page.php">CONTACT</a>
                        </nav>
                    </div>
                    <div class="col-3 text-end">
                        <a href="#">Login</a> / <a href="#">Registration</a> |
                        <a href="#">CART</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- HEADER END -->