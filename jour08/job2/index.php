<?php
if(isset($_COOKIE['nbvisites'])){
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + (86400 * 30), '/'); 
echo "Nombre de visites : " . $nbvisites;
if(isset($_POST['reset'])){
    setcookie('nbvisites', 0, time() - 3600, '/');
    $nbvisites = 0;
}
?>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
