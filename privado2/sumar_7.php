<?php
include 'menu.php';

$suma = 0;
$dado1 = 0;
$dado2 = 0;
$contador = 0;

while ($suma = 7){
    $dado1 = rand(1,6);
    $dado2 = rand(1,6);
    $suma = $dado1 + $dado2;
    $contador++;
}

switch ($dado1){
    case 1:
        echo '<img src="img/uno.jpg" alt="Uno" width="150" height="150">';
        break;
    case 2:
        echo '<img src="img/dos.jpg" alt="Dos" width="150" height="150">';
        break;
    case 3:
        echo '<img src="img/tres.jpg" alt="Tres" width="150" height="150">';
        break;
    case 4:
        echo '<img src="img/cuatro.jpg" alt="Cuatro" width="150" height="150">';
        break;
    case 5:
        echo '<img src="img/cinco.jpg" alt="Cinco" width="150" height="150">';
        break;
    case 6:
        echo '<img src="img/seis.jpg" alt="Seis" width="150" height="150">';
        break;
}

switch ($dado2){
    case 1:
        echo '<img src="img/uno.jpg" alt="Uno" width="150" height="150">';
        break;
    case 2:
        echo '<img src="img/dos.jpg" alt="Dos" width="150" height="150">';
        break;
    case 3:
        echo '<img src="img/tres.jpg" alt="Tres" width="150" height="150">';
        break;
    case 4:
        echo '<img src="img/cuatro.jpg" alt="Cuatro" width="150" height="150">';
        break;
    case 5:
        echo '<img src="img/cinco.jpg" alt="Cinco" width="150" height="150">';
        break;
    case 6:
        echo '<img src="img/seis.jpg" alt="Seis" width="150" height="150">';
        break;
}

echo 'Se han necesitado:'. $contador . ' intentos';
?>
