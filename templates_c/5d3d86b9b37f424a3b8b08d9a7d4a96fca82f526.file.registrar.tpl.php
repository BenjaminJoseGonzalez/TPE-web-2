<?php /* Smarty version Smarty-3.1.14, created on 2017-02-22 02:58:53
         compiled from ".\templates\registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:741058acf05dddcfa9-37699412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3d86b9b37f424a3b8b08d9a7d4a96fca82f526' => 
    array (
      0 => '.\\templates\\registrar.tpl',
      1 => 1487535941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741058acf05dddcfa9-37699412',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58acf05de96523_95622260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acf05de96523_95622260')) {function content_58acf05de96523_95622260($_smarty_tpl) {?><article>
  <section>
    <div class="form">

      <form id="registrar" >
        <div>
          <label >Nombre</label>
          <input type="text" class="text-box" id="nombre" name="nombre" placeholder="nombre">
        </div>

        <div>
          <label >Usuario</label>
          <input type="text" class="text-box" id="usuario" name="usuario" placeholder="e-mail">
        </div>

        <div>
          <label >Contrasenia</label>
          <input type="password" class="text-box" id="contraseña" name="contraseña" placeholder="contraseña">
        </div>

        <a Href="" class="button"  id="btn-registro">Enviar</a>

      </form>
    </div>

    <div class="form">  
      <form id="logIn">

        <div>
          <label >Usuario</label>
          <input type="text" class="text-box" id="usuario" name="usuario" placeholder="e-mail">
        </div>

        <div>
          <label >Contrasenia</label>
          <input type="password" class="text-box" id="contraseña" name="contraseña" placeholder="contraseña">
        </div>

        <a Href="" class="button"  id="btn-logIn">logIn</a>

      </form>

    </div>     
  </section>
</article>
<?php }} ?>