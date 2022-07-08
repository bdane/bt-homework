<?php
session_start();

include_once './models/m-products.php';

$headerTitle = "SHOP";

$products = new Products();
$searchMsg = "";
//$itemsPerRow = 3;

/* echo "<pre>";
var_dump($_GET);
echo "</pre>"; */

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $term = $_GET['search'];
    if (count($products->productSearch($term)) > 0) {
        $availableProducts = $products->productSearch($term);
    } else {
        $searchMsg = "No search result!";
        $availableProducts = $products->getAvailableProducts();
    }
} else {
    $availableProducts = $products->getAvailableProducts();
}

/* if (isset($_GET['woman']) && isset($_GET['man'])) {
    echo "Ovo je proslo!";
} else {
    echo "Ovo nije proslo!";
} */

if (isset($_GET['woman']) && isset($_GET['man'])) {
    $availableProducts = $products->getAvailableProducts();
} elseif (isset($_GET['woman']) && !isset($_GET['man'])) {
    $availableProducts = $products->getByCategory('woman');
} elseif (isset($_GET['man']) && !isset($_GET['woman'])) {
    $availableProducts = $products->getByCategory('man');
} else {
    $availableProducts = $products->getAvailableProducts();
}

if (!empty($_GET['order-by']) && $_GET['order-by'] != NULL) {
    switch ($_GET['order-by']) {
        case 'name-asc':
            $availableProducts = $products->sortByTitleASC();
            break;
        case 'name-desc':
            $availableProducts = $products->sortByTitleDESC();
            break;
        case 'price-asc':
            $availableProducts = $products->sortByPriceASC();
            break;
        case 'price-desc':
            $availableProducts = $products->sortByPriceDESC();
            break;
        default:
            $availableProducts = $products->getAvailableProducts();
    }
}


/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-shop.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
