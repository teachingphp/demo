<html>
<body>
<h1 style="text-align:center;" style="color:cornflowerblue">Gràcies per la teva participació</h1>
<?php
 if (isset($_POST["nom"])){
    $nom = $_POST["nom"];
}

if (isset($_POST["lloc"])){
    $llocnaixement = $_POST["lloc"];
}

$datos= '<div><h2 style="color:cornflowerblue;">Nom: '.$nom.'</h2>';
$datos .= '<h2 style="color:cornflowerblue;" >Lloc naixement: '.$llocnaixement.'</h2></div>';


echo $datos;

?>

</body>
</html>