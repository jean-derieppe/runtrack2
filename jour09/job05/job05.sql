/* selectionne le prenom, nom, date de naissance, dans la table étudiants pour le sexe féminin */  
SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `sexe` = 'femme';