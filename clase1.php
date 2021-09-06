<?php

    echo '¡Hola mundo!';

    echo "<br>";
    $num1 = 2;
    $num2 = 2220;
 
    $suma = $num1 + $num2; 
 
    echo 'La suma es ' . $suma;
echo "<br>";
echo 'Hecho con while <br/>';
$i = 1;
while($i<=10){
    echo $i . ' ';
    $i++;
}

echo "<br>";

echo '<table border=1>';

echo '<tr>';
echo '<td>X</td>';

for ($i=1; $i <= 10; $i++) {
    echo '<td>';
    echo $i;
    echo '</td>';
}
echo '</tr>';

for ($i=1; $i <= 10; $i++) {
echo '<tr>';
echo '<td>';
echo $i;
echo '</td>';


for ($j=1; $j <= 10; $j++) {
    echo '<td>';
    echo $i * $j;
    echo '</td>';
}
echo '</tr>';
}
echo '</table>';
?>


