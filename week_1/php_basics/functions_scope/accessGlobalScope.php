<?php

$x = 1;
$y = 2;

function sumGlobalVar(){

 global $x, $y;

 echo $x + $y;

}

sumGlobalVar();