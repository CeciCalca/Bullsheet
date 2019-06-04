<?php
  include_once("helpers.php");
  include_once("clases/Usuario.php");
  include_once("clases/Validador.php");
  include_once("clases/ArmarRegistro.php");
  include_once("clases/BaseDatos.php");
  include_once("clases/BaseJSON.php");
  include_once("clases/Encriptar.php");
  include_once("clases/Autenticador.php");
  include_once("clases/BaseSql.php");

  $validar = new Validador();
  $registro = new ArmarRegistro();

  $configlocal=file_get_contents("ConexionLocal.json");
  $configArray=json_decode($configlocal,true);

  $host = "localhost";
  $bd = $configArray["bd"];
  $usuario = $configArray["usuario"];
  $password = $configArray["password"];
  $puerto = $configArray["puerto"];
  $charset = "utf8mb4";


  $pdo = BaseSql::conexion($host,$bd,$usuario,$password,$puerto,$charset);
  Autenticador::iniciarSesion();


  //codigo para base json.
  //$json = new BaseJSON("Usuarios.json");

  ;

 ?>
