# MADERA
[![codecov](https://codecov.io/gh/LesEsperluettes/MADERA/branch/master/graph/badge.svg?token=DMBYUSEV4I)](https://codecov.io/gh/LesEsperluettes/MADERA)
![CI Testing](https://github.com/LesEsperluettes/MADERA/workflows/CI%20Testing/badge.svg)

# Dépendances
* Git
* PHP >= 7.3
* composer
* npm
* une base de donnée mysql

# Procédure d'installation
1. Clonez le projet `git clone https://github.com/LesEsperluettes/MADERA.git`
2. Copiez le `.env.example` en `.env` et modifiez les lignes suivantes
    * `DB_HOST` : Adresse de votre base de donnée mysql
    * `DB_PORT` : Port de votre base de donnée
    * `DB_DATABASE` : Nom de la base de donnée
    * `DB_USERNAME` : utilisateur de la base
    * `DB_PASSWORD` : mot de passe de la base
    
3. Installez les dépendances avec les commandes suivantes :
    * `composer install`
    * `npm install && npm run dev`
    
4. Initialisez votre base de donnée avec les commandes suivantes :
    * `php artisan key:generate`
    * `php artisan migrate:fresh --seed`
    
5. Démarrez votre serveur web ou utilisez `php artisan serve`

# Comptes par défaut
Afin de développer / tester plus facilement, 3 comptes utilisateurs sont crée par défaut :
* email : `admin@madera.fr` mdp : `password` => Accès au coté administrateur de l'application
* email : `be@madera.fr`    mdp : `password` => Accès au coté Bureau d'étude de l'application
* email : `co@madera.fr`    mdp : `password` => Accès au coté commercial de l'application
