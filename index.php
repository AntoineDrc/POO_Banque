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