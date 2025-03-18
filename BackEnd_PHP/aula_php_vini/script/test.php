<?php
echo "Olá Mundo";

$repetir = true;
$vezes = 10;
$contador = 1;
while ($repetir == true) {
    echo "<p>Estou Repetindo</p>";
    if ($contador == $vezes) {
        //break
        $repetir = false;
    }
    $contador++;
}
?>