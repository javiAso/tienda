<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos a Pagar</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagproductos">

        <div id="contenedor">
            <h1>Resumen de factura del usuario {$cliente}</h1>
           
            <hr />
            <br class="divisor" />
            

                <div class="pago">
                    <table id="tablaPagar" class="pago">
                        <thead>
                            <tr class="pago"><th class="pago">Articulo</th>
                                <th class="pago">Cantidad</th>
                                <th class="pago">Precio Unitario</th></tr>

                        </thead>
                        
                               {foreach from=$cesta item=prod}
                                   
                                <tr class="pago"><td class="pago">{$prod->getNombre_corto()}</td>
                                <td class="pago">{$cantidad[$prod->getCod()]}</td>
                                <td class="pago">{$prod->getPvp()}€</td>

                                </tr>


                                {/foreach}
                        
                    
                        
                    </table>
                    <hr />
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago">{$numProductos}</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago">{$total}€</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago">{$total * 0.21}€</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago">{$total + $total * 0.21 }€</td>
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
                   
                   <input type="hidden" name="item_name" value="Compra de {$usuario}">
                   <input type="hidden" name="amount" value="{$total + $total * 0.21}">
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



