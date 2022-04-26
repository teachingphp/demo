<?php
/*
    //print_r($_POST, false);
 
    print_r($_COOKIE, false);

    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }
 */ 
$nom ="";
if (isset($_POST["nombre"])){
    $nom = $_POST["nombre"];
    setcookie("nombre",$nom,time()+60*60*24*30);
    $nom_usuari = $_COOKIE["nombre"];
}
?>
<html>
    <head>
<style>
    h1 {color:red;}
</style>
    <body>
<h1  style="text-align:center;">Muchas gracias por completar el registro </color:blue> </h1>
        <title>grxregis</title>
