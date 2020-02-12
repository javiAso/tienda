<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./vendor/autoload.php";


$plantilla = new Smarty();

//configuro ubicacion de dir plantillas
//revisamos permisos
//plantillas lectura
//plantillas_c escritura
$plantilla->template_dir = "./plantillas";
$plantilla->compile_dir = "./plantillas_c";


//El controlador
//$num = rand(0, 100);
//compartimos el valor para la vista
//$plantilla->assign("numero", $num);
//Cargamos la plantilla


if (isset($_POST['usuario'])) {


    $bd = new clases\DB();

    $resultado = $bd->controlAcceso($_POST['usuario'], md5($_POST['password']));
    $bd->cerrar();

    if ($resultado == "Login correcto") {

        //$plantilla->display("productos.tpl");
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['password'] = $_POST['password'];
        header("Location:productos.php");
    } else {
        $plantilla->assign("error", $resultado);
        $plantilla->display("login.tpl");
    }
} else {

    $plantilla->display("login.tpl");
}
?>
