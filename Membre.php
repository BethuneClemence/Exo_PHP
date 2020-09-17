<?php

    class Membre{

        private $numero;
        private $prenom;
        private $ville;
        private $repas; // tableau

        public function __construct($numero, $prenom, $ville, $repas){

            $this->numero = $numero;
            $this->prenom = $prenom;
            $this->ville = $ville;
            $this->repas = $repas;
        }


        public function getNumero(){

            return $this->numero;
        }

        public function getPrenom(){

            return $this->prenom;
        }

        public function getVille(){

            return $this->ville;
        }

        public function setNumero($numero){

            $this->numero = $numero;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setVille($ville){
            $this->ville = $ville;
        }


        public function annuler(){
            return null;
        }

        public function organiser(){
            return null;
        }

        public function getRepas(){
            var_dump($this->reaps);
        }

        public function afficherRepas(){
            foreach($this->repas as $unRepas){
                // echo $unRepas->getNumero()." ".$unRepas->getNbCouverts();
                echo $unRepas->getNumero()."<br>";
            }
        }

    }
    
