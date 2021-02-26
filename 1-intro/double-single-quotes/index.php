<?php

$catName = 'Ivanas';

echo '<h1>' . $catName . '</h1> <br>'; # jeigu norime atprintinti variable ir dar kažkokį tekstą, tai tada reiks šitaip. geriau tokiu atveju naudoti double-q
echo '<h1>', $catName, '</h1> <br>'; # pasirodo galima ir taip, bet tokio pavyzdžio ten nebuvo
echo "<h1>$catName</h1> <br>"; # reikia naudoti double-q, nes turime variable
echo "Best cat is {$catName}Didysis. <br>"; # tik su double-q galima šitaip įterpinėti dalykus

echo '--- Also cool tip: <br>'; # čia nėra variable, tai galima single-q ir visokius <br> įterpinėti lengvai
echo 'Za\'atar is a Middle Eastern spice mix.'; 