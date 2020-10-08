<?php
/* Smarty version 3.1.33, created on 2020-10-08 11:20:06
  from '/var/www/html/themes/ap_office/modules/leofeature/views/templates/hook/leo_compare_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f7ed9c65adfa2_36981184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '170060a7ba1075ffac2343d842f6da0ff3b9cc26' => 
    array (
      0 => '/var/www/html/themes/ap_office/modules/leofeature/views/templates/hook/leo_compare_button.tpl',
      1 => 1602148669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ed9c65adfa2_36981184 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="compare">
	<a class="leo-compare-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?>">
	<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-compare-bt-content">
		<i class="fa fa-files-o" aria-hidden="true"></i>
	</span>
</a>
</div>


<?php }
}
