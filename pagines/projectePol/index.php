<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
        <main>
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://i.imgur.com/ZCyhGVy.jpg" alt="" width="50%" height="50%">
            <h2>Pizza Maker</h2>
            <p class="lead">Construeix la teva pròpia pizza seleccionant els millors ingredients del mercat! I la rebràs en menys de 30 min.</p>
          </div>
      
    <select class="form-select" aria-label="Default select example" id="select_1">
        <option selected>Seleccione la pizza</option>
        <option value="1">Margarita</option>
        <option value="2">Carbonara</option>
        <option value="3">Pepperoni</option>
        <option value="4">Barbacoa</option>
        <option value="5">4 Quesos</option>
        <option value="6">4 Estaciones</option>
      </select>

      <?php 
            $db = new SQLite3('mydb.sq3');
            $sql = "SELECT * FROM ingredients_pizza WHERE nom_pizza = $pizza_seleccionada";
            $result = $db->query($sql);
            while ($row = $result->fetchArray(SQLITE3_ASSOC)){
              echo $row['nom_pizza'] . ': $' . $row['ingredient'] . '<br/>';
            }
            unset($db);
            
            ?>
      <script>
        document.getElementById("select_1").addEventListener("click", nomPizza);
        function nomPizza() {
          $pizza_seleccionada = document.getElementById("select_1").value;
        }
        </script>
<br>
<select id="example-getting-started" multiple="multiple">
  <option value="cheese">Cheese</option>
  <option value="tomatoes">Tomatoes</option>
  <option value="mozarella">Mozzarella</option>
  <option value="mushrooms">Mushrooms</option>
  <option value="pepperoni">Pepperoni</option>
  <option value="onions">Onions</option>
</select>
<!-- Initialize the plugin: -->
<script type="text/javascript">
  $(document).ready(function() {
      $('#example-getting-started').multiselect();
  });
</script>



      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
          Checked checkbox
        </label>
      </div>
    </div>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2021 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    
    <!--
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="select-validation.js"></script>
    </body>
</html>
    