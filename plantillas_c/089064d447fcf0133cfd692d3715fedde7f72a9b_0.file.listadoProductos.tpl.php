<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 11:50:05
  from '/var/www/cestaPracticaJavierAso/plantillas/listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4286ddd04e70_83172518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089064d447fcf0133cfd692d3715fedde7f72a9b' => 
    array (
      0 => '/var/www/cestaPracticaJavierAso/plantillas/listadoProductos.tpl',
      1 => 1581417865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4286ddd04e70_83172518 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id="productos">

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
    
  </div><?php }
}
