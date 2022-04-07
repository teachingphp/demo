<html>
<body>

<?php

if($_POST["nom_usuarir"] == $_COOKIE["nom_usuari"]){
    $nom_usuarir = $_POST["nom_usuarir"];
    echo "L'usuari està registrat";
}else {

    echo "L'usuari encara no està registrat";
}
?>

<br>

<?php
if($_POST["contrasenyar"]==$_COOKIE["contrasenya"]){
    echo "La contrasenya ja està registrada";
}else {

    echo "La contrasenya encara no està registrada";
}

?>
</body>
</html>
