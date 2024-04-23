<h1>Exercice Banque</h1>

<p>
    Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
    et leurs comptes bancaires respectifs.
    Un compte bancaire est composé des éléments suivants :
    Un libellé (compte courant, livret A, ...)
    Un solde initial
    Une devise monétaire
    Un titulaire unique
    Un titulaire comporte :
    Un nom
    Un prénom
    Une date de naissance
    Une ville
    L'ensemble de ses comptes bancaires.
    Sur un compte bancaire, on doit pouvoir :
    Créditer le compte de X euros
    Débiter le compte de X euros
    Effectuer un virement d'un compte à l'autre.
    On doit pouvoir :
    Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes
    appartenant à celui(celle)-ci.
    Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du
    titulaire du compte.
</p>

<?php

// Cette commande sert à charger les classes présentes dans un autre script
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Instanciation de Titulaire
$titulaire1 = new Titulaire("Delubriac", "Antoine", "29-11-1989", "Strasbourg");

// Instanciation de CompteBancaire
$compte1 = new CompteBancaire("Livret A", 0.00, "EUR", $titulaire1);
$compte2 = new CompteBancaire("Compte courant", 0.00, "EUR", $titulaire1);

echo $compte1->depot(100) . "<br>";
echo $compte1->virement($compte2, 50.00) . "<br>";
echo $titulaire1 . "<br>";
echo $compte2;
