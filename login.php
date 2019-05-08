<?php
include_once("autoload.php");
if($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"]);
  $errores = $validar->validacionLogin($usuario);
  if(count($errores) == 0){
    $emailUsuario = $json->buscarEmail($usuario->getEmail());
  }if($emailUsuario !== null){
    $errores["email"]="El usuario ya existe";
  }else{
    if(Autenticador::verificarPassword($usuario->getPassword,$usuario["password"])!=true){
      $errores["password"]="Usuario o contraseña incorrectos";
    }else {
      // code...
    }


/*
  $errores= validar($_POST,"login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(password_verify($_POST["password"],$usuario["password"])===false){
        $errores["password"]="Error en los datos verifique";
      }else{
        seteoUsuario($usuario,$_POST);
        if(validarUsuario()){
          header("location: perfil.php");
          exit;
        }else{
          header("location: registro.php");
          exit;
        }
      }
    }
  }
}
?>
*/

<!--Sección de LogIn-->

  <section id="login" class="_login">
    <div class="_contenedor-login" id="_contenedor-login">

      <h3>Login</h3>
      <form action="" method="POST">
        <div class="contenedor-inputs-login">
          <input name="email" type="text" id="email"   value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" placeholder="Correo">
          <input name="password" type="password" id="password"  value="" placeholder="Contraseña">
        </div>
        <div class="contenedor-pass">
          <div class="recordar">
          <input name="recordar" type="checkbox" id="recordar" value="recordar">
          <label for="recordarme">Recordarme</label>
         </div>
          <a href="olvide.php">Olvide mi Contraseña</a>
        </div>
        <br>
        <input type="submit" name="login" class="btn-submit-login" value="Login">
        <p>Si no tenés cuenta registrate <a id="abrir-popup"class="linkpopup abrir-Popup" href="registro.php"> Acá!</a></p>
      </form>
      <?php
        if(isset($errores)):?>
          <ul class="alert alert-danger">
            <?php
            foreach ($errores as $key => $value) :?>
              <li> <?=$value;?> </li>
              <?php endforeach;?>
          </ul>
        <?php endif;?>
    </div>
  </section>

  <!--Termina la Sección de LogIn-->
