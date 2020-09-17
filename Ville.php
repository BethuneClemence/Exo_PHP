<?php

class Ville{
    
    
    
    private $cp;
    private $nom;
    
    /**
     * 
     * @param type $cp:int
     * @param type $nom:String
     */
    
    public function __construct($cp, $nom){
        
        $this->cp = $cp;
        $this->nom = $nom;
    }
    
    public function getCp(){
        
        return $this->cp;
    }
    
    public function setCp($cp){
        
        $this->cp = $cp;
    }
    
    public function getNom(){
        
        return $this->nom;
    }
    
    public function setNom($nom){
        
        $this->nom = $nom;
    }


    public function toString(){

        return "Nom ville: ".$this->nom." Code postale: ".$this->cp;
    }
}
