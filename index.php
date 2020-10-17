<?php
session_start();//primera sentencia para trabajar con sesiones
if(isset($_REQUEST['login'])){
    $_SESSION['email']=htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
    $email=htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
    $password=htmlspecialchars($_REQUEST['contraseña'], ENT_QUOTES, 'UTF-8');
    if($email="juan@gmail.com" && $password="juan"){
        header('Location:menu.php');
    }
}else{
echo '<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>LOG IN</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="encabezado">
        <h1>LOG IN</h1>
    </div>
    <form method="post" action="index.php" name="login-form">
        <div class="elemento-form">
            <input type="text" name="email" placeholder="EMAIL" required />
        </div>
        <div class = "elemento-form">
            <input type="password" name="contraseña" placeholder="PASSWORD" required />
        </div>
        <input type="submit" name="login" value="LOG IN">
    </form>
</body>
</html>';
}
