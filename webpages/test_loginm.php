<html>
<body>
<br>

<h1 style="color:ACD1A7">Gràcies <?php echo gracies() ?>! </h1>
<h2 style=color:B8DFB2> El teu usuari s'ha enregistrat correctament. </h2>

<?php

function gracies(){
    $nom_usuari = $_POST["nom_usuari"];
    return $nom_usuari;
   
}
if(isset($_POST["nom_usuari"])){
    $nom_usuari = $_POST["nom_usuari"];
    setcookie("nom_usuari", $nom_usuari, time()+60*60*24*30*12);
}
if(isset($_POST["contrasenya"])){
    $contrasenya = $_POST["contrasenya"];
    setcookie("contrasenya", $contrasenya, time()+60*60*24*30*12);
}
//$usuari = $_cookie["nomusuari"];


?>