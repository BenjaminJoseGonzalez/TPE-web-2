<?php /* Smarty version Smarty-3.1.14, created on 2018-02-01 00:36:38
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9755a7253062a7af6-83011154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1517347204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9755a7253062a7af6-83011154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seAgrego' => 0,
    'partes' => 0,
    'parte' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7253063309d1_91539562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7253063309d1_91539562')) {function content_5a7253063309d1_91539562($_smarty_tpl) {?><section>
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
        <?php if ($_smarty_tpl->tpl_vars['seAgrego']->value!=null){?>
          <?php if ($_smarty_tpl->tpl_vars['seAgrego']->value==true){?>
            <div id="correcto"><p> se agreg&oacute; correctamente</p></div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['seAgrego']->value==false){?>
            <div id="error"><p>Error, no se agrego la parte : </p></div>
          <?php }?>
        <?php }?>
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
            <?php  $_smarty_tpl->tpl_vars['parte'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parte']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parte']->key => $_smarty_tpl->tpl_vars['parte']->value){
$_smarty_tpl->tpl_vars['parte']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['parte']->value[4];?>
"><?php echo $_smarty_tpl->tpl_vars['parte']->value[1];?>
</option>
            <?php } ?>
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
          <?php  $_smarty_tpl->tpl_vars['parte'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parte']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parte']->key => $_smarty_tpl->tpl_vars['parte']->value){
$_smarty_tpl->tpl_vars['parte']->_loop = true;
?>
            <tr id="<?php echo $_smarty_tpl->tpl_vars['parte']->value['4'];?>
">
              <td> <img src="<?php echo $_smarty_tpl->tpl_vars['parte']->value[0];?>
" class="imagen"/> </td>
              <td><?php echo $_smarty_tpl->tpl_vars['parte']->value[1];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parte']->value[2];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parte']->value[3];?>
</td>
              <td> <a class="icon-cancel-circle btn_borrar_parte" href="" id_parte="<?php echo $_smarty_tpl->tpl_vars['parte']->value['id_parte'];?>
"></a></td>
          </tr>
          <?php } ?>
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
          <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
            <tr id="<?php echo $_smarty_tpl->tpl_vars['comentario']->value[0];?>
">
              <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['usuario'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['puntaje'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>
</td>
              <td> <a class="icon-cancel-circle btn_borrar_comentario" href="" id_comentario="<?php echo $_smarty_tpl->tpl_vars['comentario']->value[0];?>
"></a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
  </article>
</section><?php }} ?>