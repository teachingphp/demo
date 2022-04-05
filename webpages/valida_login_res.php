<html>
<head>
    <title>Valida Login</title>
</head>
<body>

<?php

    //print_r($_POST, false);

    $missatge_per_usuari = "";
    if ($_POST["usuari"] === $_COOKIE["usuari"]){
        $missatge_per_usuari ="Mateix usuari";
        $myAudioFile = "../estructures/srandom.mp3";
echo '<audio style="display:none;" controls autoplay >
         <source src="'.$myAudioFile.'" type="audio/mpeg">
      </audio>';
    }else{
        $missatge_per_usuari ="No coincideix usuari";
    }


    if (password_verify($_POST["password"],$_COOKIE["password"])){
        $missatge_per_usuari .="Mateix password";
    }else{
        $missatge_per_usuari .="No coincideix password";
    }

    // if ($_POST["password"] === $_COOKIE["password"]){
    //     $missatge_per_usuari .="Mateix password";
    //     //$missatge_per_usuari = $missatge_per_usuari . "Mateix password";
    // }else{
    //     $missatge_per_usuari .="No coincideix password";
    // }

    echo $missatge_per_usuari;




?>
    

</body>
</html>