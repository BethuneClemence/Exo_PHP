<?php

class Repas{

    private $numero;
    private $nbcouverts;
    


    public function __construct($numero, $nbcouverts){
        
        $this->numero= $numero;
        $this->nbcouverts = $nbcouverts;
    }

    public function getNumero(){
        return $this->numero = $numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNbCouverts(){
        return $this->nbcouverts = $nbcouverts;
    }

    public function setNbCouverts($nbcouverts){
        $this->nbcouverts = $nbcouverts;
    }


}