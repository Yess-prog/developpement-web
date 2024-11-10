<?php 
class Adulte extends personne{
    private string $metier;
    private float $salaire;

    public function __construct($nom,$prenom,$metier,$salaire){
        parent::__construct($nom,$prenom);
        $this->metier=$metier;
        $this->salaire=$salaire;
    }
    public function getInfo(){
        echo "Nom : ".$this->nom."<br>";
        echo "Préom : ".$this->prenom."<br>";
        echo "Métier : ".$this->metier."<br>";
        echo "Salaire : ".$this->salaire."<br>";
    }
}