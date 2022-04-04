<html>
<head>
    <title>Login</title>
</head>
<body>
<h1 style="text-align:center;" >Gracias! Tus dados se han enviado correctamente.</h1>
<?php

    //print_r($_POST, false);
    if (isset($_POST["name"])){
        $nom = $_POST["name"];
        //setcookie("username", $nom, time()+60*60*24*30);
        //$nom_usuari = $_COOKIE["username"];
    }
    print_r($_COOKIE, false);

    if (isset($_POST["email"])){
        $email = $_POST["email"];
    }

    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }
    
    
    $datos = '<div style="color:red;"><h2 style="text-align:center;" >Nombre: '.$nom .' </h2>';
    $datos .= '<h2 style="text-align:center;" >Correo: '.$email .'</h2></div>';
    echo $datos;

?>
    
    <h2 style="text-align:center;" >Ya están en camino los Mossos, la Guardia Civil y el FBI para buscarte. Pasa un feliz día hasta entonces. ;)</h2>
    <div style="text-align:center;">
        <img id = "img1" style="center;" src="https://hospitaldenens.com/wp-content/uploads/2017/06/mossos-logo-300x283.jpg" alt="Mossos" width="300" height="300">
        <img style="text-align:center;" src="https://www.guillenzancas-habilitados.es/wp-content/uploads/2020/12/logo-guardia-civil-1.fw_.png" alt="Guardia Civil" width="300" height="300">
        <img  src="https://www.fbi.gov/++theme++fbigov.theme/images/fbi_seal_new.png" alt="FBI" width="300" height="300"><br>Troliado Puto><br>
        <img src="../webpages/frozen-2-1.png">
    </div>

    <script type="text/javascript">
         document.getElementById("img1").style.visibility = "hidden"; 
     </script>   
</body>
</html>