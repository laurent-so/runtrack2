<?php
session_start();

if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
    
    if(isset($_SESSION['prenoms'])){
        $_SESSION['prenoms'][] = $prenom;
    } else {
        $_SESSION['prenoms'] = array($prenom);
    }
}

if(isset($_POST['reset'])){
    $_SESSION['prenoms'] = array();
}

if(isset($_SESSION['prenoms'])){
    echo "<h3>Liste des prénoms saisis :</h3>";
    echo "<ul>";
    foreach($_SESSION['prenoms'] as $prenom){
        echo "<li>$prenom</li>";
    }
    echo "</ul>";
}
?>

<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Ajouter">
</form>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser la liste">
</form>
