<?php 

class Adolescent extends personne{
    private int $age;
    private string $loisir;

    public function __construct($nom,$prenom,$age,$loisir){
        parent::__construct($nom,$prenom);
        $this->age=$age;
        $this->loisir=$loisir;
    }
    public function getInfo(){
        echo "Nom : ".$this->nom."<br>";
        echo "Préom : ".$this->prenom."<br>";
        echo "Age : ".$this->age."<br>";
        echo "Loisir : ".$this->loisir."<br>";
    }
}