<?php

// $animals = ['Giraffe', 'Cat', 'Dog', 'Zebra'];

// print asort($animals);

$cars = array("Volvo", "BMW", "Toyota");
// rsort($cars);

      print("...array filter <br>");
      $my_arr9 = [0,1,2,3,4,5]; 
      print_r($my_arr9); print('<br>');
      $filtered_array = array_filter($my_arr9, 'is_even');
      print_r($filtered_array); print('<br>');

      function is_even($var){
        if($var %  2 == 0)
          return true;
        else
          return false;
      }