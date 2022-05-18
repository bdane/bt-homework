<?php

$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
var_dump($hwArray);
echo "<br><br>";

// a.
echo "a.<br>";
echo "Dodao \"Branko\" na poslednje mesto.<br>";
$hwArray[] = "Branko";
var_dump($hwArray);
echo "<br><br>";

// b.
echo "b.<br>";
echo "Dodao \"Milos\" na 3. mesto.<br>";
array_splice($hwArray, 2, 0, "Milos");
var_dump($hwArray);
echo "<br><br>";


// c.
echo "c.<br>";
echo "Trenutno je " . count($hwArray) . " ucenika";
echo "<br><br>";

//d.
echo "d.<br>";
echo "Dodao \"Sima\" na prvo mesto.<br>";
array_unshift($hwArray, "Sima");
var_dump($hwArray);
echo "<br><br>";

//e.
echo "e.<br>";
echo "Obrisao \"Danilo\".";
for ($i = 0; $i < count($hwArray); $i++) {
    if ($hwArray[$i] == "Danilo") {
        unset($hwArray[$i]);
    }
}

$hwArray1 = array_values($hwArray);
echo "<br>";
$hwArray = $hwArray1;
var_dump($hwArray);
echo "<br><br>";

//f.
echo "f.<br>";
echo "Obrisao sva dupla imena.<br>";
for ($i = 0; $i < count($hwArray); $i++) {
    for ($j = 0; $j < count($hwArray); $j++) {
        if ($i != $j) {
            if (!empty($hwArray[$i]) && !empty($hwArray[$j])) {

                if ($hwArray[$i] == $hwArray[$j]) {
                    unset($hwArray[$j]);
                }
            }
        }
    }
}

$hwArray = array_values($hwArray);
var_dump($hwArray);
echo "<br><br>Sada ima " . count($hwArray) . " ucenika";
