<?php
session_start();

$headerTitle = "HOME";


/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-index.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
