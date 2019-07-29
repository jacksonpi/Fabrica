<?php

 Interface CarroBuilder {

     public function buildMotor($motor);
     public function buildFreio($freio);
     public function buildAno($ano);
     public function buildModelo($modelo);
     public function buildNitroxido($nitroxido);
     public function buildNitroQT($nitroQT);
     public function buildSuspensao($suspensao);
     public function buildpneus($pneus=[]);
     public function buildVelocidadeAtual($velocidadeAtual);

     function getCarro();

 }

?>