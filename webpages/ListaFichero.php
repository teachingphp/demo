<html>
<head>
    <title>Leer Fichero</title>
</head>
<body>
<h1 style="text-align:center;background-color:DodgerBlue;color:#3F51B5">Llista dels alumnes de la classe</h1>
<?php
    $miFichero = fopen("../recursos/listaAlumnos.txt", "r") or die("No se puede abrir el fichero!");
    $noies = array("Andrea","Ana","Marcela");

    while(!feof($miFichero)){
        $nombreAlumno = str_replace("\r\n","",fgets($miFichero));
        if (in_array($nombreAlumno,$noies)){
            echo '<h2 style="text-align:center" >' . $nombreAlumno . '</h2>';
            echo '<img  src="../recursos/programmerw.png" onclick ="alert(2)" alt="" width="100" height="100">';
         }
        else{
            echo '<h2 style="text-align:center" >' . $nombreAlumno . '</h2>';
            echo '<img  src="../recursos/programmer.png" onclick ="alert(2)" alt="" width="100" height="100">';
         }
    }
    fclose($miFichero);
?>
</body>
</html>