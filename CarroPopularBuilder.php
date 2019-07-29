<?php

class CarroPopularBuilder
{
    
    private  $motor;
    private  $freio;
    private  $ano;
    private  $modelo;
    private  $nitroxido;
    private  $nitroQT;
    private  $suspensao;
    private  $pneus = [];
    private  $velocidadeAtual;
    
    public function buildMotor($motor)
    {
        $this->motor=$motor;
    }
    
    public function buildNitroxido($nitroxido)
    {
        $this->nitroxido=$nitroxido;
    }
    
    public function buildSuspensao($suspensao)
    {
        $this->suspensao=$suspensao;
    }
    
    public function buildFreio($freio)
    {
        $this->freio=$freio;
    }
    
    public function buildpneus($pneus = [])
    {
        $this->pneus=$pneus=[];
    }
    
    public function buildVelocidadeAtual($velocidadeAtual)
    {
        $this->velocidadeAtual=$velocidadeAtual;
    }
    
    public function buildModelo($modelo)
    {
        $this->modelo=$modelo;
    }
    
    public function buildAno($ano)
    {
        $this->ano=$ano;
    }
    
    public function buildNitroQT($nitroQT)
    {
        $this->nitroQT=$nitroQT;
    }
    
    public function getCarro()
    {
        return new CarroPopular($this->motor, $this->freio,$this->ano, $this->modelo,$this->nitroxido
            ,$this->nitroQT,$this->suspensao, $this->pneus,$this->velocidadeAtual);
    }
    
}

