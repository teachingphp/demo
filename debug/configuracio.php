<!DOCTYPE HTML>
<html>
<link rel="stylesheet" type="text/css" href="../css/estiloPol.css?v=<?php echo time(); ?>">
 <head>
    <meta charset="UTF-8">
   
    <title>Configuració PHP Debug</title>
 </head>   
<body>

<h1>Configuració PHP DEBUG</h1>
<hr>
<h2>1.- Extensió PHP Debug al Visual Studio Code</h2>
<p>Anem a l'apartat de extensions del Visual Studio Code i descarraguem i instal·lem 
    aquesta extensió
</p>
<img  src="./1.PNG" alt="Paso 1">

<h2>2.- Crear Fitxer test.php dins el entorn de treball</h2>
<img  src="./2.PNG" alt="Paso 2">


<h2>3.- Executem test.php</h2>
<h2>4.- Veure el codi font resultant i el copiem tot</h2>
<img  src="./3.PNG" alt="Paso 3">
<img  src="./4.PNG" alt="Paso 4">
<h2>5.- Enganxem el que hem copiat al Instal·lador <a href="https://xdebug.org/wizard">Wizard</a> i executem</h2>
<img  src="./5.PNG" alt="Paso 5">
<h2>6.- Descarraguem el fitxer .dll que ens indica</h2>
<img  src="./6.PNG" alt="Paso 6">
<h2>7.- Movem aquesta dll a C:\xampp\php\ext i renombrem el fitxer a php_xdebug.dll</h2>
<h2>8.- Actualitzem el fitxer C:\xampp\php\php.ini per afegir les següent líneas:</h2>
<img  src="./7.PNG" alt="Paso 7">
<h2>9.- Fem restart al Apache</h2>
<h2>10.- Executem test.php amb nomès la línea xdebug_info();</h2>
<img  src="./8.PNG" alt="Paso 8">
<p>Hauriem de veure una pàgina semblant aquesta</p>
<h2>11.- Executem test.php amb nomès la línea phpinfo();</h2>
<img  src="./9.PNG" alt="Paso 9">
<p>Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug</p>
<h2>Anem a les extensions i apretem el engranatge en l'extensió PHP Debug i anem a Configuració</h2>
<img  src="./10.PNG" alt="Paso 10">
<h2>12.- Configurem el fitxer settings.json afegint la línea (o modificant): </h2>
<img  src="./11.PNG" alt="Paso 11">
<h2>Si tot ha anat be ja hauria de funcionar correctament. Posa un breakpoint i prem F5 per debuggar </h2>
<h2>Reiniciar Visual Studio Code i Apache si no funciona. </h2>
</body>
<!--[Xdebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_port = 9003
zend_extension = xdebug
xdebug.mode = debug
Xdebug.start_with_request = yes
-->
<a class="twitter-timeline"
  href="https://twitter.com/CeinaFormacio?ref_src=twsrc%5Etfw""
  data-width="400"
  data-height="600">
Tweets by @CeinaFormacio
</a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


</html>

