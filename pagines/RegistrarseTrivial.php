
/* https://www.youtube.com/watch?v=q_jDixroQkw */
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/RegistrarseTrivial.css?v=<?php echo time(); ?>">

        <title>Cool Trivial - Registro</title>
        </head>
<div>
    <?php
     if(isset($_POST['crearU']))
        {
            echo 'Usuario Registrado!';
        }
    ?>
</div>
    <body>
        <div>
        <h1>Registrarse</h1>
        <p>Para poder disfrutar de más opciones es recomendable registrarse:</p>
    <form action="../pagines/RegistrarseTrivial.php" method="post">
        <div class="container">
        <label for="Usuario" class="first-name">Usuario</label>
    <input id="Usuario" type="text" required><br><br>
    <label for="email" class="last-name">Email</label>
    <input id="email" type="email" required><br>
        <br><br>
        <input type="submit" name="crearU" value="VERIFICA EL CORREO">
        </div>
    </form>
    </div>
  



        </body>
</html>
























































</html>