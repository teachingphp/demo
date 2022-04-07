<html>
<head>
    <title>Login</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlOH8OEvC1pRiyRKocU_uxcEbLpvaCBB0aiw&usqp=CAU">
<h1 style="text-align:center;color:white;" >Venvolgut! Les teves dades s'han enviat correctament</h1>
<?php
/*
    //print_r($_POST, false);
 
    print_r($_COOKIE, false);

    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }
  
$a = 5;
    $b = 10;

    if ($nom == $_COOKIE["name"]) {
        echo "a es mayor que b";
    } elseif ($a == $b) {
        echo "a es igual que b";
    } else {
        echo "a es menor que b";
    }
    */
$nom ="";
    if (isset($_POST["name"])){
        $nom = $_POST["name"];
        setcookie("username",$nom,time()+60*60*24*30);
    }
    $datos = '<div style="color:red;"><h2 style="text-align:center;" >GRACIES<br>'.$nom .' </h2>';  
    echo $datos;
    if ($nom == $_COOKIE["name"]){
        echo "si que esta";
    }
    else{
        echo "no esta";    
    }
?>
    
    <h2 style="text-align:center;color:blue;">Vols borrar les coockies?<br>;)</h2>
    <div style="text-align:center;">
        <img style="center;" src="https://us.123rf.com/450wm/yayayoy/yayayoy1808/yayayoy180800007/106275794-emoticon-gui%C3%B1ando-un-ojo-y-mostrando-el-pulgar-hacia-arriba.jpg?ver=6" alt="Mossos" width="300" height="300">
   </div>
</body>
</html>