<?php
require_once "compte.php";
class compteEpargne extends Compte{
    private float $Taux_interet;
    public function __construct(string $name, float $mnt, float $tx){
        parent::__construct($name,$mnt);
        $this->Taux_interet=$tx;
    }
    public function verserTaux(){
        $this->solde+=$this->solde*$this->Taux_interet;
    }
}