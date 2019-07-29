<?php

  Class SuspensaoFactory implements CreatorFactory{

    public function createPeca(){
      echo 'Suspensão criada!'; echo "<br>";
        return new SuspensaoMultilink();
     }
  }

?>