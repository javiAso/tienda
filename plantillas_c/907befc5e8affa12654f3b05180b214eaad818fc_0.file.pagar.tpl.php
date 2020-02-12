<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-12 11:54:22
  from '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e43d95e6fa670_15326342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907befc5e8affa12654f3b05180b214eaad818fc' => 
    array (
      0 => '/var/www/descripcionOrdenadorPracticaJavierAso/plantillas/pagar.tpl',
      1 => 1581504859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e43d95e6fa670_15326342 (Smarty_Internal_Template $_smarty_tpl) {
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
