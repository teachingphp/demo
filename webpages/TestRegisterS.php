<?php


?>

<html>
    <head>
        <body>
        <title>Registrat</title>
        <h1 style="color:mediumturquoise">Registrat</h1>
        
        <p>Requereix aquestes dades:</p>
    <form action="../estructures/Tonteria.php" method="post">
        Usuari <input type="text" name="name"><br><br>
        Email <input type="email" name="email"><br><br>
        Contrasenya <input type="password" name="password"><br><br>
        Gènere:<br>
        <input type="radio" name="gender" value="Dona">Dona
        <input type="radio" name="gender" value="Home">Home
        <input type="radio" name="gender" value="Altres">Altres
        <br><br>
        <input type="submit" name="submit" value="Envia">
    </form>