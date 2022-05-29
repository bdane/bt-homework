<?php

require_once __DIR__ . "/models/m-products.php";

$filter = "";
$sort = "";

if (!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}

$products = getAvailableProducts($allProducts);

if ($filter != "") {
    $filteredProducts = getFilteredByTitle($products, $filter);
}

/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-products.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
