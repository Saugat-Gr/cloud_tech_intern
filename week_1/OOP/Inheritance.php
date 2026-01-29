<?php

class Animals{
      public $name;
      public $species;

      public function __construct($name, $species){
          $this->name = $name;
          $this->species = $species;
      }


      public function displayDetails(){
          echo "Name: $this->name \n
          Species: $this->species";
      }
}


class Lion extends Animals{

     public function __construct(){
        parent::__construct("Lion", "Mammal");
     }


}

$lion1 = new Lion();
$lion1->displayDetails();