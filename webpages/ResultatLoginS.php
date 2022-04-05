<!DOCTYPE html>
<html>
    <head>
        <title>Validate Login</title>
    </head>
    <body>

    </body>
<?php
$hash = '%242y%2410%24kNDKtEqfvc%2F7U7WwdARnjO5FIYXxj67fp78Fd5XNy8tJqTFTMwNKG';

if (password_verify($_POST["Contra"],$_COOKIE["Contra"])) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
$missatge_user ="";
if ($_POST["Usuari"] === $_COOKIE["Usuari"]){
    $missatge_user ="Benvingut " . $_POST["Usuari"] . '.';
}
    echo $missatge_user;

?>