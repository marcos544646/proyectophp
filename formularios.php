<?php
    //recuperar datos enviados por el metodod POST
    @$nombre = $_POST [´nombre´];
    @$correo = $_POST[´correo´];

    echo "El nombre introducido es: " . $nombre . "<br";
    echo "El nombre introducido es: " . $correo . "<br";
    ?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type= ´text´ name="nombre" placeholder=´Nombre...´/>
        <input type= ´email´ name="correo" placeholder=´Corrreo...´/>
        <input type= ´submit´ value=´Aceptar´/>
    </form>
</body>
</html>