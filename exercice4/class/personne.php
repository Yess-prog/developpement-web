<?php 
require_once "adulte.php";
require_once "adolescent.php";
abstract class personne{
    protected  string $nom;
    protected  string $prenom;

    public function __construct($nom,$prenom){
        $this->nom=$nom;
        $this->prenom=$prenom;
    }
    abstract function getInfo();
}