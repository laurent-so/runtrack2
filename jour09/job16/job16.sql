SELECT etage.nom, salles.nom AS "Biggest Room" FROM salles INNER JOIN etage ON salles.id_etage = etage.id 
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles)