<?php
$servername = "localhost";
$username = "root";
$password = "2206";
$dbname = "jour09";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
    $resultat = $connexion->query($requete);
    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    $capacite_moyenne = $row['capacite_moyenne'];

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Capacité moyenne</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $capacite_moyenne . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>