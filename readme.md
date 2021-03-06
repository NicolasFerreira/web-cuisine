# Projet Web Cuisine 

## A propos de ce projet 

Site web avec template pour cuisiniste , et interface d'administration ( mini-CMS ).

## Installation du projet 

### clonage du projet :
```
git clone git@github.com:NicolasFerreira/web-cuisine.git 

cd web-cuisine
```

### installation des dépendances :
```
npm install 

composer install 
```

### initialisation de la base de donées : 

Créer une base de données Mysql , puis copier le .env.example et renommer le fichier copier en .env , pour finir modifier les paramètres en fonction de votre configuration : 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### initialisation clé projet ( laravel ) :

```
php artisan key:generate
```

### création des tables de la database ( migrations et seeders ): 

```
php artisan migrate

composer dump-autoload

php artisan db:seed
```

### liaison storage et public ( gestion des images ) :

```
php artisan storage:link
```

### demarrage du serveur : 

```
php artisan serve
```

### compilation des assets ( sass / js si mode dev ) : 

```
npm run watch
```

### accès au compte admin : 

Suivre ce lien : http://localhost:8000/admin 

Se connecter avec les identifiants suivant : 
- Mail : 'admin@gmail.com'
- Mdp : 'admin' 

## À vous de jouer 

Si toutes les étapes précedentes ont fonctionné vous pouvez dès à present naviguer dans une interface d'administration , changer la photo principale de la page d'accueil ou bien ajouter des réalisations , partenaires ... Gérer votre catalogue de cuisines, salles de bains ou rangements.

Attention pour l'envoie de mail vous devrez effectuer une configuration dans votre .env afin d'ajouter le système de mailing de votre choix ( voir doc sur laravel pour plus d'informations ).