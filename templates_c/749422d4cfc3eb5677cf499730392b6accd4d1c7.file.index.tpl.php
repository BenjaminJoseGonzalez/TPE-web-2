<?php /* Smarty version Smarty-3.1.14, created on 2018-02-01 00:36:35
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132825a7253039f4611-88752322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1517347204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132825a7253039f4611-88752322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a725303a3b640_47515824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a725303a3b640_47515824')) {function content_5a725303a3b640_47515824($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</head>
	
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id = "wrap">
				<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
<?php }} ?>