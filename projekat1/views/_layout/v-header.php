<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css" />
    <title><?php if (isset($headerTitle)) {
                echo $headerTitle;
            } else {
                echo "BRanKO shop";
            }  ?></title>
</head>

<body>
    <!-- HEADER START -->
    <header class="bg-light border-bottom">
        <div class="container-lg py-2">
            <div class="row">
                <a class="col-2 border border-3 border-dark rounded text-center text-decoration-none text-dark" href="./products-page.php">
                    <h1>BRanKO</h1>
                </a>
                <!-- <a class="col-2" href="#"><img src="./public/theme/img/TwoDiamonds3.png" alt="Logo" style="height: 70px;"></a> -->
                <nav class="col-10 text-end align-middle">
                    <a class="text-decoration-none fs-4 text-dark btn" href="./products-page.php">HOME</a>

                    <a class="text-decoration-none fs-4 text-dark btn" href="./products-page.php">PRODUCTS</a>

                    <a class="text-decoration-none fs-4 text-dark btn" href="#">ABOUT US</a>

                    <a class="text-decoration-none fs-4 text-dark btn" href="#">CONTACT US</a>
                </nav>
            </div>
        </div>
    </header>
    <!-- HEADER END -->