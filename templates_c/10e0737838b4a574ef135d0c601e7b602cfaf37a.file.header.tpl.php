<?php /* Smarty version Smarty-3.1.14, created on 2017-02-22 01:36:59
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1202558acdd2b58f8b8-04669726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1487721189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202558acdd2b58f8b8-04669726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logueo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58acdd2b595b28_30060571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acdd2b595b28_30060571')) {function content_58acdd2b595b28_30060571($_smarty_tpl) {?><header>
	<div class="izq">
		<a id="lnkHome" href="">home</a>
	</div>
	<div class="der">
		<nav>
			<ul>
				<li class="dropdown"> deporte
						<ul id="deporte"class="dropdown-content">
							<li><a id_deporte="1" href="">bike</a></li>
							<li><a id_deporte="2" href="">skate</a></li>
						</ul>
				</li>
				<li><a id="lnkRidersbike" href="">riders</a></li>
				<li><a id="lnkContacto" href="">contacto</a></li>
				<?php if ($_smarty_tpl->tpl_vars['logueo']->value!=false){?>
					<li><a id="lnkAdmin" href="">admin</a></li> 
					<li><a id="lnkLogOut" href="">cerrar session</a></li>
				<?php }else{ ?>
					<li><a id="lnkRegistro" href="">registrarse</a></li>
				<?php }?>
			</ul>
		</nav>
	</div>
</header><?php }} ?>