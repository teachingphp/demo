<html>
<head>
    <title>Valida tu cuenta</title>
</head>
<body>


<?php

    //print_r($_POST,false);
    $missatge = "";
    if($_POST["usuari"] === $_COOKIE["usuari"])
    {
        $usuari = $_POST["usuari"];
        $missatge = "Mateix usuari";

    }
    else
    {
        $missatge = "Error ERES un BOT LOLAAAASO PUTO validacion de usuario incorrecta";
        echo $missatge;

    }
    if($_POST["gmail"] === $_COOKIE["Email"])
    {
        $gmail = $_POST["gmail"];

        $missatge = "Mateix email";
        echo " Ahora te mandaremos un correo electronico con la credenciales para cambiar la contraseña";
    }
    else
    {
        $missatge = " Error ERES un BOt validacion de gmail incorrecta";
        echo $missatge;

    }





?>

</body>
</html>