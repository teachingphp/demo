<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/andrea.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
       
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
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td><td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                <td><input type="text" id="row-1-age" name="row-1-age" value=""></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value=""></td>
                
            </tr>
            

            </tbody>
            </table>

    </body>
</html>

