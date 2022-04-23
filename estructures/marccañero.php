<html>
<body>
<?php

function hola a todos()
{
    return "Te presentamos nuestra pagina";
}
echo "<h1 style='text-align:center';
        style='color:blue';>" .hola a todos(). "</h1>";
?>


<img source src="../recursos/hola a todos" align=right> </img>

<h2>Bienvenido al arte</h2>
<h3>Datos personales:</h3>
<form action="datospersonales.php" method= post>
    Nombre y apellidos: <input type="texto" name="nombre"><br><br>
    Lugar de nacimiento: <input type="texto" name="lugar"><br><br>
</form>

<h3>Comentanos que tipo de arte se adapta a tus gustos:</h3>
<form>
    Tus gustos: <input type="text"><br><br>
    <input type="submit" name="submit" value="Envia">
</form>


</body>
</html>
