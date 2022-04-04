<?php


?>

<html>
    <head>
        <body>
        <title>Registrat o Inicia Sessió</title>
        <h1 style="color:mediumturquoise">Registrat o Inicia Sessió</h1>
        
        <p>Requereix aquestes dades:</p>
    <form action="../estructures/Tonteria.php" method="post">
        Usuari <input type="text" name="name"><br><br>
        Email <input type="text" name="email"><br><br>
        Contrasenya <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Envia">
    </form>