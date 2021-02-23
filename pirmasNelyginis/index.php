<?php

$nuo = 55;
$iki = 155;

for ($i = $nuo; $i <= $iki; $i++) {
    if (!$i % 2 == 0) {
        print 'Pirmas skaicius, kuris yra nelyginis, tarp skaiciu ' . $nuo . ' ir ' . $iki . ' yra ' . $i;
        break;
    }
}