<?php
  
  require 'Montadora.php'; require 'MotorFactory.php'; require 'SuspensaoFactory.php';
  require 'Modelo.php'; require 'FreioFactory.php'; require 'PneuFactory.php';
  require 'Revendedor.php'; require 'Motor1pontoZero.php'; require 'SuspensaoMultiLink.php';
  require 'FreioABS.php'; require 'CarroLuxoBuilder.php'; require 'GeneratorCarro.php';

  $montadora = new Montadora("Montadora A");

  //FABRICANDO PEÇAS -----------------------------------------------------------------------------------
  $modelo = new Modelo('Palio',$montadora);
  $motor1pontoZero = new MotorFactory(); $motor1pontoZero->createPeca();
  $suspensaoMultilink = new SuspensaoFactory(); $suspensaoMultilink->createPeca();
  $freioABS = new FreioFactory(); $freioABS->createPeca();
  //Criando Pneus
  $pneuOffRoad1 = new PneuFactory();
  $pneuOffRoad2 = new PneuFactory();
  $pneuOffRoad3 = new PneuFactory();
  $pneuOffRoad4 = new PneuFactory();
  $pneus=[];
  $pneus[0]=  $pneuOffRoad1;
  $pneus[1]=  $pneuOffRoad2;
  $pneus[2]=  $pneuOffRoad3;
  $pneus[3]=  $pneuOffRoad4;

  //----------------------------------------------------------------------------------------------------

  //MONTANDO CARRO exemplo de criação de carro de luxo
  $carroBuilder = new CarroLuxoBuilder();
  $generatorCarro = new GeneratorCarro($carroBuilder);
  $carroLuxo = $generatorCarro->generateCarro($motor1pontoZero,$freioABS,"2019",$modelo,
true,true,$suspensaoMultilink,$pneus,0);

  echo($montadora->getNome());

  echo "Teste Rodando!";

?>