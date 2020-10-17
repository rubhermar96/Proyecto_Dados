<?php
include 'menu.php';
if (isset($_REQUEST['comprobar'])){
    $dado1 = rand(1,6);
    $dado2 = rand(1,6);
    $dado3 = rand(1,6);
    $suma = $dado1+$dado2+$dado3;
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
    switch ($dado3){
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

    if (isset($_REQUEST['radio_par'])){
        if(($suma%2)==0){
            print 'HAS ACERTADO! LA SUMA ES PAR';
        }else{
            print 'NO HAS ACERTADO! LA SUMA ES IMPAR';
        }
    }else if (isset($_REQUEST['radio_impar'])){
        if(($suma%2)==0){
            print 'NO HAS ACERTADO! LA SUMA ES PAR';
        }else{
            print 'HAS ACERTADO! LA SUMA ES IMPAR';
        }
    }
    
}else{
echo '<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Par Impar/title>
</head>
<body>
    <form method="POST" action="par_impar.php" name="radio_button">
        <h2>¿Saldrá Par o Impar?</h2>
        <input type="radio" name="radio_par" value="par">
        <label for="radio_par">PAR</label><br>
        <input type="radio" name="radio_impar" value"impar">
        <label for="radio_impar">IMPAR</label><br>
        <input type="submit" value="Comprobar" name="comprobar">
    </form>
</body>
</html>';
}

