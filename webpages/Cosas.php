<html>
<head>
    <title>Alumnes</title>
</head>
<body>
<h1 style="text-align:center;"style ='color:'#008080>Els meus alumnes</h1>
<img="https://www.latercera.com/resizer/wvCMr6B4HSnbYmlIGtaDQVfuch4=/900x600/smart/arc-anglerfish-arc2-prod-copesa.s3.amazonaws.com/public/OI7WIZAY6NDH7AQHHZ2NLXTCX4.jpg" alt="bob esponja" pinger-seen="true">

<?php

    $nom_alumnes = array("Albert C", "Andrea", "Oscar", "Anas","falto jo jajaj ");
    foreach ($nom_alumnes as $nom){
        echo "<h2 style ='color:'#008080'>" . $nom . "</h2>";
        echo '<img  src="../recursos/programmerw.png" onclick ="alert(2)" alt="" width="100" height="100">';
    }

?>
    


</body>
</html>