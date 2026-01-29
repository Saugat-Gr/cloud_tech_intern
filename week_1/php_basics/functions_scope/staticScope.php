<?php

function scopeTest(){

 static $x = 1;
 echo $x . "\n";
 $x++;

}

scopeTest();
scopeTest();
scopeTest();