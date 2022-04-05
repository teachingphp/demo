<html>
<head>
    <title>Valida tu cuenta</title>
</head>
<body>


<?php

    print_r($_POST,false);
    $missatge = "";
    if($_POST["usuari"] === $_COOKIE["name"])
    {
        $missatge == "Mateix usuari";

    }
    else
    {
        $missatge == "Error ERES un BOT LOLAAAASO PUTO";


    }
    if($_POST["gmail"] === $_COOKIE["email"])
    {
        $missatge == "Mateix email";
        echo "Ahora le enviamos un correo de validacion para cambiar la contraseña deseada";

    }
    else
    {
        $missatge == "Error ERES un BOT O Tonto LOLAAAASO PUTO";


    }





?>

</body>
</html>