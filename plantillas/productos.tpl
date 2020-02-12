<!DOCTYPE html >
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Listado de Productos con Plantillas</title>
  <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
</head>
 
<body class="pagproductos">
 
<div id="contenedor">
  <div id="encabezado">
    <h1>Listado de productos</h1>
  </div>
    
    
 
{include file= 'listadoProductos.tpl'}
{include file= 'cesta.tpl'}

<br class="divisor" />
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
    </form>        
  </div>
 
</div>
</body>
</html>