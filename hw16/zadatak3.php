<?php

$nekiNiz = array(
    'name' => 'Branko',
    'last_name' => 'Radojevic',
    'gender' => 'male'
);

function keyFinder($nekiAsNiz, $someKey)
{
    $temp = false;
    foreach ($nekiAsNiz as $key => $value) {
        if ($key == $someKey) {
            $temp = true;
        }
    }
    if ($temp) {
        return "<p>\"" . $someKey . "\"" . " kljuc postoji.</p>";
    } else {
        return "<p>\"" . $someKey . "\"" . " kljuc ne postoji.</p>";
    }
}

var_dump($nekiNiz);

echo keyFinder($nekiNiz, "gender");

echo keyFinder($nekiNiz, "age");
