<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-12 12:11:20
  from '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/descripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e43dd58c963b4_50605560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead5a59ccd07f9232769a4ee1810bf27f0f6b59c' => 
    array (
      0 => '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/descripcion.tpl',
      1 => 1581505742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e43dd58c963b4_50605560 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html >
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Listado de productos con Plantillas</title>
  <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
</head>
 
<body class="pagdescripcion">
 
<div id="contenedor">
  <div id="encabezado">
    <h1><?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getNombre_corto();?>
</h1>
    <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getCod();?>

  </div>
  
  <hr />
  
  <div id="detalle">
      
      <h3>Características</h3>
      
      <b>Procesador:</b>&nbsp;&nbsp;  <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getProcesador();?>
 <br><br>
      <b>RAM:</b>&nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getRAM();?>
 <br><br>
      <b>Gráfica:</b>&nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getGrafica();?>
 <br><br>
      <b>Unidad óptica:</b>&nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getUnidadOptica();?>
 <br><br>
      <b>SO:</b>&nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getSO();?>
 <br><br>
      <b>Otros:</b>&nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getOtros();?>
 <br><br>
      <b>PVP:</b>&nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getPvp();?>
 <br><br>
      
      
      <hr>
      
      <h3>Descripción</h3>
      
      <p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getDescripcion();?>
</p>
      
        <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
    </form>        
  </div>
      
  </div>


 
</div>
</body>
</html><?php }
}
