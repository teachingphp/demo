<html>
<head>
    <title>Login</title>
</head>
<body>
<h1 style="text-align:center;" >gracias por registrarte,ahora eres un verdadero americano.</h1>
<?php

    
$nom ="";

    //print_r($_POST, false);
    if (isset($_POST["usuari"])){
        $doxeado = $_POST["usuari"];
        setcookie("username", $doxeado, time()+60*60*24*30);
    //$nom_usuari = $_COOKIE["username"];
    }
print_r($_COOKIE, false);

    if (isset($_POST["ap"])){
        $apellido = $_POST["ap"];
    }

    if (isset($_POST["tcredit"])){
        $targeta = $_POST["tcredit"];
    }
    $direccion="";
    if (isset($_POST["dip"])){
        $direccion = $_POST["dip"];
    }
    
    $datos = '<div style="color:red;"><h2 style="text-align:center;" >tu nombre: '.$nom .' </h2>';
    echo $datos;

?>
    
    <h2 style="text-align:center;" >El senador armstrong le da la mano por su servicio al pais.</h2>
    <div style="text-align:center;">
        <img style="center;" src="https://c.tenor.com/myeWUifwsVMAAAAC/armstrong-armstrong-handshake.gif" alt="Senador" width="300" height="300">

    </div>
    <audio controls autoplay>
    <source src="../recursos/te voy a descuartizar.mp3" type="audio/mpeg">
    
</audio>
</body>
</html>