<?php

$nekiNiz = array(
    'name' => 'Branko',
    'last_name' => 'Radojevic',
    'gender' => 'male'
);

function keyFinder($nekiAsNiz, $someKey)
{
    foreach ($nekiAsNiz as $key => $value) {
        if ($key == $someKey) {
            return "Kljuc postoji.";
        } else {
            return "Kluc ne postoji";
        }
    }
}

var_dump($nekiNiz);
echo "<br>";
echo keyFinder($nekiNiz, "gender");
echo "<br>";
echo keyFinder($nekiNiz, "age");

foreach ($nekiNiz as $key => $value) {
    echo "<br>" . $key . "<br>";
    if ($key == "gender") {
        echo "Kljuc postoji.";
    } else {
        echo "Kluc ne postoji";
    }
}
