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

             
           
           

            <div id="pie">
                <form action='logoff.php' method='post'>
                    <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
                </form>
            </div>

        </div>




    </div>
</body>
</html>



