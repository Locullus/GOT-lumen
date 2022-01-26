# Game of Thrones

Ceci est une petite encyclopédie à propos d'un petit bouquin méconnu, mais qui monte. Il parait qu'une série télé est en préparation !

Elle se compose de 4 pages : 
- La [page d'accueil](docs/screens/home.png) montrant l'ensemble des personnages.
- La [page personnage](docs/screens/character.png) montrant les informations d'un personnage.
- La [page des maisons](docs/screens/houses.png) listant les maisons (familles) des personnages.
- La [page d'une maison](doc/../docs/screens/house.png) montrant les personnages appartenant à une maison donnée.
  

Pour réaliser ces pages, j'ai utilisais les outils suivants : 
- PHP & MySQL
- HTML & CSS
- Le mini-framework Lumen pour structurer l'appli & l'ORM Eloquent pour gérer les échanges avec la BDD

Après avoir créer la base avec adminer et un user dédié, il suffit de faire un import du fichier SQL qui se trouve dans `docs/got.sql`. Cette base contient toutes les informations nécessaires.

## Installation 

- composer install pour installer les dépendances;
- Configurez _Lumen_ (`.env`) avec les infos de la BDD précédemment créée;
- lancer un serveur php :

```bash
$ php -S localhost:5000 -t public
```
