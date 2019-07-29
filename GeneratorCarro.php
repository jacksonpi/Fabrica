<?php

//include_once 'CarroBuilder.php';

class GeneratorCarro
{
    
    private $carroBuilder = CarroBuilder::class;
    
    public function __construct($carroBuilder){
        $this->carroBuilder=$carroBuilder;
    }
    
    public function generateCarro($motor,$freio,$ano,$modelo,$nitroxido,
        $nitroQT,$suspensao,$pneus=[],$velocidadeAtual){
        
      $this->carroBuilder->buildMotor($motor);
      $this->carroBuilder->buildFreio($freio);
      $this->carroBuilder->buildAno($ano);
      $this->carroBuilder->buildModelo($modelo);
      $this->carroBuilder->buildNitroxido($nitroxido);
      $this->carroBuilder->buildNitroQT($nitroQT);
      $this->carroBuilder->buildsuspensao($suspensao);
      $this->carroBuilder->buildPneus($pneus=[]);
      $this->carroBuilder->buildVelocidadeAtual($velocidadeAtual);
      
      $carro = $carroBuilder->getCarro();
            
    }
    
}

