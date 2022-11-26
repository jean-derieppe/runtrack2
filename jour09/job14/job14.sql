/* sélectionne prenom, nom et date de naissance "DE" étudiants "OU" naissance est situé "ENTRE" 1998 "ET" 2018. */
SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-12-31'
/*  SANS L'AJOUT D'UNE DATE PRECISE MYSQL RETOURNE UN RESULTAT VIDE */