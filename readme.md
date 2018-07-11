# Projet Web Cuisine 

## A propos de ce projet 

Site web avec template pour cuisiniste , et interface d'administration ( mini-CMS ).

## Installation du projet 

###### clonage du projet :
```
git clone git@github.com:NicolasFerreira/web-cuisine.git 
```

###### installation des dépendances :
```
npm install 

composer install 
```

###### initialisation de la base de donées : 

Créer une base de données Mysql , puis copier le .env.example et renommer le fichier copier en .env , pour finir modifier les paramètres en fonction de votre configuration : 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

###### initialisation clé projet ( laraval ) :

```
php artisan key:generate
```

###### création des tables de la database ( migrations et seeders ): 

```
php artisan migrate

composer dump-autoload

php artisan db:seed
```

###### liaison storage et public ( gestion des images ) :

```
php artisan storage:link
```

###### demarrage du serveur : 

```
php artisan serve
```

###### compilation des assets ( sass / js si mode dev ) : 

```
npm run watch
```

###### accès au compte admin : 

Suivre ce lien : http://localhost:8000/admin 

Se connecter avec les identifiants suivant : 
- Mail : 'admin@gmail.com'
- Mdp : 'admin' 