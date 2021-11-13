# Test technique IAD

## Consignes :

```
1. Pas de Front - Les API doivent pouvoir être utilisées avec Postman par exemple

2. Data Contact : Nom / Prénom / Email / Adresse / Téléphone / Age

3. Mettre en place, autant que faire se peut, une vérification de la saisie

4. Format de sortie : JSON

5. PHP 7 minimum - POO obligatoire

6. MySQL ou PostgreSQL au choix

7. Framework recommandé : Symfony 4 minimum (le choix peut être de ne pas utiliser de framework, auquel cas il faudra construire votre propre architecture, à votre convenance, et justifier votre choix)

8. L'utilisation de Github est bienvenue ; 1 push d'initialisation et 1 push de fin au minimum ; attention au nom de branche et messages de commit

9. L'utilisation de normes comme PSR2 est un plus

10. L'utilisation de design patterns est un plus

11. L'utilisation de namespace est un plus

12. Les API Rest sont un plus

13. La documentation est un plus

14. Le SQL est aussi important que le PHP
```
## Ce qui a été fait :

composer require-api
Modification dans api_platform.yaml
composer require symfony/maker-bundle --dev
php bin/console make:entity (Contact)
composer require migrations
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console php bin/console doctrine:migrations:migrate
composer require symfony/validator doctrine/annotations

Essai d'ajout (réussi)
Problème rencontré : 
```
{
  "Nom": "string",
  "Prenom": "string",
  "Email": "user",
  "Adresse": "string",
  "Telephone": "string",
  "Age": 0,
  "nom": "string",
  "prenom": "string",
  "email": "user2@example.com",
  "adresse": "string",
  "telephone": "string",
  "age": 0
} 
```

Seule la partie avec 
``` 
"nom": "string",
  "prenom": "string",
  "email": "user2@example.com",
  "adresse": "string",
  "telephone": "string",
  "age": 0
  ```
  est envoyée en base de données, et est dupliquée avec la versions avec majuscule (raison pas encore trouvée)

  Création (réussie)
  Lecture (réussie)
  Suprression (réussie)
  Update (réussie)

## La DB contient donc :
   Nom (string de 50 caractères maximum)
   Prénom (string de 50 caractères maximum)
   Email (string de 50 caractères maximum, avec vérification que ce soit bien une adresse mail entrée, du moins contient un @)
   Adresse (string de 255 caractères maximum)
   Téléphone (string de 15 caractères maximum)
   Age (integer de 3 chiffres maximum)

pour les contacts.

Testé avec postman (donne le résultat)

# Installation 

La base de données peut-être utilisée avec MAMP/WAMP/LAMP (ou alors régler le fichier .env avec les informtions de la DB existantes)

Avec la ligne de commande, aller dans le dossier cloné "test-technique-iad" entrer `composer install` puis `symfony serve`, puis `php bin/console doctrine:database:create` ensuite `php bin/console make:migration` puis `php bin/console php bin/console doctrine:migrations:migrate` , enfin aller sur `https://127.0.0.1:8000/api` 

## Horaires passé sur l'exercice :
14h-15h (absence de 10 minutes)
15h10-15h56 (recharge du PC jusqu'à 17h08)
17h08-18h04
