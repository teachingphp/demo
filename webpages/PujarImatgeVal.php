<?php
$directori = "C:/xampp/htdocs/fitxers/";
/*
basename():
    Dada una cadena que contiene una ruta a un archivo o directorio, 
    esta función devolverá el último componente de nombre.
*/
$fitxer = $directori . basename($_FILES["fichero"]["name"]);
$uploadOk = 1;
/*
pathinfo() devuelve información acerca de path: 
bien como un array asociativo, o bien como un string, en función del valor de options.
*/

$imageFileType = strtolower(pathinfo($fitxer,PATHINFO_EXTENSION));

// Mira si el fitxer imatge és una imatge real o una fake
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fichero"]["tmp_name"]);
  if($check !== false) {
    echo "El fitxer és una imatge - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "El fitxer no és una imatge real.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($fitxer)) {
  echo "El fitxer ja existeix.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fichero"]["size"] > 500000) {
  echo "El teu fitxer és massa gran";
  $uploadOk = 0;
}

// Formats de imatge acceptats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Nomès s'accepten els formats: JPG, JPEG, PNG & GIF.";
  $uploadOk = 0;
}

// Mirem si $uploadOk és 0 degut a un error
if ($uploadOk == 0) {
  echo "El seu fitxer no ha estat pujat";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fichero"]["tmp_name"], $fitxer)) {
    echo "El fitxer ". htmlspecialchars( basename( $_FILES["fichero"]["name"])). " ha estat pujat correctament.";
  } else {
    echo "Ups, hi ha hagut un error en la pujada del fitxer!";
  }
}
?>