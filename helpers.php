<?php

//Esta función orden el var_dump para que sea más legible.
  function dd($valor){
      echo "<pre>";
          var_dump($valor);
          exit;
      echo "</pre>";
  }

//Esta función es para redirigir a páginas internas y simplificar el header location.
  function redirect($destino){
    header("location:".$destino);
    exit;
  }


  function inputUsuario($campo){
      if(isset($_POST[$campo])){
          return $_POST[$campo];
      }
  }


 ?>
