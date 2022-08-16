<?php

include_once './models/m-single-product.php';

if (empty($_GET['page'])) {
    header('Location: ./page-not-found.php');
} else {
    $barcode = $_GET['page'];
}


$singleProduct = new SingleProduct();
$product = $singleProduct->getOneProductByBarcode($barcode);


if (empty($product['barcode'])) {
    header('Location: ./page-not-found.php');
}

$nextProduct = $singleProduct->getNextProduct($barcode);
$prevProduct = $singleProduct->getPrevProduct($barcode);


/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-single-product.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
