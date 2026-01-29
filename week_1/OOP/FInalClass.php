<?php

final class Student{

 public $name; 

 public function __construct($name){
     $this->name = $name;
 }

 public function displayDetails(){
    echo "Your name is $this->name.";
 }

}

$student1 = new Student("Cloud Tech");
$student1->displayDetails();