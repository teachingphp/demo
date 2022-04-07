<html>
    <head>
        <title>te voy a descuartizar</title>
    </head>
    <body> 

    <?php

    //print_r($_POST, false);
    echo "gracies" .$_POST["usuari"];
   //echo $_POST["pasword"];

    setcookie("usuari", $_POST["usuari"], time()+(60*25*60*25));
    setcookie("pasword", password_hash($_POST["pasword"],PASSWORD_DEFAULT), time()+(60*25*60*25));


    ?>    



    </body>
    </html>
