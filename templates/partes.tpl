<article>
  <table class="table">
    <thead>
      <th>Imagen</th>
      <th>Producto</th>
      <th>Marca</th>
      <th>Precio</th>
    </thead>
    <tbody>
    {foreach $partes as $parte}
      <tr id="{$parte['4']}">
        <td> <img src="{$parte[0]}" class="imagen"/> </td>
        <td>{$parte[1]}</td>
        <td>{$parte[2]}</td>
        <td>{$parte[3]}</td>
      </tr>
    {/foreach}
    </tbody>
  </table>
  <div>
    {foreach $comentarios as $comentario}
    <div>
      <p>Puntaje: <b>{$comentario['puntaje']}</b> Usuario: <b>{$comentario['usuario']}</b> </p>
      <p>Comentario: <br />
        {$comentario['comentario']}
      </p>
    </div>
    {/foreach}
  </div>
  {if $session }
    <h1>{$session}</h1>
    <form id="comentarios">
      <input type="hidden" name="usuario" value="{$session}">
      <input type="text" class="text-box" name="comentario" id="comentario" placeholder="comentario...">
      <select name = "puntaje">
        <option val="1">1</option>
        <option val="2">2</option>
        <option val="3">3</option>
        <option val="4">4</option>
        <option val="5">5</option>
      </select>
      <a Href="" class="button"  id="btn-enviarComentario">enviar</a>
  </form>
   {/if}

</article>