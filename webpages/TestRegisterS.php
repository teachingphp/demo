<?php


?>

<html>
    <head>
    <style>
        
body {
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

h1 {
  color: black;
  text-align: center;
}

p {
   text-align: left;
   color: orchid;
  font-family: monospace;
  font-size: 50px;
}
</style>
        <body>
        <title>Registrat</title>
        <h1>Registrat</h1>
        
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
    