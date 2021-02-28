<!-- Jei norime išvardinti visus narius atskiriant juos kableliais: (pvz: 1, 2, 3), tačiau nenorime turėti nereikalingų kablelių pradžioje (pvz: , 1, 2, 3), bei pabaigoje (pvz: 1, 2, 3, ). Kaip tai pasiekti? Atlikite su paprastu indeksiniu masyvu bei su asociatyviuoju masyvu.
 -->

<?php

    $indexedArray = [0, 1, 2, 3, 4, 5, 6];

    $arraySeparatedWithCommas = implode(', ', $indexedArray);
    echo $arraySeparatedWithCommas;

    echo '<br>';

    $assocArray = ['John' => 11, 'Joe' => 22, 'Mar' => 33, 'Pet' => 44];

    $numItems = count($assocArray);
    $i = 0;

    foreach ($assocArray as $key => $value) {
        if(++$i === $numItems) {
            echo "$key -> {$value}";
        } else {
            echo "$key -> {$value}, ";
        }
    }