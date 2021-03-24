<?php

class Employee extends Person {
    
    private $badgeId;

    public function __construct($fn, $ln, $bi){
        parent::__construct($fn, $ln); // super();
        $this->badgeId = $bi;
    }

    public function getBadgeId(){
    return $this->badgeId;
    }

    public function printHello() {
        echo 'Hello! ';
    }
    
}
