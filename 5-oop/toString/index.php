<?php

class People {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __toString() {
        return $this->name;
    }
}

$person = new People('Joe');

// be __toString() šituo būdu galima gauti $person vardą 'Joe'
echo $person->name;

// esant __toString() užtenka tiek:
echo $person;