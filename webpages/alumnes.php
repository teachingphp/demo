<html>
<head>
    <title>Alumnes</title>
</head>
<body>
<h1 style="text-align:center;" >Els meus alumnes</h1>
<?php

    $nom_alumnes = array("Albert C", "Andrea", "Oscar", "Anas");

    foreach ($nom_alumnes as $nom){
        echo "<h2 >" . $nom . "</h2>";
        echo '<img  src="../recursos/programmerw.png" onclick ="alert(2)" alt="" width="100" height="100">';
    }

?>
    


</body>
</html>