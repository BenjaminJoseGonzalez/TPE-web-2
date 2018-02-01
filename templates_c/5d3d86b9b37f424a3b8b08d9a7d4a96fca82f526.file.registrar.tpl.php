<?php /* Smarty version Smarty-3.1.14, created on 2018-02-01 00:37:50
         compiled from ".\templates\registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249245a72534e6cd276-16624927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3d86b9b37f424a3b8b08d9a7d4a96fca82f526' => 
    array (
      0 => '.\\templates\\registrar.tpl',
      1 => 1517440934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249245a72534e6cd276-16624927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a72534e6f9f17_92397287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a72534e6f9f17_92397287')) {function content_5a72534e6f9f17_92397287($_smarty_tpl) {?><article>
  <section>
    <div class="form">

      <form id="registrar" >
        <div>
          <label >Nombre</label>
          <input type="text" class="text-box" id="nombre" name="nombre" placeholder="nombre">
        </div>

        <div>
          <label >Usiario</label>
          <input type="text" class="text-box" id="usuario" name="usuario" placeholder="e-mail">
        </div>

        <div>
          <label >Contrasenia</label>
          <input type="password" class="text-box" id="pasword" name="pasword" placeholder="contraseña">
        </div>
        <br>

        <a href="" class="btn btn-outline-secondary"  id="btn-registro">Enviar</a>

      </form>
    </div>
    <span>ya tienes cuenta? </span><a id="lnkIniSession" href="">inicia sesion</a>     
  </section>
</article>
<?php }} ?>