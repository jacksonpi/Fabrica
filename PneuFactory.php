<?php

include 'PneuOnRoad.php';

 class PneuFactory implements CreatorFactory {
  
    public function createPeca(){
        echo 'Pneu Criado!'; echo "<br>";
        return new  PneuOnRoad();
     }

 }

?>