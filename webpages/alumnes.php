<html>
<head>
    <title>Alumnes</title>
</head>
<body>
<h1 style="text-align:center;" >Els meus alumnes</h1>
<?php

    $nom_alumnes = array("Albert C", "Ana", "Dani", "Albert", "Andrea");
    $nom_alumnes_avatar = array("Albert C" =>"SybelleZ","Ana" =>"anamg63", "Albert"=>"AlbertViSa", "Andrea"=>"Andreaceina","Dani" =>"dani3456");

    foreach ($nom_alumnes as $nom){
        echo "<h2 >" . $nom . "</h2>";
        echo '<img  src="https://github.com/'. $nom_alumnes_avatar[$nom] . '.png" onclick ="alert(2)" alt="" width="100" height="100">';
    }

?>
    


</body>
</html>