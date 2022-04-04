<html>
<head>
    <title>LOGIN.PHP</title>
</head> 
    <body>
<body style="background-color:#000000;">
    </body>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "El nombre es obligatorio";
    } else {
      $name = test_input($_POST["name"]);
 
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "El Email es obligatorio";
    } else {
      $email = test_input($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      }
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "El genero es obligatorio";
    } else {
      $gender = test_input($_POST["gender"]);
    }
echo $emailErr;

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
  color="purple"><b>Contraseña:</b></font> <input type="text" name="email">
  <span class="error">    <font
          color="red">
            *
        </font>
  <br><br>
  <font
  color="purple"> <b>Email de registro:</b> <input type="text" name="email">
  <span class="error">    <font
          color="red">
            *
        </font>
        </font>
  <br><br>
  <b>Email de contacto:</b> <input type="text" name="email">
  <span class="error">    <font
          color="red">
            *
        </font>
<br>
<br>
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
  <br><br>
  <input type="submit" name="submit" value="Enviar Formulario📤">  
</form>

