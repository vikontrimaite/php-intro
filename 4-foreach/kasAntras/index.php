<!-- Matėme kaip išvardinti kiekvieną masyvo narį. Kaip reiktų išvardinti kas antrą? Atlikite su paprastu indeksiniu masyvu bei su asociatyviuoju masyvu. -->

<?php

$indexedArray = [100, 7, 2, 99, 11, 879, 77];

$counter = 0;

foreach ($indexedArray as $key) {
    if ($counter % 2 == 0) {
        echo "$key<br>";
    }
    $counter++;
}

echo '<br>';

$assocArray = ['John' => 11, 'Joe' => 22, 'Mar' => 33, 'Pet' => 44, 'Zan' => 66];

$counter = 0;

foreach ($assocArray as $key => $value) {
    if ($counter % 2 == 0) {
        echo "$key -> $value<br>";
    }
    $counter++;
}