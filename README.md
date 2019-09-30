# Projet : Charte des apprenant.e.s

## Pitch

Créer une version web de la charte co-construite des apprenant.e.s

## Objectives

- Introduction au maquettage

- Mise en pratique du HTML

  - Structure d'une page
  - Balises sémantiques
  - Bonnes pratiques

- Mise en pratique du PHP

  - Mise en pratique des concepts de base de la programmation
  - Syntaxe du langage
  - Interactions PHP / HTML : inclusion d'un script PHP

- Travail sur les bases de données

  - Découverte de la syntaxe SQL
  - Création d'une DB
  - Création d'une table
  - Requêtes SQL
  - Connexion à une DB depuis un script PHP

- Mise en pratique du CSS
  - Sélecteurs CSS
  - Syntaxe CSS
  - Bonnes pratiques

## How ?

- projet individuel en groupe d'entraide

## Steps

### Step #0 : `create your file structure`

> dossier_du_projet
>
> > index.html
>
> > style.css
>
> > db.php

### Step #1 : `create your HTML page`

- Création d'une structure de page HTML basique
  - maquettage type [wireframe](<https://fr.wikipedia.org/wiki/Wireframe_(design)>)
  - intégration `HTML`, balises [meta](https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta) et [meta viewport](https://developer.mozilla.org/fr/docs/Mozilla/Mobile/Balise_meta_viewport) essentielles et lien vers fichier CSS [externe](https://developer.mozilla.org/fr/docs/Web/HTML/Element/link)
- Création de la structure du `body` en utilisant les [balises sémantiques](https://developer.mozilla.org/fr/docs/Web/HTML/Element) `HTML5`
- Intégration du contenu
  - Titre de la page
  - Thèmes de la charte
    - Points principaux
  - Formulaire de signature en [`POST`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Form) pointant vers le fichier `PHP` qui va le traiter
    - balise de zone de saisie utilisateur
    - balise de soumission du formulaire
  - Zone d'affichage de la liste des signataires
- [Validation](https://validator.w3.org/) du code HTML

### Step #2 : `PHP`

- Création d'un script PHP [externe](https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/inclure-fichier-include-require/) permettant de [parcourir](https://www.guru99.com/php-loop.html) le [tableau](https://www.php.net/manual/en/language.types.array.php) des signataires
- [Affichage](https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/afficher-resultat-echo-print/) du nom des signataires dans la zone prévue de la page `HTML`

### Step #3 : `SQL`

- Connexion au serveur de BDD MySQL en [ligne de commande](https://doc.ubuntu-fr.org/mysql)
- [Création](https://devhints.io/mysql) d'une BDD : `charte`
- Création d'une table : `apprenants`
  - `id` INT PRIMARY KEY AUTO_INCREMENT
  - `name` VARCHAR(100)
  - `signed` DATETIME DEFAULT CURRENT_TIMESTAMP

### Step #4 : `PHP again`

- Création du script PHP de connexion à la BDD avec [PDO](https://www.geeksforgeeks.org/what-is-the-difference-between-mysql-mysqli-and-pdo/)
- Création des requêtes pour afficher et insérer des données

### Step #5 : `CSS`

- Be creative !

# Have fun !