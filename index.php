<?php
$email = $_REQUEST[email];
$password = $_REQUEST[contraseña];

if ($email = "juan@gmail.com" && $password = "juan"){
    
}

echo '<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="encabezado">
        <h1>LOG IN</h1>
    </div>
    <form method="post" action="" name="login-form">
        <div class="elemento-form">
            <input type="text" name="email" placeholder="EMAIL" required />
        </div>
        <div class = "elemento-form">
            <input type="password" name="contraseña" placeholder="PASSWORD" required />
        </div>
        <button type="submit" name="login" value="login">LOG IN</button>
    </form>
</body>
</html>';
