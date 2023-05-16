<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreArguments = count($_POST);
    echo 'Nombre d\'arguments : ' . $nombreArguments;
}
?>
