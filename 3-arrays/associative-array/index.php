<?php

$peopleWeight = ["Ana"=>"40", "John"=>"55", "Tom"=>"5"];

print "The person that weights the lowest is " . array_search(min($peopleWeight), $peopleWeight). ".<br>";
print "The person that weights the most is " . array_search(max($peopleWeight), $peopleWeight). ".<br>";

print "All people total mass is " . array_sum($peopleWeight). " kg. <br>";

$maxElevator = 500;
print "The maximium mass on elevator is " . $maxElevator . " kg." . "<br>";
if (array_sum($peopleWeight) < $maxElevator) 
{
    print "These people can use the elevator all together because their total mass is " . array_sum($peopleWeight) . " kg and it's lower than elevator's capacity which is " . $maxElevator . " kg! <br>";
}
else {
    print "These people can't use the elevator together. <br>";
} 

print "<strong>This is a list of all the people sorted by their weight (from min to max):</strong> <br>";
asort($peopleWeight);
foreach ($peopleWeight as $key => $value)
{
    print "Person " . $key . " weights " . $value . "<br>";
}


// good easy example
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";
// prints: Peter is 35 years old.