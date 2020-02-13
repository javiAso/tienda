<?php

require "./vendor/autoload.php";

session_start();


$plantilla = new Smarty();
$plantilla->template_dir = "./plantillas";
$plantilla->compile_dir = "./plantillas_c";

$cestaCliente = $_SESSION['cesta']->getListadoProductos();
$cantidades = $_SESSION['cesta']->getCantidadProductos();
$total = $_SESSION['cesta']->getPrecioTotal();
$plantilla->assign("cesta", $cestaCliente);
$plantilla->assign("cantidad", $cantidades);
$plantilla->assign("total", $total);
$plantilla->assign("cliente", $_SESSION['usuario']);
$plantilla->assign("numProductos", $_SESSION['cesta']->getTotalProductos());


$plantilla->display("pagar.tpl");
?>