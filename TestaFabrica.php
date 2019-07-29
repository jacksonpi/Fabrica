<?php
  
  require 'Montadora.php'; require 'MotorFactory.php'; require 'SuspensaoFactory.php';
  require ''
  require 'Modelo.php';
  require 'Revenderor.php';

  $montadora = new Montadora("Montadora A");
  $modelo = new Modelo('Palio',$montadora);
  




 // echo($montadora->getNome());

  echo "Teste Rodando!";

?>