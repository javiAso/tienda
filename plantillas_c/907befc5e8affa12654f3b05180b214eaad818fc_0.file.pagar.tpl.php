<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 12:55:19
  from '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e453927b06260_57218639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907befc5e8affa12654f3b05180b214eaad818fc' => 
    array (
      0 => '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/pagar.tpl',
      1 => 1581594363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e453927b06260_57218639 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos a Pagar</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagproductos">

        <div id="contenedor">
            <h1>Resumen de factura del usuario <?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
</h1>
           
            <hr />
            <br class="divisor" />
            

                <div class="pago">
                    <table id="tablaPagar" class="pago">
                        <thead>
                            <tr class="pago"><th class="pago">Articulo</th>
                                <th class="pago">Cantidad</th>
                                <th class="pago">Precio Unitario</th></tr>

                        </thead>
                        
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                                   
                                <tr class="pago"><td class="pago"><?php echo $_smarty_tpl->tpl_vars['prod']->value->getNombre_corto();?>
</td>
                                <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cantidad']->value[$_smarty_tpl->tpl_vars['prod']->value->getCod()];?>
</td>
                                <td class="pago"><?php echo $_smarty_tpl->tpl_vars['prod']->value->getPvp();?>
€</td>

                                </tr>


                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    
                        
                    </table>
                    <hr />
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['numProductos']->value;?>
</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['total']->value*0.21;?>
€</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['total']->value*0.21;?>
€</td>
                        </tr>
                    </table>
                </div>

             
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                
                   <input name="cmd" type="hidden" value="_xclick" />          
                   <input name="business" type="hidden" value="asoycia@hotmail.com" /> 
                   <input name="shopping_url" type="hidden" value="http://javierasodwes.infenlaces.com/tienda/pagar.php" />
                   <input name="currency_code" type="hidden" value="EUR" />
                   <input name="return" type="hidden" value="http://javierasodwes.infenlaces.com/tienda/pagoRealizado.php" />
                   <input name="notify_url" type="hidden" value="http://javierasodwes.infenlaces.com/tienda/paypal_ipn.php" />
                   <input name="rm" type="hidden" value="2" />
                   
                   <input type="hidden" name="item_name" value="Compra de <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
                   <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['total']->value*0.21;?>
">
                   <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">

            </form>
           

            <div id="pie">
                <form action='logoff.php' method='post'>
                    <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
                </form>
            </div>

        </div>




    </div>
</body>
</html>



<?php }
}
