<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/marcella.css?v=<?php echo time(); ?>">
        <title>Marcel·la</title>
        <h1><p class="p">Psicologia per casa</h1> 

<!--Menú, cada opció té una redirecció--> 
        <nav><ul>
        <li><a href="#">Inici</a></li>
        <li><a href="./webpages/Cosesquiensomos.php">Publicacions</a></li>
        <li><a href="https://americanhistory.si.edu/lighting/bios/photo2.htm#p22">Qui som?</a></li>
        <li><a href="#bottom">Contacta'ns</a></li>
        <li><a href="http://localhost/demo/demo/webpages/loginm.php">Registrar-se</a></li>
    </ul></nav>
    
    </head>
    <body>
        
<!--https://www.w3schools.com/tags/ -->  
      

        <style>
            div.ex2 {
                max-width: 700px;
                margin: auto;
            }
            button {
                background-color: #CBCBED;
                border: none;
                border-radius: 12px;
                color: white;
                padding: 1px -3px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
}
        </style>
        <div class="ex2">
        <h5><p class="round4">Benvinguda al teu portal sobre psicologia de confiança! Aquí dins hi trobabràs tot allò que necessites saber sobre psicologia bàsica i d'estar per casa.</h5></div>
        
<!--Botons que encara no porten enlloc-->         
        <button type="button"><p class="round3">Parlem d'ansietat</button>
        <button type="button"><p class="round3">Síndrome de la impostora</button>


        <!-- Funció if pels botons de més a baix--> 
        <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>


<!--aquests botons tenen una funció if relacionada que està just aquí sobre--> 
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
          
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>

    <h3 onclick="myFunction(this, 'red')">Click me to change my text color.</h3>

<script>
function myFunction(element, color) {
  element.style.color = color;
}
</script>


 <h2><p class="round2">Presentació</h2>
 
  
 <h2><p class="round2"><a name="bottom" id="bottom">Contacte</a></h2>
 <p class= round4> Per a qualsevol dubte, podeu trobar-nos a: 
 <p class= round4><b>Correu</b>:<p onclick="myFunction(this, 'SlateBlue')" class="round4">consultesproj@gmail.com
 <p class= round4>   <b>Telèfon</b>: 619784654

 <h2><p class="round2">Sobre nosaltres</h2>
    </body>
</html>