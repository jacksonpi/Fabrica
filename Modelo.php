<?php

  Class Modelo {

    private $nome;
    private $montadora;

    public function __construct($nome,$montadora){
        $this->nome=$nome;
        $this->montadora=$montadora;
    }

    function getNome(){
    	return $this->nome;
    }
    
    function getMontadora(){
    	return $this->montadora;
    }


  }

?>