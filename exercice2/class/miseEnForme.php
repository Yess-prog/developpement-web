<?php

class MiseEnForme{
    private string $chaine;

    
    public function gras(string $ch){
        
        return "<strong>$ch</strong>";
    }
    public function italique(string $ch){
        return "<i>$ch</i>";
    }
    public function souligne(string $ch){
        return "<u>$ch</u>";
    }
    public function majuscule(string $ch){
        return strtoupper($ch);
    }
}