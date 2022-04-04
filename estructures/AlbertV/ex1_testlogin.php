<html>
<head>
    <title>Login</title>
</head>
<body background="https://themonkeybusiness.es/wp-content/uploads/2021/04/fondos-para-paginas-web-scaled.jpg">
<h1 style="text-align:center;color:white;" >Venvolgut! Les teves dades s'han enviat correctament</h1>
<?php
/*
    //print_r($_POST, false);
 
    print_r($_COOKIE, false);

    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }
 */ 
$nom ="";
    if (isset($_POST["name"])){
        $nom = $_POST["name"];
        setcookie("username",$nom,time()+60*60*24*30);
        $nom_usuari = $_COOKIE["username"];
    }
    $datos = '<div style="color:red;"><h2 style="text-align:center;" >GRACIES<br>'.$nom .' </h2>';  
    echo $datos;    
?>
    
    <h2 style="text-align:center;color:blue;">Passat'ho bé<br>;)</h2>
    <div style="text-align:center;">
        <img style="center;" src="https://us.123rf.com/450wm/yayayoy/yayayoy1808/yayayoy180800007/106275794-emoticon-gui%C3%B1ando-un-ojo-y-mostrando-el-pulgar-hacia-arriba.jpg?ver=6" alt="Mossos" width="300" height="300">
   </div>
</body>
</html>