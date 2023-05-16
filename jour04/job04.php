<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $arguments = [];
    foreach ($_POST as $argument => $valeur) {
        $arguments[] = [
            'argument' => $argument,
            'valeur' => $valeur
        ];
    }
    
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';
    foreach ($arguments as $argument) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($argument['argument']) . '</td>';
        echo '<td>' . htmlspecialchars($argument['valeur']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
