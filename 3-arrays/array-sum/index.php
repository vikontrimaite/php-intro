<?php

$indexedArray = [2, 3, 5, 4, 6, 7];

print "indexedArray sum is " . array_sum($indexedArray) . '<br>';
print "the min value of indexedArray is " . min($indexedArray) . '<br>';
print "the min value of indexedArray is " . max($indexedArray) . '<br>';

print '<br>';

$associativeArray = ["John"=>"1", "Joe"=>"2", "Mary"=>"4"];

print "associativeArray sum is " . array_sum($associativeArray) . '<br>';
print "the min value of associativeArray is " . min($associativeArray) . '<br>';
print "the min value of associativeArray is " . max($associativeArray) . '<br>';