<?php

class Example{
      const message = "This is a constant message";
}


/*

NOTES:
Class constants are useful if you need to define some constant data within a class.

A class constant has a fixed value, and cannot be changed once it is declared.

A class constant is declared inside a class with the const keyword.

The default visibility of class constants is public.

*/

echo Example::message;