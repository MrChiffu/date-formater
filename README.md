# date-formater
 Recruitment Technical Test Project

## Créer un système qui transforme en chiffre romain une date écrite en chiffre arabe 

Exemple
```
25/12/1998 ==> XXV - XII - MCMXCVIII
19/02/2022 ==> XIX - II - MMXXII
```

Pour cela vous devrez :
- Créer une api en symfony qui devra répondre à la demande suivante: `GET /api/date-formater/arab-to-roman?date={date}`
- Puis dans un second temps vous créerez une application cliente Angular vous permettant de consommer votre api.


### Création projet Symfony
Pré-requis:
- Avoir la version *php 8.1* d'installé
- Avoir le gestionnaire de paquet php *composer* d'installé
Pour créer le projet
```
composer create-project symfony/skeleton:"^5.4" date-formater-api
```

### Création projet Angular
Pré-requis:
- Avoir *Node.js* d'installé en version 16.16.0 (LTS)
- Installer l'outil de ligne de commande Angular
```
npm install -g @angular/cli
```
Pour créer le projet:
```
ng new date-formater-webcli
à la question routing: YES
à la question style : SCSS
```
