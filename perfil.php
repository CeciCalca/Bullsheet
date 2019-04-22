<?php
include_once("controladores/funciones.php");
if(!isset($_SESSION["email"])) {
    header("location:#reg");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bullsheet perfil</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Playball" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
</head>
<body>
  <header>
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark _bgdegree">
      <a class="navbar-brand _logo" href="#">BullSheet</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item align-self-center ">
            <a class="nav-link " href="logout.php">LOGOUT</a>
          </li>
          <li>
            <img class="_imgAvatar " src="imagenes/<?=$_SESSION["avatar"];?>" alt="Avatar" >
          </li>

        </ul>

      </div>
    </nav>

    <div class="container-fluid p-0">
      <div class="jumbotron jumbotron-fluid _bghomeperfil m-0">
      <div class="container _jumbotext">
        <h1 class="display-4 _jumbotitle">Bienvenido: <?=$_SESSION["nombre"];?> </h1>
        <p class="lead _jumbop">Pongamos las noticias sobre la mesa</p>
      </div>
    </div>
    </div>

  </header>





</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
