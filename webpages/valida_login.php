<html>  
<link rel="stylesheet" type="text/css" href="../css/estils.css?v=<?php echo time(); ?>">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<body>
<p>Hola</p><i class="fas fa-heart"></i>
<h1>Introdueix les teves dades:</h1>
<form action="valida_login_res.php" method="post">
    Nom usuari: <input type="text" name="usuari"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Comprova el teu usuari">
</form>

</body>
</html>