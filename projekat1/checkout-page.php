<?php

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
}

if (!empty($_POST['last_name'])) {
    $name = $_POST['last_name'];
}




/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-checkout.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
