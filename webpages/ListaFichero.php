<html>
<head>
    <title>Leer Fichero</title>
</head>
<body>
<h1 style="text-align:center;" >Llista dels alumnes de la classe</h1>
<?php
    $miFichero = fopen("../recursos/listaAlumnos.txt", "r") or die("No se puede abrir el fichero!");
    while(!feof($miFichero)){
        echo "<h2 >" . fgets($miFichero) . "</h2>";
        echo '<img  src="../recursos/programmer.png" onclick ="alert(2)" alt="" width="100" height="100">';
    }


    fclose($miFichero);
    
?>
    


</body>
</html>