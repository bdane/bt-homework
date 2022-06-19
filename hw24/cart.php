<?php
//include 'Product.php';
//include 'ShoppingCartItem.php';
include 'ShoppingCart.php';
include 'index.php';

/* Add To Cart */
$newCartItem = new ShoppingCart();
if (isset($_POST['addToCart'])) {
    if (!empty($_POST['name'])) {
        $addItemToCart = $_POST['name'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Your Cart</h1>
    </div>
    <div>
        <?php
        foreach ($newProduct->getAllProducts() as $product) {
            if ($product['barcode'] == $_POST['name']) {
                $newCartItem->addToCart($product);
                //header("Locations: ./index.php");
            }
        }
        if (isset($newCartItem) && count($newCartItem->getCartItems()) > 0) {
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
                    foreach ($newCartItem->getCartItems() as $oneCartProduct) {
                        echo "<tr><td>" . $oneCartProduct['barcode'] . "</td><td>" . $oneCartProduct['title'] . "</td><td>" . $oneCartProduct['price'] . "</td><td>" . $oneCartProduct['stock'] . "</td>";
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
</body>

</html>