<html>
<head>
    <title>Alumnes</title>
    <table class="default">

  <tr>

    <td>"Albert C"</td>

    <td>"Andrea"</td>

    <td>"Oscar"</td>

  </tr>
</head>
<body>
<h1 style="text-align:center;"style ='color:'#008080>Els meus alumnes</h1>
<h1 style="text-align:center;"> <img src="https://www.latercera.com/resizer/wvCMr6B4HSnbYmlIGtaDQVfuch4=/900x600/smart/arc-anglerfish-arc2-prod-copesa.s3.amazonaws.com/public/OI7WIZAY6NDH7AQHHZ2NLXTCX4.jpg" alt="bob esponja"width="200" height="200"> 

<?php

    $nom_alumnes = array("Albert C", "Andrea", "Oscar", "Anas","Alex P.");
    foreach ($nom_alumnes as $nom){
        echo "<h2 style ='color:'#008080'>" . $nom . "</h2>";
        echo '<img  src="../recursos/programmerw.png" onclick ="alert(2)" alt="" width="100" height="100">';
    }

?>
    


</body>
</html>