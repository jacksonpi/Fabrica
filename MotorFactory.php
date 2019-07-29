<?php

 Class MotorFactory implements CreatorFactory {

    public function createPeca(){
       return new Motor1pontoZero();
    }
   

 }

?>