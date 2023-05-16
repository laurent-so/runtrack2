<?php

if (!empty($_GET)) {

  echo "<table>";

  echo "<tr><th>Argument</th><th>Valeur</th></tr>";

  foreach ($_GET as $argument => $valeur) {
    $argument = htmlspecialchars($argument, ENT_QUOTES, 'UTF-8');
    $valeur = htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8');
    echo "<tr><td>$argument</td><td>$valeur</td></tr>";
  }

  echo "</table>";

} else {
  echo "Il n'y a pas d'arguments dans la requête.";
}
?>
