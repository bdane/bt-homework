<?php

function drugiZadatakSaKamionima($ukupnoGorivo, $potrosnjaPoKamionu, $ostatakGorivaFlag = 0)
{
    if ($ostatakGorivaFlag) {
        $ostatakGoriva = "Goriva je ostalo " . ($ukupnoGorivo % $potrosnjaPoKamionu) . " litara";
        return $ostatakGoriva;
    } else {
        $brojKamionaKojiMoguDaPredjuRutu = $ukupnoGorivo / $potrosnjaPoKamionu;
        return "Broj kamiona koji mogu da predju rutu je " . floor($brojKamionaKojiMoguDaPredjuRutu);
    }
}

echo drugiZadatakSaKamionima(120, 33, true) . "<br>";
echo drugiZadatakSaKamionima(120, 33) . "<br>";
