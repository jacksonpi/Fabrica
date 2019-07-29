<?php

 Class CarroPopular extends Carro {

    private  $motor;
    private  $freio;
    private  $ano;
    private  $modelo;
    private  $nitroxido;
    private  $nitroQT;
    private  $suspensao;
    private  $pneus = [];
    private  $velocidadeAtual;
    
    function construct($motor,$freio,$ano,$modelo,$nitroxido,$nitroQT,
        $suspensao, $pneus = [],$velocidadeAtual){
            $this->motor=$motor;
            $this->freio=$freio;
            $this->ano=$ano;
            $this->modelo=$modelo;
            $this->nitroxido=$nitroxido;
            $this->nitroQT=$nitroQT;
            $this->suspensao=$suspensao;
            $this->pneus=$pneus=[];
            $this->velocidadeAtual=$velocidadeAtual;
    }

      function getMotor(){
          return $this->motor;
      }
      function getFreio(){
        return $this->freio;
      }
      function getAno(){
        return $this->ano;
      }
      function getModelo(){
        return $this->modelo;
      }
      function getNitroxido(){
        return $this->nitroxido;
      }
      function getNitroQT(){
        return $this->nitroQT;
      }
      function getSuspensao(){
        return $this->suspensao;
      }
      function getpneus(){
        return $this->pneus;
      }
      function getVelocidadeAtual(){
        return $this->velocidadeAtual;
      }
    public function acelerar()
    {}

    public function freiar()
    {}



 }

?>