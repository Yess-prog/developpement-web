<?php

class salarie{
    
    private int $code;
    private string $nom;
    private string $prenom;
    private float $salaire;
    private float $indemnité;

    public function __construct($code,$nom,$prenom,$salaire,$indemnité){
        $this->code=$code;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->salaire=$salaire;
        $this->indemnité=$indemnité;
        
    }
    public function calculSalaire(){
        return $this->indemnité+$this->salaire;
    }
    public function infosSalarie(){
        return "code : ".$this->code."\nnom : ".$this->nom."\nprenom : ".$this->prenom."\nsalaire : ".$this->salaire."\nindemnité : ".$this->indemnité;
    }
}