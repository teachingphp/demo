<html>
<body>
<?php



Function Gracias()
{
    return "Muchas gracias";
}
echo "<h1 style='color: pink'>" .Gracias(). "</h1>";

Function name()
{
    $artisticname = $_POST["name"];
    return $artisticname; 
  
}
echo "<h1 style='color: pink'>" .name(). "</h1>";

if (isset($_POST["name"])){
    $nomartistic=$_POST["name"];
    setcookie("nomartístic", $nomartistic, time()+60*60*24*30*12);
    //$nom_artístic= $_cookie["nomartístic"];
}

if (isset($_POST["password"])){
    $password=$_POST["password"];
    setcookie("password", $password, time()+60*60*24*30*12);
    //$password= $_cookie["password"];
}








?>