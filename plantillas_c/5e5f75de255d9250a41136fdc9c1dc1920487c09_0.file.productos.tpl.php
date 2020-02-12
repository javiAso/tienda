<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 19:34:10
  from '/var/www/listaProductosPracticaJavierAso/plantillas/productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e41a222ce01b2_72510525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e5f75de255d9250a41136fdc9c1dc1920487c09' => 
    array (
      0 => '/var/www/listaProductosPracticaJavierAso/plantillas/productos.tpl',
      1 => 1581359639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e41a222ce01b2_72510525 (Smarty_Internal_Template $_smarty_tpl) {
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
 
  <div id="productos">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
               <p>
        <form id='<?php echo $_smarty_tpl->tpl_vars['producto']->value->getCod();?>
' action='productos.php' method='post'>
        <input type='hidden' name='cod' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->getCod();?>
'/>
        <input type='submit' name='enviar' value='Añadir'/>
        <?php echo $_smarty_tpl->tpl_vars['producto']->value->getNombre_corto();?>
: <?php echo $_smarty_tpl->tpl_vars['producto']->value->getPvp();?>
 euros.</form>
        </p><br />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
  </div>

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
