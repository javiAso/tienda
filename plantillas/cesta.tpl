    <div id="cesta">      
         <div id="pagcesta">
   <h3><img src="cesta.png" alt="Cesta" width="24" height="21"> Cesta</h3>
   <hr />
   <table border=0>
   
       {foreach from=$cesta item=prod}
           
           <form action='productos.php' method ='post'>
<tr>
<input type=hidden name='producto' value='{$prod->getCod()}'>

<td>    <span class='cantidad'>{$cantidad[$prod->getcod()]}</span></td>
<td>    <span class='codigo'>{$prod->getCod()}</span></td>
<td>    <span class='precio'>{$prod->getPvp()}€</span></td>
<td >   <input class='borrar' type="submit" name="submit" value=""> </td>
</tr>
</form>

{/foreach}

</table>

    
     <hr />
     <span class='coste'>  Total: {$total}€</span>
     <hr /> 
     <form action='productos.php' method ='post'>
         
         {if $cestaVacia}
             <input class='cestaAccion' type='submit' name='submit' value='pagar' disabled>
            <input class='cestaAccion' type='submit' name='submit' value='vaciar' disabled>

        {else}
	             <input class='cestaAccion' type='submit' name='submit' value='pagar'>
            <input class='cestaAccion' type='submit' name='submit' value='vaciar'>
        {/if}

    
</form>
    </div>
     </div>