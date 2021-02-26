<?php

// PHP $GLOBALS
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

// $_SERVER
print '<br>' . $_SERVER['SERVER_NAME'];
print '<br>' . $_SERVER['SERVER_SOFTWARE'];
print '<br>' . $_SERVER['SERVER_PROTOCOL'];
print '<br>' . $_SERVER['REQUEST_METHOD'];
