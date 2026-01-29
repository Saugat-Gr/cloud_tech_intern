<?php

class Transport{

 public $transportMedium; 
 public $transportType;

 public function __construct($transportMedium, $transportType){
       $this->transportMedium = $transportMedium;
       $this->transportType = $transportType;
 }

 public function displayDetails(){
      echo "Tranport Medium: $this->transportMedium \n
      Transport Type: $this->transportType";
 }

}


class Car extends Transport{
      public $carModel; 

      public function __construct($transportMedium, $transportType, $carModel){
          parent::__construct($transportMedium, $transportType);
          $this->carModel = $carModel;
      }

    public function displayDetails(){
      echo "Tranport Medium: $this->transportMedium \n
      Transport Type: $this->transportType\n
      Car Model: $this->carModel";
 }
}

$car1 = new Car("Roads", "Fuel","Toyota");
$car1->displayDetails();