<?php
  include_once("helpers.php");
  include_once("clases/Usuario.php");
  include_once("clases/Validador.php");
  include_once("clases/ArmarRegistro.php");
  include_once("clases/BaseDatos.php");
  include_once("clases/BaseJSON.php");
  include_once("clases/Encriptar.php");
  include_once("clases/Autenticador.php");


  $validar = new Validador();
  $registro = new ArmarRegistro();
  $json = new BaseJSON("Usuarios.json");
  Autenticador::iniciarSesion();

 ?>
