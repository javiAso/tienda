<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 18:41:48
  from '/var/www/opcionesCestaPracticaJavierAso/plantillas/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e42e75c344b92_37836087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c97e082b7e96444bddc358e27f75ed850b1b2c46' => 
    array (
      0 => '/var/www/opcionesCestaPracticaJavierAso/plantillas/cesta.tpl',
      1 => 1581442897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e42e75c344b92_37836087 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="cesta">      
         <div id="pagcesta">
   <h3><img src="cesta.png" alt="Cesta" width="24" height="21"> Cesta</h3>
   <hr />
   <table border=0>
   
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
           
           <form action='productos.php' method ='post'>
<tr>
<input type=hidden name='producto' value='<?php echo $_smarty_tpl->tpl_vars['prod']->value->getCod();?>
'>

<td>    <span class='cantidad'><?php echo $_smarty_tpl->tpl_vars['cantidad']->value[$_smarty_tpl->tpl_vars['prod']->value->getcod()];?>
</span></td>
<td>    <span class='codigo'><?php echo $_smarty_tpl->tpl_vars['prod']->value->getCod();?>
</span></td>
<td>    <span class='precio'><?php echo $_smarty_tpl->tpl_vars['prod']->value->getPvp();?>
€</span></td>
<td >   <input class='borrar' type="submit" name="submit" value="quitar"> </td>
</tr>
</form>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

    
     <hr />
     <span class='coste'>  Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€</span>
     <hr /> 
     <form action='productos.php' method ='post'>
         
         <?php if ($_smarty_tpl->tpl_vars['cestaVacia']->value) {?>
             <input class='cestaAccion' type='submit' name='submit' value='pagar' disabled>
            <input class='cestaAccion' type='submit' name='submit' value='vaciar' disabled>

        <?php } else { ?>
	             <input class='cestaAccion' type='submit' name='submit' value='pagar'>
            <input class='cestaAccion' type='submit' name='submit' value='vaciar'>
        <?php }?>

    
</form>
    </div>
     </div><?php }
}
