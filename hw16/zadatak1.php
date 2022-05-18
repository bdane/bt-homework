<?php

$nizEmailova = array("asdf@gmail.com", "asdf@hotmail.com", "asdf.email.com", "asdf@yahoo.com");

function proveraEmailova($nekiNizEmailova)
{
    for ($i = 0; $i < count($nekiNizEmailova); $i++) {
        if (!str_contains($nekiNizEmailova[$i], "@")) {
            unset($nekiNizEmailova[$i]);
        }
    }
    $nekiNizEmailova = array_values($nekiNizEmailova);
    return $nekiNizEmailova;
}
var_dump($nizEmailova);
echo "<br>";
var_dump(proveraEmailova($nizEmailova));
