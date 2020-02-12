<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 13:13:17
  from '/var/www/cestaPracticaJavierAso/plantillas/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e429a5d1d6c68_52468740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbbc271c819234e6029d1d989fde338bc6f88ffe' => 
    array (
      0 => '/var/www/cestaPracticaJavierAso/plantillas/cesta.tpl',
      1 => 1581423193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e429a5d1d6c68_52468740 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="cesta">      
         <div id="pagcesta">
   <h3><img src="cesta.png" alt="Cesta" width="24" height="21"> Cesta</h3>
   <hr />
   
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                  <p>
                      
            <span class='cantidad'><?php echo $_smarty_tpl->tpl_vars['cantidad']->value[$_smarty_tpl->tpl_vars['prod']->value->getcod()];?>
</span>
            <span class='codigo'><?php echo $_smarty_tpl->tpl_vars['prod']->value->getCod();?>
</span>
            <span class='precio'><?php echo $_smarty_tpl->tpl_vars['prod']->value->getPvp();?>
€</span><br />            
            
        </p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    
     <hr />
     <span class='coste'>  Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€</span>
    </div>
     </div><?php }
}
