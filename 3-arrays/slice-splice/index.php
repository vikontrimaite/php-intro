<?php

$numbersArray = [6, 7, 8, 1];

print_r($numbersArray) . '<br>';
var_dump($numbersArray) . '<br>';

print '-- <br>';

// array_splice($numbersArray, 2); // ištrina viską nuo 2 elemento iki galo
// var_dump($numbersArray);

print '-- <br>';

array_splice($numbersArray, 1, -1); // ištrina viską nuo 1 elemento iki -1 (paskutinio) elemento
var_dump($numbersArray);

// array_splice — Remove a portion of the array and replace it with something else
// array_slice — Extract a slice of the array (nuo nurodyto elemento iki kito nurodyto elemento; arba jei tik viena pozcija nurodyta - tada iki jos pabaigos)
