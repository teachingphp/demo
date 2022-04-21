<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tutorial Xdebug</title>

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
      <img src="https://raw.githubusercontent.com/gwomacks/php-debug/master/screenshot.gif" class="d-block w-100" alt="..." width="100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Veure variables</h5>
        <p>Mentres debuguem podem visualitzar el valor de les variables locals.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://dev-to-uploads.s3.amazonaws.com/uploads/articles/ksyrqcfdqcvgzsyk314r.gif" class="d-block w-100" alt="..."width="100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Breakpoints</h5>
        <p>Podem posar breakpoints on volguem al nostre programa y és on s'aturarà l'execució.</p>
      </div>
      </div>
    <div class="carousel-item">
      <img src="https://miro.medium.com/max/1400/1*ORChGW7JAf1AOczJKLwcUw.gif" class="d-block w-100" alt="..."width="100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Debuggar</h5>
        <p>Podrem anar línea a línea comrpobant el funcionament del programa</p>
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
        <p>Lenguaje de programación de uso general que se adapta especialmente al desarrollo web.</p>
        <p><a class="btn btn-secondary" href="https://www.php.net/">Més detalls &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Xdebug_Logo.svg/1200px-Xdebug_Logo.svg.png" class="rounded-circle" alt="..." width="140" height="140">

        <h2>Xdebug</h2>
        <p>Extensión de PHP que proporciona la capacidad de depuración código y errores.</p>
        <p><a class="btn btn-secondary" href="https://xdebug.org/">Més detalls &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png" class="rounded-circle" alt="..." width="140" height="140">

        <h2>Visual Studio Code</h2>
        <p>Es un editor de código fuente desarrollado por Microsoft para Windows, Linux, macOS y Web. </p>
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
      <img  class="img-fluid" src="../recursos/1.PNG" alt="..." >

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
      <img class="img-fluid" src="../recursos/2.PNG" alt="..." >
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
      <img class="img-fluid" src="../recursos/3.PNG" alt="..." >
      <br><br>
      <img class="img-fluid" src="../recursos/4.PNG" alt="..." >

      </div>
    </div>
    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">5.- Enganxem el que hem copiat al Instal·lador <a href="https://xdebug.org/wizard">Wizard</a>  <span class="text-muted"> i executem</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../recursos/5.PNG" alt="Paso 5">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">6.- Descarraguem el fitxer .dll que ens indica<span class="text-muted"></span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../recursos/6.PNG" alt="Paso 6">

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
      <img class="img-fluid" src="../recursos/7.PNG" alt="Paso 7">

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
      <img class="img-fluid" src="../recursos/8.PNG" alt="Paso 8">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">11.- Executem test.php amb nomès la línea phpinfo();<span class="text-muted"></span></h2>
        <p class="lead">Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../recursos/9.PNG" alt="Paso 9">


      </div>
    </div>
    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">12.- Anem a les extensions i apretem el engranatge en l'extensió PHP Debug i anem a Configuració<span class="text-muted"></span></h2>
        <p class="lead">Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../recursos/10.PNG" alt="Paso 10">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">13.- Configurem el fitxer settings.json afegint la línea (o modificant):<span class="text-muted"></span></h2>
        <p class="lead">Hauriem de veure una pàgina semblant aquesta si busquem amb ctrl+F xdebug </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../recursos/11.PNG" alt="Paso 11">


      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-auto">
        <h2 class="featurette-heading">14.- Anem a Ejecutar y abrir o afegir configuració per tal de generar el fitxer launch.json al nostre projecte.<span class="text-muted"></span></h2>
        <p class="lead"> </p>
      </div>
      <div class="col-md-auto">
      <img class="img-fluid" src="../recursos/12.PNG" alt="Paso 12">


      </div>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER 
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2022–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
    -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Playstation -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
  <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z"/>
</svg>
      </a>

      <!-- Xbox -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
  <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
</svg>
      </a>

      <!-- Nintendo Switch -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
  <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.136 4.136 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979Zm4.675.269a1.621 1.621 0 0 0-1.113-1.034 1.609 1.609 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.632 1.632 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053ZM3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256Z"/>
  <path d="M3.425.053a4.136 4.136 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.845 2.845 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
</svg>
      </a>

      <!-- Steam -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-steam" viewBox="0 0 16 16">
  <path d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.198 2.198 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.217 2.217 0 0 1-1.312-1.568L.33 10.333Z"/>
  <path d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.705 1.705 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027Zm2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048Z"/>
</svg>   
    </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
  <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
  <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
</svg>
      </a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="">Ceina</a>
  </div>
  <!-- Copyright -->
</footer>


</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>