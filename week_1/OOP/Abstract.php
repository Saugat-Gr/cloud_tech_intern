<?php

abstract class Person{

   public $name; 

//     Abstract Function: A function logically not defined but inherting class must implement these functions.
   abstract public function intro();

}


class Student extends Person{

   public function __construct($name){
      $this->name = $name;
   }

//     Implementing Abstract Functions:
   public function intro(){
      echo "Your name is $this->name.";
   }

}


/*
NOTES:

The child class method must be defined with the same name and it redeclares the parent abstract method
The child class method must be defined with the same or a less restricted access modifier
The number of required arguments must be the same. However, the child class may have optional arguments in addition

*/

$student1 = new Student("Cloud Tech");
$student1->intro();