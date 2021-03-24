<?php
    
    class Head {
    }
    
    class Human {
        private $head;
        public function __construct(Head $head) {
           $this->head = $head;
        }
    }
    
    $bob = new Human(new Head);