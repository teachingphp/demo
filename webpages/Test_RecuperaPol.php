<?php
// Definim les variables i les inicialitzem amb valors buits.
$nom = $email = $genere = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nom = $_POST["nom"];
    $password = $_POST["password"];
    if ($_COOKIE["nom_usuari"]==$nom) {
        if ($_COOKIE["password_usuari"]==$password){
          echo "El usuari ". $nom." està logat correctament";
        }
        else{
            echo "Contrassenya del usuari incorrecte";
        }
    }
    else{
        echo "Usuari no existent";
    }

  
}

?>