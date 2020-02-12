<!DOCTYPE html >
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Listado de productos con Plantillas</title>
  <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
</head>
 
<body class="pagdescripcion">
 
<div id="contenedor">
  <div id="encabezado">
    <h1>{$ordenador->getNombre_corto()}</h1>
    {$ordenador->getCod()}
  </div>
  
  <hr />
  
  <div id="detalle">
      
      <h3>Características</h3>
      
      <b>Procesador:</b>&nbsp;&nbsp;  {$ordenador->getProcesador()} <br><br>
      <b>RAM:</b>&nbsp; &nbsp; {$ordenador->getRAM()} <br><br>
      <b>Gráfica:</b>&nbsp; &nbsp; {$ordenador->getGrafica()} <br><br>
      <b>Unidad óptica:</b>&nbsp; &nbsp; {$ordenador->getUnidadOptica()} <br><br>
      <b>SO:</b>&nbsp; &nbsp; {$ordenador->getSO()} <br><br>
      <b>Otros:</b>&nbsp; &nbsp; {$ordenador->getOtros()} <br><br>
      <b>PVP:</b>&nbsp; &nbsp; {$ordenador->getPvp()} <br><br>
      
      
      <hr>
      
      <h3>Descripción</h3>
      
      <p>{$ordenador->getDescripcion()}</p>
      
        <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
    </form>        
  </div>
      
  </div>


 
</div>
</body>
</html>