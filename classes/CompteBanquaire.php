<?php

// Création d'une classe CompteBanquaire
class CompteBanquaire {
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    // Construction de la classe CompteBanquaire
    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire)
    $this->libelle = $libelle;
    $this->solde = $solde;
    $this->devise = $devise;
    $this->titulaire = $titulaire;
    
    // Création des getters/setters
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        
        return $this;
    }
    
    public function getSolde()
    {
        return $this->solde;
    }
    
    public function setSolde($solde)
    {
        $this->solde = $solde;
        
        return $this;
    }

    public function getDevise()
    {
        return $this->devise;
    }
    
    public function setDevise($devise)
    {
        $this->devise = $devise;
        
        return $this;
    }

    // Création methode pour faire un dépôt d'argent
    public function depot() {
        
    }

    // Création methode pour retirer de l'argent
    public function retrait() {

    }

    // Création methode virement
    public function virement() {

    }

    // Création d'une méthode toString pour récuperer les informations d'un compte banquaire, notamment nom et prénom
    public function() {

    }
}

    