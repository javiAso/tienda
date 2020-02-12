  <div id="productos">

    {foreach from=$prod item=producto}
               <p>
        <form id='{$producto->getCod()}' action='productos.php' method='post'>
        <input type='hidden' name='cod' value='{$producto->getCod()}'/>
        <input type='submit' name='enviar' value='Añadir'/>
        
        {if $producto->getFamilia() eq "ORDENA"}
            <a href="descripcion.php?cod={$producto->getCod()}">{$producto->getNombre_corto()}</a>
        {else}
            {$producto->getNombre_corto()}
        {/if}
        
        : {$producto->getPvp()} euros.</form>
        </p><br />
{/foreach}
    
  </div>