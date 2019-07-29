<?php

 class FreioFactory implements CreatorFactory {
  
    public function createPeca(){
       return new FreioABS();
     }

 }

?>