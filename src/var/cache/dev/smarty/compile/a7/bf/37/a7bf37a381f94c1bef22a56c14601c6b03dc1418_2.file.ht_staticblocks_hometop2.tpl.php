<?php
/* Smarty version 3.1.33, created on 2020-10-23 20:40:26
  from '/var/www/html/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_hometop2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f93239a476cb7_68227971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7bf37a381f94c1bef22a56c14601c6b03dc1418' => 
    array (
      0 => '/var/www/html/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_hometop2.tpl',
      1 => 1603478302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f93239a476cb7_68227971 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value['content'])) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
