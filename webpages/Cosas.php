<html>
<head>
    <title>Alumnes</title>

    <table class="default">

  <tr>

    <td><h1 style=color:red><p style="font-family:RolasanSignature">Albert C</td></p>
    
    <td><h1 style=color:blue><p style="font-family:arial">Andrea</td></p>

    <td><h1 style=color:green>Oscar</td>

  </tr>
  
</table>
</head>
<body>
<h1 style="text-align:center;"style ='color:'#008080>Els meus alumnes</h1>
<h1 style="text-align:center;"> <img src="https://www.latercera.com/resizer/wvCMr6B4HSnbYmlIGtaDQVfuch4=/900x600/smart/arc-anglerfish-arc2-prod-copesa.s3.amazonaws.com/public/OI7WIZAY6NDH7AQHHZ2NLXTCX4.jpg" alt="bob esponja"width="200" height="200"> 


<h1>holap</h1>

<iframe src="https://pivigames.blog/" title="Pivardo"alt="pivi" width="1000" height="1000">
</iframe>


<?php

    $nom_alumnes = array("Albert C", "Andrea", "Oscar", "Anas","Alex P.");
    foreach ($nom_alumnes as $nom){
        echo "<h2 >" . $nom . "</h2>";
        echo '<img  src="../recursos/programmer.png" onclick ="alert(72)" alt="" width="100" height="100">';
    }
    
?>
    


</body>
</html>