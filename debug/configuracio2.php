<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

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
    <link href="/css/estiloPol2.css?v=<?php echo time(); ?>" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PHP Debug</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inici</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../debug/1.PNG" class="d-block w-100" alt="..." width="100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../debug/1.PNG" class="d-block w-100" alt="..."width="100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../debug/1.PNG" class="d-block w-100" alt="..."width="100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" class="rounded-circle" alt="..." width="140" height="140">

        <!--
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    -->
        <h2>PHP</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="https://www.php.net/">Més detalls &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Xdebug_Logo.svg/1200px-Xdebug_Logo.svg.png" class="rounded-circle" alt="..." width="140" height="140">

        <h2>Xdebug</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="https://xdebug.org/">Més detalls &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png" class="rounded-circle" alt="..." width="140" height="140">

        <h2>Visual Studio Code</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="https://code.visualstudio.com/">Més detalls &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">1.- Extensió PHP Debug al Visual Studio Code. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Anem a l'apartat de extensions del Visual Studio Code i descarraguem i instal·lem aquesta extensió.</p>
      </div>
      <!--<div class="col-md-5"> -->
        <div class="col-xl-auto">
      <img  class="img-fluid" src="../debug/1.PNG" alt="..." >

        <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    -->
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto order-md-2">
        <h2 class="featurette-heading">2.- Crear fitxer test.php<span class="text-muted"></span></h2>
        <p class="lead"> Dins el entorn de treball</p>
      </div>
      <div class="col-md-auto order-md-1">
      <img class="img-fluid" src="../debug/2.PNG" alt="..." >
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">3.- Executem test.php <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-auto">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">4.- Veure el codi font resultant <span class="text-muted"> i el copiem tot.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../debug/3.PNG" alt="..." >
      <br><br>
      <img class="img-fluid" src="../debug/4.PNG" alt="..." >

      </div>
    </div>
    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">5.- Enganxem el que hem copiat al Instal·lador <a href="https://xdebug.org/wizard">Wizard</a>  <span class="text-muted"> i executem</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./5.PNG" alt="Paso 5">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">6.- Descarraguem el fitxer .dll que ens indica<span class="text-muted"></span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./6.PNG" alt="Paso 6">

      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">7.- Movem aquesta dll a C:\xampp\php\ext i renombrem el fitxer a php_xdebug.dll<span class="text-muted"></span></h2>
        <p class="lead"> Recorda que pots cambiar el nom mitjançant la tecla ràpida F2.</p>
      </div>
      <div class="col-md-auto">

      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">8.- Actualitzem el fitxer C:\xampp\php\php.ini per afegir les següent líneas:<span class="text-muted"></span></h2>
        <p class="lead"> En cas de no tenir res de Xdebug, posar totes les linies relacionades amb Xdebug, inclosa la [Xdebug]</p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./7.PNG" alt="Paso 7">

      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">9.- Fem restart al Apache<span class="text-muted"></span></h2>
        <p class="lead">Per tal d'assegurar-nos a fer una instal·lació correcte. </p>
      </div>
      <div class="col-md-auto">
     

      </div>
    </div>
    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">10.- Executem test.php amb nomès la línea xdebug_info();<span class="text-muted"></span></h2>
        <p class="lead">I comprobem com efectivament el Xdebug s'ha instal·lat en la nostra màquina. </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./8.PNG" alt="Paso 8">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">11.- Executem test.php amb nomès la línea phpinfo();<span class="text-muted"></span></h2>
        <p class="lead">Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./9.PNG" alt="Paso 9">


      </div>
    </div>
    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">12.- Anem a les extensions i apretem el engranatge en l'extensió PHP Debug i anem a Configuració<span class="text-muted"></span></h2>
        <p class="lead">Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./10.PNG" alt="Paso 10">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">13.- Configurem el fitxer settings.json afegint la línea (o modificant):<span class="text-muted"></span></h2>
        <p class="lead">Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./11.PNG" alt="Paso 11">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">14.- Anem a Ejecutar y abrir o afegir configuració per tal de generar el fitxer launch.json al nostre projecte.<span class="text-muted"></span></h2>
        <p class="lead"> </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="./12.PNG" alt="Paso 12">


      </div>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>