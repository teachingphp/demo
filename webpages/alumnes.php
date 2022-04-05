<html>
<head>
    <title>Alumnes</title>
    <style>
    #grad1 {
        height: 40px;
        background-color: blue; /* For browsers that do not support gradients */
        background-image: linear-gradient(purple, Violet);
    }
    body{
        color:MediumPurple;
        font-style: oblique;    
    }
    .left{
        position: absolute;
        left: 0px;
        width: 300px;
        border: 3px solid #73AD21;
        padding: 10px;
    }
    h1{
        color:aquamarine;
    }
    </style>
</head>
<body style = "background-image: linear-gradient(aquamarine, aqua);">
    <div id="grad1">
        <h1 style="text-align:center;" >Els meus alumnes</h1>
    </div>
    <?php
        $nom_alumnes = array("Albert C", "Ana", "Dani", "Albert", "Andrea", "Pol", "Marcel·la", "Marcel");
        $nom_alumnes_avatar = array("Albert C" =>"SybelleZ","Ana" =>"anamg63", "Albert"=>"AlbertViSa", "Andrea"=>"Andreaceina","Dani" =>"dani3456","Pol"=>"CEINApol", "Marcel·la"=>"marcellaceina", "Marcel"=>"MarcelComes");

        $texte_mostrar ="Hola que tal";
        foreach ($nom_alumnes as $nom){
            echo "<h2 >" . $nom . "</h2>";
            //echo '<img  src="https://github.com/'. $nom_alumnes_avatar[$nom] . '.png" onclick ="mostrar()" alt="" width="100" height="100">';

            $imatge = '<img  src="https://github.com/'. $nom_alumnes_avatar[$nom] . ".png" . '"';
            $imatge .= " onclick =mostrar('";
            $imatge .= $nom_alumnes_avatar[$nom]."')";
            $imatge .= ' alt="" width="100" height="100">';
            echo $imatge;
        }
    ?>

    <script type="text/javascript">
        function mostrar(avatar){
            //var avatar = "SybelleZ";
            location = "https://github.com/" +avatar ;
        }
    </script>   
</body>
</html>