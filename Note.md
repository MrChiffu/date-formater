/**
 * pas d'Entité ou Repo parce que pas de BDD 
 * Le tableau sera transfo en objet pour le retour, on s'en sert que pour se faciliter le traitement de l'algo
 */


/**
 * Doit récupérer les infos de l'Angular et les renvoie une fois traités
 * Comment on fait ?
 */

/**
* fonction TranslateDate
* Algo pour traduire de l'arabe au romain :
* On fait un tableau associatif pour chaque chiffre romain avec le chiffre arabe qui correspond
* Pour les jours, mois et années même démarche -> 
*  - On soustrait le plus grand chiffre romain au chiffre arabe, si c'est supérieur ou égal à 0 on ajoute la lettre (500 par exemple -> 500 en romain M donc arabe-romain = 0, on ajoute un M et fini)
*  - Sinon on passe au chiffre suivant (si on remplace 500 par 501 alors les soustractions se feront jusqu'au chiffre 1 pour 1-1 = 0 soit le chiffre final MI)
*/