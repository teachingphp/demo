<?php
// Definim les variables i les inicialitzem amb valors buits.
$nomErr = $emailErr = $genereErr = $passwordErr = "";
$nom = $email = $genere = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["nom"])) {
 
    $nom = test_input($_POST["nom"]);
    setcookie("nom_usuari",$nom,time()+60*60*24*30);
    echo "Gràcies ". $nom;
  }
  
  if (isset($_POST["email"])) {
    $email = test_input($_POST["email"]);
    setcookie("email_usuari",$email,time()+60*60*24*30);

  }

  if (isset($_POST["password"])) {
 
    $password = test_input($_POST["password"]);
    setcookie("password_usuari",$password,time()+60*60*24*30);
  }  



  if (isset($_POST["genere"])) {
    $genere = test_input($_POST["genere"]);
    setcookie("genere_usuari",$genere,time()+60*60*24*30);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>