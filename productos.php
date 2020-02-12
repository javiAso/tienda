<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./vendor/autoload.php";


session_start();


$bd = new clases\DB();


if (isset($_POST['cod'])) {

    //Conectarse a la base de datos y recuperar el producto
    $_SESSION['cesta']->anadeProducto($bd->sacaProducto($_POST['cod']));
} else {

    if (isset($_POST['submit'])) {
        switch (true) {
            case $_POST['submit'] == '':

                $_SESSION['cesta']->quitarProducto($_POST['producto']);

                break;
            case $_POST['submit'] == 'vaciar':

                $_SESSION['cesta'] = new clases\Cesta();

                break;

            case $_POST['submit'] == 'pagar':
                header("Location:pagar.php");
                break;
        }
    } else {
        $_SESSION['cesta'] = new clases\Cesta();
    }
}



$plantilla = new Smarty();
$plantilla->template_dir = "./plantillas";
$plantilla->compile_dir = "./plantillas_c";



$productos = $bd->obtieneProductos();
$bd->cerrar();
$cestaCliente = $_SESSION['cesta']->getListadoProductos();
$cantidades = $_SESSION['cesta']->getCantidadProductos();
$total = $_SESSION['cesta']->getPrecioTotal();
$plantilla->assign("prod", $productos);
$plantilla->assign("cesta", $cestaCliente);
$plantilla->assign("cantidad", $cantidades);
$plantilla->assign("total", $total);
if (count($cestaCliente) == 0) {

    $plantilla->assign("cestaVacia", true);
} else {

    $plantilla->assign("cestaVacia", false);
}



$plantilla->display("productos.tpl");
?>
