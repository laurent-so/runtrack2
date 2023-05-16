<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

for ($i = 0; $i < strlen($str); $i++) {
    if (ctype_alpha($str[$i])) {
        if (in_array(strtolower($str[$i]), array('a', 'e', 'i', 'o', 'u', 'y'))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>".$dic["voyelles"]."</td><td>".$dic["consonnes"]."</td></tr></tbody>";
echo "</table>";
?>
