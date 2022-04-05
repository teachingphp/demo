<?php


?>

<html>
    <head>
    <style>
        
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
        <body>
        <title>Registrat</title>
        <h1 style="color:mediumturquoise">Registrat</h1>
        
        <p>Requereix aquestes dades:</p>
    <form action="../webpages/ResultatRegisterS.php" method="post">
        Usuari <input type="text" name="Usuari"><br><br>
        Email <input type="email" name="email"><br><br>
        Contrasenya <input type="password" name="Contra"><br><br>
        Gènere:<br>
        <input type="radio" name="gender" value="Dona">Dona
        <input type="radio" name="gender" value="Home">Home
        <input type="radio" name="gender" value="Altres">Altres
        <br><br>
        <input type="submit" name="submit" value="Registrat">
    </form>
    