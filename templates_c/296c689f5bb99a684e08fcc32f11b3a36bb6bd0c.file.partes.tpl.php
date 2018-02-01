<?php /* Smarty version Smarty-3.1.14, created on 2018-02-01 00:40:36
         compiled from ".\templates\partes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238665a7253f4124113-12057193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '296c689f5bb99a684e08fcc32f11b3a36bb6bd0c' => 
    array (
      0 => '.\\templates\\partes.tpl',
      1 => 1517437294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238665a7253f4124113-12057193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partes' => 0,
    'parte' => 0,
    'comentarios' => 0,
    'comentario' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7253f41d4d22_17150142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7253f41d4d22_17150142')) {function content_5a7253f41d4d22_17150142($_smarty_tpl) {?><article>
  <table class="table table-responsive">
    <thead>
      <th>Imagen</th>
      <th>Producto</th>
      <th>Marca</th>
      <th>Precio</th>
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
      </tr>
    <?php } ?>
    </tbody>
  </table>
  <div>
    <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
    <div>
      <p>Puntaje: <b><?php echo $_smarty_tpl->tpl_vars['comentario']->value['puntaje'];?>
</b> Usuario: <b><?php echo $_smarty_tpl->tpl_vars['comentario']->value['usuario'];?>
</b> </p>
      <p>Comentario: <br />
        <?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>

      </p>
    </div>
    <?php } ?>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['session']->value){?>
    <h1><?php echo $_smarty_tpl->tpl_vars['session']->value;?>
</h1>
    <form id="comentarios">
      <input type="hidden" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['session']->value;?>
">
      <input type="text" class="text-box" name="comentario" id="comentario" placeholder="comentario...">
      <select name = "puntaje">
        <option val="1">1</option>
        <option val="2">2</option>
        <option val="3">3</option>
        <option val="4">4</option>
        <option val="5">5</option>
      </select>
      <a Href="" class="btn btn-outline-secondary"  id="btn-enviarComentario">enviar</a>
    </form>
  <?php }?>
</article><?php }} ?>