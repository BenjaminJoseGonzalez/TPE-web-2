<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 02:57:38
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133695a73c592db0104-01310431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1517526948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133695a73c592db0104-01310431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logueo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73c592dbced4_90424042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73c592dbced4_90424042')) {function content_5a73c592dbced4_90424042($_smarty_tpl) {?>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" 
		data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" id="lnkHome" href="">Home</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Deportes
				</a>
				<div id="deporte" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" id_deporte="1" href="">Bike</a>
					<a class="dropdown-item" id_deporte="2" href="">Skate</a>
				</div>
			</li>
			<li class="nav-item active">
				<a class="nav-link" id="lnkRidersbike" href=""> Riders <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" id="lnkContacto" href=""> Contacto <span class="sr-only">(current)</span></a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['logueo']->value!=false){?>
				<li class="nav-item active"><a class="nav-link" id="lnkAdmin" href="">Admin</a></li> 
				<li class="nav-item active"><a class="nav-link" id="lnkLogOut" href="">Cerrar session</a></li>
			<?php }else{ ?>
				<li class="nav-item active"><a class="nav-link" id="lnkRegistro" href="">Registrarse</a></li>
			<?php }?>
		</ul>	
	</div>
</nav>
<?php }} ?>