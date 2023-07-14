
# ECF Garage V. Parrot

![logo garage](images/GarageLogo.png)

### Application conçue dans le cadre de ma formation chez Studi.
### Le garage V. Parrot est un site web présentant des services de réparation et des véhicules d'occasion disponible à la vente.


## Tester en local

Cloner le projet

```bash
  git clone https://github.com/mimiecmoua/Garage_Vparrot_project.git
```

Aller dans le répertoire du projet

```bash
  cd garage_vparrot_project
```

Installer les dépendances

```bash
  php
  compser install  
  npm install
  composer require symfony/webpack-encore-bundle
  npm run build
  symfony serve -d
```

Démarrer le serveur

```bash
  symfony server:start -d
```


## Auteur

- [@EmilieDion](https://github.com/mimiecmoua/Garage_Vparrot_project.git)


## Deploiement

Pour déployer le projet sur ... voici les commandes à taper

```bash
  npm run deploy
```


## Création du back-office avec easyAdmin

### Installation du bundle EasyAdmin dans mon projet Symfony.

```shell
  symfony composer require easycorp/easyadmin-bundle
```
### Une fois le bundle EsayAdmin installé, j'ai utilisé la commande Symfony pour générer le CRUD (Create, Read, Update, Delete).

```shell
symfony console make:admin:CRUD
```
### La commande m'a guidée à travers le processus de génération de l'interface d'administration. J'ai spécifiée les entités à administrer (dans ce cas, mes entités User, Service, Occasion, Horaire, contact, Commentaire) et les champs que je souhaite afficher dans l'interface.

### Une fois que j'ai répondu à toutes les questions, EasyAdmin a automatiquement généré les fichiers de configuration et de code nécessaires pour l'interface d'administration de mes entités.

### J'ai ouvert mon navigateur et accédé à l'URL de mon application suivie de /admin. Par exemple, si mon application est en cours d'exécution sur  http://localhost:8000, j'ai ouvert http://localhost:8000/admin.

### Maintenant, je vois l'interface d'administration générée par EasyAdmin pour mes entités, mais je devais trouver une solution pour implanter mes formulaires déjà existants.

### J'ai donc configuré mon DashboardController.php avec une fonction configureMenuItems() et ainsi créer des liens avec le CRUD "linkToCrud".

### J'ai également sécurisé l'accès aux données en créant un dossier Trait puis en créant deux fichiers ReadOnlytrait.php et UpdateTrait.php. 


### J'ai maintenant un administrateur fonctionnel pour le back-office de mon application Symfony grâce à EasyAdmin. Je peux étendre ces fonctionnalités pour d'autres entités en utilisant la même approche. J'ai consulté la documentation d'EasyAdmin pour en savoir plus sur ses fonctionnalités avancées.
    