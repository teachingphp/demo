<html>
<head>
    <title>LOGIN.PHP</title>
</head> 
    <body>
<body style="background-color:#000000;">
    </body>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $missatge_error = "";
    if (empty($_POST["name"])) {
      $nameErr = "El nombre es obligatorio  ";
      $missatge_error = $nameErr;
    } else {
      $name = test_input($_POST["name"]);
 
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "El Email es obligatorio  ";
      $missatge_error = $emailErr;
    } else {
      $email = test_input($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      }
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "El genero es obligatorio    ";
      $missatge_error = $genderErr;
    } else {
      $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["pass"])) {
      $passErr = "La contraseña es obligatoria  ";
      $missatge_error = $passErr;
    } else {
      $pass = test_input($_POST["pass"]);
    }
    if (strlen($missatge_error) > 0 ){
      $html_mostrar = '<font size="3"
      color="red">'.$missatge_error.'</font>';
      echo $html_mostrar;
    }
    if (empty($_POST["date"])) {
      $dateErr = "La fecha de nacimiento es obligatoria  ";
      $missatge_error = $dateErr;
    } else {
      $pass = test_input($_POST["date"]);
    }
    if (strlen($missatge_error) > 0 ){
      $html_mostrar = '<font size="3"
      color="red">'.$missatge_error.'</font>';
      echo $html_mostrar;
    }
}
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  
  <h2>    <font size="6"
          color="green">
            Login.Php
        </font></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
<font
    color="purple"><b>Nombre:</b> <input type="text" name="name">
  <span class="error">    <font
          color="red">
            *
        </font>
  <br><br>
  <span class="error">
  <font
  color="purple"><b>Contraseña:</b> <input type="password" name="pass">
  <span class="error">    <font
          color="red">
            *
        </font>
  <br><br>
  <font
  color="purple"> <b>Email de registro:</b> <input type="email" name="email">
  <span class="error">    <font
          color="red">
            *
        </font>
  <br><br>
  <b>Email de contacto:</b> <input type="email" name="email2">
<br>
<br>
<font
    color="purple"><b>Número de Teléfono:</b> <input type="number" name="number">
  <br>
  <br>
  <font
  color="purple"> <b>Fecha de Nacimiento:</b> <input type="date" min="1899-01-01" max="2000-13-13" name="date">
  <span class="error">    <font
          color="red">
            *
        </font>
  <br><br>
  <font
  color="purple"><b>Genero:</b> </font>
  <Font COLOR ="White">
  <input type="radio" name="gender" value="female">Femenino
  <input type="radio" name="gender" value="male">Masculino
  <input type="radio" name="gender" value="other">Otro
  <input type="radio" name="gender" value="other">Prefiero no contestar
  <span class="error">    <font
          color="red">
            *
        </font>
  <br>
  <br>
  <br>
  <input type="submit" name="submit" value="Enviar Formulario📤">  
</form>

