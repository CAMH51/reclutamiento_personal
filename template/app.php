<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECLUTAMIENTO IMSS BIENESTAR</title>
    <link rel="stylesheet" href="./public/css/app.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./lib/jquery/jquery-3.7.1.min.js"></script>
</head>
<style>
    .container{
        height: 700px;
        background-color: #EAF0EF;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #13322B !important;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">RECLUTAMIENTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white"  href="./inicio.php">INICIO</a>
        </li>
<!--         <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            OPCIONES
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container p-3">
        <?php  
        contenido();  
        ?> 
    </div>
</body>
</html>