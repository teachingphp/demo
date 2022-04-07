<html>
<body>
<?php

function hola()
{
    return "Benvinguts al servei mèdic";
}
echo "<h1 style='text-align:center';
        style='color:green';>" .hola(). "</h1>";
?>


<img source src="../recursos/holagif.gif" align=right> </img>

<h2>CONSULTA MÈDICA</h2>
<h3>Dades personals:</h3>
<form action="dadespersonals.php" method= post>
    Nom i cognoms: <input type="text" name="nom"><br><br>
    Lloc de naixement: <input type="text" name="lloc"><br><br>
</form>

<h3>Escriu aquí la teva consulta:</h3>
<form>
    Consulta: <input type="text"><br><br>
    <input type="submit" name="submit" value="Envia">
</form>


</body>
</html>
