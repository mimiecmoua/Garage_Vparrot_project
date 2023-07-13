# Garage_Vparrot_project

Le garage V. parrot est un site web présentant des services de réparation et des véhicules d'occasion disponible à la vente.

# # Environnement de développement

Symfony 6

# # # Pré-requis

    * PHP 8.0.28 (version 7.4 ou supérieur)
    * Composer (gestionnaire de dépendances pour php)
    * Symfony CLI
    * nodejs et npm (gestionnaire de paquets JavaScript)

Vous pouvez vérifier les pré-requis avec la commande
suivante (dans le CLI Symfony):

```shell
symfony check:requirements
```

# # # Lancer l'environnement de développement en local

Ce guide fournit les étapes nécessaires pour exécuter localement du site.

```shell
php
composer install
npm install
npm run build
synfomy serve -d
```

## Cloner le dépôt GitHub du projet sur votre machine en utilisant la commande suivante :

```bash
$ git clone < https://github.com/mimiecmoua/Garage_Vparrot_project.git >
```

## Utilisation

Une fois le projet correctement installé, vous pouvez le lancer en
utilisant le serveur de développement intégré de Symfony :

```shell
Symfony server:start -d
```

## Création du back-office

page de connexion

```shell
symfony console make:controller => SecurityController => login.html.twig

Identité user avec le bundle controller
symfony console make:controller => RegistrerController => template -> registrer -> index.html.twig
symfony console make:controller => RegistrerController => template -> account -> index.html.twig


Formulaire registrer
Règle de validation
form twig + bootstrap => vue twig du formulaire
Règle de sécurité inscription lié à la connexion
L'authentification pour user => RegisterType
Création controller du compte => Accountcontroller.php
Modification des règles de sécutrité pour accéder à la page "compte".
```

Back-office avec EasyAdmin

Installation de bundle EasyAdmin dans mon projet Symfony

````shell
symfony composer require easycorp/easyadmin-bundle


Une fois le bundle EasyAdmin installé, j'ai utilisé la commande Symfony pour générer le CRUD (Create, read, Update, Delete).

```shell
Symfony console make:admin:crud

La commande m'a guidé à travers le processus de génération de l'interface d'administration. J'ai spécifié les entités à administrer (dans ce cas, mes entité User, Service, Occasion, Horaire, Contact, Commentaire) et les champs que je souhaite afficher et gérer dans l'interface.

Une fois que j'ai répondu à toutes les questions, EasyAdmin a automatiquement généré les fichiers de configuration et de code nécessaires pour l'interface d'administration de mes entités.

J'ai ouvert mon navigateur et accédé à l'URL de mon application suivie de /admin. Par exemple, si mon application est en cours d'exécution sur http://localhost:8000, j'ai ouvert http://localhost:8000/admin.

Maintenant, je vois l'interface d'administration générée par EasyAdmin pour mes entités, mais je devais trouver un solution pour implenter mes formulaires déjà existant.

J'ai donc configurer mon DashboardController.php avec une fonction configureMenuItems() et ainsi créer des liens avec le CRUD "linkToCrud".
J'ai également sécurisé l'accés aux données via le use  Trait\UpdateTrait et use Trait\ReadOnlyTrait.

 J'ai maintenant un administrateur fonctionnel pour le back-office de mon application Symfony grâce à EasyAdmin. Je peux étendre ces fonctionnalités pour d'autres entités en utilisant la même approche. J'ai consulté la documentation d'EasyAdmin pour en savoir plus sur ses fonctionnalités avancées.


### Resources supplémentaires

"Tutoriel Filtrer des annonces dans un projet Symfony
Grafikart < https://grafikart.fr/tutoriels/filtre-1071#autoplay >"
````
