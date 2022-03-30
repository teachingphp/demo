
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// Definim les variables i les inicialitzem amb valors buits.
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "El nom és obligatori";
  } else {
    $name = test_input($_POST["name"]);
    // Mira si el nom només conté lletres i espais (actualment els errors nomès són informatius)
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Només es permeten lletres i espais";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "El Email és obligatori";
  } else {
    $email = test_input($_POST["email"]);
    // Mira si el e-mail está ben format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format del email incorrecte";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // Mira si la sintaxi de la URL es correcte
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "URL invàlida";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "El gènere és obligatori";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Exemple de Form amb validació</h2>
<p><span class="error">* camp obligatori</span></p>
<!--
  
$_SERVER["PHP_SELF"] és una super variable global que ens retorna el nom del fitxer que actualment s'està executant. 
Per tant, ens retornarà les dades del formulari que hem enviat a la pròpia pàgina. 

La funció htmlspecialchars() converteix els caràcters especials a entitats HTML. Per exemple, els caràcters HTML com < i > es modificaràn per &lt; i &gt; 
El que ens permet això, és evitar atacs maliciosos, els quals podrien consistir en injectar HTML o Javascript mitjançant els inputs del form. 

-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nom: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Web: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comentari: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gènere:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>El teu Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>