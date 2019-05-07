<?php
session_start();


function inputUsuario($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}

function armarAvatar($imagen){
    $nombre = $imagen["avatar"]["name"];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen["avatar"]["tmp_name"];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."/imagenes/";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar;
    $archivoDestino = $archivoDestino.".".$ext;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}



function buscarEmail($email){

    $usuarios = abrirBaseDatos();

    foreach ($usuarios as  $usuario) {
        if($email === $usuario["email"]){
            return $usuario;
        }
    }
    return null;
}


function abrirBaseDatos(){
    if(file_exists("usuarios.json")){
        $baseDatosJson= file_get_contents("usuarios.json");
        $baseDatosJson = explode(PHP_EOL,$baseDatosJson);

        array_pop($baseDatosJson);

        foreach ($baseDatosJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }

        return $arrayUsuarios;
    }else{
        return null;
    }
}


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


function seteoUsuario($user,$dato){
    $_SESSION["nombre"]= $user["nombre"];
    $_SESSION["apellido"]= $user["apellido"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["perfil"]= $user["perfil"];
    $_SESSION["avatar"]= $user["avatar"];
    if(isset($dato["recordar"]) ){
        setcookie("email",$dato["email"],time()+30);
        setcookie("password",$dato["password"],time()+30);
    }
}

function validarUsuario(){
    if($_SESSION["email"]){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else{
        return false;
    }
}
