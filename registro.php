<?php
include_once("controladores/funciones.php");
if ($_POST){
  $errores=validar($_POST,"registro");
  if(count($errores)==0){
    $avatar = armarAvatar($_FILES);
    $registro = armarRegistro($_POST,$avatar);
    guardar($registro);
    header("location:#login");
    exit;
  }
}
 ?>

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

    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times-circle"></i></a>
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
