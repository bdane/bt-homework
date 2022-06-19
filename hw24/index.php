<?php
include 'ShoppingCart.php';

/* Add New Product */

$newProduct = new Product();

if (isset($_POST['addNewProduct'])) {
    $barcode = "";
    $title = "";
    $price = "";
    $stock = null;
    $errMsg = " You must enter values in all fields!";
    $errMsgFlag = true;
    $allProducts = [];

    if (!empty($_POST['barcode'])) {
        $barcode = $_POST['barcode'];
    } else {
        $errMsgFlag = false;
    }

    if (!empty($_POST['title'])) {
        $title = $_POST['title'];
    } else {
        $errMsgFlag = false;
    }

    if (!empty($_POST['price'])) {
        $price = $_POST['price'];
    } else {
        $errMsgFlag = false;
    }

    if (!empty($_POST['stock'])) {
        $stock = $_POST['stock'];
    } else {
        $errMsgFlag = false;
    }
}

if (isset($errMsgFlag) && $errMsgFlag) {

    $newProduct->setBarcode($barcode);
    $newProduct->setTitle($title);
    $newProduct->setPrice($price);
    $newProduct->setStock($stock);
    $newProduct->addToAllProducts();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid lightblue;
        }

        th,
        td {
            border: 1px solid lightblue;
            padding: 5px 20px;
        }

        span {
            color: red;
        }
    </style>
</head>

<body>
    <div>
        <h1>Shopping Cart</h1>
    </div>
    <div>
        <h3>Add new product</h3>
        <form action="index.php" method="post">
            Barcode: <input type="text" name="barcode">
            Product name: <input type="text" name="title">
            Price: <input type="text" name="price">
            Quantity: <input type="text" name="stock">
            <input type="submit" value="Add Product" name="addNewProduct">
            <span><?php
                    if (isset($errMsgFlag) && !$errMsgFlag) {
                        echo $errMsg;
                    }
                    ?></span>
        </form>
    </div>
    <hr>
    <?php
    //var_dump(isset($newProduct));
    //var_dump($newProduct->getAllProducts());
    if (isset($newProduct) && count($newProduct->getAllProducts()) > 0) {
    ?>
        <table>
            <thead>
                <th>Barcode</th>
                <th>Title</th>
                <th>Price</th>
                <th>Stock</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach ($newProduct->getAllProducts() as $oneProduct) {
                    echo "<tr><td>" . $oneProduct['barcode'] . "</td><td>" . $oneProduct['title'] . "</td><td>" . $oneProduct['price'] . "</td><td>" . $oneProduct['stock'] . "</td>";
                    echo '<td><form action="cart.php" method="POST">
                    <input type="submit" value="Add To Cart" id="add-' . $oneProduct['barcode'] . '" name="addToCart">
                    <input type="hidden" name="' . $oneProduct['barcode'] . '"
                </form>';
                }
                ?>
            </tbody>
        </table>
        <hr>

    <?php
    }
    ?>

</body>

</html>