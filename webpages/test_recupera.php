<html>
<body>

<?php

if($_POST["namer"]==$_COOKIE["nomartístic"]){
   
    
    echo "Ja tens el teu compte";

} else{
    echo "Aquest usuari ja existeix";
}
if(($_POST["password"])==$_COOKIE){
    
    echo "La teva contrasenya es correcte";
} else{
    echo "Aquesta contrasenya es incorrecta";
}


?>

</body>
</html>

