<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<h2>Exemple</h2>
<p><span class="error">* camp obligatori</span></p>

<form method="post" action="<?php echo htmlspecialchars("Test_RecuperaPol.php");?>">  
  Usuari: <input type="text" name="nom">
  <br><br>
  Contrasenya: <input type="password" name="password">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>