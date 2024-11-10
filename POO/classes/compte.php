<?php
abstract class Compte{
    protected string $titulaire;
    protected float $solde;
    
    public function __construct(string $name,float $mnt) {
        $this->titulaire=$name;
        $this->solde=$mnt;     
    }
    public function __destruct(){
        echo("l'objet compte est détruit maintenant !!");
    }
    public function verser(float $mnt): void{
        if($mnt>0){
        $this->solde+=$mnt;}
        else{
            echo("<script>alert('montant invalide !');</script>");
        }
    }
    public function retirer(float $mnt): void{
        if($mnt>0 and $this->solde-$mnt>=0){
            $this->solde-=$mnt;}
            else throw new Exception("montant invalide !!!");
}
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }
    public function setTitulaire(string $titulaire): void
    {
        $this->titulaire = $titulaire;
    }
    public function getSolde(): float
    {
        return $this->solde;
    }
    public function setSolde(float $solde): void
    {
        $this->solde = $solde; 
    }
    /* public function __set($name,$value){
            $this->$name=$value;
    }
    public function __get($name){
        return $this->$name;
    }*/
    
}



