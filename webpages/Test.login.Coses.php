<html>
<head>
<title>Gratificaciones</title>
<h1>Gratificaciones tus datos se almacenaron correctamente xd<h1>
</head>
<body>
<?php

print_r($_POST, false);
if (isset($_POST["name"])){
    $nom = $_POST["name"];
    setcookie("usuari",$nom,time()+60*60*24*30);


}

if (isset($_POST["email"])){
    $email = $_POST["email"];
    setcookie("Email",$email,time()+60*60*24*30);

}

if (isset($_POST["password"])){
    $password = $_POST["password"];

    setcookie("Password", password_hash($_POST["password"],PASSWORD_DEFAULT),time()+60*60*24*30);
}
$datos = '<div style="color:red;"><h2 style="text-align:center;" >Nombre: '.$nom .' </h2>';
echo $datos;
$datos = '<h2 style="text-align:center;" >Correo: '.$email .'</h2></div>';
echo $datos;
?>
</body>
</html>
