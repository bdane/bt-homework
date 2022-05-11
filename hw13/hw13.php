<?php

function pBazen($x, $y)
{
    $p_pb = $x * $y;
    return number_format($p_pb, 2);
}

function oBazen($r)
{
    $p_ob = ($r ** 2) * pi();
    return number_format($p_ob, 2);
}

function vBazen($a, $b)
{
    $p_vb = pBazen($a, $b) + oBazen($b / 2) / 2;
    return number_format($p_vb, 2);
}

function zbirPovrsina($x, $y, $r, $a, $b)
{
    $p_zbir = pBazen($x, $y) + oBazen($r) + vBazen($a, $b);
    return $p_zbir;
}

$x = 4;
$y = 3.5;
$r = 2.5;
$a = 5;
$b = 4.5;

echo "<p>Povrsina pravougaonog bazena duzine " . $x . "m i sirine " . $y . "m je " . pBazen($x, $y) . "m<sup>2</sup>.</p>";
echo "<p>Povrsina okruglog bazena poluprecnika " . $r . "m je " . oBazen($r) . "m<sup>2</sup>.</p>";
echo "<p>Povrsina velikog bazena duzine " . $a . "m i sirine " . $b . "m je " . vBazen($a, $b) . "m<sup>2</sup>.</p>";
echo "<p>Ukupna povrsina sva tri bazena je " . zbirPovrsina($x, $y, $r, $a, $b) . "m<sup>2</sup>.</p>";
