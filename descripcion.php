<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./vendor/autoload.php";


session_start();


$bd = new clases\DB();

$ordenador = $bd->getDescripcion($_GET['cod']);
$bd->cerrar();
$plantilla = new Smarty();
$plantilla->template_dir = "./plantillas";
$plantilla->compile_dir = "./plantillas_c";
$plantilla->assign("ordenador", $ordenador);
$plantilla->display("descripcion.tpl");
?>