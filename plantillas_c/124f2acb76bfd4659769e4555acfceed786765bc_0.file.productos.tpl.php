<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 11:59:27
  from '/var/www/cestaPracticaJavierAso/plantillas/productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e42890f3521e6_81392951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124f2acb76bfd4659769e4555acfceed786765bc' => 
    array (
      0 => '/var/www/cestaPracticaJavierAso/plantillas/productos.tpl',
      1 => 1581418759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listadoProductos.tpl' => 1,
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5e42890f3521e6_81392951 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html >
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Listado de Productos con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>
 
<body class="pagproductos">
 
<div id="contenedor">
  <div id="encabezado">
    <h1>Listado de productos</h1>
  </div>
    
    
 
<?php $_smarty_tpl->_subTemplateRender('file:listadoProductos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:cesta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br class="divisor" />
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
    </form>        
  </div>
 
</div>
</body>
</html><?php }
}
