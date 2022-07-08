<?php

include_once './models/m-newsletter.php';

$headerTitle = "NEWSLETTER";


$newsletter = "";
$infoMsg = "Email is not valid!";



if (isset($_POST['newsletter']) && !empty($_POST['newsletter']) && str_contains($_POST['newsletter'], '@')) {
    $newsletter = $_POST['newsletter'];
    $newSubscriber = new Newsletter($newsletter);
    if (empty($newSubscriber->getOneSubscriber())) {
        $newSubscriber->setSubscriber();
        $infoMsg = "Thank you for subscribe!";
    } else {
        $infoMsg = "This email is already exists!";
    }
}

/* HEADER */
require __DIR__ . "/views/_layout/v-header.php";

/* PAGE */
require __DIR__ . "/views/v-newsletter.php";

/* FOOTER */
require __DIR__ . "/views/_layout/v-footer.php";
