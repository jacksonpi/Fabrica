<?php

 class FreioFactory implements CreatorFactory {
  
    public function createPeca(){
      echo 'Freio Criado!'; echo "<br>";
       return new FreioABS();
     }

 }

?>