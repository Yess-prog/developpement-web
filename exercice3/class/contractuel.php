<?php
require_once "salarie.php";
class Contractuel extends salarie{
    private DateTime $date_contrat;
    private string $type;

    public function __construct($code,$nom,$prenom,$salaire,$indemnité,$date_contrat,$type){
        parent::__construct($code,$nom,$prenom,$salaire,$indemnité);
        $this->date_contrat=$date_contrat;
        $this->type=$type;
    }
    public function infosSalarie(){
        
        return"date contrat : ".$this->date_contrat."\ntype : ".$this->type."\n".parent::infosSalarie();
    }

}