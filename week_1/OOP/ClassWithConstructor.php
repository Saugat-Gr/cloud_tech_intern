<?php

class Person{

public $name;
public $age;

public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
}

public function displayDetails(){
      echo "Your name is $this->name.\n Your age is $this->age.\n";
}

}


$person1 = new Person("Saugat Gurung", 21);
$person1->displayDetails();