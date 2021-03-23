<?php

class Person {

    private $name;
    private $age;

    function __construct($name, $age){
        $this->name = $name; 
        $this->age = $age;
}
    
    function getName(){
        return $this->name;
    }

    function setName($name){
            $this->name = $name;
    }

    function getAge(){
        return $this->age;
    }

    function setAge($age){
        $this->age = $age;
    }

}

$people = array(
    new Person("Jonas", 66),
    new Person("Petras", 77),
    new Person("Antanas", 33)
    );

    // išvardinti visus žmones
    foreach($people as $person){
        print($person->getName() . ' is ' . $person->getAge() . " years old.<br>");
    }

    echo '<br>';

    // išrikiuoti pagal amžių ir išvardinti
    sort($people);
    foreach($people as $person){
        print($person->getName() . ' is ' . $person->getAge() . " years old.<br>");
    }