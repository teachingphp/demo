<!DOCTYPE html>
<html>
    <head>
        <body>
        <title>Gràcies ;D</title>
        <h1 style="color:aquamarine">Moltes Gràcies</h1>
        
<?php
 //print_r($_POST, false);
    echo "Gràcies " . $_POST["Usuari"] . ", en uns segons serás redirigit, gràcies per la paciencia.";

echo "<img src='../recursos/will-smith-chris-rock-28032022-2.gif'>";
setcookie("Usuari",$_POST["Usuari"],time()+60*60*24*30);
setcookie("Contra",password_hash($_POST["Contra"], PASSWORD_DEFAULT) ,time()+60*60*24*30);
setcookie("Gènere",$_POST["gender"],time()+60*60*24*30);
?>
<script type="text/javascript" src="../recursos/CosoJS.js"></script>
