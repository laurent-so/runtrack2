<?php
function calcule($num1, $operation, $num2) {
    switch ($operation) {
        case '+':
            $resultat = $num1 + $num2;
            break;
        case '-':
            $resultat = $num1 - $num2;
            break;
        case '*':
            $resultat = $num1 * $num2;
            break;
        case '/':
            $resultat = $num1 / $num2;
            break;
        case '%':
            $resultat = $num1 % $num2;
            break;
        default:
            $resultat = "Opération non valide";
            break;
    }
    
    return $resultat;
}

echo calcule(89, '+', 65); 
echo "<br>"; 
echo calcule(12, '*', 3); 
echo "<br>"; 
echo calcule(23, '/', 9); 
?>
