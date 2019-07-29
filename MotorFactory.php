<?php

include 'CreatorFactory.php';

 Class MotorFactory implements CreatorFactory {

    public function createPeca(){
      echo 'Motor Criado!'; echo "<br>";
       return new Motor1pontoZero();
    }
   

 }

?>