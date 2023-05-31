<?php
$servername = "localhost";
$username = "root";
$password = "2206";
$dbname = "jour09";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
    $resultat = $connexion->query($requete);
    $etudiants = $resultat->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date de naissance</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($etudiants as $etudiant) {
        echo "<tr>";
        echo "<td>" . $etudiant['prenom'] . "</td>";
        echo "<td>" . $etudiant['nom'] . "</td>";
        echo "<td>" . $etudiant['naissance'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>