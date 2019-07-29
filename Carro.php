<?php

 abstract Class Carro {
   
     //Definição dos objetos que devem ser construidos pelos Builders
     //----------------------------------------------------------------

     abstract function getMotor();
     abstract function getFreio();
     abstract function getAno();
     abstract function getModelo();
     abstract function getNitroxido();
     abstract function getNitroQT();
     abstract function getSuspensao();
     abstract function getpneus();
     abstract function getVelocidadeAtual();

     //-----------------------------------------------------------------

     abstract function acelerar();
     abstract function freiar();

 }


?>
