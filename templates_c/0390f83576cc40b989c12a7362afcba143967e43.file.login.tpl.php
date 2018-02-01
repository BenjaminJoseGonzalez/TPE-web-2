<?php /* Smarty version Smarty-3.1.14, created on 2018-02-01 00:37:52
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113655a7253506f7988-71349755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1517441681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113655a7253506f7988-71349755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a725350723805_01079320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a725350723805_01079320')) {function content_5a725350723805_01079320($_smarty_tpl) {?><section>
    <article>
        <div class="form">  
            <form id="logIn">
                <div>
                    <label >Usuario</label>
                    <input type="text" class="text-box" id="usuario" name="usuario" placeholder="e-mail">
                </div>
                <div>
                    <label >Contrasenia</label>
                    <input type="password" class="text-box" id="contraseña" name="pasword" placeholder="contraseña">
                </div>
                <br>
                <a Href="" class="btn btn-outline-secondary"  id="btn-logIn">logIn</a>
            </form>
        </div>
    </article>
</section><?php }} ?>