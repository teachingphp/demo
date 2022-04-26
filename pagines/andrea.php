<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/andrea.css?v=<?php echo time(); ?>">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
       
        <title>Andrea</title>
    </head>
    <body>
        <!--https://www.w3schools.com/tags/ -->  
        <h1><p class="p"><p class="round2">Tutti Frutti</h1>

        <h2>Com es juga</h2>

        <ul>
         <li>Cada columna te un titol que indica el tipus de paraula que s´ha d´escriure</li>
         <li>L´ultima columna es la puntuació aconseguida a cada ronda</li>
         <li>Per començar el joc cal accionar el botó de lletra aleatoria</li>
         <li>La lletra que surti será la que s´utilitzi en aquella ronda</li>
         <li>En el mateix moment que es sap la lletra els jugadors han de començar a omplir les columnes amb paraules que començin per aquesta lletra</li>
         <li>El primer jugador en omplir totes les caselles ha de premer el botó on posa Tutti Frutti</li>
         <li>Quan acaba la ronda es comproben totes les praules de tots eljugadors i es sumen el punts</li>
        </ul>

        <h2>Normas</h2>
        <ul>
         <li>No es poden repetir paraules</li>
         <li>No es pot mirar les caselles d´altres jugadors per copiarse</li>
         <li>Les paraules han d´estar senceres</li>
         <li>No es poden buscar paraules a Google</li>
        </ul>
            
        <h2>Suma de punts</h2>
        <ul>
         <li>Hi ha 4 puntacions diferents</li>
         <li>20 punts si cap més jugador te una paraula valida a la mateixa casella</li>
         <li>10 punts si la paraula no esta repetida a la mateixa casella</li>
         <li>5 punts si la paraula s´ha repetit a la mateixa casella</li>
         <li>0 punts si no s´ha escrit res o la paraula no es correcta</li>
        </ul>

        <h2>Fi del joc</h2>
        <ul>
         <li>El joc acaba quan ja no queden mes lletres o tots els jugadors decideixen parar de jugar</li>
         <li>Es pot decidir una cantitat de punts per finalitzar el joc</li>
         <li>Finalments es sumen tots els punts a la casella de total</li>
         <li>Guanya el que tingui mes punts</li>
        </ul>

        <h1>Juga a Tutti Frutti</h1>

        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Lletra</th>
                <th>Nom</th>
                <th>Animal</th>
                <th>Lloc</th>
                <th>Famós</th>
                <th>TV</th>
                <th>Menjar</th>
                <th>Marcas</th>
                <th>Oficis</th>
                <th>Puntuació</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $I=1;
            WHILE ($I<= 27) {


           ECHO "<tr>";
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
           ECHO     '<td><input type="text"  value=""></td>';
                
           ECHO "</tr>";
            $I=$I +1;
            }
        ?>     
             <tr>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                <td><input type="text"  value=""></td>
                
            </tr>    
    
            </table>

            <script type="text/javascript">
                $(document).ready( function () {
                    $('#example').DataTable();
                } );
            </script>   

        <input type="submit" name="submit" value="Generar lletra" onclick= "mostrar()">

       <label id = "text_lletra" style = "display:none"> 
            <strong></strong><br/>
            </label>



        <script type="text/javascript">
        function mostrar(){
            var primera_lletra = String.fromCharCode(97+Math.floor(Math.random() * 26))
            console.log (primera_lletra);
            var text_anterior = "La letra aleatoria generada es:";
            $("#text_lletra").text(text_anterior + primera_lletra);
            $("#text_lletra").show();
        }
    </script>   

    </body>
</html>

