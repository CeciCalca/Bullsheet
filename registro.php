<?php
include_once("autoload.php");

if ($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_POST["apellido"],$_FILES);

  $errores=$validar->validacionUsuario($usuario, $_POST["repassword"]);

  if(count($errores)==0){

    $ususarioEncontrado= BaseSql::buscarUsuarioEmial($pdo,'users',$usuario->getEmail());
    if($ususarioEncontrado !== false){
      $errores["email"]="El usuario ya existe";
    }else{
    $avatar = $registro->armarAvatar($_FILES);
    BaseSql::guardarUsuario($pdo,$usuario,'users',$avatar);
    // $registroUsuario = $registro->armarRegistroUsuario($usuario,$avatar);
    // $json->guardar($registroUsuario);
    redirect("index.php#login");
     }
    }
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Playball" rel="stylesheet">
    <link rel="stylesheet" href="css/popup.css">
  <title>Registro</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>

<a class="_logoregistro" href="index.php">BullSheet</a>

 <!--Sección del formulario de registro-->
<div class="overlay" id="overlay">
  <div class="popup" id="popup">
  <?php
    if(isset($errores)):?>
      <ul class="alert alert-danger">
        <?php
        foreach ($errores as $key => $value) :?>
          <li> <?=$value;?> </li>
          <?php endforeach;?>
      </ul>
    <?php endif;?>

    <!--<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times-circle"></i></a>-->
    <h3>Registrate!</h3>
    <h4>Y forma parte de nuestra comunidad!</h4>
    <form action="" method="POST" enctype= "multipart/form-data" >
      <div class="contenedor-inputs">
        <input name="nombre" type="text" id="nombre"  value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>" placeholder="Nombre">
        <input name="apellido" type="text" id="apellido"  value="<?=(isset($errores["apellido"]) )? "" : inputUsuario("apellido");?>" placeholder="Apellido">
        <input name="email" type="text" id="email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" placeholder="Correo">
        <input name="password" type="password" id="password" value="" placeholder="Contraseña">
        <input name="repassword" type="password" id="repassword" value="" placeholder="Confirmar Contraseña">
        <input  type="file" name="avatar" value=""/>
      </div>
      <input type="submit" name="registro" class="btn-submit" value="Enviar">
    </form>
  </div>
</div>
<!--Termina la Sección del formulario de registro-->

</body>
<script src="popup.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
