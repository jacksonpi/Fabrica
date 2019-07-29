<?php

  Class SuspensaoFactory implements CreatorFactory{

    public function createPeca(){
        return new SuspensaoMultilink();
     }
  }

?>