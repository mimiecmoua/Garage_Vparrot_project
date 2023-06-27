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

```bash
symfony check:requirements
```

# # # Lancer l'environnement de développement

```bash
composer install
npm install
npm run build
doccker-compose up -d
synfomy serve -d
```

# # Lancer des test

```bash
php bin/phpunit --testdox
```
