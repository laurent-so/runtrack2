<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "2206";
$dbname = "jour09";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT COUNT(*) as nb_etudiants FROM etudiants";
    $resultat = $connexion->query($requete);

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre d'étudiants</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    echo "<tr>";
    echo "<td>" . $row['nb_etudiants'] . "</td>";
    echo "</tr>";
    
    echo "</tbody>";
    echo "</table>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>