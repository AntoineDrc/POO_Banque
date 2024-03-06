<?php

// Création d'une classe Titulaire
class Titulaire {
    // Propriétés privées de la classe
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes; // Ce tableau contiendra les comptes associés au titulaire


    // Constructeur de la classe Titulaire, il est appelé à chaque création d'un nouvel objet Titulaire
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
    // Initialisation des propriétés avec les valeurs fournies lors de la création de l'objet
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = new DateTime($dateNaissance);
    $this->ville = $ville;
    $this->comptes = []; // Initialisation du tableau de comptes en tant que tableau vide
    
    }

    // Création des getters/setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance()
    {   
        return $this->dateNaissance->format("d/m/Y");
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getComptes()
    {
        return $this->comptes;
    }

    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }

    // Création d'une méthode pour calculer l'âge
    public function getAge() {
        $dateActuelle = new DateTime();
        $age = date_diff($dateActuelle, $this->dateNaissance);
        return $age->y;
    }

    // Création méthode pour ajouter un compte au titulaire
    public function ajouterCompte(CompteBancaire $compte) {
        // Ajout du compte à la liste des comptes
        $this->comptes[] = $compte;
    }
    
    // Création d'une méthode toString pour récuperer toutes les informations d'un titulaire (dont l'âge) et l'ensemble des comptes apparenant à celui-ci
    public function __toString() {
        $info = $this->nom . " " . $this->prenom . " " . $this->getAge() . " ans<br>";
        foreach($this->comptes as $compte) {
            $info .= $compte->__toString();
        }
        return $info;
    }
}