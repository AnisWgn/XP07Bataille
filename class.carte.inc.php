<?php
class Carte {
    private $couleur;
    private $figure;
    
    public function __construct($pCouleur, $pFigure) {
        $this->couleur = $pCouleur;
        $this->figure = $pFigure;
    }
    
    public function getCouleur() {
        return $this->couleur;
    }
    
    public function getFigure() {
        return $this->figure;
    }
    
    public function getNom() {
        return $this->figure . " de " . $this->couleur;
    }
    
    public function getValeur() {
        switch($this->figure) {
            case "As":
                return 14;
            case "Roi":
                return 13;
            case "Dame":
                return 12;
            case "Valet":
                return 11;
            default:
                return intval($this->figure);
        }
    }
    
    public function isAtout($couleurAtout) {
        return $this->couleur === $couleurAtout;
    }
}