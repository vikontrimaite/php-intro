<?php

class Person {
		private $firstname; 
		private $lastname;
		
		public function __construct($fn, $ln){
		    $this->firstname = $fn;
		    $this->lastname = $ln;
		}
		
		public function getFirstname(){
		    return $this->firstname;    
		}
		
		public function getLastname(){
		    return $this->lastname;    
		}
   	}
   	