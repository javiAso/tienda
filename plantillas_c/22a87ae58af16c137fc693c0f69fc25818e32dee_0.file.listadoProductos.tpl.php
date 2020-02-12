<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 19:05:39
  from '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e42ecf3739873_24623898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a87ae58af16c137fc693c0f69fc25818e32dee' => 
    array (
      0 => '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/listadoProductos.tpl',
      1 => 1581444329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e42ecf3739873_24623898 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <?php if ($_smarty_tpl->tpl_vars['producto']->value->getFamilia() == "ORDENA") {?>
            <a href="descripcion.php?cod=<?php echo $_smarty_tpl->tpl_vars['producto']->value->getCod();?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->getNombre_corto();?>
</a>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['producto']->value->getNombre_corto();?>

        <?php }?>
        
        : <?php echo $_smarty_tpl->tpl_vars['producto']->value->getPvp();?>
 euros.</form>
        </p><br />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
  </div><?php }
}
