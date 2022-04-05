<?php
$directori = "../test_fitxers";

/*
Si el directori no existeix, el creem. 
*/
if (!file_exists($directori)) {
  mkdir($directori, 0777, true);
}

/*
basename():
    Dada una cadena que contiene una ruta a un archivo o directorio, 
    esta función devolverá el último componente de nombre.
*/
$fitxer = $directori ."/". basename($_FILES["fichero"]["name"]);
$uploadOk = 1;

// Mirem si el fitxer existeix o no
if (file_exists($fitxer)) {
  echo "El fitxer ja existeix.";
  $uploadOk = 0;
}

// Mirem el tamany del fitxer
if ($_FILES["fichero"]["size"] > (5*10**6)) {
  echo "El teu fitxer és massa gran, supera els 5 MB";
  $uploadOk = 0;
}


// Mirem si $uploadOk és 0 degut a un error
if ($uploadOk == 0) {
  echo "El seu fitxer no ha estat pujat";
// Si tot ha estat correcte, pugem el fitxer
} else {
  if (move_uploaded_file($_FILES["fichero"]["tmp_name"], $fitxer)) {
    echo "El fitxer ". htmlspecialchars( basename( $_FILES["fichero"]["name"])). " ha estat pujat correctament.";
  } else {
    echo "Ups, hi ha hagut un error en la pujada del fitxer!";
  }
}
?>