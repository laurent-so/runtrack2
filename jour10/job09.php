<?php
$servername = "localhost";
$username = "root";
$password = "2206";
$dbname = "jour09";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT * FROM salles ORDER BY capacite DESC";
    $resultat = $connexion->query($requete);

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nom</th>";
    echo "<th>id_etage</th>";
    echo "<th>Capacité</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['id_etage'] . "</td>";
        echo "<td>" . $row['capacite'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>