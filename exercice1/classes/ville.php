<?php
class ville {
    private string $nom;
    private string $gouvernerat;
    public function __construct(string $n ,string $g){
        $this->gouvernerat=$g;
        $this->nom=$n;
    }
    public function get_info(){
        return "Nom de la ville : ".$this->nom."\nGouvernerat : ".$this->gouvernerat;
    }
    public function __toString()
    {
        return "Nom de la ville : ".$this->nom."\nGouvernerat : ".$this->gouvernerat;
    }
}






