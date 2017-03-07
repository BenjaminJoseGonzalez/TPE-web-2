<?php /* Smarty version Smarty-3.1.14, created on 2017-02-22 01:36:59
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2233958acdd2b365f40-55968449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1476915886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2233958acdd2b365f40-55968449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58acdd2b4ce883_91075874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acdd2b4ce883_91075874')) {function content_58acdd2b4ce883_91075874($_smarty_tpl) {?><!DOCTYPE html>
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