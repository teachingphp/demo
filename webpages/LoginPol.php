<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<h2>Crea usuario</h2>
<p><span class="error">* camp obligatori</span></p>
<!--
  
$_SERVER["PHP_SELF"] és una super variable global que ens retorna el nom del fitxer que actualment s'està executant. 
Per tant, ens retornarà les dades del formulari que hem enviat a la pròpia pàgina. 

La funció htmlspecialchars() converteix els caràcters especials a entitats HTML. Per exemple, els caràcters HTML com < i > es modificaràn per &lt; i &gt; 
El que ens permet això, és evitar atacs maliciosos, els quals podrien consistir en injectar HTML o Javascript mitjançant els inputs del form. 

-->
<form method="post" action="<?php echo htmlspecialchars("Test_LoginPol.php");?>">  
  Nom: <input type="text" name="nom">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Password: <input type="password" name="password">
  <br><br>
  Gènere:
  <input type="radio" name="genere" value="female">Female
  <input type="radio" name="genere" value="male">Male
  <input type="radio" name="genere" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>