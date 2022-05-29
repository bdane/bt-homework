<?php

require_once __DIR__ . "/models/m-products.php";

$systemMessage = "PAGE NOT FOUND 404!!!";

if (empty($_GET['page'])) {
    die($systemMessage);
} else {
    $productId = $_GET['page'];
}

$getProduct = getSingleProductById($allProducts, $productId);

if (!$getProduct) {
    die($systemMessage);
}

$nextProduct = getNextProduct($allProducts, $productId);
$prevProduct = getPrevProduct($allProducts, $productId);

$relatedProducts = getRelatedProducts($allProducts, $getProduct);



/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-single-product.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
