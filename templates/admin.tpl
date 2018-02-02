<section>
  <article>
  <div class="form">
    <div><p class="titulo">Crear Información</p></div>
      <form id="form_subir">
        <div >
          <label>Nombre</label>
          <input type="text" class="text-box" id="nombre" name="nombre"placeholder="Producto" required >
        </div>
        <div >
          <label>Marca </label>
          <input type="text" class="text-box" id="marca" name="marca" placeholder="Marca" required >
        </div>
        <div >
          <label >Precio </label>
          <input type="text" class="text-box" id="precio" name="precio"placeholder="Precio" required >
        </div>
        <div>
          <select name="id_deporte" class="text-box">
            <option value="1">bike</option>
            <option value="2">skate</option>
          </select>
        </div>
        <div>
          <label>Imagen</label>
        <input type="file" id='image' name="image[]" multiple> 
        </div>
        <a href="" id="info" class="button">Guardar</a>
        {if $seAgrego != null}
          {if $seAgrego == true}
            <div id="correcto"><p> se agreg&oacute; correctamente</p></div>
          {/if}
          {if $seAgrego == false}
            <div id="error"><p>Error, no se agrego la parte : </p></div>
          {/if}
        {/if}
      </form>
      </div>
    <div class=form>
    <div><p class="titulo">Editar</p></div>
      <form id="form_editar">
        <div>
            <select class="text-box" name="editar">

              <option value="1">nombre</option>
              <option value="2">marca</option>
              <option value="3">precio</option>
            
            </select>
        </div>
        <div>
            <select  class="text-box" name="id_producto">
            {foreach $partes as $parte}
              <option value="{$parte[4]}">{$parte[1]}</option>
            {/foreach}
            </select>
        </div>
         <input type="text" class="text-box" id='dato' name="dato"> 

        <a href="" id="editar" class="button">editar</a>
      </form>
    </div>
    <div  id="listaProducto">
      <h1 class="titulo">Lista de Productos</h1>
        <table class="table">
          <thead>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Borrar</th>
          </thead>
          <tbody>
          {foreach $partes as $parte}
            <tr id="{$parte['4']}">
              <td> <img src="{$parte[0]}" class="imagen"/> </td>
              <td>{$parte[1]}</td>
              <td>{$parte[2]}</td>
              <td>{$parte[3]}</td>
              <td> <a class="icon-cancel-circle btn_borrar_parte" href="" id_parte="{$parte['id_parte']}"></a></td>
          </tr>
          {/foreach}
          </tbody>
        </table>
    </div>
    <div  id="listaComentario">
      <h1 class="titulo">Lista de Productos</h1>
        <table class="table">
          <thead>
            <th>Usuario</th>
            <th>Puntaje</th>
            <th>Comentario</th>
            <th>Borrar</th>
          </thead>
          <tbody>
          {foreach $comentarios as $comentario}
            <tr id="{$comentario[0]}">
              <td>{$comentario['nombre']}</td>
              <td>{$comentario['puntaje']}</td>
              <td>{$comentario['comentario']}</td>
              <td> <a class="icon-cancel-circle btn_borrar_comentario" href="" id_comentario="{$comentario[0]}"></a></td>
            </tr>
          {/foreach}
          </tbody>
        </table>
      </div>
  </article>
</section>