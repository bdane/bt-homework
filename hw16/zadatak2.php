<?php

$nizBrojeva = [12, 4, 22, 2, 6];

function racunskeOperacije($nekiNizBrojeva, $operacija = "+")
{
    switch ($operacija) {
        case "+":
            $sum = 0;
            foreach ($nekiNizBrojeva as $broj) {
                $sum += $broj;
            }
            return "Zbir brojeva u nizu je " . $sum;
            break;
        case "-":
            $sum = 0;
            for ($i = 0; $i < count($nekiNizBrojeva); $i++) {
                if ($i == 0) {
                    $sum = $nekiNizBrojeva[$i];
                } else {
                    $sum -= $nekiNizBrojeva[$i];
                }
            }
            return "Razlika brojeva u nizu je " . $sum;
            break;
        case "*":
            $sum = 1;
            foreach ($nekiNizBrojeva as $broj) {
                $sum *= $broj;
            }
            return "Proizvod brojeva u nizu je " . $sum;
            break;
        case "/":
            $sum = 1;
            for ($i = 0; $i < count($nekiNizBrojeva); $i++) {
                if ($i == 0) {
                    $sum = $nekiNizBrojeva[$i];
                } else {
                    $sum /= $nekiNizBrojeva[$i];
                }
            }
            return "Kolicnik brojeva u nizu je " . number_format($sum, 2);
            break;

        default:
            return "Racunske operacije mogu biti +, -, * i /.";
    }
}

var_dump($nizBrojeva);
echo "<br>";
echo racunskeOperacije($nizBrojeva);
echo "<br>";
echo racunskeOperacije($nizBrojeva, "-");
echo "<br>";
echo racunskeOperacije($nizBrojeva, "*");
echo "<br>";
echo racunskeOperacije($nizBrojeva, "/");
