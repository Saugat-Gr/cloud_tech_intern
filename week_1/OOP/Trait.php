<?php

trait FirstTrait{
      public function message1(){
         echo "Hello from Message1.";
      }

      public function message2(){
         echo "Hello From Message2.";
      }
}


class ImplementTrait{

  use FirstTrait;


}

$impl = new ImplementTrait();
$impl->message1();
$impl->message2();