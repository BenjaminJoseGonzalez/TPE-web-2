<?php /* Smarty version Smarty-3.1.14, created on 2017-02-22 02:58:53
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433358acf05d0f86e3-02027352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1476927788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433358acf05d0f86e3-02027352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contactos' => 0,
    'contacto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58acf05d44f310_77002875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acf05d44f310_77002875')) {function content_58acf05d44f310_77002875($_smarty_tpl) {?>  <article>
  <section>
    <div class="form">
      <form id="subir_contacto" >

        <div>
         <label >Nombre</label>
         <input type="text" class="text-box" id="nombre" name="nombre" placeholder="Ingrese su nombre">
        </div>

        <div>
          <label >Apellido</label>
          <input type="text" class="text-box" id="apellido" name="apellido" placeholder="Ingrese su apellido">
        </div>

        <div>
          <label >¿De que ciudad es? </label>
          <input type="text" class="text-box" id="ciudad" name="ciudad" placeholder="Ingrese su ciudades">
        </div>

        <div>
          <label >¿Tiene lugar para andar?</label>
          <input type="text" class="text-box" id="lugar" name="lugar" placeholder="lugar de andar">
        </div>

        <div>
          <label >¿Que lugar recomienda?</label>
          <input type="text" class="text-box" id="recomendacion" name="recomendacion" placeholder="spot">
        </div>

        <a Href="" class="button"  id="btn-contacto">Enviar</a>

      </form>
    </div>

      <table class="table">
        <thead>
            <th>nombre</th>
            <th>apellido</th>
            <th>ciudad de origen</th>
            <th>¿posee lugar?</th>
            <th>lugar recomendado</th>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['contacto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contacto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contactos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contacto']->key => $_smarty_tpl->tpl_vars['contacto']->value){
$_smarty_tpl->tpl_vars['contacto']->_loop = true;
?>
            <tr>
              <td data-th="Nombre" ><?php echo $_smarty_tpl->tpl_vars['contacto']->value['nombre'];?>
</td>
              <td data-th="Apellido" ><?php echo $_smarty_tpl->tpl_vars['contacto']->value['apellido'];?>
</td>
              <td data-th="Ciudad" ><?php echo $_smarty_tpl->tpl_vars['contacto']->value['ciudad'];?>
</td>
              <td data-th="Lugar" ><?php echo $_smarty_tpl->tpl_vars['contacto']->value['lugar'];?>
</td>
              <td data-th="Recomendacion" ><?php echo $_smarty_tpl->tpl_vars['contacto']->value['recomendacion'];?>
</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
     
  </section>
</article><?php }} ?>