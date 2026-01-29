<?php

$x = 5; 

function myTest(){
//  Global Variables declared outside of the local scope cannot have access to the global Scope.
  echo "Variable x inside function is: $x";
}

myTest();

echo "Variable x outside function is: $x";