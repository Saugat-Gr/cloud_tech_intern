<?php

//  Creating A Class in PHP:

class Fruit{

// Defining Properties and Properties access methods:
public $name; 
public $color; 


//  Methods:
function set_details($name, $color){
     $this->name = $name;
     $this->color = $color;
}


function get_details() {
    echo "Name: " . $this->name . ". Color: " . $this->color .".\n";
}
}

//  Creating Object i.e instance from the class
$apple = new Fruit();
$apple->set_details("apple", "red");
$apple->get_details();