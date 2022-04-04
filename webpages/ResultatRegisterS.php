<!DOCTYPE html>
<html>
    <head>
        <body>
        <title>Gràcies ;D</title>
        <h1 style="color:aquamarine">Moltes Gràcies</h1>
        
        <p>En uns segons serás redirigit, gràcies per la paciencia.</p>
<?php
echo "<img src='../recursos/will-smith-chris-rock-28032022-2.gif'>";
setcookie("Usuari",$_POST["name"],time()+60*60*24*30);
setcookie("Contra",$_POST["password"],time()+60*60*24*30);
setcookie("Gènere",$_POST["gender"],time()+60*60*24*30);
?>