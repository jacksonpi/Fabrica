<?php

 class PneuFactory implements CreatorFactory {
  
    public function createPeca(){
        return new  PneuOnRoad();
     }

 }

?>