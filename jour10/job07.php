<?php
$servername = "localhost";
$username = "root";
$password = "2206";
$dbname = "jour09";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT SUM(superficie) as superficie_totale FROM etage";
    $resultat = $connexion->query($requete);

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Superficie totale des étages</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    echo "<tr>";
    echo "<td>" . $row['superficie_totale'] . "</td>";
    echo "</tr>";

    echo "</tbody>";
    echo "</table>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>