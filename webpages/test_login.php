<html>
<head>
    <title>Test Login</title>
</head>
<body>

<?php

    //print_r($_POST, false);
    echo "<h1>Gràcies " .   $_POST["usuari"] . "</h1>";
    //echo $_POST["password"];

    setcookie("usuari", $_POST["usuari"], time()+60*60*24*30);
    setcookie("password", password_hash($_POST["password"],PASSWORD_DEFAULT), time()+60*60*24*30);


?>
    

</body>
</html>