# Garage_Vparrot_project

Le garage V. parrot est un site web présentant des services de réparation et des véhicules d'occasion disponible à la vente.

# # Environnement de développement

# # # Pré-requis

    * PHP 8.0.28
    * Composer
    * Symfony CLI
    * Docker
    * Docker-compose
    * nodejs et npm

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande
suivante (de le CLI Symfony):

```shell
symfony check:requirements
```

# # # Lancer l'environnement de développement

```shell
composer install
npm install
npm run build
docker-compose up -d
synfomy serve -d
```

# # Lancer des test

```bash
php bin/phpunit --testdox
```

### Création d'un administrateur pour le back-office de l'application web

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
