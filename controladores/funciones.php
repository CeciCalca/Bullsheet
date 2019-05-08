<?php
session_start();



function armarRegistroOlvide($datos){
    $usuarios = abrirBaseDatos();

    foreach ($usuarios as $key=>$usuario) {

        if($datos["email"]==$usuario["email"]){

            $usuario["password"]= password_hash($datos["password"],PASSWORD_DEFAULT);
            $usuarios[$key] = $usuario;
        }
        $usuarios[$key] = $usuario;
    }


    unlink("usuarios.json");
    foreach ($usuarios as  $usuario) {
        $jsusuario = json_encode($usuario);
        file_put_contents('usuarios.json',$jsusuario. PHP_EOL,FILE_APPEND);
    }


}
