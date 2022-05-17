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
    echo '¡La contrasenya es vàlida!';
    $AudioSuc = "../recursos/Success  Sound Effect.mp3";
echo '<audio style="display:none;" controls autoplay >
         <source src="'.$AudioSuc.'" type="audio/mpeg">
      </audio>';
} else {
    $AudioFail = "../recursos/Mario Party Miss Sound Effect.mp3";
echo '<audio style="display:none;" controls autoplay >
         <source src="'.$AudioFail.'" type="audio/mpeg">
      </audio>';
    echo 'La contrasenya no es vàlida.';
}
$missatge_user ="";
if ($_POST["Usuari"] === $_COOKIE["Usuari"]){
    $missatge_user ="Benvingut " . $_POST["Usuari"] . '.';
}
    echo $missatge_user;

?>