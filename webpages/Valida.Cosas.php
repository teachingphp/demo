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
        $missatge == "Mateix usuari";

    }
    else
    {
        $missatge == "Error ERES un BOT LOLAAAASO PUTO";
        echo $missatge;

    }
    if($_POST["gmail"] === $_COOKIE["Email"])
    {
        $gmail = $_POST["gmail"];

        $missatge == "Mateix email";
        
    }
    else
    {
        $missatge == "Error ERES un BOT O Tonto LOLAAAASO PUTO";
        echo $missatge;

    }





?>

</body>
</html>