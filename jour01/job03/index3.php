<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Job00</title>
    </head>
    <body>
<?php
$bool_var = false;
$int_var = 22;
$string_var = "Salut!";
$float_var = 49.3;
echo "<table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>boolean</td>
                <td>bool_var</td>
                <td>".($bool_var ? 'true' : 'false')."</td>
            </tr>
            <tr>
                <td>integer</td>
                <td>int_var</td>
                <td>".$int_var."</td>
            </tr>
            <tr>
                <td>string</td>
                <td>string_var</td>
                <td>".$string_var."</td>
            </tr>
            <tr>
                <td>float</td>
                <td>float_var</td>
                <td>".$float_var."</td>
            </tr>
        </tbody>
    </table>";
?>
</body>
</html>
