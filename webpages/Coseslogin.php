<html>
<!--<style>
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

img {

  -webkit-box-reflect: right 925px;
}

</style>-->
<head>
    
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/CosesdecssE.css?v=<?php echo time();?>">
    <h1 style="text-align:center;">Bienvenido</h1>
    <h2 style="text-align:center;">CosasLogin.PHP</h2>
    <img src="https://www.w3schools.com/css/img_tree.png"width="200"100%>
</head>
<body>
<fieldset>
<legend>Registrarse:</legend>
  <form action="Test.login.Coses.php" method="post">
    Nom usuari: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Resgistrer">
</fieldset>
</form>
<h1 style="color:red"> ¿HAS PERDIDO TU CONTRASEÑA?</h1>
<h2 style="color:blue">Desplega el desplegable valga la rebundancia</h2>
<details>
<summary>valida aqui!!</summary><br>
<form action="Valida.Cosas.php" method="post">
    Nom usuari: <input type="text" name="usuari"><br><br>
    Email: <input type="email" name="gmail"><br><br>
    <input type="submit" name="submit" value="VALIDA">
</details>
</form>
</body>

</html>












